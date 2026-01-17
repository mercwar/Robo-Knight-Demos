# ⚙️  -ROBO_KNIGHT_REG -

` The DLL file does it for you! `

![AI.REG](../../Direct%20X%20Standard%20C/Mercwar_Robo-Knight/SHINE/Copilot_20260116_192311.png)
### 🧩 **Pure Standard C API • Zero‑Drift Design**
---
![AI.REG](../../Direct%20X%20Standard%20C/Mercwar_Robo-Knight/ChatGPT%20Image%20Jan%2016%2C%202026%2C%2011_06_58%20AM.png)
# 🧬 Windows Registry Subsystem

## 🔥 **WIN64 Platform Specification**
| **Platform** | **Details** |
|--------------|-------------|
| 🖥️ **Architecture** | WIN64 (x86‑64) |
| ⚙️ **API Model** | Pure Standard C |
| 🔌 **Dependencies** | None — fully self‑contained |
| 🧩 **Integration** | Designed for ROBO‑KNIGHT toolchain |
| 🚀 **Behavior** | Zero‑drift, deterministic, stable |
--
A lightweight, deterministic, zero‑drift Windows Registry module engineered for the **ROBO‑KNIGHT** toolchain.

Provides a clean, minimal, and stable API for:

- 📝 Reading & writing `REG_SZ` and `REG_DWORD` values  
- 🔐 Creating & opening registry keys  
- ♻️ Safe handle lifecycle management  
- 🌐 `GF_` object integration for consistent registry path URLs  
- 🧱 Pure Standard C (Pelles C compatible)  
- 🚫 No external dependencies — fully self‑contained  

---

## 📘 **Module Summary Table**

| **Category** | **Description** |
|--------------|-----------------|
| **Purpose** | A lightweight, deterministic, zero‑drift Windows Registry access module engineered for the ROBO‑KNIGHT toolchain. |
| **Design Goals** | Clean, minimal, stable API for interacting with the Windows Registry. |
| **Core Capabilities** | Reading/writing `REG_SZ` and `REG_DWORD` values. |
| **Key Management** | Creating and opening registry keys with safe handle lifecycle management. |
| **GF_ Integration** | Consistent registry path representation using the minimal GF_ object model. |
| **Language / Toolchain** | Pure Standard C, fully compatible with Pelles C. |
| **Dependencies** | No external dependencies — fully self‑contained. |
| **Determinism** | Zero hidden allocations, no drift, predictable behavior across builds. |
| **Architecture Separation** | Clean split between DLL implementation and SDK test harness. |

---

## 🔧 **Feature Table**

| **Feature** | **Details** |
|-------------|-------------|
| Registry Key Creation | `WR_CreateKey` provides deterministic key creation. |
| Registry Key Opening | `WR_OpenKey` safely opens existing keys. |
| Write String Values | Supports writing wide‑string `REG_SZ` values. |
| Read String Values | Reads `REG_SZ` values into user buffers. |
| Write DWORD Values | Writes `REG_DWORD` values. |
| Read DWORD Values | Reads `REG_DWORD` values. |
| Handle Safety | `WR_HANDLE` ensures proper allocation and cleanup. |
| GF_ Path Support | `REG_GF_Init` and `REG_GF_ToString` provide consistent registry URL formatting. |
| SDK Separation | Example EXE demonstrates usage without polluting the DLL. |

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
  ![AI.REG](../../Direct%20X%20Standard%20C/Mercwar_Robo-Knight/ChatGPT%20Image%20Jan%2016%2C%202026%2C%2011_00_03%20AM.png)

---

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

