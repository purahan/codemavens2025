<?php
  include('includes/functions.php');
  page_header();
  nav_bar(true);
  if(isset($_GET['id']) && isset($_SESSION['id'])) {
    $conn->query("INSERT INTO `user_experiments` (user_id, experiment_id, type, created_on) VALUES ('".$_SESSION['id']."', '".$_GET['id']."', 'V', NOW())");
  }
?>
    <iframe width="100%" style="margin-top: 80px; height: 86vh;" src="https://www.youtube.com/embed/<?=$_GET['v']?>">
<?php page_footer(false); ?>