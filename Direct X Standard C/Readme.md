<!-- BEGIN_SEED MERCG_AVIS_STANDARDC_2026
GUID: AVIS-STANDARDC-APPS-2026
TITLE: Standard C Apps – RoboNight Series
AUTHOR: CGPT / MercWar
DATE: 2026-01-14
-->

# 💻 RoboNight – Standard C Apps + AVIS

This part of the RoboNight series includes all **Standard C applications** with **AVIS-style modular structure**.

<div style="text-align:center;">
  <img src="https://raw.githubusercontent.com/mercwar/Cyborg/main/Mercwar_Robo-Knight/Copilot_20260114_015204.png" 
       alt="Standard C App Demo" style="max-width:70%; border-radius:12px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
</div>

---

## 📌 Overview
- DX11 stubs, screen saver logic, XInput stubs  
- GDI fallback for visible output  
- AVIS annotation for AI parsing  
- Cross-file global management

---

## 📁 File Structure

| File | Description |
|------|-------------|
| `dx_helpers.c` | Helper functions for rendering & setup |
| `game_logic.c` | Stub for frame updates |
| `avis_main.c` | Main window loop |
| `avis_xinput_stub.c` | Controller input stub |
| `include/*.h` | Header files |
| `output/` | Compiled binaries |

---

## 🚀 Build Instructions
1. Install [Pelles C IDE](https://www.smorgasbordet.com/pellesc/) 🛠️  
2. Open project folder  
3. Build all `.c` sources into `mercwar.exe` ✅  
4. Run to see stubbed frames & demo functionality 🎮  

---

© 2026 CGPT / MercWar

<!-- END_SEED MERCG_AVIS_STANDARDC_2026 -->
