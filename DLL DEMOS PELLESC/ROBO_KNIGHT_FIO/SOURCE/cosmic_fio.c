#define ROBO_KNIGHT_FIO_EXPORTS
#include "../INCLUDE/cosmic_fio.h"
#include <string.h>
#include <stdio.h>

static COSMIC_FIO_ g_ctx;
static DRIVE_      g_drive;
static GF_         g_gf;

CFIO_API COSMIC_FIO_ *COSMIC_FIO_Init(const char *root, char letter)
{
    memset(&g_ctx,   0, sizeof(g_ctx));
    memset(&g_drive, 0, sizeof(g_drive));
    GF_Clear(&g_gf);

    if (!root || !*root)
        return NULL;

    strncpy(g_drive.root, root, sizeof(g_drive.root) - 1);
    g_drive.letter = letter;

    snprintf(g_gf.url, sizeof(g_gf.url), "%s\\gf_%c.dat", root, letter);
    g_gf.drive = &g_drive;

    g_ctx.drive = &g_drive;
    g_ctx.gf    = &g_gf;

    return &g_ctx;
}

CFIO_API GF_ *COSMIC_FIO_GetGF(void)
{
    return g_ctx.gf;
}

CFIO_API DRIVE_ *COSMIC_FIO_GetDrive(void)
{
    return g_ctx.drive;
}
