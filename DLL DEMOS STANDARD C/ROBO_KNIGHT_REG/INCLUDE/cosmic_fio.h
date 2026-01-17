#ifndef COSMIC_FIO_H
#define COSMIC_FIO_H

#include <stdint.h>
#include "gf.h"
#include "drive.h"

#ifdef ROBO_KNIGHT_FIO_EXPORTS
#define CFIO_API __declspec(dllexport)
#else
#define CFIO_API __declspec(dllimport)
#endif

typedef struct COSMIC_FIO_
{
    DRIVE_ *drive;
    GF_    *gf;
} COSMIC_FIO_;

CFIO_API COSMIC_FIO_ *COSMIC_FIO_Init(const char *root, char letter);
CFIO_API GF_         *COSMIC_FIO_GetGF(void);
CFIO_API DRIVE_      *COSMIC_FIO_GetDrive(void);

#endif
