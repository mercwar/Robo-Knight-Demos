#ifndef XINPUT_PELLES_SAFE_H
#define XINPUT_PELLES_SAFE_H

#include <windows.h>

/* ------------------------------------------------------
   Pelles-safe XInput stub
   Avoid conflicts with Win headers:
   If ERROR_SUCCESS is already defined by <winerror.h>,
   this will be skipped. Otherwise define it here.
-------------------------------------------------------- */
#ifndef ERROR_SUCCESS
#define ERROR_SUCCESS 0
#endif

/* Simple XInput state struct stub */
typedef struct {
    short sThumbLX;
    short sThumbLY;
    short sThumbRX;
    short sThumbRY;
    unsigned short wButtons;
} XINPUT_GAMEPAD;

typedef struct {
    DWORD dwPacketNumber;
    XINPUT_GAMEPAD Gamepad;
} XINPUT_STATE;

/* Pelles-safe stub for XInputGetState */
static inline DWORD XInputGetState(DWORD dwUserIndex, XINPUT_STATE* pState)
{
    if(pState) {
        pState->dwPacketNumber = 0;
        pState->Gamepad.sThumbLX = 0;
        pState->Gamepad.sThumbLY = 0;
        pState->Gamepad.sThumbRX = 0;
        pState->Gamepad.sThumbRY = 0;
        pState->Gamepad.wButtons = 0;
    }
    return ERROR_SUCCESS;
}

#endif
