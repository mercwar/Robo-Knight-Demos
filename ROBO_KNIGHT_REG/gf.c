/* AVIS DO NOT REMOVE
::AVIS FILEINFO V01.00::
FILE.NAME      = gf.c;
FILE.TYPE      = SOURCE;
FILE.VERSION   = V01.00;
FILE.MODULE    = AVIS.GF.OBJECT;
FILE.PATH      = <PROJECT>/src/gf.c;
FILE.OWNER     = AI.FVS.AVIS.SYSTEM;
AVIS DO NOT REMOVE */

#include "gf.h"
#include <string.h>

void GF_Init(GF_* gf, uint32_t type, const char* url)
{
    if (!gf || !url) return;
    memset(gf, 0, sizeof(GF_));
    gf->type = type;
    strncpy(gf->url, url, GF_MAX_URL - 1);
}
