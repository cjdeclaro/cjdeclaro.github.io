var inputIds = [
  "item1c",
  "chknone",
  "item3b",
  "item4b",
  "item5a"
];

var inputTextValues = [
  {
    "name": "item7a",
    "value": "jdoe@gmail.com"
  },
  {
    "name": "item7b",
    "value": "09877778888"
  },
  {
    "name": "item8a",
    "value": "Jane Air"
  },
  {
    "name": "item8b",
    "value": "09876543211"
  },
  {
    "name": "item8c",
    "value": "jair@gmail.com"
  }
]

for (var i = 0; i < inputIds.length; i++) {
  document.getElementById(inputIds[i]).click();
}

for (var i = 0; i < inputTextValues.length; i++) {
  document.getElementsByName(inputTextValues[i].name)[0].value = inputTextValues[i].value;
}

document.getElementsByName("item8c")[1].value = "Parent";

document.getElementsByName("btnSave")[0].click();