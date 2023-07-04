function showContent(contentId, tabId) {
  var contents = document.getElementsByClassName("content");
  var tabs = document.getElementsByClassName("tab");
  var underline = document.querySelector(".underline");
  var linecon = document.querySelector(".line-container");

  for (var i = 0; i < contents.length; i++) {
    contents[i].style.display = "none";
  }
  for (var i = 0; i < tabs.length; i++) {
    tabs[i].classList.remove("active");
  }

  var selectedContent = document.getElementById(contentId);
  var selectedTab = document.getElementById(tabId);

  selectedContent.style.display = "block";
  selectedTab.classList.add("active");

  var activeTabIndex = Array.from(tabs).indexOf(selectedTab);
  underline.style.transform = `translateX(${activeTabIndex * 170}%)`;

  // Add the short-underline class when the "Done" tab is active
  if (selectedTab.id === "tab3") {
    underline.classList.add("short-line");
  } else {
    underline.classList.remove("short-line");
  }
}
