<?php
  include('includes/functions.php');
  page_header();
  nav_bar(true);
  $sql = "SELECT id, doc FROM `experiments` WHERE id=".$_GET['id'];
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  }
?>
<div class="body"></div>
<div class="pt-5 d-flex mx-md-5 mx-0 mb-0 mb-md-5 flex-column h-100 bg-light rounded-3 shadow-lg p-4">
    <section class="pt-5 px-3">
        <?=$row["doc"]?>
    </section>
</div>