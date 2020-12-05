<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="title icon" href="images/title-img.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <title>LSPD - Client</title>
</head>
        <?php
session_start();







if (isset($_SESSION['id'])) {
    echo '

<body>'; include 'inc/header.php'; echo '
  <!------Tables--->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-10 ml-auto">
          <div class="row">
            <div class="col-12">
              <h3>.</h3>
              <div class="text-center">
                <h1 class="title-header">Create Complaints</h1>
                <div class="btn-create"></div>
                <center>
                <form action="add-plainte-post.php" method="post">
                <h5>Reason</h5>
                <input type="text" class="form-control py-2 mb-3" name="reason" placeholder="Reason" style="width: 350px;" required>
                <h5>Victim</h5>
                <input type="text" class="form-control py-2 mb-3" name="victim" placeholder="Victim" style="width: 350px;" required>
                <h5>Witnesses</h5>
                <input type="text" class="form-control py-2 mb-3" name="witnesses" placeholder="Witnesses" style="width: 350px;" required>
                <h5>Suspect</h5>
                <input type="text" class="form-control py-2 mb-3" name="suspect" placeholder="Suspect" style="width: 350px;" required>
                <h5>Date</h5>
                <input type="date" class="form-control py-2 mb-3" name="date" style="width: 350px;" required>
                <h5>Hours</h5>
                <input type="time" class="form-control py-2 mb-3" name="hours" style="width: 350px;" required>
                <input type="submit" class="btn btn-success" value="Create">
                <div class="btn-create"></div>
                </form>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!------End of Activities & Posts--->
  '; include 'inc/footer.php'; echo '





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
  </body>';
  } else {
      header("Location: ../index.php");
  }
  ?> </html>
