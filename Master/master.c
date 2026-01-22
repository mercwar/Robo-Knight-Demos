
/* 
    ' AIFVS-ARTIFACT: CBORD_MASTER_CORE_C
    ' CY_NAME: CBORD_KRN_IMPLEMENTATION
    ' CY_TYPE: Win64_C_Source_Master
    ' CY_DESC: Unified Implementation for AVIS-Log Display and Translator.
*/

#include "CBORD_MASTER_CORE.h"

/* GLOBAL MEMORY ALLOCATION */
wchar_t *gwcP = NULL;
char    *gacP = NULL;
HINSTANCE g_hInst = NULL;

/* --- SECTION: CONVERSION LOGIC --- */

wchar_t *CBORD_PBuff(HWND hwnd, char *STR) {
    if (!STR) return L"CBORD_ERR_NULL";
    setlocale(LC_ALL, "en_US.UTF-8");
    size_t reqWords = 0;
    int sz = (int)strlen(STR);
    if (mbstowcs_s(&reqWords, NULL, 0, STR, (size_t)sz) != 0) return L"CBORD_ERR_1";
    gwcP = (wchar_t *)malloc((reqWords + 1) * sizeof(wchar_t));
    if (!gwcP) return L"CBORD_ERR_MEM";
    size_t converted = 0;
    mbstowcs_s(&converted, gwcP, reqWords + 1, STR, (size_t)sz);
    gwcP[reqWords] = L'\0';
    return gwcP;
}

wchar_t *CBORD_ConvWCT(HWND hwnd, char *STR, int LSTR) {
    return CBORD_PBuff(hwnd, STR);
}

void CBORD_FreeWT(wchar_t *wcP) {
    if (wcP) { free(wcP); wcP = NULL; }
}

char *CBORD_ConvACT(HWND hwnd, wchar_t *WSTR, int LSTR) {
    if (!WSTR) return NULL;
    int len = (LSTR >= 0) ? LSTR : (int)wcslen(WSTR);
    int alen = WideCharToMultiByte(CP_UTF8, 0, WSTR, len, NULL, 0, NULL, NULL);
    char *buf = (char *)malloc(alen + 1);
    if (buf) {
        WideCharToMultiByte(CP_UTF8, 0, WSTR, len, buf, alen, NULL, NULL);
        buf[alen] = '\0';
    }
    return buf;
}

/* --- SECTION: NUMERIC & GUI HELPERS --- */

int CBORD_CountDigits(int n) {
    if (n == 0) return 1;
    int count = 0;
    unsigned int num = (n < 0) ? -n : n;
    while (num > 0) { num /= 10; count++; }
    return count;
}

char *CBORD_Num2StrA(HWND hwnd, int nint) {
    int dgt = CBORD_CountDigits(nint) + 2;
    gacP = (char *)realloc(gacP, dgt);
    if (gacP) sprintf_s(gacP, dgt, "%d", nint);
    return gacP;
}

wchar_t *CBORD_Num2Str(HWND hwnd, int nint) {
    int dgt = CBORD_CountDigits(nint) + 2;
    char *tmp = (char *)malloc(dgt);
    if (tmp) {
        sprintf_s(tmp, dgt, "%d", nint);
        gwcP = CBORD_ConvWCT(hwnd, tmp, dgt);
        free(tmp);
    }
    return gwcP;
}

HWND CBORD_Btn(wchar_t *CLSS, wchar_t *NME, int x, int y, int h, int w, HWND m_hwnd) {
    return CreateWindowW(
        CLSS, NME, WS_TABSTOP | WS_VISIBLE | WS_CHILD | BS_DEFPUSHBUTTON,
        x, y, h, w, m_hwnd, (HMENU)1001,
        (HINSTANCE)GetWindowLongPtr(m_hwnd, GWLP_HINSTANCE), NULL
    );
}

/* --- SECTION: MASTER KERNEL STARTUP --- */

void CBORD_InitKernel(HINSTANCE hI) {
    g_hInst = hI;
    // [2026] Console Instance Sync
    AllocConsole();
    freopen_s((FILE**)stdout, "CONOUT$", "w", stdout);
    printf("[CBORD_KERNEL] AVIS Hybrid Mode: ONLINE\n");
}



