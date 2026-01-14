/* AVIS FILE: avis_xinput_stub.h
   DESCRIPTION: Header-only XInput stub
   AUTHOR: CGPT / MercWar
   TAGS: #xinput #stub #avis
*/

#ifndef AVIS_XINPUT_STUB_H
#define AVIS_XINPUT_STUB_H

#include <windows.h>

/* AVIS: Define XInput types */
#ifndef ERROR_SUCCESS
#define ERROR_SUCCESS 0
#endif

typedef struct _XINPUT_GAMEPAD {
    WORD  wButtons;
    BYTE  bLeftTrigger;
    BYTE  bRightTrigger;
    SHORT sThumbLX;
    SHORT sThumbLY;
    SHORT sThumbRX;
    SHORT sThumbRY;
} XINPUT_GAMEPAD;

typedef struct _XINPUT_STATE {
    DWORD dwPacketNumber;
    XINPUT_GAMEPAD Gamepad;
} XINPUT_STATE;

/* AVIS: Header-only stub function */
static inline DWORD XInputGetState(DWORD dwUserIndex, XINPUT_STATE* pState)
{
    if(pState)
    {
        pState->dwPacketNumber = 0;
        pState->Gamepad.wButtons = 0;
        pState->Gamepad.bLeftTrigger = 0;
        pState->Gamepad.bRightTrigger = 0;
        pState->Gamepad.sThumbLX = 0;
        pState->Gamepad.sThumbLY = 0;
        pState->Gamepad.sThumbRX = 0;
        pState->Gamepad.sThumbRY = 0;
    }
    return ERROR_SUCCESS;
}

#endif /* AVIS_XINPUT_STUB_H */
