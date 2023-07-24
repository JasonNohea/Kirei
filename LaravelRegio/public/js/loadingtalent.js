// Wait for the animation duration to finish, then hide loading and show content
setTimeout(function () {
    document.getElementById("loading").style.display = "none";
    document.getElementById("content-talent").style.display = "block";
}, 10000); // Duration of the animation in milliseconds (1.5 seconds)
