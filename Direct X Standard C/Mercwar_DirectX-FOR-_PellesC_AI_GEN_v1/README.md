<!-- BEGIN_SEED MERCG_AVIS_SCREENSAVER_2026
GUID: AVIS-SCREEN-SAVER-2026
TITLE: AVIS Screen Saver & Game Template Demo – RoboNight
AUTHOR: CGPT / MercWar
DATE: 2026-01-14
-->
# 🤖   RoboNight
# ⚙️ AVIS Screen Saver & Game Template Demo 

<div align="center" style="margin-bottom:25px;">
  <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/Copilot_20260114_211954.png"
       alt="RoboNight Greeting Hero"
       style="max-width:85%; border-radius:14px; box-shadow:0 6px 20px rgba(0,0,0,0.45);">
</div>



**DirectX 11 in Standard C** — a minimal, real Win32 application that demonstrates  
how to structure a screen saver or game-style render loop using **DX11 stubs,  
GDI fallback rendering, and AVIS modular design**.

This project is intentionally designed to compile cleanly in **Pelles C**,  
without requiring DirectX SDK headers, while still preserving a **future-proof DX11 interface**.

---

## 🧠 What This Project Is (and Is Not)

### ✅ This project IS:
- A **real Win32 executable**, not a mockup  
- A **screen saver–style render loop** that can become a game  
- A **Standard C (C89/C90-compatible)** codebase  
- A **DX11-ready architecture** with safe stubs  
- An **AVIS-compliant AI-readable project**  
- A **teaching artifact** for humans *and* Copilot  

### ❌ This project is NOT:
- A C++ engine  
- A COM-heavy DirectX tutorial  
- A framework that hides Windows internals  
- A prebuilt engine with magic macros  
- Dependent on external SDKs to compile  

---

## 🖼️ Primary Demo Frame

<div align="center" style="margin-bottom:20px;">
  <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/Copilot_20260114_020131.png"
       width="80%"
       alt="Main Demo Frame"
       style="border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.3);">
</div>

This frame represents the **visual target** of the screen saver demo.  
Even when DX11 is stubbed, the application **still renders visible output**  
using GDI so developers always see *something working*.

---

## 🧍 Realistic Full-Body Reference Frames

These images are **intentional reference anchors**, not decoration.

They serve three purposes:
1. Visual grounding for future RoboNight scenes  
2. Stable context for AI/Copilot reasoning  
3. Aesthetic continuity across the series  

### 📸 Full‑Body AI GEN Table

| Ai Gen | Ai Gen | Ai Gen |
|--------|---------|---------|
| <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/realistic%20full-body12%20.png" width="95%" style="border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.3);"> | <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/Photorealistic%20depic%20Copy.png" width="95%" style="border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.3);"> | <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/realistic%20full-body%20.png" width="95%" style="border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.3);"> |

---

## 📌 High-Level Overview

This demo implements the **canonical AVIS runtime loop**:

1. Create a Win32 window  
2. Acquire a device context (`HDC`)  
3. Initialize DX11 **stubs**  
4. Enter a frame-based loop  
5. Update logic  
6. Render (DX11 or GDI)  
7. Shutdown cleanly  

### Core concepts demonstrated:
- 🪟 Win32 window creation & message pump  
- ⚡ DX11 initialization/shutdown *without headers*  
- 🌌 GDI fallback rendering for guaranteed visuals  
- 🔁 Game-style update loop  
- 🤖 AVIS comments designed for AI parsing  
- 🧠 Shared global runtime state  

---

## 🧠 Global Runtime Model (Important)

This project uses **explicit, shared globals** on purpose.  
These are **not accidental** — they form the *runtime contract* between modules.

int   g_screenWidth;
int   g_screenHeight;
HDC   g_hDC;
void* g_pDXDevice;
void* g_pDXContext;
void* g_pDXSwapChain;

Code

### Why globals?

- Win32 APIs expect shared state  
- DX11 will eventually require shared device/context  
- Screen savers and games are inherently global-state driven  
- AVIS favors clarity over abstraction tricks  

---

## 📁 File Structure (Explained)

| File | Purpose |
|------|---------|
| `avis_main.c` | Owns WinMain, window class, message loop, and shutdown |
| `avis_screen_saver.c` | Visual logic, motion, GDI rendering |
| `dx11_stub.c` | DX11 interface layer (safe, header-free) |
| `avis_xinput_stub.c` | Controller input placeholder |
| `game_logic.c` | Game update hook (future expansion) |
| `include/*.h` | Clean, minimal headers |
| `output/` | Object files and final executable |

---

## ⚙️ Rendering Model

### DX11 Path (Stubbed)
- Functions exist  
- Interfaces are stable  
- No DirectX headers required  
- Safe to replace later with real DX11 code  

### GDI Fallback Path
- Always available  
- Always visible  
- Ensures the app never runs “black screen only”  
- Ideal for debugging and CI environments  

---

## 🔁 Main Loop Behavior

Each frame performs:

- Message pump (`PeekMessage`)  
- Game update (`UpdateGame`)  
- Input update (`AvisXInput_Update`)  
- Screen saver update  
- Render frame  
- Small sleep (~16ms)  

This mirrors real game engines, without hiding the logic.

---

## 🧩 AVIS Comment System

Every source file follows AVIS rules:

- File-level intent  
- Module tags (#main, #screensaver, #dx11)  
- Function-level purpose comments  

This allows:

- Copilot to infer architecture  
- AI tools to map responsibility  
- Humans to onboard instantly  

---

## 🚀 Build Instructions

1. Install **Pelles C IDE**  
   https://www.smorgasbordet.com/pellesc/  
2. Open the project folder  
3. Build the project → output: `mercwar.exe`  
4. Run the executable — you will see a visible window immediately  

---

## ⚠️ Known Behaviors (Not Bugs)

- Window may capture focus like a screen saver  
- Use **Alt+Tab** to switch away  
- White background during early frames is normal  
- MessageBox debug calls can pause execution intentionally  

---

## 🧭 Where This Leads

This demo is the foundation for:

- RoboNight screen savers  
- Full DX11 games  
- AI-generated C projects  
- Educational Win32/DX references  

🦾 Nothing here is throwaway code.

---
<div align="center" style="margin-bottom:20px;">
  <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/team_.jpg"
       width="100%"
       alt="Main Demo Frame"
       style="border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.3);">
</div>
© 2026 CGPT / MercWar  
**RoboNight Series – AVIS Compatible**

<!-- END_SEED MERCG_AVIS_SCREENSAVER_2026 -->
