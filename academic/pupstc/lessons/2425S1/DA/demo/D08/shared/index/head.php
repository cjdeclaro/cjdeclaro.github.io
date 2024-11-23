<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Misinjir | <?php echo $fullName ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    .mainRow {
      height: 100vh;
    }

    .card {
      height: 100%;
    }

    .chatBox {
      overflow: hidden;
    }

    .mainContainer {
      height: 100%;
    }

    .chatInput {
      width: 100%;
      height: auto;
    }

    .chatTextBox {
      border-radius: 100px 0px 0px 100px;
    }

    .btnSendChat {
      border-radius: 0px 100px 100px 0px;
    }

    .chatbubble-own-container {
      width: 100%;
    }

    .chatbubble-own {
      background-color: lightblue;
      padding: 10px 20px 10px 20px;
      border-radius: 20px;
      margin: 3px 10px 3px 10px;
      width: fit-content;
      margin-left: auto;
      max-width: 50%;
      color: #222222;
    }

    .chatbubble-other {
      padding: 10px 20px 10px 20px;
      border-radius: 20px;
      margin: 3px 10px 3px 10px;
      width: fit-content;
      max-width: 50%;
      border: 1px solid #222222;
      background-color: white;
      color: #222222;
    }

    .information {
      font-size: 8px;
      color: #d0d0d0;
      margin: 0px 10px 5px 10px;
    }

    .information-own {
      font-size: 8px;
      color: #d0d0d0;
      margin: 0px 10px 5px 10px;
      margin-left: auto;
      width: fit-content;
    }
  </style>
</head>