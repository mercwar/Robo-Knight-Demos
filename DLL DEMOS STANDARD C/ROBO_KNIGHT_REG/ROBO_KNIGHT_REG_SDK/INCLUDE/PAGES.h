/* AVIS DO NOT REMOVE
::AVIS FILEINFO V01.00::
FILE.NAME      = pages.h;
FILE.TYPE      = HEADER;
FILE.VERSION   = V01.00;
FILE.MODULE    = AVIS.PAGES;
FILE.PATH      = <PROJECT>/include/pages.h;
FILE.OWNER     = AI.FVS.AVIS.SYSTEM;
AVIS DO NOT REMOVE */

#ifndef AVIS_PAGES_H
#define AVIS_PAGES_H

#include <stdint.h>
#include <windows.h>
#include "gf.h"

typedef struct _AVIS_PAGE {
    GF_     gf;
    char    name[256];
    char    path[MAX_PATH];
    uint8_t loaded;
} AVIS_PAGE;

typedef struct _AVIS_PAGEMAP {
    AVIS_PAGE pages[256];
    uint32_t  count;
} AVIS_PAGEMAP;

void AVIS_PageMap_Init(AVIS_PAGEMAP* pm);
int  AVIS_PageMap_Add(AVIS_PAGEMAP* pm, const char* fullPath);
int  AVIS_PageMap_Find(const AVIS_PAGEMAP* pm, const char* name);
int  AVIS_PageMap_Load(AVIS_PAGEMAP* pm, int index, char* outBuffer, uint32_t bufferSize);

#endif
