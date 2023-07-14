function toggleEditMode(paragraphId, editButton) {
    var paragraph = document.getElementById(paragraphId);
    var editButton = document.getElementById(editButton);
    var saveButton = editButton.nextElementSibling;
    var cancelButton = saveButton.nextElementSibling;

    if (paragraph.contentEditable === "true") {
        // Disable edit mode
        paragraph.contentEditable = "false";
        paragraph.classList.remove("editable");
        saveButton.style.display = "none";
        cancelButton.style.display = "none";
        // editButton.style.display = "inline-block";
    } else {
        // Enable edit mode
        paragraph.contentEditable = "true";
        paragraph.classList.add("editable");
        saveButton.style.display = "inline-block";
        cancelButton.style.display = "inline-block";
        editButton.style.display = "none";
        originalContent[paragraphId] = paragraph.textContent;
    }
}

function saveEdit(paragraphId, editButton) {
    var paragraph = document.getElementById(paragraphId);
    var editButton = document.getElementById(editButton);
    var saveButton = editButton.nextElementSibling;
    var cancelButton = saveButton.nextElementSibling;

    var editedContent = paragraph.textContent;
    // Perform any necessary actions with the edited content

    paragraph.contentEditable = "false";
    paragraph.classList.remove("editable");
    saveButton.style.display = "none";
    cancelButton.style.display = "none";
    editButton.style.display = "inline-block";
}

function cancelEdit(paragraphId, editButton) {
    var paragraph = document.getElementById(paragraphId);
    var editButton = document.getElementById(editButton);
    var saveButton = editButton.nextElementSibling;
    var cancelButton = saveButton.nextElementSibling;

    paragraph.textContent = originalContent[paragraphId];
    paragraph.contentEditable = "false";
    paragraph.classList.remove("editable");
    saveButton.style.display = "none";
    cancelButton.style.display = "none";
    editButton.style.display = "inline-block";
}
