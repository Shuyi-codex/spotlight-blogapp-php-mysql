<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>
<?php
  error_reporting(0);

	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<?php include('includes/head_section.php'); ?>
<title> <?php echo $post['title'] ?> | SpotLight</title>
</head>

	<!-- Navbar -->
	<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->
	<main>
    <section class="container">
      <div class="article-content">
        <!-- Page wrapper -->
        <div class="posts">
          <?php if ($post['published'] == false): ?>
          <div class="post-content">
            <div class="post-title">
              <h3>
                Sorry... This post has not been published yet!
              </h3>
            </div>
          </div>
          <?php else: ?>
          <div class="post-content">
            <div class="post-image">
              <div>
                <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" alt="">
              </div>
            </div>
            <div class="post-title">
              <h3>
                <?php echo $post['title']; ?>
              </h3>
            </div>
            <div class="post-info flex-row">
              <span><i class="fas fa-calendar-alt"><span><?php  echo date("F j, Y ", strtotime($post["created_at"])); ?></i>
              <br><br> <i class="fas fa-user"></i><?php ?></span>
            </div>
            <div class="post-body">
              <p>
                <?php echo html_entity_decode($post['body']); ?>
              </p>
            </div>
          </div>
          <?php endif ?>
        </div>
        <aside class="sidebar">
          <div class="category">
            <h2>Categories</h2>
            <ul class="category-list">
              <?php foreach ($topics as $topic): ?>
              <li class="list-items"><a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
                        <?php echo $topic['name']; ?></a> 
              </li>
              <?php endforeach ?>
            </ul>
          </div>
        </aside>
      </div>
    </section>



  <?php include( ROOT_PATH . '/includes/footer.php'); ?>