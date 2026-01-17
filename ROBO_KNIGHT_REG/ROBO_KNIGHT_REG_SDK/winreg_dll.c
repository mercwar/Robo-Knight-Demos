#include "winreg_dll.h"
#include <windows.h>
#include <wchar.h>
#include <string.h>

struct _WR_HANDLE {
    HKEY hKey;
};

static WR_HANDLE* WR_Alloc(void)
{
    return (WR_HANDLE*)HeapAlloc(GetProcessHeap(), HEAP_ZERO_MEMORY, sizeof(WR_HANDLE));
}

static void WR_Free(WR_HANDLE* h)
{
    if (!h) return;
    if (h->hKey) RegCloseKey(h->hKey);
    HeapFree(GetProcessHeap(), 0, h);
}

/* OPEN / CREATE */
RKREG_API WR_HANDLE* __stdcall WR_OpenKey(HKEY root, const wchar_t* subKey, REGSAM samDesired)
{
    WR_HANDLE* h;
    if (!subKey) return NULL;

    h = WR_Alloc();
    if (!h) return NULL;

    if (RegOpenKeyExW(root, subKey, 0, samDesired, &h->hKey) != ERROR_SUCCESS)
    {
        WR_Free(h);
        return NULL;
    }
    return h;
}

RKREG_API WR_HANDLE* __stdcall WR_CreateKey(HKEY root, const wchar_t* subKey, REGSAM samDesired)
{
    WR_HANDLE* h;
    DWORD disp;

    if (!subKey) return NULL;

    h = WR_Alloc();
    if (!h) return NULL;

    if (RegCreateKeyExW(root, subKey, 0, NULL, 0, samDesired, NULL, &h->hKey, &disp) != ERROR_SUCCESS)
    {
        WR_Free(h);
        return NULL;
    }
    return h;
}

RKREG_API void __stdcall WR_CloseKey(WR_HANDLE* handle)
{
    WR_Free(handle);
}

/* STRING VALUES */
RKREG_API BOOL __stdcall WR_WriteString(WR_HANDLE* handle, const wchar_t* name, const wchar_t* value)
{
    DWORD size;
    if (!handle || !handle->hKey || !name || !value) return FALSE;

    size = (DWORD)((wcslen(value) + 1) * sizeof(wchar_t));
    return RegSetValueExW(handle->hKey, name, 0, REG_SZ, (BYTE*)value, size) == ERROR_SUCCESS;
}

RKREG_API BOOL __stdcall WR_ReadString(WR_HANDLE* handle, const wchar_t* name, wchar_t* buffer, DWORD bufferChars)
{
    DWORD type, size;
    if (!handle || !handle->hKey || !name || !buffer || bufferChars == 0) return FALSE;

    size = bufferChars * (DWORD)sizeof(wchar_t);

    if (RegQueryValueExW(handle->hKey, name, NULL, &type, (BYTE*)buffer, &size) != ERROR_SUCCESS)
        return FALSE;

    if (type != REG_SZ) return FALSE;

    buffer[bufferChars - 1] = L'\0';
    return TRUE;
}

/* DWORD VALUES */
RKREG_API BOOL __stdcall WR_WriteDword(WR_HANDLE* handle, const wchar_t* name, DWORD value)
{
    if (!handle || !handle->hKey || !name) return FALSE;

    return RegSetValueExW(handle->hKey, name, 0, REG_DWORD, (BYTE*)&value, sizeof(DWORD)) == ERROR_SUCCESS;
}

RKREG_API BOOL __stdcall WR_ReadDword(WR_HANDLE* handle, const wchar_t* name, DWORD* outValue)
{
    DWORD type, size;
    if (!handle || !handle->hKey || !name || !outValue) return FALSE;

    size = sizeof(DWORD);
    if (RegQueryValueExW(handle->hKey, name, NULL, &type, (BYTE*)outValue, &size) != ERROR_SUCCESS)
        return FALSE;

    return type == REG_DWORD;
}

/* GF OBJECT */
RKREG_API BOOL __stdcall REG_GF_Init(GF_* gf, HKEY root, const wchar_t* subKey)
{
    char rootPrefix[64];
    char subKeyA[GF_MAX_URL];
    int len;

    if (!gf || !subKey) return FALSE;

    memset(gf->url, 0, GF_MAX_URL);
    gf->type = GF_TYPE_REG;

    if (root == HKEY_CLASSES_ROOT)
        strcpy(rootPrefix, "HKEY_CLASSES_ROOT\\");
    else if (root == HKEY_CURRENT_USER)
        strcpy(rootPrefix, "HKEY_CURRENT_USER\\");
    else if (root == HKEY_LOCAL_MACHINE)
        strcpy(rootPrefix, "HKEY_LOCAL_MACHINE\\");
    else if (root == HKEY_USERS)
        strcpy(rootPrefix, "HKEY_USERS\\");
    else if (root == HKEY_CURRENT_CONFIG)
        strcpy(rootPrefix, "HKEY_CURRENT_CONFIG\\");
    else
        strcpy(rootPrefix, "UNKNOWN_ROOT\\");

    len = WideCharToMultiByte(CP_ACP, 0, subKey, -1, subKeyA, sizeof(subKeyA), NULL, NULL);
    if (len <= 0)
        return FALSE;

    strncpy(gf->url, rootPrefix, GF_MAX_URL - 1);
    strncat(gf->url, subKeyA, GF_MAX_URL - strlen(gf->url) - 1);

    return TRUE;
}

RKREG_API BOOL __stdcall REG_GF_ToString(const GF_* gf, char* buffer, uint32_t bufferSize)
{
    if (!gf || !buffer || bufferSize == 0)
        return FALSE;

    strncpy(buffer, gf->url, bufferSize - 1);
    buffer[bufferSize - 1] = '\0';
    return TRUE;
}
