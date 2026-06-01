<a target="_self" title="CLICK HERE to ENTER the GATEWAY FREE!" href="https://mercwar.github.io/Constellation/index.html">
<img 
    src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Gallery/refs/heads/main/Version%207/image_d2a07390.png" 
    alt="Mercwar Constellation" 
    style="width:100%; height:auto;"
/>
</a>

---
# 🛡️ ROBO_KNIGHT_FIO — File I/O Engine DLL  
*A modular, portable, C‑based file engine for Windows*

![FIO Hero](../../Direct%20X%20Standard%20C/Mercwar_Robo-Knight/Copilot_20260116_093219.png)

---

## 🔧 Overview

**ROBO_KNIGHT_FIO** is a lightweight, high‑performance File I/O engine implemented as a Windows DLL.  
It exposes a clean API for reading, writing, and managing file objects (GF), drive metadata, and runtime context (COSMIC_FIO).  
The SDK includes a minimal EXE demonstrating dynamic loading and usage.

---

## 📂 Project Structure

```
ROBO_KNIGHT_FIO/
│
├── ROBO_KNIGHT_FIO.dll        # The engine DLL
├── ROBO_KNIGHT_FIO.lib        # Import library
├── include/
│   └── rkfio.h                # Unified public header
│
├── src/
│   ├── cosmic_fio.c
│   ├── fileio.c
│   ├── drive.c
│   ├── gf.c
│   ├── dllmain.c
│   └── pages.c
│
└── sdk/
    ├── main.c                 # Example EXE
    └── rk_exepath.h           # EXE path helper
```

---

## 🚀 Features

- **Portable Windows DLL**  
  Load dynamically or via import library.

- **Unified GF Object**  
  Holds path, metadata, timestamps, hashing, tags, and drive reference.

- **COSMIC_FIO Runtime Context**  
  Centralized access to GF and DRIVE subsystems.

- **FILEIO Subsystem**  
  Simple, safe read/write operations using GF paths.

- **Drive Metadata (DRIVE_)**  
  Letter, root, capacity, free space, type, flags.

- **SDK Example Included**  
  Demonstrates:
  - Loading the DLL  
  - Initializing COSMIC_FIO  
  - Building paths using EXE directory  
  - Saving and loading files  

---

## 🧩 Public API

### Initialization

```c
COSMIC_FIO_ *COSMIC_FIO_Init(const char *root, char letter);
```

### Accessors

```c
GF_    *COSMIC_FIO_GetGF(void);
DRIVE_ *COSMIC_FIO_GetDrive(void);
```

### File I/O

```c
int FileIO_SaveGF(const GF_ *gf, const void *data, uint64_t size);
int FileIO_LoadGF(const GF_ *gf, void *data, uint64_t maxSize, uint64_t *outSize);
```

---

## 🧪 SDK Example

```c
#include <windows.h>
#include <stdio.h>
#include <string.h>
#include "rkfio.h"
#include "rk_exepath.h"

static const char RK_FILE[] = "ROBO_KNIGHT_FIO.TXT";

int main(void)
{
    RK_InitExePath();
    const char *exeDir = RK_GetExeDir();

    COSMIC_FIO_Init(exeDir, 'C');

    GF_ *gf = COSMIC_FIO_GetGF();
    snprintf(gf->url, sizeof(gf->url), "%s%s", exeDir, RK_FILE);

    const char *msg = "Hello from ROBO-KNIGHT.\n";
    FileIO_SaveGF(gf, msg, strlen(msg));

    char buffer[256];
    uint64_t outSize = 0;

    FileIO_LoadGF(gf, buffer, sizeof(buffer), &outSize);
    buffer[outSize] = 0;

    printf("Loaded: %s\n", buffer);
}
```
![FIO Hero](../../Direct%20X%20Standard%20C/Mercwar_Robo-Knight/SHINE/Copilot_20260116_181419.png)
---

## 🛠️ Building

### DLL (Pelles C)

```
pocc /Tx64 cosmic_fio.c fileio.c drive.c gf.c dllmain.c pages.c
polib /out:ROBO_KNIGHT_FIO.lib cosmic_fio.obj fileio.obj drive.obj gf.obj dllmain.obj pages.obj
```

### SDK EXE

```
pocc main.c
polink main.obj ROBO_KNIGHT_FIO.lib
```

# 📜 License

📝 MIT or your preferred license.
--
🛡️ This module is part of the ROBO‑KNIGHT toolchain. Use, modify, and integrate freely within your project.

---

## 🤖 Author

FFF Demonizer — architect of forging ceremonial DLLs with precision and law.

---

© 2026 CGPT / MercWar  
**RoboNight Series – AVIS Compatible**

