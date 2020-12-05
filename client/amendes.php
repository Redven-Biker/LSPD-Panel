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
                <h1 class="title-header">Fines</h1>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
              <table class="table table-dark table-hover text-center" id="myTable">
                <thead>
                  <tr class="text-muted">
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                ';
  include("inc/config.php");
  // Get contents of the lspd table
  $reponse = $bdd->query('SELECT * FROM fines');
  
  // Display each entry one by one
  while ($data = $reponse->fetch()) {
  ?>
                  <tr>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['category']; ?></td>
                    <td><?php echo $data['price']; ?></td>
                  </tr>
                                                <?php
    }
    $reponse->closeCursor(); // Complete query
    echo '
                </tbody>
              </table>
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

  <script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  </script>

  </body>';
  } else {
      header("Location: ../index.php");
  }
  ?> </html>
