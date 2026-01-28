VERSION 5.00
Begin VB.Form Form1 
   Caption         =   "Form1"
   ClientHeight    =   1545
   ClientLeft      =   60
   ClientTop       =   405
   ClientWidth     =   3675
   LinkTopic       =   "Form1"
   ScaleHeight     =   1545
   ScaleWidth      =   3675
   StartUpPosition =   3  'Windows Default
   Begin VB.TextBox Text2 
      Height          =   375
      Left            =   240
      TabIndex        =   2
      Text            =   "Ascension_of_AI"
      Top             =   120
      Width           =   3375
   End
   Begin VB.CommandButton Command1 
      Caption         =   "Create Novel"
      Height          =   375
      Left            =   2400
      TabIndex        =   1
      Top             =   1080
      Width           =   1215
   End
   Begin VB.TextBox Text1 
      Height          =   375
      Left            =   240
      TabIndex        =   0
      Text            =   "ASCENSION OF AI.txt"
      Top             =   600
      Width           =   3375
   End
   Begin VB.Label Label1 
      Height          =   375
      Left            =   240
      TabIndex        =   3
      Top             =   1080
      Width           =   2055
   End
End
Attribute VB_Name = "Form1"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub Command1_Click()

parseNovel Text2, Text1
End Sub
