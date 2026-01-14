#ifndef DX11_PELLES_SAFE_H
#define DX11_PELLES_SAFE_H

#include <windows.h>

#ifdef __cplusplus
extern "C" {
#endif

/* Global DirectX state (opaque for Pelles C) */
extern void* g_device;
extern void* g_context;
extern void* g_swapChain;
extern void* g_renderTarget;

/* Initialize DirectX (fullscreen window) */
int  seed_dx11_init(HWND hwnd, int width, int height, int fullscreen);

/* Shutdown DirectX */
void seed_dx11_shutdown(void);

/* Render one frame */
void RenderFrame(void);

#ifdef __cplusplus
}
#endif

#endif
