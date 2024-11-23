<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      .mainRow{
        height: 100vh;
      }

      .card{
        height: 100%;
      }

      .chatBox {
        overflow: hidden;
      }

      .mainContainer{
        height: 100%;
      }

      .chatInput{
        width: 100%;
        height: auto;
      }

      .chatTextBox{
        border-radius: 100px 0px 0px 100px;
      }

      .btnSendChat{
        border-radius: 0px 100px 100px 0px;
      }
    </style>
  </head>
  <body data-bs-theme="light">
    <div class="container-fluid">
      <div class="row mainRow p-3">
        <div class="col-3">
          <div class="card shadow rounded-5 chatBox">
            <div class="row shadow p-3">
              <div class="ps-3">
                <span class="h4">Chats</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-9">
          <div class="card shadow rounded-5 chatBox">
            <div class="row shadow p-3">
              <div class="ps-3">
                <span class="h4">John Doe</span>
                <span class="badge rounded-pill text-bg-success">Active Now</span>
              </div>
            </div>
            <div class="d-flex align-items-end mainContainer">
              <div class="card shadow p-4 chatInput">
                <div class="d-flex">
                  <input class="form-control p-3 chatTextBox" type="text">
                  <button class="btn btn-secondary btnSendChat">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
