  <!-- ---------- Banner ---------- -->
  <main>
    <?php if (isset($_SESSION['user']['username'])) { ?>
    <div class="logged_in_info">
      <span><i class="fab fa-instagram"></i> <?php echo $_SESSION['user']['username'] ?></span>
      |
      <span><a href="logout.php">logout</a></span>
    </div>
    <?php }else{ ?>
  
    <section class="site-title welcome_msg">
      <div class="site-background" data-aos="fade-up" data-aos-delay="100">
      
        <h5 class="txt-type" data-wait="3000" data-words='["Health", 
                "Lifestyle", "Entertainment", "Technology", "Romance"]'></h5>
        
        <h2 class="more-title"><span> More</span> Premium <span> Content</span></h2>
      </div>
      
      <div class="call">
        <p>
          <a href="register.php">Register</a>
        </p>
        <p>or</p>
      </div>

      <div class="login-form">
        <form action="<?php echo BASE_URL . 'index.php'; ?>" method="post" > 
          <h3>Login</h3>
          <div style="width: auto; padding: 1px 1px;">
            <?php include(ROOT_PATH . '/includes/errors.php') ?>
          </div>
          <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
          <input type="password" name="password"  placeholder="Password"> 
          <button class="btnn" type="submit" name="login_btn">Sign in</button>
        </form>
      </div>
    </section>
    <?php } ?>
