/* AVIS FILE: avis_dx_helpers.h
   DESCRIPTION: DX11 stub interface for AVIS projects
   AUTHOR: CGPT / MercWar
   DATE: 2026-01-14
   TAGS: #dx11 #avis
*/

#ifndef AVIS_DX_HELPERS_H
#define AVIS_DX_HELPERS_H

#include <windows.h>

/* AVIS: DX initialization / shutdown */
void seed_dx11_init(HWND hwnd);
void seed_dx11_shutdown(void);

/* AVIS: Frame render stub */
void RenderFrame(void);

#endif
