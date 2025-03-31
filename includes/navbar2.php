






<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">PrepStack</a>
      <button class="navbar-toggler" style="border:none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalog.php">Explore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.html">Register</a>
          </li>
          <li class="nav-item"> <input type="search" placeholder="    Search" class="search" name="search" id="search"></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" ><img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/user--v1.png" alt="user--v1"/>
          <?php echo @$_SESSION['username'];?></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="dashboard.php">Dashboard</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
         </ul>
      </div>
    </div>
  </nav>
  <br><br>