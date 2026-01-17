#ifndef AVIS_GF_H
#define AVIS_GF_H

#include <stdint.h>

#define GF_MAX_URL 512

typedef struct _GF_ {
    uint32_t type;
    char     url[GF_MAX_URL];
} GF_;
typedef struct _GF_ GF_;

void GF_Init(GF_* gf, uint32_t type, const char* url);
void GF_Clear(GF_ *gf);

#endif
