#include "../include/drive.h"
#include <string.h>

void DRIVE_Set(DRIVE_ *d, char letter, const char *root)
{
    if (!d || !root)
        return;

    d->letter = letter;
    strncpy(d->root, root, sizeof(d->root)-1);
    d->root[sizeof(d->root)-1] = '\0';
}
