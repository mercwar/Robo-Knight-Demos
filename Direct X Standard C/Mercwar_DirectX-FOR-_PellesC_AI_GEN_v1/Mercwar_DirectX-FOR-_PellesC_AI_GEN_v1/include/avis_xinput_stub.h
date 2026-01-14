/* AVIS FILE: avis_xinput_stub.h
   DESCRIPTION: Header-only XInput stub for AVIS projects
   AUTHOR: CGPT / MercWar
   DATE: 2026-01-14
   TAGS: #xinput #avis
*/

#ifndef AVIS_XINPUT_STUB_H
#define AVIS_XINPUT_STUB_H

#ifndef ERROR_SUCCESS
#define ERROR_SUCCESS 0
#endif

typedef unsigned long DWORD;
typedef struct _XINPUT_STATE {
    DWORD dwPacketNumber;
    BYTE bButtons[16];
    BYTE bLeftTrigger;
    BYTE bRightTrigger;
    short sThumbLX;
    short sThumbLY;
    short sThumbRX;
    short sThumbRY;
} XINPUT_STATE;

static inline DWORD XInputGetState(DWORD dwUserIndex, XINPUT_STATE* pState)
{
    (void)dwUserIndex;
    if(pState) { /* zero out state */ 
        pState->dwPacketNumber = 0;
        pState->bLeftTrigger = 0;
        pState->bRightTrigger = 0;
        for(int i=0;i<16;i++) pState->bButtons[i]=0;
        pState->sThumbLX = 0;
        pState->sThumbLY = 0;
        pState->sThumbRX = 0;
        pState->sThumbRY = 0;
    }
    return ERROR_SUCCESS;
}

#endif
