/* AVIS DO NOT REMOVE
::AVIS FILEINFO V01.00::
FILE.NAME      = pages.c;
FILE.TYPE      = SOURCE;
FILE.VERSION   = V01.00;
FILE.MODULE    = AVIS.PAGES;
FILE.PATH      = <PROJECT>/src/pages.c;
FILE.OWNER     = AI.FVS.AVIS.SYSTEM;
AVIS DO NOT REMOVE */

#include "pages.h"
#include <string.h>
#include <stdio.h>
#include "gf.h"

void AVIS_PageMap_Init(AVIS_PAGEMAP* pm)
{
    if (!pm) return;
    memset(pm, 0, sizeof(*pm));
}

int AVIS_PageMap_Add(AVIS_PAGEMAP* pm, const char* fullPath)
{
    if (!pm || !fullPath) return -1;
    if (pm->count >= 256) return -1;

    AVIS_PAGE* p = &pm->pages[pm->count];

    strncpy(p->path, fullPath, MAX_PATH - 1);

    const char* slash = strrchr(fullPath, '\\');
    strncpy(p->name, slash ? slash + 1 : fullPath, 255);

    GF_Init(&p->gf, 1, fullPath);

    return pm->count++;
}

int AVIS_PageMap_Find(const AVIS_PAGEMAP* pm, const char* name)
{
    if (!pm || !name) return -1;

    for (uint32_t i = 0; i < pm->count; i++)
        if (_stricmp(pm->pages[i].name, name) == 0)
            return i;

    return -1;
}

int AVIS_PageMap_Load(AVIS_PAGEMAP* pm, int index, char* outBuffer, uint32_t bufferSize)
{
    if (!pm || index < 0 || index >= (int)pm->count) return 0;

    FILE* f = fopen(pm->pages[index].path, "rb");
    if (!f) return 0;

    size_t n = fread(outBuffer, 1, bufferSize - 1, f);
    outBuffer[n] = 0;

    fclose(f);
    pm->pages[index].loaded = 1;

    return 1;
}
