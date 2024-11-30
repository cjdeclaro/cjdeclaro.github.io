<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    .mainContainer {
      height: 100vh;
    }

    .mainContent {
      height: 100%;
    }

    .messageContainer {
      position: relative;
    }

    .messageBox {
      position: absolute;
      bottom: 0;
      background-color: white;
    }

    .messageBox input {
      border-radius: 100px 0px 0px 100px;
    }

    .messageBox button {
      border-radius: 0px 100px 100px 0px;
    }

    .convoContainer {
      height: 430px;
      overflow: auto;
    }

    .chatBubble {
      border-radius: 20px;
      padding: 10px 20px;
      width: fit-content;
      max-width: 80%;
      margin: 10px;
    }

    .receiver {
      background-color: lightgrey;

    }

    .sender {
      background-color: lightblue;
      margin-left: auto;
    }

    .statusInfo-sender {
      font-size: 7px;
      margin-left: auto;
      margin-right: 10px;
      width: fit-content;
    }

    .statusInfo-receiver {
      font-size: 7px;
      margin-left: 10px;
      width: fit-content;
    }
  </style>
</head>