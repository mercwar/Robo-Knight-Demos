// rk_fileio_loader.c
#include <windows.h>
#include "../include/fileio.h"

typedef int (*PFN_SAVEGF)(const GF_*, const void*, uint64_t);
typedef int (*PFN_LOADGF)(const GF_*, void*, uint64_t, uint64_t*);

static PFN_SAVEGF pSaveGF = NULL;
static PFN_LOADGF pLoadGF = NULL;

int RK_LoadFileIO(void)
{
    HMODULE hDLL = LoadLibraryA("ROBO_KNIGHT_FIO.dll");
    if (!hDLL)
        return 0;

    pSaveGF = (PFN_SAVEGF)GetProcAddress(hDLL, "FileIO_SaveGF");
    pLoadGF = (PFN_LOADGF)GetProcAddress(hDLL, "FileIO_LoadGF");

    return (pSaveGF && pLoadGF);
}
