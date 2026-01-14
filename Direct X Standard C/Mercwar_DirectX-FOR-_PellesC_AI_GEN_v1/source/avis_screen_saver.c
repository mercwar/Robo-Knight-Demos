/* AVIS FILE: avis_screen_saver.c
   DESCRIPTION: AVIS Screen Saver Logic for Cyborg KB
   AUTHOR: CGPT / MercWar
   PURPOSE: Simple moving rectangles demo for screen saver
   DATE: 2026-01-14
   TAGS: #screensaver #avis #dx11 #stub
*/

#include <windows.h>
#include "avis_screen_saver.h"

extern int g_screenWidth;
extern int g_screenHeight;
extern HDC g_hDC;   /* AVIS: Device Context from main */

static int posX = 0;
static int posY = 0;
static int dirX = 2;
static int dirY = 2;
static int size = 100;

/* AVIS: Initialize Screen Saver */
void InitScreenSaver()
{
    posX = 0;
    posY = 0;
    dirX = 2;
    dirY = 2;
}

/* AVIS: Update screen saver positions */
void UpdateScreenSaver()
{
    posX += dirX;
    posY += dirY;

    if(posX < 0 || posX + size > g_screenWidth) dirX = -dirX;
    if(posY < 0 || posY + size > g_screenHeight) dirY = -dirY;
}

/* AVIS: Render screen saver */
void RenderScreenSaver()
{
    if(!g_hDC) return;

    /* AVIS: Clear previous frame */
    HBRUSH bg = CreateSolidBrush(RGB(0,0,0));
    FillRect(g_hDC, &(RECT){0,0,g_screenWidth,g_screenHeight}, bg);
    DeleteObject(bg);

    /* AVIS: Draw moving rectangle */
    HBRUSH brush = CreateSolidBrush(RGB(0,200,255));
    FillRect(g_hDC, &(RECT){posX, posY, posX + size, posY + size}, brush);
    DeleteObject(brush);
}
