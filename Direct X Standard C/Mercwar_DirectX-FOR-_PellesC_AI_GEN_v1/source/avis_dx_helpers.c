/* AVIS FILE: avis_dx_helpers.c
   DESCRIPTION: DX11 stub implementation for AVIS projects
   AUTHOR: CGPT / MercWar
   DATE: 2026-01-14
   TAGS: #dx11 #avis
*/

#include "avis_dx_helpers.h"
#include <windows.h>

/* AVIS: DX11 stub variables */
void* g_device = 0;
void* g_context = 0;
void* g_swapChain = 0;
void* g_renderTarget = 0;

/* AVIS: Initialize DX11 stub */
void seed_dx11_init(HWND hwnd)
{
    (void)hwnd;
    /* AVIS: Stub DX init */
}

/* AVIS: Shutdown DX11 stub */
void seed_dx11_shutdown(void)
{
    /* AVIS: Stub DX shutdown */
}

/* AVIS: Render stub */
void RenderFrame(void)
{
    /* AVIS: Stub frame render */
}
