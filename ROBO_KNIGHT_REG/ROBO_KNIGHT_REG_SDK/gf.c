#include "gf.h"
#include <string.h>

void GF_Clear(GF_ *gf)
{
    if (!gf) return;
    memset(gf, 0, sizeof(GF_));
}

void GF_Init(GF_ *gf, uint32_t type, const char *url)
{
    if (!gf || !url) return;

    memset(gf, 0, sizeof(GF_));
    gf->type = type;

    strncpy(gf->url, url, GF_MAX_URL - 1);
    gf->url[GF_MAX_URL - 1] = '\0';
}
