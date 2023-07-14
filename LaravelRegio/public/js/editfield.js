var originalContent = {};

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
    } else {
        // Enable edit mode
        paragraph.contentEditable = "true";
        paragraph.classList.add("editable");
        saveButton.style.display = "inline-block";
        cancelButton.style.display = "inline-block";
        originalContent[paragraphId] = paragraph.textContent;
    }
}

function saveEdit(paragraphId, editButton) {
    var paragraph = document.getElementById(paragraphId);
    var editButton = document.getElementById(editButton);
    var saveButton = editButton.nextElementSibling;
    var cancelButton = saveButton.nextElementSibling;

    var editedContent = paragraph.textContent;

    if (paragraphId === "editable-paragraph4") {
        // Apply number input validation only for the "Contact Number" field
        var numericContent = editedContent.replace(/[^0-9]/g, ""); // Remove non-numeric characters
        paragraph.textContent = numericContent;
    }

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
