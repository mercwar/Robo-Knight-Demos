# Robo‑Knight Inventory & Asset Generation Instructions

## Project Vision
This repository contains visual assets, inventory metadata, and code related to the Robo‑Knight project. When generating or updating code, Copilot should:

- Consider the visual style and details from the linked asset:  
  https://raw.githubusercontent.com/mercwar/Robo-Knight-Demos/main/Direct%20X%20Standard%20C/Mercwar_Robo-Knight/SHINE/mercwar01_new_Technology.png
- Respect the design aesthetic: **futuristic medieval armor** with **mathematically precise visor**, **segmented faceplates**, and **CGPT SHINE PROTOCOL v1.0** reflective treatment.

## SHINE Armor Schema Registration
The following armor style is canonical and must be treated as a registered schema:

- **Schema Name:** CGPT_SHINE_PROTOCOL_V1_0  
- **Visual Traits:**
  - Photorealistic, high‑gloss reflective metal
  - Cinematic shine with physically coherent reflections
  - Subtle battle wear (scratches, dents, patina)
  - Golden lion chest emblem as primary crest
  - Segmented, mathematically aligned visor and faceplates
- **Variants:**
  - YOUNG_ROBOKNIGHT (young face geometry, same armor)
  - OLD_ROBOKNIGHT (older face geometry, same armor)
- **Helmet Rules:**
  - Default state: **visor raised**
  - Faceplates and visors must remain consistent with `mercwar01_new_Technology.png`
  - No cartoon drift, no stylization, no synthetic mutation

## Output Expectations

1. **Inventory Code (models, data tables, asset lists)**

   When generating inventory code, always include descriptive metadata for the Robo‑Knight armor:

   - **Asset Name:** e.g., `ROBO_KNIGHT_SHINE_ARMOR_V1`
   - **Armor Parts:**
     - Head
     - Visor (raisable)
     - Chin guard / lower faceplate
     - Chest (with golden lion emblem)
     - Arms
     - Legs
   - **Style Tags:**
     - `STYLE_SHINY`
     - `STYLE_REFLECTIVE`
     - `STYLE_MATH_VISOR`
     - `STYLE_FUTURISTIC_MEDIEVAL`
   - **Versioning:**
     - `ROBO_KNIGHT_YOUNG_V1`
     - `ROBO_KNIGHT_OLD_V1`

2. **Generated Images or Visuals**

   - Use `mercwar01_new_Technology.png` as a **hard reference** for:
     - Armor geometry
     - Shine behavior
     - Visor and faceplate segmentation
   - Produce only variations that:
     - Keep the **helmet visor lifted** (unless explicitly commanded otherwise)
     - Maintain **photorealistic shine** and **no cartoon drift**
     - Preserve the golden lion emblem and core armor layout

## Code & File Generation Conventions

- All generated C/C++/C# code should use consistent naming conventions.
- Include comments referencing **“Robo‑Knight armor”** and  
  **“mercwar01_new_Technology.png”** where appropriate.
- For inventory or asset loader code, include structured constants for each armor piece and style, e.g.:

  ```c
  #define ARMOR_ROBOKNIGHT_SHINE_HEAD      1
  #define ARMOR_ROBOKNIGHT_SHINE_VISOR     2
  #define ARMOR_ROBOKNIGHT_SHINE_CHINGUARD 3
  #define ARMOR_ROBOKNIGHT_SHINE_CHEST     4
  #define ARMOR_ROBOKNIGHT_SHINE_ARMS      5
  #define ARMOR_ROBOKNIGHT_SHINE_LEGS      6
  ```

- Provide skeleton functions or classes for asset registration, e.g.:

  ```c
  void RegisterArmorAsset(const char* id,
                          int headId,
                          int visorId,
                          int chinGuardId,
                          int chestId,
                          int armsId,
                          int legsId);
  ```

## Prompt Behaviour

When Copilot is invoked with Chat or Editor:

- If a prompt references **Robo‑Knight**, **inventory**, **armor**, or **SHINE**, apply these rules.
- If an image is included in the prompt, treat that image and  
  `mercwar01_new_Technology.png` as **visual law** for content and styling.
