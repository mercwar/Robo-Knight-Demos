#include <windows.h>
#include <stdio.h>
#include <string.h>

#include "winreg_dll.h"
#include "rk_exepath.h"
#include "gf.h"

static const wchar_t REG_SUBKEY[] = L"Software\\ROBO_KNIGHT_TEST";
static const wchar_t VALUE_TEXT[] = L"TestString";
static const wchar_t VALUE_NUM[]  = L"TestNumber";

int main(void)
{
    RK_InitExePath();
    printf("EXE DIR: %s\n", RK_GetExeDir());

    GF_ gf;
    GF_Clear(&gf);
printf("GF  LOADED \n", RK_GetExeDir());
    if (!REG_GF_Init(&gf, HKEY_CURRENT_USER, REG_SUBKEY))
    {
        printf("REG_GF_Init failed.\n");
        return 1;
    }

    printf("GF URL: %s\n", gf.url);

    WR_HANDLE *hKey = WR_CreateKey(HKEY_CURRENT_USER, REG_SUBKEY, KEY_READ | KEY_WRITE);
    if (!hKey)
    {
        printf("WR_CreateKey failed.\n");
        return 1;
    }

    const wchar_t *msg = L"Hello from ROBO-KNIGHT REG!";
    WR_WriteString(hKey, VALUE_TEXT, msg);
    WR_WriteDword(hKey, VALUE_NUM, 777);

    wchar_t buffer[256];
    WR_ReadString(hKey, VALUE_TEXT, buffer, 256);

    DWORD outNum = 0;
    WR_ReadDword(hKey, VALUE_NUM, &outNum);

    WR_CloseKey(hKey);

    char ansiBuf[256];
    WideCharToMultiByte(CP_ACP, 0, buffer, -1, ansiBuf, sizeof(ansiBuf), NULL, NULL);

    printf("Loaded String: %s\n", ansiBuf);
    printf("Loaded Number: %lu\n", (unsigned long)outNum);

    return 0;
}
