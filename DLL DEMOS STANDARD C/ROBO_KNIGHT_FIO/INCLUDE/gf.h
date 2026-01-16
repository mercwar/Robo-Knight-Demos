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
    char     name[GF_MAX_NAME];   // Base name
    char     ext[GF_MAX_EXT];     // Extension
    char     url[GF_MAX_URL];     // Full path

    GF_DELIM_ delim;              // Path delimiter

    uint64_t size;                // Logical size
    uint64_t allocSize;           // Allocated size on disk

    uint64_t createdTime;         // Creation timestamp
    uint64_t modifiedTime;        // Last modified
    uint64_t accessedTime;        // Last accessed

    uint32_t type;                // Type code
    uint32_t flags;               // Flags (dirty, locked, etc.)
    uint32_t format;              // Data format code
    uint32_t compression;         // Compression type

    uint32_t checksum;            // Simple checksum
    uint32_t hashAlgo;            // Hash algorithm id
    uint8_t  hash[32];            // 256-bit hash

    char     tags[GF_MAX_TAGS][GF_MAX_TAG_LEN]; // Tag strings

    struct DRIVE_ *drive;         // Owning drive

    uint8_t  reserved[128];       // Future expansion / padding
} GF_;

void GF_Clear(GF_ *gf);

#endif
