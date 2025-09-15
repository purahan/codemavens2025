<?php
  include('includes/functions.php');
  page_header();
  nav_bar(true);
  if(isset($_GET['id']) && isset($_SESSION['id'])) {
    $conn->query("INSERT INTO `user_experiments` (user_id, experiment_id, type, created_on) VALUES ('".$_SESSION['id']."', '".$_GET['id']."', 'E', NOW())");
  }
?>
    <iframe src="https://scratch.mit.edu/projects/<?=$_GET['expo']?>/embed" style="margin-top: 80px; height: 86vh;" allowtransparency="true" width="100%" frameborder="0" scrolling="no" allowfullscreen></iframe>
<?php page_footer(false); ?>