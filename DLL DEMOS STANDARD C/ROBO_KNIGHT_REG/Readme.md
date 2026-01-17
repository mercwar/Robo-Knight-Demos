
# **ROBO_KNIGHT_REG — Windows Registry Subsystem (Pelles C)**

A lightweight, deterministic, zero‑drift Windows Registry access module designed for the ROBO‑KNIGHT toolchain.  
Implements a clean API for reading/writing registry values, plus a minimal GF_ object integration for consistent path representation across subsystems.

This module is written in pure C (Pelles C compatible) with no external dependencies.

---

## 🔧 **Features**

- Create or open registry keys  
- Read/write `REG_SZ` (wide string) values  
- Read/write `REG_DWORD` values  
- Safe handle management via `WR_HANDLE`  
- Minimal GF_ object support for registry paths  
- Clean separation between DLL and SDK test harness  
- Fully deterministic behavior — no hidden allocations, no drift

---

## 📁 **Project Structure**

```
ROBO_KNIGHT_REG/
│
├── winreg_dll.c        # DLL implementation
├── winreg_dll.h        # Public API header
├── gf.c                # Minimal GF_ implementation
├── gf.h                # GF_ struct + helpers
└── ROBO_KNIGHT_REG.dll # Built DLL (ignored in repo)
```

```
ROBO_KNIGHT_REG_SDK/
│
├── main.c              # Test harness / example usage
├── rk_exepath.h        # EXE directory resolver
└── ROBO_KNIGHT_REG_SDK.exe  # Built EXE (ignored in repo)
```

---

## 🧩 **GF_ Object Integration**

The registry module uses a minimal GF_ object:

```c
typedef struct _GF_ {
    uint32_t type;
    char     url[512];
} GF_;
```

`REG_GF_Init()` populates the GF_ with a canonical registry URL:

```
HKEY_CURRENT_USER\Software\ROBO_KNIGHT_TEST
```

This keeps registry paths consistent with other ROBO‑KNIGHT subsystems.

---

## 🛠️ **Public API**

### **Open / Create / Close**

```c
WR_HANDLE* WR_OpenKey(HKEY root, const wchar_t* subKey, REGSAM samDesired);
WR_HANDLE* WR_CreateKey(HKEY root, const wchar_t* subKey, REGSAM samDesired);
void       WR_CloseKey(WR_HANDLE* handle);
```

### **String Values**

```c
BOOL WR_WriteString(WR_HANDLE* handle, const wchar_t* name, const wchar_t* value);
BOOL WR_ReadString(WR_HANDLE* handle, const wchar_t* name, wchar_t* buffer, DWORD bufferChars);
```

### **DWORD Values**

```c
BOOL WR_WriteDword(WR_HANDLE* handle, const wchar_t* name, DWORD value);
BOOL WR_ReadDword(WR_HANDLE* handle, const wchar_t* name, DWORD* outValue);
```

### **GF Object Helpers**

```c
BOOL REG_GF_Init(GF_* gf, HKEY root, const wchar_t* subKey);
BOOL REG_GF_ToString(const GF_* gf, char* buffer, uint32_t bufferSize);
```

---

## 🚀 **Example Usage (from SDK)**

```c
GF_ gf;
GF_Clear(&gf);

REG_GF_Init(&gf, HKEY_CURRENT_USER, L"Software\\ROBO_KNIGHT_TEST");
printf("GF URL: %s\n", gf.url);

WR_HANDLE* hKey = WR_CreateKey(HKEY_CURRENT_USER, L"Software\\ROBO_KNIGHT_TEST", KEY_READ | KEY_WRITE);

WR_WriteString(hKey, L"TestString", L"Hello from ROBO-KNIGHT REG!");
WR_WriteDword(hKey, L"TestNumber", 777);

wchar_t buffer[256];
WR_ReadString(hKey, L"TestString", buffer, 256);

DWORD num;
WR_ReadDword(hKey, L"TestNumber", &num);

WR_CloseKey(hKey);
```

---

## 🧪 **Expected Output**

```
EXE DIR: H:\robo-knight\ROBO_KNIGHT_REG\ROBO_KNIGHT_REG_SDK\
GF LOADED
GF URL: HKEY_CURRENT_USER\Software\ROBO_KNIGHT_TEST
Loaded String: Hello from ROBO-KNIGHT REG!
Loaded Number: 777
```

---

## 📜 **License**

This module is part of the ROBO‑KNIGHT toolchain.  
Use, modify, and integrate freely within your project.

---
