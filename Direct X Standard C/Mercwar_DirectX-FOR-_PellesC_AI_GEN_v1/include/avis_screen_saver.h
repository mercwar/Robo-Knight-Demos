#ifndef AVIS_SCREEN_SAVER_H
#define AVIS_SCREEN_SAVER_H

#include <windows.h>

/* AVIS: Global device context stub */
extern HDC g_hDC;

void InitScreenSaver(void);
void UpdateScreenSaver(void);
void RenderScreenSaver(void);

#endif /* AVIS_SCREEN_SAVER_H */
