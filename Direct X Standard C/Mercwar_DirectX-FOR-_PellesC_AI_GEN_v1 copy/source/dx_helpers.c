#include "dx11_pelles_safe.h"
#include <windows.h>

/* Dummy opaque pointers */
void* g_device      = 0;
void* g_context     = 0;
void* g_swapChain   = 0;
void* g_renderTarget = 0;

int seed_dx11_init(HWND hwnd, int width, int height, int fullscreen)
{
    MessageBoxA(hwnd, "DX Init called", "Mercwar", MB_OK);
    /* Window creation/fullscreen handled elsewhere */
    return 1;
}

void seed_dx11_shutdown(void)
{
    MessageBoxA(0, "DX Shutdown called", "Mercwar", MB_OK);
}

void RenderFrame(void)
{
    static int frame = 0;
    char msg[64];
    frame++;
    wsprintfA(msg, "Render frame %d", frame);
    MessageBoxA(0, msg, "Mercwar", MB_OK);
}
