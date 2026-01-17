# ⭐ **DLL DEMOS (Pelles C)**  
*A collection of Windows DLL demonstrations built with Pelles C*

`[Who wouldn't want a DLL file to do the things for you?]`

 ![DLL Demo](../Direct%20X%20Standard%20C/Mercwar_Robo-Knight/SHINE/Copilot_20260116_192312.png)
---

## 🧩 Overview

This repository contains a curated set of **Windows DLL demonstration projects**, all built using **Pelles C**.  
Each demo focuses on a specific DLL concept, helping you build a complete understanding of:

- Exporting functions  
- Import libraries (`.lib`)  
- Dynamic loading (`LoadLibrary` / `GetProcAddress`)  
- Struct passing between EXE and DLL  
- Memory ownership rules  
- File I/O through DLLs  
- Runtime state machines  
- Cross‑module GF objects  
- Portable EXE + DLL workflows  

These demos form the foundation for larger systems like **ROBO_KNIGHT_FIO**, **Merc‑G**, and future ceremonial subsystems.

---

## 📂 Repository Structure

```
DLL DEMOS STANDARD C/
│
├── ROBO_KNIGHT_FIO/          # RAW LIB/DLL CLASS
├── Empty/                    # empty (Win REG CLASS)
└── Empty/                    # empty (Win ODBC CLASS)
```

Each folder includes:

- `.c` and `.h` source files  
- Pelles C `.ppj` project  
- A minimal EXE demonstrating usage  
- Notes on exports, calling conventions, and memory rules  

---

## 🚀 Getting Started

### **1. Open a demo in Pelles C**

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
 ![DLL Demo](../Direct%20X%20Standard%20C/Mercwar_Robo-Knight/Copilot_20260116_024345.png)
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

# 📜 License

📝 MIT or your preferred license.
--
🛡️ ROBO‑KNIGHT toolchain. Use, modify, and integrate freely within your project.

---

## 🤖 Author

FFF Demonizer — architect of forging ceremonial DLLs with precision and law.

---

© 2026 CGPT / MercWar  
**RoboNight Series – AVIS Compatible**


---

© 2026 CGPT / MercWar  
**RoboNight Series – AVIS Compatible**

