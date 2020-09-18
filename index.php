<?php require_once('config.php') ?>

<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>

<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<!-- ---------------- Include Head Section --------------- -->
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>

	<title>SpotLight | Home </title>
</head>
<body>

	<!-- include navbar -->
  <?php include( ROOT_PATH . '/includes/navbar.php') ?>

  <!-- banner -->
  <?php include( ROOT_PATH . '/includes/banner.php') ?>
    <h2 class="content-title">TOP STORIES</h2>
    <hr>
	  <!-- Blog Carousel -->
    <section>
      <div class="blog">
        <div class="container">
          <div class="owl-carousel owl-theme blog-post">
            <?php foreach($posts as $post): ?>
            <div class="blog-content">
              <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" alt="">
              <div class="blog-title">
                <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                  <h3><?php echo $post['title'] ?></h3>
                  <!-- <span class="read_more">Read more...</span> -->
                </a>
                <?php if (isset($post['topic']['name'])): ?>
                <button class="btn btn-blog">
                  <a 
                    href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
                    class="btn category">
                    <?php echo $post['topic']['name'] ?>
                  </a>
                </button>
                <?php endif ?>
                <span><?php  echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="owl-navigation">
            <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
            <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
          </div>
        </div>  
      </div>    
    </section>  
  </main>
		<!-- // Page content -->

		<!-- footer -->
		<?php include( ROOT_PATH . '/includes/footer.php') ?>
		<!-- // footer -->

  
</body>
</html>