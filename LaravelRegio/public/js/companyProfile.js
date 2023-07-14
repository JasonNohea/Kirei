function showContent(buttonId, contentId) {
    var container = document.getElementById("container");
    var content = document.getElementsByClassName("content");
    var button = document.getElementById(buttonId);
    var buttons = document.getElementsByClassName("profile-option");

    // Remove the 'pressed' class from all buttons
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove("pressed");
    }

    // Add the 'pressed' class to the clicked button
    button.classList.add("pressed");

    // Hide all content
    for (var i = 0; i < content.length; i++) {
        content[i].classList.remove("show");
    }

    // Show the selected content
    var selectedContent = document.getElementById(contentId);
    selectedContent.classList.add("show");

    // Adjust the container height
    container.style.height = selectedContent.offsetHeight + "px";
}
