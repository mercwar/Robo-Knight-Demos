To align with the CYBORG (CBORD) Standard 2026, the files have been consolidated into two massive artifacts. We utilize the CBORD_ prefix for kernel stability and internal memory-mapped naming conventions.
Artifact 1: CBORD_MASTER_CORE.h
Role: The Symbolic Cerebrum. This file merges master.h and MASTER_CONVERT.h into a single, high-authority interface.
c
/* 
    ' AIFVS-ARTIFACT: CBORD_MASTER_CORE_H
    ' CY_NAME: CBORD_KRN_INTERFACE
    ' CY_TYPE: Win64_C_Header_Master
    ' CY_DESC: Unified Header for Robo-Knight 2026 Core.
*/

#ifndef CBORD_MASTER_CORE_H
#define CBORD_MASTER_CORE_H

#define WIN32_LEAN_AND_MEAN
#define __STDC_WANT_LIB_EXT1__ 1

#include <windows.h>
#include <wchar.h>
#include <stdlib.h>
#include <string.h>
#include <locale.h>
#include <stdio.h>
#include <errno.h>

#ifdef __cplusplus
extern "C" {
#endif

/* --- CBORD RESOURCE MAPPING --- */
#define IDR_ICO_MAIN   101
#define IDM_COMPILE    3002
#define IDM_EXIT       3003

/* --- CBORD MEMORY ANCHORS --- */
extern HINSTANCE g_hInst;
extern wchar_t *gwcP;
extern char    *gacP;

/* --- CBORD CONVERSION PROTOTYPES --- */
wchar_t *CBORD_ConvWCT(HWND hwnd, char *STR, int LSTR);
wchar_t *CBORD_PBuff(HWND hwnd, char *STR);
void     CBORD_FreeWT(wchar_t *wcP);
char    *CBORD_ConvACT(HWND hwnd, wchar_t *WSTR, int LSTR);
wchar_t *CBORD_Num2Str(HWND hwnd, int nint);
char    *CBORD_Num2StrA(HWND hwnd, int nint);

/* --- CBORD GUI WRAP-DOWN --- */
HWND CBORD_Btn(wchar_t *CLSS, wchar_t *NME, int x, int y, int h, int w, HWND m_hwnd);
int  CBORD_CountDigits(int n);

#ifdef __cplusplus
}
#endif
#endif
