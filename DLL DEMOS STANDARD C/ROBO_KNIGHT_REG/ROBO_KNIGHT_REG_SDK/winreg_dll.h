#ifndef WINREG_DLL_H
#define WINREG_DLL_H

#include <windows.h>
#include <stdint.h>
#include "gf.h"

#ifdef ROBO_KNIGHT_REG_EXPORTS
#define RKREG_API __declspec(dllexport)
#else
#define RKREG_API __declspec(dllimport)
#endif

#define GF_TYPE_REG  2

typedef struct _WR_HANDLE WR_HANDLE;

/* OPEN / CLOSE */
RKREG_API WR_HANDLE* __stdcall WR_OpenKey(HKEY root, const wchar_t* subKey, REGSAM samDesired);
RKREG_API WR_HANDLE* __stdcall WR_CreateKey(HKEY root, const wchar_t* subKey, REGSAM samDesired);
RKREG_API void       __stdcall WR_CloseKey(WR_HANDLE* handle);

/* STRING VALUES */
RKREG_API BOOL __stdcall WR_WriteString(WR_HANDLE* handle, const wchar_t* name, const wchar_t* value);
RKREG_API BOOL __stdcall WR_ReadString(WR_HANDLE* handle, const wchar_t* name, wchar_t* buffer, DWORD bufferChars);

/* DWORD VALUES */
RKREG_API BOOL __stdcall WR_WriteDword(WR_HANDLE* handle, const wchar_t* name, DWORD value);
RKREG_API BOOL __stdcall WR_ReadDword(WR_HANDLE* handle, const wchar_t* name, DWORD* outValue);

/* GF OBJECT */
RKREG_API BOOL __stdcall REG_GF_Init(GF_* gf, HKEY root, const wchar_t* subKey);
RKREG_API BOOL __stdcall REG_GF_ToString(const GF_* gf, char* buffer, uint32_t bufferSize);

#endif
