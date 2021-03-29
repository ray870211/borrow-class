<?php
session_start();
include("fun.php");
$name = $_GET['name'];
$date = $_GET['date'];

include("mysql_connect.php");
$sql = "select `id`,`name`,`date`,`time` from class where name='$name' and date='{$date}';";
$query = mysqli_query($conn, $sql);



function sumbit()
{
  include("mysql_connect.php");
  $time = $_POST['time'];
  $sql = "insert into `class` values(null,'{$_GET['name']}','{$_GET['date']}','{$time}','{$_SESSION['account']}');";
  $query = mysqli_query($conn, $sql);
  $item = mysqli_fetch_assoc($query);
  $GLOBALS['error_message'] = '借用成功';
  // header('Location : index.php ');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  sumbit();
}




?>


<!DOCTYPE html>
<html lang="en">

<?php html_head(); ?>

<body>

  <?php navBar(); ?>

  <div class="container mt-5">
    <form action="<?php echo $_SERVER['PHP_SELF'] . '?name=' . $name . '&date=' . $date  ?> " method="POST">
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <td></td>
            <td><?php echo $_GET['name'] ?></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>8:00-10:00</th>
            <?php
            $sql = "select `id`,`class`,`date`,`time` from class where class='$name' and date='{$date}' and `time`='8';";
            $query = mysqli_query($conn, $sql);
            $item = mysqli_fetch_assoc($query);
            if ($item['time'] == NULL) {
              echo '<td><input type="radio" name="time" value="8"> </td>';
            } else {
              echo '<td>已被借用</td>';
            }
            ?>
          </tr>
          <tr>
            <th>10:00-12:00</th>
            <?php
            $sql = "select `id`,`class`,`date`,`time` from class where class='$name' and date='{$date}' and `time`='10';";
            $query = mysqli_query($conn, $sql);
            $item = mysqli_fetch_assoc($query);
            if ($item['time'] == NULL) {
              echo '<td><input type="radio" name="time" value="10"> </td>';
            } else {
              echo '<td>已被借用</td>';
            }
            ?>
          </tr>
          <tr>
            <th>12:00-14:00</th>
            <?php
            $sql = "select `id`,`class`,`date`,`time` from class where class='$name' and date='{$date}' and `time`='12';";
            $query = mysqli_query($conn, $sql);
            $item = mysqli_fetch_assoc($query);
            if ($item['time'] == NULL) {
              echo '<td><input type="radio" name="time" value="12"> </td>';
            } else {
              echo '<td>已被借用</td>';
            }
            ?>
          </tr>
          <tr>
            <th>14:00-16:00</th>
            <?php
            $sql = "select `id`,`class`,`date`,`time` from class where class='$name' and date='{$date}' and `time`='14';";
            $query = mysqli_query($conn, $sql);
            $item = mysqli_fetch_assoc($query);
            if ($item['time'] == NULL) {
              echo '<td><input type="radio" name="time" value="14"> </td>';
            } else {
              echo '<td>已被借用</td>';
            }
            ?>
          </tr>
          <tr>
            <th>16:00-18:00</th>
            <?php
            $sql = "select `id`,`class`,`date`,`time` from class where class='$name' and date='{$date}' and `time`='16';";
            $query = mysqli_query($conn, $sql);
            $item = mysqli_fetch_assoc($query);
            if ($item['time'] == NULL) {
              echo '<td><input type="radio" name="time" value="16"> </td>';
            } else {
              echo '<td>已被借用</td>';
            }
            ?>
          </tr>
          <tr>
            <th>18:00-20:00</th>
            <?php
            $sql = "select `id`,`class`,`date`,`time` from class where class='$name' and date='{$date}' and `time`='18';";
            $query = mysqli_query($conn, $sql);
            $item = mysqli_fetch_assoc($query);
            if ($item['time'] == NULL) {
              echo '<td><input type="radio" name="time" value="18"> </td>';
            } else {
              echo '<td>已被借用</td>';
            }
            ?>
          </tr>
          <tr>
            <th>20:00-22:00</th>
            <?php
            $sql = "select `id`,`class`,`date`,`time` from class where class='$name' and date='{$date}' and `time`='20';";
            $query = mysqli_query($conn, $sql);
            $item = mysqli_fetch_assoc($query);
            if ($item['time'] == NULL) {
              echo '<td><input type="radio" name="time" value="20"> </td>';
            } else {
              echo '<td>已被借用</td>';
            }

            ?>
          </tr>
        </tbody>
      </table>
      <button>送出</button>
    </form>
    <?php if (isset($error_message)) : ?>
      <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
        <strong>提示</strong> <?php echo $error_message; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif ?>
  </div>



  <?php script(); ?>
</body>

</html>