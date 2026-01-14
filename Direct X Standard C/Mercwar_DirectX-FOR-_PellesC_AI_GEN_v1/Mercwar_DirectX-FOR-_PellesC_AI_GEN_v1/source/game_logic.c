/* AVIS FILE: avis_game_logic.c
   DESCRIPTION: Game logic for Cyborg KB with XInput stub integration
   AUTHOR: CGPT / MercWar
   PURPOSE: Handle input and update game state
   DATE: 2026-01-14
   TAGS: #game_logic #avis #xinput
*/

#include "avis_xinput_stub.h"   /* AVIS: XInput typedefs & stubs */
#include "dx11_stub.h"          /* AVIS: DX11 stub render interface */
#include <windows.h>

/* AVIS: Example game state */
int g_playerX = 400;
int g_playerY = 300;

/* AVIS: Update game logic per frame */
void UpdateGame(void)
{
    /* AVIS: Poll XInput controller 0 */
    XINPUT_STATE state;
    DWORD result = XInputGetState(0, &state);

    if(result == ERROR_SUCCESS)
    {
        /* AVIS: Simple input handling (thumbstick) */
        int deltaX = (int)state.Gamepad.sThumbLX / 1000;
        int deltaY = (int)state.Gamepad.sThumbLY / 1000;

        g_playerX += deltaX;
        g_playerY -= deltaY;

        /* AVIS: Clamp to screen bounds */
        if(g_playerX < 0) g_playerX = 0;
        if(g_playerX > 800) g_playerX = 800;
        if(g_playerY < 0) g_playerY = 0;
        if(g_playerY > 600) g_playerY = 600;
    }
}

/* AVIS: Render game frame stub (to integrate with DX11 render) */
void RenderGame(void)
{
    /* AVIS: Use DX11 stub to clear frame (screen saver placeholder) */
    RenderFrame();

    /* AVIS: Could draw player sprite / texture here */
}
