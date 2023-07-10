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

function toggleEdit() {
  var numberSpan = document.getElementById("number");
  var editBtn = document.getElementById("editBtn");
  var inputWrapper = document.getElementById("inputWrapper");
  var numberInput = document.getElementById("numberInput");

  isEditing = !isEditing;
  if (isEditing) {
    editBtn.textContent = "Save";
    numberSpan.style.display = "none";
    inputWrapper.style.display = "flex";
    var currentValue = parseInt(numberSpan.textContent);
    numberInput.value = isNaN(currentValue) ? "" : currentValue;
  } else {
    editBtn.textContent = "Edit";
    numberSpan.style.display = "inline-block";
    inputWrapper.style.display = "none";
    numberSpan.textContent = numberInput.value;
  }
}
