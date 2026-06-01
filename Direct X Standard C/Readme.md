<!-- BEGIN_SEED MERCG_AVIS_STANDARDC_2026
GUID: AVIS-STANDARDC-APPS-2026
TITLE: Standard C Apps – RoboNight Series
AUTHOR: CGPT / MercWar
DATE: 2026-01-14
-->
<a target="_self" title="CLICK HERE to ENTER the GATEWAY FREE!" href="https://mercwar.github.io/Constellation/index.html">
<img 
    src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Gallery/refs/heads/main/Version%207/image_d2a07390.png" 
    alt="Mercwar Constellation" 
    style="width:100%; height:auto;"
/>
</a>

---
# 💻 RoboNight – Standard C Apps + AVIS

<div align="center" style="margin-top:20px; margin-bottom:25px;">
  <img src="https://raw.githubusercontent.com/mercwar/Cyborg/main/Mercwar_Robo-Knight/Copilot_20260114_015204.png"
       alt="Standard C App Demo"
       style="max-width:70%; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.35);">
</div>

The **Standard C Apps** directory is the **core engine layer** of the entire  
**Robo‑Knight / Cyborg** project.  
Every executable in this folder is a **pure C89/C90 Win32 application** that  
defines the runtime rules, rendering model, and AVIS modular structure used  
across the Robo‑Knight series.

These programs are not demos — they are the **Cyborg Core**, the foundation  
from which all Robo‑Knight applications evolve.

---

# 🧠 How the Standard C Apps Fit Into the Robo‑Knight Universe

The Robo‑Knight series is built in **layers**, and this directory is **Layer 0**.

### **Layer 0 — Standard C Apps (THIS DIRECTORY)**  
The base operating layer of the Cyborg universe.  
Defines:
- window creation  
- DX11 stubbed rendering  
- GDI fallback  
- global runtime model  
- AVIS module structure  
- update loops  
- input stubs  
- file‑level intent and AI‑readable architecture  

### **Layer 1 — Screen Saver Demo**  
Uses the Standard C runtime as its engine.

### **Layer 2 — Robo‑Knight Character Demos**  
Cinematic scenes built on the same runtime.

### **Layer 3 — Future Games / Tools / AI‑Generated Apps**  
All inherit the rules defined here.

**This directory is the “Cyborg OS” of the Robo‑Knight universe.**

---

# 📌 Overview of the Standard C Runtime

- Modular AVIS apps in pure Standard C  
- DX11 stubs for safe compilation  
- XInput stubs & frame update logic  
- GDI fallback for visible output  
- AVIS annotation for AI parsing  
- Cross‑file global management  
- Zero dependencies beyond Win32 + Pelles C  

These apps are intentionally minimal so that **AI tools and humans** can  
understand the architecture instantly.

---

# 📁 File Structure (Explained)

| File | Description |
|------|-------------|
| `avis_main.c` | Main window, WinMain, message loop |
| `dx_helpers.c` | DX11 helper & rendering stubs |
| `avis_xinput_stub.c` | Controller input placeholder |
| `game_logic.c` | Frame update logic |
| `include/*.h` | Clean headers for AVIS modules |
| `output/` | Compiled objects & binaries |

Each file is a **module** in the AVIS system — self‑contained, readable,  
and designed for AI‑assisted reasoning.

---

# ⚙️ Features of the Standard C Runtime

- 💻 **Full AVIS modular structure**  
- 🖌️ **DX11 stubbed rendering** (future‑proof)  
- 🌍 **GDI fallback** (always visible)  
- 🔧 **Debuggable MessageBox frames**  
- 🧠 **Global runtime model** (intentional, not accidental)  
- 🧩 **AI‑friendly comments**  

This is the **canonical template** for all Robo‑Knight applications.

---

# 🚀 Build Instructions

1. Install **Pelles C IDE**  
2. Open the Standard C Apps directory  
3. Build all `.c` files → produces `mercwar.exe`  
4. Run the executable  
5. Observe the AVIS runtime in action  

---

<div align="center" style="margin-top:25px; margin-bottom:25px;">
  <img src="https://github.com/mercwar/Robo-Knight-Demos/blob/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/SHINE/Copilot_20260116_021843.png"
       alt="Standard C App Demo 2"
       style="max-width:70%; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.35);">
</div>

# 🧭 The Goal of the Cyborg Project

The **Cyborg repository** is not just a collection of demos —  
it is a **living technical universe** where:

- every subsystem is modular  
- every module is readable  
- every file is AI‑parsable  
- every app is a teaching artifact  
- every demo is a stepping stone to a full game engine  

The Standard C Apps directory is the **root of that universe**.

Everything else —  
screen savers, demos, characters, worlds, tools —  
all grow from the **Cyborg Core** defined here.

---

# 📜 License

📝 MIT or your preferred license.
--
🛡️ ROBO‑KNIGHT Standard C DirectX Pure API I/O. Use, modify, and integrate freely within your project.

---

## 🤖 Author

FFF Demonizer — architect of forging ceremonial Pure API DirectX I/O in Standard C with precision.

---

© 2026 CGPT / MercWar  
**RoboNight Series – AVIS Compatible**

<!-- END_SEED MERCG_AVIS_STANDARDC_2026 -->
