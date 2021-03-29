<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>學生系統</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

  <div class="header">
    <div class="nav_bg bg-light">
      <nav class="navbar navbar-light bg-light justify-content-center">
        <i class="fas fa-book-reader m-2"></i>
        <span class="navbar-brand mb-0 h1">學校管理系統</span>
        <i class="fas fa-home"></i>
        <a href="index.html" class="m-2 text-dark">Home</a>
        <a href="class.php" class="m-2 text-dark">場地租用</a>
        <a href="" class="m-2 text-dark">器材租用</a>
        <a href="" class="m-2 text-dark">教室查詢</a>
        <a href="" class="m-2 text-dark">器材查詢</a>

        <?php if (empty($_SESSION)) : ?>
          <a href="login.php" class="m-2 text-dark">登入/註冊</a>
        <?php endif ?>
        <?php if (isset($_SESSION['account'])) : ?>
          <a href="#" class="m-2 text-dark"><?php echo $account; ?></a>
          <a href="logout.php" class="m-2 text-dark"><?php echo '登出'; ?></a>
        <?php endif ?>
        <?php if ($_SESSION['position'] == 2) : ?>
          <a href="edit.php" class="m-2 text-dark">編輯</a>
        <?php endif ?>
      </nav>
    </div>
  </div>





  <script src="https://kit.fontawesome.com/40854dc1c9.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>