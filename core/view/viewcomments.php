<?php 
  require_once "core/module/commentview.php";
  $view = new view();
  $result = $view -> fetch();
  $row =$result -> fetch_all(MYSQLI_ASSOC);
  if ($row > 0) { foreach ($row as $results) {
?>
<div class="comments-body">
  <div class="single-comments">
    <div class="main">
      <div class="head">
        <img src="img/author1.jpg" alt="#"/>
      </div>
      <div class="body">
        <h4><?php echo $results["firstname"]. " " .$results["lastname"];  ?></h4>
        <div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i><?php echo $results["created_at"]; ?></span></div>
        <p><?php echo $results["message"]; ?></p>
        <a href="#"><i class="fa fa-reply"></i>replay</a>
      </div>
    </div>
  </div>			
</div> <?php } } ?>

