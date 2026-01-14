/* xinput_stub.h */
#ifndef XINPUT_STUB_H
#define XINPUT_STUB_H

#include <windows.h>

#ifdef __cplusplus
extern "C" {
#endif

/* AVIS: XInput stub */
DWORD XInputGetState(DWORD dwUserIndex, void* pState);

#ifdef __cplusplus
}
#endif

#endif
