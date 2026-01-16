#include <windows.h>
#include <stdio.h>
#include <string.h>
#include "rkfio.h"
#include "rk_exepath.h"

/*
LOOK FOR "ROBO_KNIGHT_FIO.TXT" IN YOUR EXE PATH FOLDER
AND YOU WILL SEE YOUR RESULT TEXT ECHO.
*/

static const char RK_FILE[] = "ROBO_KNIGHT_FIO.TXT";

int main(void)
{
    // Initialize EXE directory
    RK_InitExePath();

    const char *exeDir = RK_GetExeDir();

    HMODULE hDLL = LoadLibraryA("ROBO_KNIGHT_FIO.dll");
    if (!hDLL)
    {
        printf("Failed to load DLL.\n");
        return 1;
    }

    // Use EXE directory for FIO root
    COSMIC_FIO_Init(exeDir, 'C');

    GF_ *gf = COSMIC_FIO_GetGF();
    snprintf(gf->url, sizeof(gf->url), "%s%s", exeDir, RK_FILE);

    const char *msg = "Hello, from ROBO-KNIGHT.\n";
    FileIO_SaveGF(gf, msg, strlen(msg));

    char buffer[256];
    uint64_t outSize = 0;

    FileIO_LoadGF(gf, buffer, sizeof(buffer), &outSize);
    buffer[outSize] = 0;

    printf("Loaded: %s\n", buffer);

    return 0;
}
