#include "../include/gf.h"
#include <string.h>

void GF_Clear(GF_ *gf)
{
    if (!gf)
        return;

    memset(gf, 0, sizeof(*gf));
    gf->delim.ch = '\\';
}
