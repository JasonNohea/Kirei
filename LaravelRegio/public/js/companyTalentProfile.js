function myFunction() {
    var copyText = document.getElementById("phone-num");
    var textRange = document.createRange();
    textRange.selectNode(copyText);
    var selection = window.getSelection();
    selection.removeAllRanges();
    selection.addRange(textRange);
    document.execCommand("copy");
    selection.removeAllRanges();
}
