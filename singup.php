<?php
include("fun.php");
function sumbit()
{
  if (empty($_POST['email'])) {
    $GLOBALS['error_message'] = '請輸入信箱';
    return;
  }

  if (empty($_POST['account'])) {
    $GLOBALS['error_message'] = '請輸入帳號';
    return;
  }

  if (empty($_POST['password'])) {
    $GLOBALS['error_message'] = '請輸入密碼';
    return;
  }
  if (empty($_POST['name'])) {
    $GLOBALS['error_message'] = '請輸入姓名';
    return;
  }
  if (empty($_POST['department'])) {
    $GLOBALS['error_message'] = '請輸入系所';
    return;
  }
  if (($_POST['position']) == 0) {
    $GLOBALS['error_message'] = '請輸入職位';
    return;
  }

  $account = $_POST['account'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $department = $_POST['department'];
  $position = $_POST['position'];
  $name = $_POST['name'];
  include("mysql_connect.php");

  // var_dump($conn);
  if (!$conn) {
    exit('連接失敗');
  }
  $sql = "insert into users values (null,'$name','$account','$password','$email',$department,$position);";
  $query = mysqli_query($conn, $sql);
  if (empty($query)) {
    $GLOBALS['error_message'] = '註冊失敗，請檢察填入資料';
    return;
  }
  // header('Location: main.php');
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
    <h1 class="display-3 text-center">註冊系統</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label for="email">信箱</label>
        <input type="text" class="form-control" id="accound" placeholder="請輸入信箱" name="email">
      </div>
      <div class="form-group">
        <label for="account">帳號</label>
        <input type="text" class="form-control" id="accound" placeholder="請輸入學號" name="account">
      </div>
      <div class="form-group">
        <label for="password">密碼</label>
        <input type="text" class="form-control" id="password" name="password">
      </div>
      <div class="form-group">
        <label for="name">姓名</label>
        <input type="text" class="form-control" id="accound" placeholder="請輸入姓名" name="name">
      </div>
      <select name="department" class="custom-select mb-3" id="inputGroupSelect01">
        <option selected value="0">選擇系所</option>
        <option value="1">財金系</option>
        <option value="2">時尚系</option>
        <option value="3">資工系</option>
        <option value="4">資傳系</option>
        <option value="5">社工系</option>
        <option value="6">生醫系</option>
      </select>
      <select name="position" class="custom-select mb-3" id="inputGroupSelect01">
        <option selected value="0">選擇職業</option>
        <option value="1">學生</option>
        <option value="2">教師</option>
      </select>
      <button>送出</button>

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