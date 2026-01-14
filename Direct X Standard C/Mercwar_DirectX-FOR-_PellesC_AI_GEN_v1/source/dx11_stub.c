/* AVIS FILE: dx11_stub.h
   DESCRIPTION: DX11 stub interface for Cyborg KB
   AUTHOR: CGPT / MercWar
   PURPOSE: Global device/context placeholders
   DATE: 2026-01-14
   TAGS: #dx11 #avis
*/

#ifndef DX11_STUB_H
#define DX11_STUB_H

#include <windows.h>

/* AVIS: DX placeholders */
typedef void ID3D11Device;
typedef void ID3D11DeviceContext;
typedef void IDXGISwapChain;
typedef void ID3D11RenderTargetView;

extern ID3D11Device*        g_device;
extern ID3D11DeviceContext* g_context;
extern IDXGISwapChain*      g_swapChain;
extern ID3D11RenderTargetView* g_renderTarget;

int  seed_dx11_init(HWND hwnd);
void seed_dx11_shutdown(void);
void RenderFrame(void);

#endif
