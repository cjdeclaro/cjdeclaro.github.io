<?php
  $theme = $_GET['theme'];
  $type = $_GET['type'];
?>

<html>
  <head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
      body{
        margin: 0;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }

      .toolbar{
        background-color: #6b3531;
        height: 100px;
        text-align: end;
        flex-direction: row;
        display: flex;
        justify-content: flex-end;
      }

      .toolbarButtons {
        margin: 25px;
        color: white;
      }

      .banner {
        height: 400px;
        background-color: #fffac6;
        text-align: center;
      }

      .title {
        color: #6b3531;
        font-size: 53px;
        font-weight: bold;
        padding: 120px;
      }
    </style>

    <script>
      var englishWords = {
        "home": "Home",
        "about": "About",
        "contact": "Contact",
        "messages": "Messages",
        "pup": "Polytechnic University of the Philippines"
      }

      var japaneseWords = {
        "home": "家",
        "about": "だいたい",
        "contact": "コンタクト",
        "messages": "メッセージ",
        "pup": "フィリピン工科大学"
      }

      var filipinoWords = {
        "home": "Panimula",
        "about": "Tungkol",
        "contact": "Kontak",
        "messages": "Mensahe",
        "pup": "Politeknikong Unibersidad ng Pilipinas"
      }

      function translate(word, language){
        switch(language){
          case "English":
            return englishWords[word];
            break;
          case "Filipino":
            return filipinoWords[word];
            break;
          case "Japanese":
            return japaneseWords[word];
            break;
        }
      }
    </script>
  </head>
  <body <?php if($theme == "dark"){echo 'style="background-color: black"';} ?>>
    <div class="toolbar">
      <div class="toolbarButtons" id="home">
      </div>
      <div class="toolbarButtons" id="about">
      </div>
      <div class="toolbarButtons" id="contact">
      </div>
      <div class="toolbarButtons" id="messages">
      </div>
      <?php
        if($type=="admin"){
          echo '
          <div class="toolbarButtons">
            ADMIN CONTROLS
          </div>
          ';
        }
      ?>
      <div class="toolbarButtons">
        <select id="language" onchange="resetWords(value)">
          <option>English</option>
          <option>Filipino</option>
          <option>Japanese</option>
        </select>
      </div>
    </div>

    <div class="banner">
      <div class="title" id="puptitle">
      </div>
    </div>

    <script>
      function resetWords(language){
        document.getElementById("home").innerHTML = translate("home", language);
        document.getElementById("about").innerHTML = translate("about", language);
        document.getElementById("contact").innerHTML = translate("contact", language);
        document.getElementById("messages").innerHTML = translate("messages", language);
        document.getElementById("puptitle").innerHTML = translate("pup", language);
      }

      resetWords("English");
    </script>
  </body>
</html>