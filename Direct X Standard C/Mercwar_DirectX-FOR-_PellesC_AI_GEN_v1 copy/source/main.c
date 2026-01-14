/* AVIS FILE: main.c
   DESCRIPTION: Entry point for Cyborg KB Screen Saver
   AUTHOR: CGPT / MercWar
   PURPOSE: Main loop with AVIS DX and XInput stubs
   DATE: 2026-01-14
   TAGS: #main #avis #screen_saver
*/

#include <windows.h>
#include "dx11_stub.h"
#include "game_logic.h"

int WINAPI WinMain(HINSTANCE hInstance, HINSTANCE hPrev, LPSTR lpCmdLine, int nCmdShow)
{
    HWND hwnd = GetConsoleWindow(); /* AVIS: temporary console handle for message boxes */

    /* AVIS: Initialize DX */
    seed_dx11_init(hwnd);

    /* AVIS: Main screen saver loop (3 frames for demo) */
    for(int i=0;i<3;i++)
    {
        UpdateGame();    /* AVIS: Update player/input state */
        RenderFrame();   /* AVIS: Render frame */
    }

    /* AVIS: Shutdown DX */
    seed_dx11_shutdown();

    return 0;
}
