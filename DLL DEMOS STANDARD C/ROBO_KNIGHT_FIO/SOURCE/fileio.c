#define ROBO_KNIGHT_FIO_EXPORTS
#include "../include/fileio.h"
#include <stdio.h>

FIO_API int FileIO_SaveGF(const GF_ *gf, const void *data, uint64_t size)
{
    if (!gf || !data || !gf->url[0])
        return -1;

    FILE *fp = fopen(gf->url, "wb");
    if (!fp)
        return -2;

    size_t written = fwrite(data, 1, (size_t)size, fp);
    fclose(fp);

    return (written == (size_t)size) ? 0 : -3;
}

FIO_API int FileIO_LoadGF(const GF_ *gf, void *data, uint64_t maxSize, uint64_t *outSize)
{
    if (!gf || !data || !gf->url[0])
        return -1;

    FILE *fp = fopen(gf->url, "rb");
    if (!fp)
        return -2;

    fseek(fp, 0, SEEK_END);
    long sz = ftell(fp);
    fseek(fp, 0, SEEK_SET);

    if (sz < 0 || (uint64_t)sz > maxSize)
    {
        fclose(fp);
        return -3;
    }

    size_t read = fread(data, 1, (size_t)sz, fp);
    fclose(fp);

    if (outSize)
        *outSize = (uint64_t)read;

    return (read == (size_t)sz) ? 0 : -4;
}
