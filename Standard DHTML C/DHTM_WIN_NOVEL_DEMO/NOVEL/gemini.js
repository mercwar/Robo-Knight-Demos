document.addEventListener("DOMContentLoaded", () => {
    const textframe = document.getElementById("text-frame");
    const lastPageDiv = document.getElementById("last-page");
    const pagesReadDiv = document.getElementById("pages-read");

    // 1. CREATE HIDDEN FILE INPUT
    const filePicker = document.createElement('input');
    filePicker.type = 'file';
    filePicker.webkitdirectory = true; // Allows folder selection
    filePicker.style.display = 'none';
    document.body.appendChild(filePicker);

    // 2. UI BUTTON FOR UPLOAD
    const uploadBtn = document.createElement('button');
    uploadBtn.id = "upload-btn";
    uploadBtn.innerText = "[ LOAD LOCAL DIRECTORY ]";
    uploadBtn.style = "background:#111; border:1px solid #facc15; color:#facc15; padding:8px 20px; cursor:pointer; margin: 10px auto; display:block;";
    document.querySelector('header').appendChild(uploadBtn);

    uploadBtn.onclick = () => filePicker.click();

    // 3. HANDLE FILE SELECTION
    filePicker.onchange = (e) => {
        const files = e.target.files;
        if (!files.length) return;

        // Clear existing list and create new one
        let listContainer = document.getElementById('novel-list');
        if (!listContainer) {
            listContainer = document.createElement('div');
            listContainer.id = 'novel-list';
            listContainer.style = "padding:20px; background:#111; border-top:1px solid #333; overflow-y:auto; max-height:200px;";
            document.body.insertBefore(listContainer, textframe);
        }
        listContainer.innerHTML = '<h3 style="color:#facc15; margin-top:0;">[ SELECT A PAGE ]</h3>';

        // Filter for common text/novel files
        const validExtensions = ['.html', '.txt', '.pdf'];
        Array.from(files).forEach(file => {
            const ext = file.name.slice((file.name.lastIndexOf(".") - 1 >>> 0) + 2);
            if (validExtensions.includes(`.${ext.toLowerCase()}`)) {
                const item = document.createElement('div');
                item.style = "padding:5px; cursor:pointer; border-bottom:1px solid #222; color:#ccc;";
                item.innerText = `> ${file.webkitRelativePath || file.name}`;
                
                item.onclick = () => {
                    // Create a local blob URL to bypass "Failed to Fetch"
                    const fileUrl = URL.createObjectURL(file);
                    textframe.src = fileUrl;
                    
                    // Update UI
                    lastPageDiv.innerHTML = `[ LAST_PAGE: <b style="color:#facc15;">${file.name}</b> ]`;
                    window.location.hash = `page_read=${encodeURIComponent(file.name)}`;
                };

                // Hover effects
                item.onmouseover = () => item.style.color = "#facc15";
                item.onmouseout = () => item.style.color = "#ccc";
                
                listContainer.appendChild(item);
            }
        });

        pagesReadDiv.innerText = `[ Files Found: ${files.length} ]`;
    };
});
