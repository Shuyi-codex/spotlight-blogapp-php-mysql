  <!-- navbar -->
	<nav class="nav">
    <div class="nav-menu flex-row">
      <div class="nav-brand">
        <a href="index.php" class="text-gray">Spot<span>Light</span></a>
      </div>
      <div class="toggle-collapse">
        <div class="toggle-icons">
          <i class="fas fa-bars"></i>
        </div>
      </div>
      <div>
        <ul class="nav-items">
          <li class="nav-link"><a class="active" href="index.php">Home</a></li>
          <li class="nav-link"><a href="#news">News</a></li>
          <li class="nav-link"><a href="<?php if ($_SESSION['user']['role'] == 
            "Admin" OR $_SESSION['user']['role'] == "Author") { echo BASE_URL . 
            'admin/dashboard.php';}?>">Dashboard</a></li>
          <li class="nav-link"><a href="#about">About</a></li>
			  </ul>
      </div>
      <div class="social">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </nav>