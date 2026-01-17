#ifndef GF_H
#define GF_H

#include <stdint.h>

#define GF_MAX_URL    1024
#define GF_MAX_NAME    256
#define GF_MAX_EXT      64
#define GF_MAX_TAGS     16
#define GF_MAX_TAG_LEN  64

struct DRIVE_;

typedef union GF_DELIM_
{
    char     ch;
    uint32_t code;
} GF_DELIM_;

typedef struct GF_
{
    char     name[GF_MAX_NAME];
    char     ext[GF_MAX_EXT];
    char     url[GF_MAX_URL];

    GF_DELIM_ delim;

    uint64_t size;
    uint64_t allocSize;

    uint64_t createdTime;
    uint64_t modifiedTime;
    uint64_t accessedTime;

    uint32_t type;
    uint32_t flags;
    uint32_t format;
    uint32_t compression;

    uint32_t checksum;
    uint32_t hashAlgo;
    uint8_t  hash[32];

    char     tags[GF_MAX_TAGS][GF_MAX_TAG_LEN];

    struct DRIVE_ *drive;

    uint8_t  reserved[128];
} GF_;

void GF_Clear(GF_ *gf);
void GF_Init(GF_ *gf, uint32_t type, const char *url);

#endif
