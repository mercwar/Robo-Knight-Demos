# **AVIS Project Batch Scanner**  
### *Recursive Directory Scanner • Log Generator • AVIS‑Law Compliant Artifact*

The **AVIS Project Batch Scanner** is a deterministic, fault‑tolerant Windows batch utility designed to recursively scan a project directory, enumerate all files and folders, and generate a structured log suitable for downstream tools such as the **AOAI Viewer**, **inventory processors**, or any AVIS‑law governed subsystem.

This scanner is engineered for stability, clarity, and ceremonial purity: every run produces a clean, predictable log that other tools can rely on without ambiguity.

---

## **📌 Features**

- **Recursive directory scanning** with stable ordering  
- **Directory + file classification** (`[DIR]` / `[FILE]`)  
- **Full absolute path output** for machine parsing  
- **Optional removable‑drive detection**  
- **Automatic LOG folder creation**  
- **Timestamped log files**  
- **Crash‑resistant execution** (no partial logs)  
- **Compatible with AOAI Viewer** and other AVIS‑law tools  
- **Zero external dependencies** — pure Windows batch  

---

## **📂 Output Format**

A typical scan log looks like:

```
AVIS PROJECT SCAN LOG
Generated: Tue 01/27/2026 15:00:33.45
Removable Drive: H:
Project Root: H:\htdocs\robo-knight\AI_AVIS_FVS\
App Root: AVIS_PRJ_SCAN\

[DIR] H:\htdocs\robo-knight\AI_AVIS_FVS\SOURCE
[DIR] H:\htdocs\robo-knight\AI_AVIS_FVS\INCLUDE
[FILE] H:\htdocs\robo-knight\AI_AVIS_FVS\AI_AVIS_FVS.ppj
[FILE] H:\htdocs\robo-knight\AI_AVIS_FVS\AVIS_LOG.txt
...
```

This format is intentionally simple and machine‑friendly:

- **`[DIR]`** entries represent folders  
- **`[FILE]`** entries represent files  
- Paths are **absolute**, using Windows `\` separators  
- No indentation, no recursion markers, no noise  

---

## **🧠 How It Works**

1. The scanner determines the **project root** (either fixed or via removable‑drive detection).  
2. It ensures a **LOG** directory exists inside the scanner folder.  
3. It generates a timestamped log file.  
4. It walks the directory tree recursively.  
5. It prints each directory and file in deterministic order.  
6. It closes cleanly, guaranteeing a complete log.

This log becomes the **source of truth** for any tool that needs to know:

- what files exist  
- where they are  
- how they are structured  

No guessing. No scanning in JS. No server. No ambiguity.

---

## **🚀 Usage**

Place the scanner folder inside your project:

```
<ProjectRoot>\
    AVIS_PRJ_SCAN\
        AVIS_PRJ_SCAN.BAT
        AVIS_PRJ_SCAN.INI
        LOG\
```

Run:

```
AVIS_PRJ_SCAN.BAT
```

A new log file will appear in:

```
AVIS_PRJ_SCAN\LOG\
```

This log can then be consumed by:

- **AOAI Viewer**  
- **inventory processors**  
- **index builders**  
- **manifest generators**  
- any AVIS‑law governed tool  

---

## **⚙️ Configuration**

The scanner reads settings from:

```
AVIS_PRJ_SCAN\AVIS_PRJ_SCAN.INI
```

Typical fields include:

```
SCAN_ROOT=H:\htdocs\robo-knight\AI_AVIS_FVS\
IGNORE_DIR=OLD_DISK
```

You can:

- change the root directory  
- exclude folders  
- toggle removable‑drive detection  

---

## **🛡 Stability & Safety**

The scanner is built to avoid:

- partial logs  
- broken recursion  
- infinite loops  
- missing directories  
- unclosed file handles  

Every run is atomic and produces a complete, parse‑ready artifact.

---

## **📜 AVIS‑Law Compliance**

This scanner follows AVIS principles:

- **Deterministic output**  
- **Explicit artifact identity**  
- **No hidden behavior**  
- **Machine‑readable structure**  
- **Zero ambiguity**  

It is designed to be a foundational tool in any AVIS‑governed ecosystem.

---

## **📦 Integration With AOAI Viewer**

The AOAI Viewer expects:

- a log file in `AVIS_PRJ_SCAN\LOG\`  
- `[FILE]` entries with absolute paths  
- consistent formatting  

The viewer then converts these into relative paths and loads them as chapters or documents.

This scanner is the **canonical source** for that file list.

---

## **🧩 Future Enhancements**

- JSON or XML export  
- Hashing for integrity checks  
- Multi‑root scanning  
- Incremental scan mode  
- Error log channel  
