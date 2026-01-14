#ifndef XINPUT_PELLES_SAFE_H
#define XINPUT_PELLES_SAFE_H

#include <windows.h>

/* Stub XInput state structure */
typedef struct {
    short sThumbLX;
    short sThumbLY;
    short sThumbRX;
    short sThumbRY;
    BYTE  bLeftTrigger;
    BYTE  bRightTrigger;
    WORD  wButtons;
} XINPUT_GAMEPAD;

typedef struct {
    DWORD dwPacketNumber;
    XINPUT_GAMEPAD Gamepad;
} XINPUT_STATE;

/* XInput stub functions */
#ifndef ERROR_SUCCESS
#define ERROR_SUCCESS 0
#endif

int XInputGetState(int dwUserIndex, XINPUT_STATE* pState);

#endif
