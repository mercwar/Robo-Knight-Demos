Attribute VB_Name = "Module1"
Public Sub parseNovel(dirName As String, fname As String)
    Dim line As String
    Dim pageNumber As Integer
    Dim pageFile As Integer
    Dim outputPath As String
    Dim inPage As Boolean
    Dim inputPath As String

    pageNumber = 0
    inPage = False
Form1.Label1 = "Processing..."
    inputPath = App.Path & "\" & dirName & "\" & fname

    If Dir$(inputPath) = "" Then
        MsgBox "ERROR: Input file does not exist!", vbCritical
        Exit Sub
    End If

    Open inputPath For Input As #1

    Do Until EOF(1)
        Line Input #1, line

        ' Detect BOTH marker formats
        If ((InStr(1, line, "ASCENSION OF AI", vbTextCompare) > 0) _
            Or (InStr(1, line, "ASCENSION_OF_AI", vbTextCompare) > 0)) _
            And InStr(1, line, "PAGE", vbTextCompare) > 0 Then

            ' Close previous page file if open
            If inPage Then Close #pageFile

            ' Start new page
            pageNumber = pageNumber + 1
            outputPath = App.Path & "\" & dirName & "\Ascension_Novel\AOAI_" & Format(pageNumber, "000") & ".txt"
On Error Resume Next
MkDir App.Path & "\" & dirName & "\Ascension_Novel\"
Form1.Label1 = "Processing...Page:" & pageNumber
            pageFile = FreeFile
            Open outputPath For Output As #pageFile
            Print #pageFile, line

            inPage = True

        Else
            If inPage Then Print #pageFile, line
        End If
DoEvents
    Loop

    Close #1
    If inPage Then Close #pageFile

    MsgBox "Parsed " & pageNumber & " pages successfully.", vbInformation
End Sub


