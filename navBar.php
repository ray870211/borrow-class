<div class="header">
  <div class="nav_bg bg-light">
    <nav class="navbar navbar-light bg-light justify-content-center">
      <i class="fas fa-book-reader m-2"></i>
      <span class="navbar-brand mb-0 h1">學校管理系統</span>
      <i class="fas fa-home"></i>
      <a href="index.php" class="m-2 text-dark">Home</a>
      <a href="class.php" class="m-2 text-dark">場地租用</a>
      <a href="select_class.php" class="m-2 text-dark">教室查詢</a>

      <?php if (empty($_SESSION)) : ?>
        <a href="login.php" class="m-2 text-dark">登入/註冊</a>
      <?php endif ?>
      <?php if (isset($_SESSION['account'])) : ?>
        <a href="#" class="m-2 text-dark"><?php echo $_SESSION['account']; ?></a>
        <a href="logout.php" class="m-2 text-dark"><?php echo '登出'; ?></a>
      <?php endif ?>
      <?php if ($_SESSION['position'] == 2) : ?>
        <a href="edit.php" class="m-2 text-dark">編輯</a>
      <?php endif ?>
    </nav>
  </div>
</div>