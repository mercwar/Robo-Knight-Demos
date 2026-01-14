/* AVIS FILE: avis_dx11_stub.c
   DESCRIPTION: DX11 stub for Cyborg KB
   AUTHOR: CGPT / MercWar
   PURPOSE: Minimal DX initialization and frame rendering
   DATE: 2026-01-14
   TAGS: #dx11 #avis
*/

#include <windows.h>
#include "dx11_stub.h"

HWND g_hwnd = NULL;

/* AVIS: Message box frame stub */
void RenderFrame(void)
{
    MessageBox(g_hwnd, "RenderFrame Called", "AVIS DX11 Frame Stub", MB_OK);
}

/* AVIS: DX init stub */
int seed_dx11_init(HWND hwnd)
{
    g_hwnd = hwnd;
    MessageBox(hwnd, "DX Initialized", "AVIS DX11 Init", MB_OK);
    return 1;
}

/* AVIS: DX shutdown stub */
void seed_dx11_shutdown(void)
{
    MessageBox(g_hwnd, "DX Shutdown", "AVIS DX11 Shutdown", MB_OK);
}
