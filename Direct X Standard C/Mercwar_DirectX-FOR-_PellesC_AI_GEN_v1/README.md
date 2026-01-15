<!-- BEGIN_SEED MERCG_AVIS_SCREENSAVER_2026
GUID: AVIS-SCREEN-SAVER-2026
TITLE: AVIS Screen Saver & Game Template Demo – RoboNight
AUTHOR: CGPT / MercWar
DATE: 2026-01-14
-->

# 🚀 AVIS Screen Saver & Game Template Demo – RoboNight

**DirectX 11 in Standard C** — a minimal, real Win32 application that demonstrates
how to structure a screen saver or game-style render loop using **DX11 stubs,
GDI fallback rendering, and AVIS modular design**.

This project is intentionally designed to compile cleanly in **Pelles C**,
without requiring DirectX SDK headers, while still preserving a **future-proof
DX11 interface**.

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

<div align="center" style="margin-bottom:20px;">
  <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/realistic%20full-body%20.png" width="30%">
  <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/realistic%20full-body12%20.png" width="30%">
  <img src="https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/realistic%20full-body55%20.png" width="30%">
</div>

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

```c
int   g_screenWidth;
int   g_screenHeight;
HDC   g_hDC;
void* g_pDXDevice;
void* g_pDXContext;
void* g_pDXSwapChain;
