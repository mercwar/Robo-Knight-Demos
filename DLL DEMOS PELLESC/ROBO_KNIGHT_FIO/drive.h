#ifndef DRIVE_H
#define DRIVE_H

#include <stdint.h>

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

void DRIVE_Set(DRIVE_ *d, char letter, const char *root);

#endif
