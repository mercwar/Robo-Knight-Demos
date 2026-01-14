#ifndef MAIN_H
#define MAIN_H

#include <windows.h>

int seed_dx11_init(HWND hwnd, int width, int height, int fullscreen);
void seed_dx11_shutdown(void);
void RenderFrame(void);

void UpdateGame(void);
void RenderGame(void);

#endif
