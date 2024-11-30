var selectIDs = ["item1c", "chknone", "item3b", "item4b", "item5a"];
for (var i = 0; i < selectIDs.length; i++) {
  document.getElementById(selectIDs[i]).click();
}

var textBoxIDs = ["item7a", "item7b", "item8a", "item8b", "item8c"];
var textBoxInputs = ["test@gmail.com", "09876543211", "John Doe", "09876543211","jdoe@gmail.com", "Father"];

for (var i = 0; i < textBoxIDs.length; i++) {
  document.getElementsByName(textBoxIDs[i])[0].value=textBoxInputs[i];
}

document.getElementsByName("item8c")[1].value=textBoxInputs[5];

document.getElementsByName("btnSave")[0].click();