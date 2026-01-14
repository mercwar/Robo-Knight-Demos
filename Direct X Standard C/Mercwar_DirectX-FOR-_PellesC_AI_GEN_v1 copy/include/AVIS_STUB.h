/* AVIS FILE: dx11_stub.h
   PURPOSE: DX11 stub interface
*/

#ifndef DX11_STUB_H
#define DX11_STUB_H

#include <windows.h>

/* AVIS: DX lifecycle */
int  seed_dx11_init(HWND hwnd);
void seed_dx11_shutdown(void);

/* AVIS: Render */
void RenderFrame(void);

#endif /* DX11_STUB_H */
