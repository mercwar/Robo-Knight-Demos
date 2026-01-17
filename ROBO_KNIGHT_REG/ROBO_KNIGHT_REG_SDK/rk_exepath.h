#ifndef RK_EXEPATH_H
#define RK_EXEPATH_H

#include <windows.h>
#include <string.h>

static char RK_EXE_DIR[512] = {0};
static void RK_InitExePath(void)
{
    char fullPath[512];
    DWORD len = GetModuleFileNameA(NULL, fullPath, sizeof(fullPath));

    if (len == 0 || len >= sizeof(fullPath))
    {
        RK_EXE_DIR[0] = '\0';
        return;
    }

    memcpy(RK_EXE_DIR, fullPath, len);
    RK_EXE_DIR[len] = '\0';

    for (int i = len - 1; i >= 0; i--)
    {
        if (RK_EXE_DIR[i] == '\\' || RK_EXE_DIR[i] == '/')
        {
            RK_EXE_DIR[i + 1] = '\0';
            break;
        }
    }
}

static const char *RK_GetExeDir(void)
{
    return RK_EXE_DIR;
}

#endif
