<?php
session_start();
include("fun.php");
function sumbit()
{

  if (empty($_POST['account'])) {
    $GLOBALS['error_message'] = '請輸入帳號哦';
    return;
  }

  if (empty($_POST['password'])) {
    $GLOBALS['error_message'] = '請輸入密碼哦';
    return;
  }
  $account = $_POST['account'];
  $password = $_POST['password'];
  $position = $_POST['position'];

  include("mysql_connect.php");

  // var_dump($conn);
  if (!$conn) {
    exit('連接失敗');
  }
  $sql = "select * from users where account ='$account';";

  $query = mysqli_query($conn, $sql);
  $item = mysqli_fetch_assoc($query);


  if ($password == $item['password']) {
    $position = $item['position'];
    $_SESSION['account'] = $account;
    $_SESSION['position'] = $position;
    header('Location: index.php');
  } else {
    $GLOBALS['error_message'] = '密碼錯誤';
    return;
  }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  sumbit();
}

?>



<!DOCTYPE html>
<html lang="en">
<?php html_head(); ?>

<body>

  <div class="container">
    <h1 class="display-3 text-center">登入系統</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label for="account">帳號</label>
        <input type="text" class="form-control" id="accound" placeholder="請輸入學號" name="account">
      </div>
      <div class="form-group">
        <label for="password">密碼</label>
        <input type="password" class="form-control" id="password" placeholder="請輸入密碼" name="password">
      </div>
      <button>送出</button>
      <a href="singup.php">點我註冊</a>
    </form>
    <?php if (isset($error_message)) : ?>
      <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
        <strong>警告</strong> <?php echo $error_message; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif ?>
  </div>
  <?php script(); ?>
</body>

</html>