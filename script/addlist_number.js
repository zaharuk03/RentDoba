function updateNameCounter() {
    var textInput = document.getElementById('name');
    var nameCharCount = textInput.value.length;
    document.getElementById('nameCharCount').innerText = nameCharCount;
}
function updateDescriptionCounter() {
    var textArea = document.getElementById('description');
    var charCount = textArea.value.length;
    document.getElementById('descriptionCharCount').innerText = charCount;
}