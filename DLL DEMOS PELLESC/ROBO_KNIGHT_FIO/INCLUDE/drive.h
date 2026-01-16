#ifndef DRIVE_H
#define DRIVE_H

#include <stdint.h>

typedef struct DRIVE_
{
    char     root[260];     // Base path, e.g. "H:\\ROBO_KNIGHT_FIO_DATA"
    char     letter;        // Logical drive letter
    uint32_t flags;         // Drive flags (read-only, removable, etc.)

    uint64_t capacityBytes; // Total capacity
    uint64_t usedBytes;     // Used space
    uint64_t freeBytes;     // Free space

    uint32_t type;          // Drive type code
    uint32_t reserved;      // Alignment / future use
} DRIVE_;

#endif
