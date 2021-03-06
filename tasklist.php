<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View most recent tasks - Task Book</title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i" rel="stylesheet">
  <link rel="stylesheet" href="style-main.css" type="text/css" media="all">

  <script src="JS/libs/jquery-2.1.3.min.js" defer></script>
  <script src="JS/libs/jso.js" defer></script>

  <script src="JS/oauth.js" defer></script>
	<script src="JS/loadlist.ajax.js" defer></script>

</head>

<body>
<?php 

require('init.php');
?>
<?php 




?>
  <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

  <header class="masthead">
    <div class="site-header">
      <div class="site-branding">
        <p class="site-title">Task Book</p>
      </div><!-- .site-title -->
      <div class="logout">
        <button id="logout" class="logout-button">Log out</button>
      </div><!-- .logout -->
    </div><!-- .centered -->
  </header><!-- .masthead -->

  <nav class="site-nav">
    <ul>
      <li>
        <a href="tasklist.html">All tasks</a>
      </li>
      <li>
        <a href="newtask.html">New task</a>
      </li>
      <li>
        <a href="review.html">Review</a>
      </li>
    </ul>
  </nav><!-- .site-nav -->

  <main class="main-area">

    <nav class="task-list">
			<ul>
      <?php 
        foreach ($data['result'] as  $value ){
         
          $name =  $value['title']['rendered'];
          $content = $value['content']['rendered'];
      ?>
      <li>
        <a href="tasklist.html">
        <h2><?php echo $name ?></h2>
        <p><?php echo $content; ?></p>
        </a>
      </li>
   
      </li>
    <?php } ?>
			</ul>
    </nav><!-- .task-list -->

  </main><!-- .main-area -->


  <footer class="footer">
    <section class="footer-widgets centered">
      <div class="footer-title">Task Book</div>
    </section><!-- .footer-widgets -->
  </footer><!-- .footer -->


</body>

</html>
