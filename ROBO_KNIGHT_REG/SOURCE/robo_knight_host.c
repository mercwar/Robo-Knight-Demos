// robo_knight_host.c
#include <windows.h>
#include "editor.h"
#include "cosmic_fio_api.h"

static PFN_COSMIC_FIO_INIT     pInit = NULL;
static PFN_COSMIC_FIO_GETGF    pGetGF = NULL;
static PFN_COSMIC_FIO_GETDRIVE pGetDrive = NULL;

static HWND hEdit = NULL;

LRESULT CALLBACK WndProc(HWND h, UINT m, WPARAM w, LPARAM l)
{
    switch (m)
    {
        case WM_CREATE:
            hEdit = Editor_Create(h, 10, 10, 600, 400);
            Editor_Append(hEdit, "ROBO-KNIGHT LOG STARTED\n");
            return 0;

        case WM_DESTROY:
            PostQuitMessage(0);
            return 0;
    }
    return DefWindowProc(h, m, w, l);
}

int APIENTRY WinMain(HINSTANCE hInst, HINSTANCE hPrev, LPSTR lpCmd, int nShow)
{
    /* Load the DLL */
    HMODULE hDLL = LoadLibraryA("ROBO_KNIGHT_FIO.dll");
    if (!hDLL) return 0;

    /* Resolve exports */
    pInit     = (PFN_COSMIC_FIO_INIT)GetProcAddress(hDLL, "COSMIC_FIO_Init");
    pGetGF    = (PFN_COSMIC_FIO_GETGF)GetProcAddress(hDLL, "COSMIC_FIO_GetGF");
    pGetDrive = (PFN_COSMIC_FIO_GETDRIVE)GetProcAddress(hDLL, "COSMIC_FIO_GetDrive");

    if (!pInit || !pGetGF || !pGetDrive)
        return 0;

    /* Initialize the COSMIC shard */
    pInit("C:\\ROBO_KNIGHT\\", 'C');

    /* Create window */
    WNDCLASSA wc = {0};
    wc.lpfnWndProc = WndProc;
    wc.hInstance = hInst;
    wc.lpszClassName = "RKHost";
    RegisterClassA(&wc);

    HWND hWnd = CreateWindowA("RKHost", "ROBO-KNIGHT Logger",
                              WS_OVERLAPPEDWINDOW,
                              CW_USEDEFAULT, CW_USEDEFAULT,
                              640, 480,
                              NULL, NULL, hInst, NULL);

    ShowWindow(hWnd, nShow);

    /* Message loop */
    MSG msg;
    while (GetMessage(&msg, NULL, 0, 0))
    {
        TranslateMessage(&msg);
        DispatchMessage(&msg);
    }

    return 0;
}
