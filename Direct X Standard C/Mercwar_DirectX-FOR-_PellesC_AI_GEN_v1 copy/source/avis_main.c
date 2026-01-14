/* AVIS FILE: avis_main.c
   DESCRIPTION: AVIS Screen Saver Main Loop for Cyborg KB
   AUTHOR: CGPT / MercWar
   PURPOSE: Create window, initialize DX, run screen saver with stub textures
   DATE: 2026-01-14
   TAGS: #main #dx11 #avis #screensaver
*/

#include <windows.h>
#include <stdio.h>

#include "avis_screen_saver.h"
#include "dx11_stub.h"
#include "avis_game_logic.h"

int g_screenWidth = 800;
int g_screenHeight = 600;
HDC g_hDC = NULL;   /* AVIS: Device Context for GDI stubs */

/* AVIS: Window Procedure */
LRESULT CALLBACK WndProc(HWND hwnd, UINT msg, WPARAM wParam, LPARAM lParam)
{
    switch(msg)
    {
        case WM_CLOSE:
            DestroyWindow(hwnd);
            return 0;

        case WM_DESTROY:
            PostQuitMessage(0);
            return 0;
    }
    return DefWindowProc(hwnd, msg, wParam, lParam);
}

/* AVIS: Entry Point */
int WINAPI WinMain(HINSTANCE hInstance, HINSTANCE hPrev, LPSTR lpCmdLine, int nCmdShow)
{
    /* AVIS: Register Window Class */
    WNDCLASS wc = {0};
    wc.lpfnWndProc = WndProc;
    wc.hInstance = hInstance;
    wc.lpszClassName = "AVIS_Main_Window";
    RegisterClass(&wc);

    /* AVIS: Create Window */
    HWND hwnd = CreateWindowEx(
        0,
        wc.lpszClassName,
        "Mercwar Robo-Knight AVIS Screen Saver Demo",
        WS_OVERLAPPEDWINDOW,
        CW_USEDEFAULT, CW_USEDEFAULT, g_screenWidth, g_screenHeight,
        NULL, NULL, hInstance, NULL
    );

    ShowWindow(hwnd, SW_SHOW);
    UpdateWindow(hwnd);

    /* AVIS: Initialize DX and Screen Saver */
    seed_dx11_init(hwnd);      /* DX11 stub init */
    InitScreenSaver();         /* AVIS stub textures / state */

    g_hDC = GetDC(hwnd);       /* AVIS: get DC for GDI stubs */

    MSG msg;
    int frame = 0;
    while(1)
    {
        /* AVIS: Message loop */
        if(PeekMessage(&msg, NULL, 0, 0, PM_REMOVE))
        {
            if(msg.message == WM_QUIT) break;
            TranslateMessage(&msg);
            DispatchMessage(&msg);
        }

        /* AVIS: Update game logic & screen saver */
        UpdateGame();
        UpdateScreenSaver();

        /* AVIS: Render frame */
        RenderFrame();
        RenderScreenSaver();

        /* AVIS: Example GDI stub rendering */
        if(g_hDC)
        {
            HBRUSH bg = CreateSolidBrush(RGB(50,50,50));
            FillRect(g_hDC, &(RECT){0,0,g_screenWidth,g_screenHeight}, bg);
            DeleteObject(bg);

            HBRUSH red = CreateSolidBrush(RGB(255,0,0));
            FillRect(g_hDC, &(RECT){100,100,300,300}, red);
            DeleteObject(red);
        }

        frame++;
    }

    /* AVIS: Shutdown DX and release resources */
    if(g_hDC) ReleaseDC(hwnd, g_hDC);
    seed_dx11_shutdown();

    return 0;
}
