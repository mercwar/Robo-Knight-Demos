#ifndef FILEIO_H
#define FILEIO_H

#include <stdint.h>
#include "gf.h"

#ifdef ROBO_KNIGHT_FIO_EXPORTS
#define FIO_API __declspec(dllexport)
#else
#define FIO_API __declspec(dllimport)
#endif

FIO_API int FileIO_SaveGF(const GF_ *gf, const void *data, uint64_t size);
FIO_API int FileIO_LoadGF(const GF_ *gf, void *data, uint64_t maxSize, uint64_t *outSize);

#endif
