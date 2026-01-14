<!-- BEGIN_SEED MERCG_AVIS_STANDARDC_2026
GUID: AVIS-STANDARDC-APPS-2026
TITLE: Standard C Apps – RoboNight Series
AUTHOR: CGPT / MercWar
DATE: 2026-01-14
-->

# 💻 RoboNight – Standard C Apps + AVIS

<div style="text-align:center; margin-bottom:16px;">
  <img src="https://raw.githubusercontent.com/mercwar/Cyborg/main/Mercwar_Robo-Knight/tita-mech.png" 
       alt="Standard C App Demo" style="max-width:70%; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.3);">
</div>

This part of the RoboNight series includes all **Standard C applications** built with the **AVIS modular structure**, DX11 stubs, and AI‑friendly annotations.

---

## 📌 Overview
- Modular AVIS apps in Standard C  
- DX11 stubs for safe compilation  
- XInput stubs & frame update logic  
- GDI fallback for visible output  
- AVIS annotation for AI parsing  
- Cross‑file global management  

---

## 📁 File Structure

| File | Description |
|------|-------------|
| `dx_helpers.c` | DX11 helper & rendering functions |
| `game_logic.c` | Stub frame updates |
| `avis_main.c` | Main window & loop |
| `avis_xinput_stub.c` | Controller input stub |
| `include/*.h` | Header files |
| `output/` | Compiled objects & binaries |

---

## ⚙️ Features
- 💻 Full AVIS modular app structure  
- 🖌️ Stubbed rendering (DX11 + GDI fallback)  
- 🌍 Cross‑file globals for AI compatibility  
- 🔧 Debuggable MessageBox frames  

---

## 🚀 Build Instructions
1. Install [Pelles C IDE](https://www.smorgasbordet.com/pellesc/) 🛠️  
2. Open project folder  
3. Build all `.c` sources into `mercwar.exe`  
4. Run to view stubbed frames & demo functionality 🎮  

---

<div style="text-align:center; margin-top:20px;">
  <img src="https://raw.githubusercontent.com/mercwar/Cyborg/main/Mercwar_Robo-Knight/Copilot_20260114_015204.png" 
       alt="Standard C App Demo 2" style="max-width:70%; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.3);">
</div>

© 2026 CGPT / MercWar

<!-- END_SEED MERCG_AVIS_STANDARDC_2026 -->
