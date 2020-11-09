<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.html');
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>HOME</title>
    <link rel="stylesheet" href="test.css">
  </head>

  <body>
  <div id="div1">
    <h1 id="judul">HELLO <?php echo $_SESSION['username']; ?></h1>    
    <form action="logout.php" method="post">
          <button type="submit" name="logout" class="button">LOGOUT</button>
      </div>
    </form> 
</body>
</html>
