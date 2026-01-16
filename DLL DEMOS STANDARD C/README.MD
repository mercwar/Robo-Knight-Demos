# ⭐ README  **DLL DEMOS (Pelles C)**  
*A collection of Windows DLL demonstrations built with Pelles C*

---

## 🖼️ Project Image  
Replace this placeholder with your repo image:

```
![DLL Demo](images/Copilot_20260116_024345.png)
```

---

## 🔧 Overview

This repository contains a growing collection of **Windows DLL demonstration projects**, all built using **Pelles C**.  
Each demo focuses on a specific concept:

- Exporting functions  
- Import libraries (`.lib`)  
- Dynamic loading (`LoadLibrary` / `GetProcAddress`)  
- Struct passing  
- Memory ownership  
- File I/O through DLLs  
- Runtime state machines  
- Cross‑module GF objects  
- Portable EXE + DLL workflows  

These demos form the foundation for larger systems like **ROBO_KNIGHT_FIO**, **Merc‑G**, and future ceremonial subsystems.

---

## 📂 Repository Structure

```
DLL_DEMOS/
│
├── BasicExport/              # Simple exported functions
├── StructReturn/             # Returning structs from DLL
├── DynamicLoad/              # LoadLibrary + GetProcAddress
├── StringPassing/            # Safe string passing between EXE and DLL
├── MemoryOwnership/          # Who allocates / who frees
├── FileIODemo/               # DLL performing file read/write
├── GFObjectDemo/             # Shared GF object across modules
├── DriveInfoDemo/            # Drive metadata from DLL
└── PellesC_Project_Files/    # .ppj, .lib, .dll outputs
```

Each folder includes:

- `.c` and `.h` source files  
- Pelles C `.ppj` project  
- A minimal EXE demonstrating usage  
- Notes on exports and calling conventions  

---

## 🚀 Getting Started

### **1. Open in Pelles C**
Open any `.ppj` file:

```
File → Open → <project>.ppj
```

### **2. Build the DLL**
```
Project → Build
```

### **3. Run the EXE demo**
Each demo includes a small EXE showing how to call the DLL.

---

## 📘 Example: Dynamic Loading Demo

```c
HMODULE h = LoadLibraryA("Demo.dll");
if (!h) return 1;

typedef int (*FN_ADD)(int, int);
FN_ADD Add = (FN_ADD)GetProcAddress(h, "Add");

printf("Result = %d\n", Add(2, 3));
```

---

## 🧪 Why Pelles C?

- Pure C89/C99  
- Clean Win32 headers  
- Perfect for DLL teaching  
- No C++ runtime baggage  
- Small, fast, predictable builds  

---

## 🛠️ Planned Demos

- Threaded DLL callbacks  
- DLL‑based logging engine  
- Memory‑mapped file demo  
- DX11 loader DLL  
- RK‑PATH subsystem DLL  

---

## 📜 License

MIT or your preferred license.

---

## 🤖 Author

Demon — forging ceremonial DLLs with precision and law.

---

# ⭐ README #2 — **ROBO_KNIGHT_FIO**  
*A portable File I/O engine implemented as a Windows DLL*

---

## 🖼️ Project Image  
Replace with your repo path:

```
![FIO Engine](images/Copilot_20260116_024345.png)
```

---

## 🔧 Overview

**ROBO_KNIGHT_FIO** is a modular File I/O engine implemented as a Windows DLL.  
It provides:

- A unified **GF object** for file metadata  
- A **COSMIC_FIO** runtime context  
- A **DRIVE** subsystem for drive metadata  
- A **FILEIO** subsystem for safe read/write  
- A portable SDK EXE that uses the DLL  
- Automatic EXE‑path‑based file operations  

This system is the backbone of the ROBO KNIGHT ceremonial universe.

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

- **Portable EXE + DLL system**  
  Works from any folder, USB, or deployment path.

- **GF Object**  
  Holds:
  - Full path  
  - Name + extension  
  - Timestamps  
  - Drive reference  
  - Flags and metadata  

- **COSMIC_FIO Runtime**  
  Centralized access to GF and DRIVE.

- **FILEIO Subsystem**  
  Safe, simple read/write using GF.url.

- **EXE Path Integration**  
  Files are saved next to the EXE automatically.

---

## 🧩 Public API (from `rkfio.h`)

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

## 🧪 SDK Example (EXE)

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

---

## 📜 License

MIT or your preferred license.

---

## 🤖 Author

Demon — architect of the ROBO KNIGHT ceremonial systems.


