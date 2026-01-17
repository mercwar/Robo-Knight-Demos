/*  AVIS DO NOT REMOVE
    SPEC.AVIS.COMMENT
    FILE: winreg_dll.c
    MODULE: WINREG.DLL
    PURPOSE: Registry access subsystem for Pelles C
    AUTHOR: Demon
    NOTES:
      - This file participates in the AVIS comment system.
      - All functions are grouped into PAGES for AI parsing.
      - Pure C (Pelles C 13 compliant).
*/
/*  AVIS DO NOT REMOVE
    SPEC.AVIS.COMMENT
    MODULE: WINREG.DLL
    PURPOSE: Registry access subsystem for Pelles C
    AUTHOR: Demon
    NOTES:
      - This file participates in the AVIS comment system.
      - All functions are grouped into PAGES for AI parsing.
      - Pure C (Pelles C 13 compliant).
*/

#include <windows.h>
#include <wchar.h>
#include "winreg_dll.h"

struct _WR_HANDLE {
    HKEY hKey;
};

/* INTERNAL: allocation helpers */
static WR_HANDLE* WR_Alloc(void) {
    return (WR_HANDLE*)HeapAlloc(GetProcessHeap(), HEAP_ZERO_MEMORY, sizeof(WR_HANDLE));
}

static void WR_Free(WR_HANDLE* h) {
    if (!h) return;
    if (h->hKey) RegCloseKey(h->hKey);
    HeapFree(GetProcessHeap(), 0, h);
}

/* PAGE: OPEN / CLOSE */
__declspec(dllexport) WR_HANDLE* __stdcall WR_OpenKey(HKEY root, const wchar_t* subKey, REGSAM samDesired) {
    WR_HANDLE* h = WR_Alloc();
    if (!h) return NULL;
    if (RegOpenKeyExW(root, subKey, 0, samDesired, &h->hKey) != ERROR_SUCCESS) {
        WR_Free(h);
        return NULL;
    }
    return h;
}

__declspec(dllexport) WR_HANDLE* __stdcall WR_CreateKey(HKEY root, const wchar_t* subKey, REGSAM samDesired) {
    WR_HANDLE* h = WR_Alloc();
    DWORD disp;
    if (!h) return NULL;
    if (RegCreateKeyExW(root, subKey, 0, NULL, 0, samDesired, NULL, &h->hKey, &disp) != ERROR_SUCCESS) {
        WR_Free(h);
        return NULL;
    }
    return h;
}

__declspec(dllexport) void __stdcall WR_CloseKey(WR_HANDLE* handle) {
    WR_Free(handle);
}

/* PAGE: STRING VALUES */
__declspec(dllexport) BOOL __stdcall WR_WriteString(WR_HANDLE* handle, const wchar_t* name, const wchar_t* value) {
    if (!handle || !handle->hKey) return FALSE;
    DWORD size = (DWORD)((wcslen(value) + 1) * sizeof(wchar_t));
    return RegSetValueExW(handle->hKey, name, 0, REG_SZ, (BYTE*)value, size) == ERROR_SUCCESS;
}

__declspec(dllexport) BOOL __stdcall WR_ReadString(WR_HANDLE* handle, const wchar_t* name, wchar_t* buffer, DWORD bufferChars) {
    if (!handle || !handle->hKey) return FALSE;
    DWORD type = 0;
    DWORD size = bufferChars * sizeof(wchar_t);
    if (RegQueryValueExW(handle->hKey, name, NULL, &type, (BYTE*)buffer, &size) != ERROR_SUCCESS) return FALSE;
    if (type != REG_SZ) return FALSE;
    buffer[bufferChars - 1] = L'\0';
    return TRUE;
}

/* PAGE: DWORD VALUES */
__declspec(dllexport) BOOL __stdcall WR_WriteDword(WR_HANDLE* handle, const wchar_t* name, DWORD value) {
    if (!handle || !handle->hKey) return FALSE;
    return RegSetValueExW(handle->hKey, name, 0, REG_DWORD, (BYTE*)&value, sizeof(DWORD)) == ERROR_SUCCESS;
}

__declspec(dllexport) BOOL __stdcall WR_ReadDword(WR_HANDLE* handle, const wchar_t* name, DWORD* value) {
    if (!handle || !handle->hKey) return FALSE;
    DWORD type = 0;
    DWORD size = sizeof(DWORD);
    if (RegQueryValueExW(handle->hKey, name, NULL, &type, (BYTE*)value, &size) != ERROR_SUCCESS) return FALSE;
    return type == REG_DWORD;
}
