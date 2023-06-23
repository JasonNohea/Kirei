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

  // function addSkill(skill) {
  //   const skillElement = document.createElement("div");
  //   skillElement.classList.add("skill");

  //   const skillText = document.createElement("span");
  //   skillText.textContent = skill;
  //   skillList.push(skill);

  //   const deleteButton = document.createElement("button");
  //   deleteButton.classList.add("delete-button");
  //   deleteButton.textContent = "x";
  //   deleteButton.addEventListener("click", () => {
  //     removeSkill(skillElement);
  //     let index = skillList.indexOf(skill);
  //     if (index != -1) {
  //       skillList.splice(index, 1);
  //     }
  //   });

  //   skillElement.appendChild(skillText);
  //   skillElement.appendChild(deleteButton);
  //   selectedSkillsContainer.appendChild(skillElement);
  // }

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
