/* AVIS FILE: dx_textures.h
   DESCRIPTION: Texture stub interface for Cyborg KB
   AUTHOR: CGPT / MercWar
   PURPOSE: Placeholder structs and functions for textures
   DATE: 2026-01-14
   TAGS: #dx #texture #avis
*/

#ifndef DX_TEXTURES_H
#define DX_TEXTURES_H

#include "dx11_stub.h"

/* AVIS: Texture placeholder */
typedef struct {
    const char* name;
    int width;
    int height;
    void* pixels;  /* AVIS: pointer to pixel data (stub) */
} Texture;

/* AVIS: Load a texture (stub) */
Texture* LoadTexture(const char* filename);

/* AVIS: Free a texture (stub) */
void FreeTexture(Texture* tex);

/* AVIS: Draw texture full-screen (stub) */
void DrawTextureFullScreen(Texture* tex);

#endif
