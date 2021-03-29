<?php
session_start();
include("fun.php");
function search()
{
  $date = $_POST['date'];
  $GLOBALS['date'] = $date;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  search();
}
?>
<!DOCTYPE html>
<html lang="en">

<?php html_head(); ?>

<body>

  <?php navBar(); ?>

  <div class="container mt-3">
    <div class="row">
      <div class="col my-2">
        <div class="card">
          <div class="card-header">
            <div class="card-body">
              <h4 class="card-title">教室預約系統使用說明</h4>
              <div class="text">
                <ol>
                  <li class="my-2">選擇日期後再選擇要借用的教室</li>
                  <li class="my-2">從8:00~20:00選擇，如果被借用的話則無法再借用</li>
                  <li class="my-2">日期選擇功能:用GET接受到日期與教室名稱</li>
                  <li class="my-2">加入功能:選擇後用SQL:insert加入到資料庫。</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <label for="date">選擇日期</label>
      <input type="date" name="date" value="<?php echo $date ?>">
      <button>查詢</button>
    </form>
    <?php if ($date != NULL) : ?>
      <div class="row">
        <div class="col-12">
          <table class="table table-bordered table-dark">
            <thead>
              <tr>
                <td>H棟大樓</td>
                <td>I棟大樓</td>
                <td>M棟大樓</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="borrow_class.php<?php echo '?date=' . $date . '&name=' . 'H001' ?>">H001</a></td>
                <td><a href="borrow_class.php<?php echo '?date=' . $date . '&name=' . 'I001' ?>">I001</a></td>
                <td><a href="borrow_class.php<?php echo '?date=' . $date . '&name=' . 'M001' ?>">M001</a></td>
              </tr>
              <tr>
                <td><a href="borrow_class.php<?php echo '?date=' . $date  . '&name=' . 'H002' ?>">H002</a></td>
                <td><a href="borrow_class.php<?php echo '?date=' . $date  . '&name=' . 'I002' ?>">I002</a></td>
                <td><a href="borrow_class.php<?php echo '?date=' . $date  . '&name=' . 'M002' ?>">M002</a></td>
              </tr>
              <tr>
                <td><a href="borrow_class.php<?php echo '?date=' . $date  . '&name=' . 'H003' ?>">H003</a></td>
                <td><a href="borrow_class.php<?php echo '?date=' . $date  . '&name=' . 'I003' ?>">I003</a></td>
                <td><a href="borrow_class.php<?php echo '?date=' . $date  . '&name=' . 'M003' ?>">M003</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    <?php endif ?>
  </div>
  <?php script(); ?>
</body>

</html>