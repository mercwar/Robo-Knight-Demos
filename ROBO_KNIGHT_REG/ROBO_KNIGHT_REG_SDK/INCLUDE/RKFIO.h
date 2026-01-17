#ifndef RKFIO_H
#define RKFIO_H

#include <stdint.h>

#ifdef __cplusplus
extern "C" {
#endif

// ----------------------
// DRIVE
// ----------------------
typedef struct DRIVE_
{
    char     root[260];
    char     letter;
    uint32_t flags;
    uint64_t capacityBytes;
    uint64_t usedBytes;
    uint64_t freeBytes;
    uint32_t type;
    uint32_t reserved;
} DRIVE_;

// ----------------------
// GF
// ----------------------
#define GF_MAX_URL    1024
#define GF_MAX_NAME    256
#define GF_MAX_EXT      64

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

    char     tags[16][64];

    DRIVE_  *drive;

    uint8_t  reserved[128];
} GF_;

// ----------------------
// COSMIC_FIO CONTEXT
// ----------------------
typedef struct COSMIC_FIO_
{
    DRIVE_ *drive;
    GF_    *gf;
} COSMIC_FIO_;

// ----------------------
// DLL EXPORTS
// ----------------------
__declspec(dllimport) COSMIC_FIO_ *COSMIC_FIO_Init(const char *root, char letter);
__declspec(dllimport) GF_         *COSMIC_FIO_GetGF(void);
__declspec(dllimport) DRIVE_      *COSMIC_FIO_GetDrive(void);

__declspec(dllimport) int FileIO_SaveGF(const GF_ *gf, const void *data, uint64_t size);
__declspec(dllimport) int FileIO_LoadGF(const GF_ *gf, void *data, uint64_t maxSize, uint64_t *outSize);

#ifdef __cplusplus
}
#endif

#endif
