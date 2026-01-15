<!-- BEGIN_SEED MERCG_AVIS_SCREENSAVER_2026
GUID: AVIS-SCREEN-SAVER-2026
TITLE: AVIS Screen Saver & Game Template Demo – RoboNight
AUTHOR: CGPT / MercWar
DATE: 2026-01-14
-->

# 🚀 AVIS Screen Saver & Game Template Demo – RoboNight

**DirectX 11 in Standard C** — minimal DX11/GDI screen saver with AVIS-style modular structure and AI-parsable comments. 🖥️🎮

---

## 🖼️ Primary Demo Frame

<div align="center" style="margin-bottom:20px;">
  <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/Copilot_20260114_020131.png" width="80%" alt="Main Demo Frame" style="border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.3);">
</div>

---

## 🧍 Realistic Full-Body Frames

<div align="center" style="margin-bottom:20px;">
  <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/realistic%20full-body%20.png" width="30%" alt="Full Body 1" style="margin:10px; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.3);">
  <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/realistic%20full-body12%20.png" width="30%" alt="Full Body 2" style="margin:10px; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.3);">
  <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/realistic%20full-body55%20.png" width="30%" alt="Full Body 3" style="margin:10px; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.3);">
</div>

---

## 📌 Overview

This demo includes:

- 🪟 Win32 window creation & message loop  
- ⚡ DX11 stubbed rendering (init/shutdown)  
- 🌌 GDI fallback for visible output  
- 🔁 Game-ready update loop  
- 🤖 AVIS-style comments for AI/Copilot parsing  
- 🧠 Global context: `g_hDC`, `g_screenWidth`, `g_screenHeight`  

---

## 📁 File Structure

| File | Description |
|------|-------------|
| `avis_main.c` | Entry point & message loop |
| `avis_screen_saver.c` | Screen saver logic & frame updates |
| `dx11_stub.c` | DX11 stubbed rendering |
| `avis_xinput_stub.c` | Controller input stub |
| `game_logic.c` | Game update logic |
| `include/*.h` | Headers for DX, screen saver, XInput |
| `output/` | Compiled objects & executables |

---

## ⚙️ Features

- 💻 AVIS screen saver template  
- 🖌️ Stubbed rendering (DX11 or GDI fallback)  
- 🔧 Optional debug frames (MessageBox)  
- 🌍 Cross-file global management  
- 🧠 AI/Copilot-friendly comments  

---

## 🚀 Build Instructions

1. Install [Pelles C IDE](https://www.smorgasbordet.com/pellesc/)  
2. Open the project folder  
3. Build `mercwar.exe` ✅  
4. Run to view the screen saver demo 🎮  

---

## ⚠️ Notes

- Windows 10/11 recommended  
- DirectX headers optional (stubs included)  
- Designed for 1024×768 display and GitHub dark theme  

---

© 2026 CGPT / MercWar

<!-- END_SEED MERCG_AVIS_SCREENSAVER_2026 -->
