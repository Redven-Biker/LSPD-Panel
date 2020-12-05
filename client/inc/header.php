
 
<!------Navbar---------->
  <nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
      <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
      <div class="container-fluid">
        <div class="row">

          <!------Sidebar---------->
          <div class=" col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
            <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">LSPD PANEL</a>
            <div class="bottom-border pb-3">
              <a class="text-white">Hello <b><?php echo $_SESSION['username']; ?><b>
            </div>
            <ul class="navbar-nav flex-column mt-4">
              <li class="nav-item"><a href="index.php" class="nav-link text-white p-2 mb-2 current"><i class="fas fa-newspaper text-light fa-lg mr-3"></i>News</a></li>
              <li class="nav-item"><a href="contravention.php" class="nav-link text-white p-2 mb-2 current"><i class="fas fa-copy text-light fa-lg mr-3"></i>Ticket</a></li>
              <li class="nav-item"><a href="avis-recherche.php" class="nav-link text-white p-2 mb-2 current"><i class="fas fa-search text-light fa-lg mr-3"></i>Wanted Notice</a></li>
              <li class="nav-item"><a href="amendes.php" class="nav-link text-white p-2 mb-2 current"><i class="fas fa-money-check text-light fa-lg mr-3"></i>Fines</a></li>
              <li class="nav-item"><a href="vols-vehicules.php" class="nav-link text-white p-2 mb-2 current"><i class="fas fa-car text-light fa-lg mr-3"></i>Vehicle theft</a></li>
              <li class="nav-item"><a href="vols.php" class="nav-link text-white p-2 mb-2 current"><i class="fas fa-shopping-bag text-light fa-lg mr-3"></i>Rob</a></li>
              <li class="nav-item"><a href="plaintes.php" class="nav-link text-white p-2 mb-2 current"><i class="fas fa-gavel text-light fa-lg mr-3"></i>Complaints</a></li>
              <li class="nav-item"><a href="officiers.php" class="nav-link text-white p-2 mb-2 current"><i class="fas fa-user text-light fa-lg mr-3"></i>Officiers</a></li>
            </ul>
          </div>
          <!------End of Sidebar--->

          <!------Top nav---------->
          <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
            <div class="row align-items-center">
              <div class="col-md-4">
                <h4 class="text-light text-uppercase mb-0"></h4>
              </div>
              <div class="col-md-5">

              </div>
              <div class="col-md-3">
                <ul class="navbar-nav">
                  <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i
                        class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                </ul>
              </div>
            </div>
            <div>
            </div>
          </div>
          <!------End of Top Nav--->
        </div>
  </nav>
  <!------End of Navbar--->

  <!------Modal--->
  <div class="modal fade" id="sign-out">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Wat to sign out?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;

          </button>
        </div>
        <div class="modal-body">
          Log out
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
          <a href="inc/logout.php"><button type="button" class="btn btn-danger">Log out</button></a>
        </div>
      </div>
    </div>
  </div>
  <!------End of Modal--->