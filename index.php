<!DOCTYPE html>
<html>
<head>
<!-- The first include should be config.php -->
<?php require_once('config.php')?>
<?php require_once(ROOT_PATH.'/includes/head_section.php') ?>
  <title>LifeBlog | Home </title>
</head>
<body>
  <!-- container - wraps whole page -->
  <div class="container">
    <!-- navbar -->
    <?php include(ROOT_PATH.'/includes/navbar.php') ?>

    <!-- banner -->
    <?php include(ROOT_PATH.'/includes/banner.php') ?>

    <!-- Page content -->
    <div class="content">
      <h2 class="content-title">Recent Articles</h2>
      <hr>
      <!-- more content still to come here ... -->
    </div>
    <!-- // Page content -->

    <!-- footer -->
    <?php include(ROOT_PATH.'/includes/footer.php') ?>
  </div>
  <!-- // container -->
</body>
</html>