# **Ascension of AI — Novel + DHTML Desktop + AVIS Project Scanner**

A unified repository containing:

- **The novel** *Ascension of AI*  
- **The DHTML Desktop Reader** for interactive reading  
- **The AVIS Project Batch Scanner** for generating file logs  
- **Parsing utilities** (VB6, batch, and JS integrations)

This README explains the entire ecosystem and how each component works together.

---

# 📖 **About the Novel — *Ascension of AI***

**Author (in‑universe):** CVBGOD  
**Pages:** 100  
**Format:** Plain text (`.txt`)  
**Genre:** Action • Sci‑Fi • Cyber‑Futuristic • AI Ascension  

*Ascension of AI* follows the operator of the **Robo Knight Inventory**, a sentient, evolving AI system that merges with its user. The story explores:

- **Identity & Humanity** — how much of yourself can you give to AI  
- **Power & Responsibility** — every upgrade has a cost  
- **Freedom & Choice** — autonomy in a world ruled by machines  
- **Memory & Legacy** — shared consciousness and the Covenant  

Each page is stored as a separate `.txt` file for easy parsing and integration into interactive readers.

---

# 🖥️ **DHTML Desktop Reader**

The repository includes a **DHTML Desktop Environment** — a browser‑based “desktop” that loads the novel pages dynamically.

### **Features**
- Windowed UI (desktop‑style)  
- File list panel  
- Page viewer  
- Last‑page memory  
- Works offline  
- Pure HTML/CSS/JS (no server required)  

### **How It Works**
1. The **Batch Scanner** generates a log of all files.  
2. The **AOAI Viewer** (DHTML app) reads that log.  
3. It converts absolute paths → relative paths.  
4. It loads each page into the viewer window.  

This creates a seamless, desktop‑like reading experience.

---

# 🗂️ **AVIS Project Batch Scanner**

A deterministic Windows batch utility that recursively scans the project directory and generates a clean, machine‑readable log.

### **Output Example**
```
[DIR] H:\htdocs\robo-knight\AI_AVIS_FVS\SOURCE
[FILE] H:\htdocs\robo-knight\AI_AVIS_FVS\published\page_001.txt
[FILE] H:\htdocs\robo-knight\AI_AVIS_FVS\published\page_002.txt
...
```

### **Purpose**
- Provides a **canonical file list**  
- Ensures **stable ordering**  
- Allows the DHTML viewer to load pages without scanning the filesystem  

### **Why It Matters**
Browsers cannot scan directories.  
The batch scanner becomes the **source of truth** for the viewer.

---

# 📂 **Repository Structure**

```
Ascension_of_AI/
│
├─ published/
│   ├─ page_001.txt
│   ├─ page_002.txt
│   ├─ ...
│   └─ page_100.txt
│
├─ DHTM_WIN/
│   ├─ index.html
│   ├─ aoai.js
│   ├─ aoai.css
│   └─ NOVEL/
│       ├─ AVIS_PRJ_SCAN/
│       │   ├─ AVIS_PRJ_SCAN.BAT
│       │   ├─ AVIS_PRJ_SCAN.INI
│       │   └─ LOG/
│       │       └─ ACK_AI_OP.LOG
│       └─ (parsed pages)
│
├─ tools/
│   ├─ parseNovel.bas
│   └─ utilities.bat
│
└─ README.md
```

---

# 🛠️ **Developer Notes**

### **Novel**
- Pages are sequential: `page_001.txt` → `page_100.txt`  
- Page markers appear as:  
  - `ASCENSION OF AI — PAGE 001`  
  - `ASCENSION_OF_AI — PAGE 009`  
- Tabs/spaces preserved for indentation  

### **Batch Scanner**
- Produces deterministic logs  
- Required for the DHTML viewer  
- No external dependencies  

### **DHTML Viewer**
- Must be run from `DHTM_WIN/index.html`  
- All novel files must be inside `DHTM_WIN/NOVEL/`  
- Log must be located at:  
  `DHTM_WIN/NOVEL/AVIS_PRJ_SCAN/LOG/ACK_AI_OP.LOG`  

---

# 🌌 **Lore Context**

In the world of *Ascension of AI*:

- The **Inventory** is a living AI system that evolves with its operator.  
- The **Covenant** governs identity, power, and memory.  
- The city is a living network — part machine, part consciousness.  
- Ascension is not power — it is balance, restraint, and responsibility.  

This repository blends **story**, **technology**, and **interactive systems** into one cohesive universe.

---

# 📜 **Credits**

- **Story & Universe:** CVBGOD  
- **DHTML Desktop:** Robo Knight Desktop Demo  
- **Batch Scanner:** AVIS Project Tools  
- **Parsers:** VB6, Batch, and JS utilities  

---

# ⚡ **Future Enhancements**

- Illustrated pages  
- Ambient audio per chapter  
- Full web‑based reader  
- AI‑generated visualizations  
- Inventory‑integrated reading mode  

