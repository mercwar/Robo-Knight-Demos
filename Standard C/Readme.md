# **BEGIN / SEED Demo — README.md**  
### *Install Project Scanner from the [repo](https://github.com/mercwar/AVIS-AI-INI-DIR-MK-SCAN)*

---

## **Overview**

This demo showcases the **BEGIN subsystem** and its **SEED execution model** inside the AVIS Project Scanner environment.  
It is designed as a minimal, self‑contained example that demonstrates:

- How a SEED is defined  
- How BEGIN loads and executes SEED logic  
- How the AVIS directory structure supports SEED, KB, and EXEC blocks  
- How the scanner synchronizes the SEED environment from the INI file  
- How MASTER and SEED interact inside the BEGIN runtime

This demo is intentionally simple, explicit, and fully transparent so developers — and AI systems — can understand the structure without reverse‑engineering the full AVIS runtime.

---

## **What BEGIN Is**

`BEGIN` is the **root execution environment** for AVIS.  
It provides:

- A unified entry point  
- A registry for SEED, MASTER, and EXEC blocks  
- A controlled memory and pointer model  
- A stable interface for KB (Knowledge Base) modules  
- A predictable, deterministic execution chain

BEGIN is the “first breath” of an AVIS program.

---

## **What SEED Is**

A **SEED** is the smallest executable unit in BEGIN.  
It contains:

- Identity  
- Version  
- Execution entry point  
- Optional KB modules  
- Optional EXEC blocks  
- Optional MASTER integration

In this demo, SEED is kept intentionally small so you can see the structure clearly.

---

## **Directory Structure (Auto‑Generated)**

The AVIS Project Scanner creates the following directories for the BEGIN/SEED demo:

```
INCLUDE/
    BEGIN/
        BEGIN.H
        KB/
            ERR.H
            MSGBOX.H
            REG_MSGBOX.H
        SEED/
            SEED.H
            SEED_EXEC.H
            KB/
                REG_SEED.H
        MASTER/
            MASTER.H
            MASTER_COMBINE.H
            MASTER_CONVERT.H

SOURCE/
    BEGIN/
        BEGIN.C
        BEGIN_EXE.C
        KB/
            DISPATCH.C
            ERR.C
            MSGBOX.C
            REG_MSGBOX.C
        SEED/
            SEED.C
            SEED_EXE.C
            SEED_EXEC.C
            KB/
                REG_SEED.C
        MASTER/
            MASTER.C
            MASTER_COMBINE.C
            MASTER_CONVERT.C

output/
    BEGIN.obj
    SEED.obj
    SEED_EXE.obj
    SEED_EXEC.obj
    MSGBOX.obj
    REG_SEED.obj
```

All of this is created automatically from your INI file’s `[DIR]` section.

---

## **How the Demo Works**

### **1. The Scanner Loads the INI**
The scanner reads:

```
[DIR]
DIR_SEED_INCLUDE=...
DIR_SEED_SOURCE=...
DIR_SEED_KB_INCLUDE=...
DIR_SEED_KB_SOURCE=...
```

It creates the directories and exports the paths.

---

### **2. BEGIN Loads the SEED**
BEGIN loads:

- `SEED.H` (identity)
- `SEED_EXEC.H` (execution interface)
- `REG_SEED.H` (KB registry)

---

### **3. SEED Executes**
The SEED demo performs:

- A simple identity print  
- A KB lookup  
- A message dispatch  
- A return to BEGIN  

This is the smallest possible BEGIN/SEED cycle.

---

## **SEED Demo Flow**

```
BEGIN → LOAD SEED → INIT KB → EXEC SEED → RETURN → BEGIN EXIT
```

This is the canonical AVIS execution chain.

---

## **Files of Interest**

### **SEED.H**
Defines the SEED identity:

```c
typedef struct _SEED_ {
    const char *NAME;
    const char *VERSION;
} SEED_;
```

### **SEED.C**
Implements the SEED identity.

### **SEED_EXE.C**
Implements the SEED execution entry point.

### **SEED_EXEC.C**
Implements the SEED EXEC block.

### **REG_SEED.C**
Registers SEED KB modules.

---

## **Building the Demo**

The demo builds automatically when you run:

```
AVIS_PRJ_SCAN_EXEC.BAT
```

This triggers:

- Directory sync  
- Config load  
- BEGIN compile  
- SEED compile  
- MASTER compile  
- Link  
- Log output  

---

## **Running the Demo**

After building, run:

```
AI_AVIS_FVS.exe
```

You will see:

- BEGIN initialization  
- SEED identity  
- SEED execution  
- KB dispatch  
- Return to BEGIN  

---

## **Purpose of This Demo**

This demo exists to:

- Teach the BEGIN/SEED structure  
- Provide a minimal reproducible example  
- Allow AI systems to learn the AVIS layout  
- Provide a safe sandbox for experimenting with SEED logic  
- Serve as a template for new SEED modules  


