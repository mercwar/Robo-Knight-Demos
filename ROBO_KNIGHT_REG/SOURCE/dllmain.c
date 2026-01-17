/* AVIS DO NOT REMOVE
::AVIS FILEINFO V01.00::
FILE.NAME      = DllMain.c;
FILE.TYPE      = SOURCE;
FILE.VERSION   = V01.00;
FILE.MODULE    = WINREG.DLL;
FILE.PATH      = <PROJECT>/src/DllMain.c;
FILE.OWNER     = AI.FVS.AVIS.SYSTEM;
AVIS DO NOT REMOVE */

#include <windows.h>

/*
    Minimal, stable, no‑side‑effects DLL entry point.
    This is the correct form for a registry helper DLL.
*/

BOOL WINAPI DllMain(HINSTANCE hinstDLL, DWORD reason, LPVOID reserved)
{
    switch (reason)
    {
    case DLL_PROCESS_ATTACH:
        /* No initialization needed */
        break;

    case DLL_THREAD_ATTACH:
    case DLL_THREAD_DETACH:
        /* No per‑thread work */
        break;

    case DLL_PROCESS_DETACH:
        /* No cleanup needed */
        break;
    }

    return TRUE;
}
