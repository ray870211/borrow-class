<?php
session_start();
include("fun.php");
if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
}
if (isset($_SESSION['position'])) {
  $position = $_SESSION['position'];
}
include("mysql_connect.php");
$sql = "select * from `users`;";
$query = mysqli_query($conn, $sql);

if (!$query) {
  exit('<h1>查詢失敗123</h1>');
}



?>

<!doctype html>
<html lang="en">

<?php html_head(); ?>


<body>
  <?php navBar(); ?>


  <div class="container justify-conten-center">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered table-dark">
          <thead>
            <tr>
              <td>name</td>
              <td>學號</td>
              <td>email</td>
              <td>password</td>
              <td>phone</td>
              <td>type</td>
              <td>借用</td>
              <td>刪除</td>
            </tr>
          </thead>
          <tbody>
            <?php while ($item = mysqli_fetch_assoc($query)) : ?>
              <tr>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['account']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['password']; ?></td>
                <td><?php echo $item['department']; ?></td>
                <td><?php echo $item['position']; ?></td>
                <form action="edit_user.php" method="POST">
                  <input type="hidden" name="account" value="<?php echo $item['account']; ?>">
                  <td><button>編輯</button></td>
                </form>
                <td><a href="#">刪除</a></td>
              </tr>
            <?php endwhile ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>







  <?php script(); ?>
</body>

</html>