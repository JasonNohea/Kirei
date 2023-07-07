var originalContent = {};

$(document).ready(function () {
  // Get references to the elements
  var fileInput = $("#fileInput");
  var customButton = $(".custom-button");
  //   var fileName = $(".file-name");
  var imagePreview = $(".image-preview");

  // Trigger file selection when the custom button is clicked
  customButton.on("click", function () {
    fileInput.click();
  });

  // Update the file name and display image preview when a file is selected
  fileInput.on("change", function () {
    var file = this.files[0];
    // var name = file ? file.name : "No file chosen";
    // fileName.text(name);
    // console.log(this.files[0]);
    // console.log(this.files[1]);
    // console.log(this.files[2]);

    for (var i = 0; i < this.files.length; i++) {
      var file = this.files[i];
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
    editButton.style.display = "inline-block";
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
