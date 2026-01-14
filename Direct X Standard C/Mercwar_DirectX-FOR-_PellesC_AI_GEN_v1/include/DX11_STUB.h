/* dx11_stub.h */
#ifndef DX11_STUB_H
#define DX11_STUB_H

#ifdef __cplusplus
extern "C" {
#endif

/* DX11 stub API */
void seed_dx11_init(HWND hwnd);
void seed_dx11_shutdown(void);
void RenderFrame(void);

#ifdef __cplusplus
}
#endif

#endif
