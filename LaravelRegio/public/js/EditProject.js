var originalContent = {};

function showButtonImg() {
    editButton;
    var editButton = $(".edit-button");
    var customButton = $(".custom-button");
    var saveButton = $(".save-button");
    var cancelButton = $(".cancel-button");
    saveButton.show();
    cancelButton.show();
    customButton.show();
    editButton.hide();
}

$(document).ready(function () {
    // Get references to the elements
    var fileInput = $("#fileInput");
    var editButton = $(".edit-button");
    var customButton = $(".custom-button");
    var imagePreview = $(".image-preview");
    var saveButton = $(".save-button");
    var cancelButton = $(".cancel-button");

    // Trigger file selection when the custom button is clicked
    customButton.on("click", function () {
        fileInput.click();
    });

    // Update the file name and display image preview when files are selected
    fileInput.on("change", function () {
        // Get selected files
        var files = this.files;

        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            if (file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var img = document.createElement("img");
                    img.src = e.target.result;
                    imagePreview.append(img);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    // Save button click event
    saveButton.on("click", function () {
        // Perform save action

        // Hide save and cancel buttons
        saveButton.hide();
        editButton.hide();
        customButton.hide();
        cancelButton.hide();

        // Show edit button
        editButton.show();
    });

    // Cancel button click event
    cancelButton.on("click", function () {
        // Remove the most recent image preview
        imagePreview.children().last().remove();
    });

    // Edit button click event
    editButton.on("click", function () {
        // Show save and cancel buttons
        saveButton.show();
        cancelButton.show();
        customButton.show();

        // Hide edit button
        editButton.hide();
    });
});

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

//grab function
var isGrabbing = false;
var startScrollLeft;
var startScrollTop;
var startX;
var startY;

function handleMouseDown(event) {
    isGrabbing = true;
    startScrollLeft = this.scrollLeft;
    startScrollTop = this.scrollTop;
    startX = event.clientX;
    startY = event.clientY;
}

function handleMouseUp() {
    isGrabbing = false;
}

function handleMouseMove(event) {
    if (isGrabbing) {
        var deltaX = event.clientX - startX;
        var deltaY = event.clientY - startY;
        this.scrollLeft = startScrollLeft - deltaX;
        this.scrollTop = startScrollTop - deltaY;
    }
}

window.addEventListener("mouseup", handleMouseUp);

window.addEventListener("load", function () {
    var grabScroll = document.querySelector(".grab-scroll");
    grabScroll.addEventListener("mousedown", handleMouseDown);
    grabScroll.addEventListener("mousemove", handleMouseMove);
});

// plus minus
jQuery(document).ready(function () {
    // This button will increment the value
    $('[data-quantity="plus"]').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr("data-field");
        // Get its current value
        var currentVal = parseInt($("input[name=" + fieldName + "]").val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $("input[name=" + fieldName + "]").val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $("input[name=" + fieldName + "]").val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus"]').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr("data-field");
        // Get its current value
        var currentVal = parseInt($("input[name=" + fieldName + "]").val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $("input[name=" + fieldName + "]").val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $("input[name=" + fieldName + "]").val(0);
        }
    });
});

var isEditing = false;
var originalValue = "";

function toggleEditQ() {
    var numberSpan = document.getElementById("number");
    var editBtn = document.getElementById("editBtnQ");
    var inputWrapper = document.getElementById("inputWrapper");
    var numberInput = document.getElementById("numberInput");
    var saveBtn = document.getElementById("saveBtnQ");
    var cancelBtn = document.getElementById("cancelBtnQ");

    isEditing = !isEditing;
    if (isEditing) {
        editBtn.style.display = "none";
        inputWrapper.style.display = "flex";
        originalValue = numberSpan.textContent;
        numberInput.value = isNaN(parseInt(originalValue)) ? "" : originalValue;
        saveBtn.style.display = "inline-block";
        cancelBtn.style.display = "inline-block";
    } else {
        editBtn.style.display = "inline-block";
        inputWrapper.style.display = "none";
        saveBtn.style.display = "none";
        cancelBtn.style.display = "none";
    }
}

function saveEditQ() {
    var numberSpan = document.getElementById("number");
    var numberInput = document.getElementById("numberInput");

    numberSpan.textContent = numberInput.value;
    toggleEditQ();
}

function cancelEditQ() {
    var numberSpan = document.getElementById("number");

    numberSpan.textContent = originalValue;
    toggleEditQ();
}

//add skill search only using javascript
var skillList = [];
document.addEventListener("DOMContentLoaded", function () {
    const recommendations = [
        "JavaScript",
        "HTML",
        "CSS",
        "Python",
        "Java",
        "Ruby",
        "C++",
        "React",
        "Angular",
        "Vue.js",
    ];

    const searchInput = document.getElementById("searchInput");
    const recommendationsContainer = document.getElementById(
        "recommendationsContainer"
    );
    const selectedSkillsContainer = document.getElementById("selectedSkills");

    function showRecommendations(query) {
        const matchedSkills = recommendations.filter((skill) =>
            skill.toLowerCase().includes(query.toLowerCase())
        );

        recommendationsContainer.innerHTML = "";

        if (matchedSkills.length > 0) {
            matchedSkills.forEach((skill) => {
                const recommendationItem = document.createElement("div");
                recommendationItem.classList.add("recommendation-item");
                recommendationItem.textContent = skill;
                recommendationItem.addEventListener("click", () => {
                    addSkill(skill);
                    searchInput.value = "";
                    clearRecommendations();
                });
                recommendationsContainer.appendChild(recommendationItem);
            });
            recommendationsContainer.style.display = "block";
        } else {
            clearRecommendations();
        }
    }

    function addSkill(skill) {
        if (!skillList.includes(skill)) {
            skillList.push(skill);
            const skillElement = document.createElement("div");
            skillElement.classList.add("skill");

            const skillText = document.createElement("span");
            skillText.textContent = skill;

            const deleteButton = document.createElement("button");
            deleteButton.classList.add("delete-button");
            deleteButton.textContent = "x";
            deleteButton.addEventListener("click", () => {
                // removeSkill(skill);
                removeSkill(skillElement);
                let index = skillList.indexOf(skill);
                if (index != -1) {
                    skillList.splice(index, 1);
                }
            });

            skillElement.appendChild(skillText);
            skillElement.appendChild(deleteButton);
            selectedSkillsContainer.appendChild(skillElement);
        }
    }

    function removeSkill(skillElement) {
        selectedSkillsContainer.removeChild(skillElement);
    }

    function clearRecommendations() {
        recommendationsContainer.innerHTML = "";
        recommendationsContainer.style.display = "none";
    }

    searchInput.addEventListener("input", (event) => {
        const query = event.target.value;
        showRecommendations(query);
    });

    document.addEventListener("click", (event) => {
        if (!event.target.matches(".search-input")) {
            clearRecommendations();
        }
    });
});

function getelement(skill) {
    const skillElement = document.createElement("div");
    skillElement.classList.add("added-skill");
    const skillText = document.createElement("span");
    skillText.textContent = skill;
    skillElement.appendChild(skillText);
    return skillElement;
}

function saveSkill() {
    var addedSkillClass = document.querySelectorAll(".added-skill");
    addedSkillClass.forEach((currentSkill) => {
        currentSkill.remove();
    });
    // var size = addedSkillClass.length;
    // for (var i = 0; i < size; i++) {
    //   addedSkillClass[i].parentNode.removeChild(addedSkillClass[i]);
    // }
    // console.log("Skill List: ", skillList);
    var savedSkill = document.getElementById("saved-skill");
    for (var i = 0; i < skillList.length; i++) {
        var elements = getelement(skillList[i]);
        savedSkill.append(elements);
    }
}

function toggleElement() {
    var button1 = document.getElementById("B-addskill1");
    var button2 = document.getElementById("B-addskill2");
    var content = document.getElementById("addskill");

    if (button1.style.display === "none") {
        button1.style.display = "block";
        button2.style.display = "none";
        content.style.display = "none";
    } else {
        button1.style.display = "none";
        button2.style.display = "block";
        content.style.display = "block";
    }
}
