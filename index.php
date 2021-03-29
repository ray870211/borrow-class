<?php
session_start();
include("fun.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php html_head(); ?>

<body>

  <?php navBar(); ?>

  <div class="contaniner mx-5">
    <div class="row">
      <div class="col my-2">
        <div class="card">
          <div class="card-header">
            <div class="card-body">
              <h4 class="card-title">教室預約系統</h4>
              <div class="text">
                <ol>
                  <li class="my-2">組員:李崑睿</li>
                  <li class="my-2">教室查詢>選擇日期>查詢，如果已被借用的教室會顯示出來</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col my-2">
        <div class="card">
          <div class="card-header">
            <div class="card-body">
              <h4 class="card-title">專題簡介</h4>
              <div class="text">
                <ol>
                  <li class="my-2">場地租用>選擇日期>租用教室</li>
                  <li class="my-2">教室查詢>選擇日期>查詢，如果已被借用的教室會顯示出來</li>
                  <li class="my-2">登入登出功能>>$_SESSION</li>
                  <li class="my-2">如果註冊登入的時候是老師，則可以編輯使用者，與教室</li>
                  <li class="my-2">時間到會自動清除資料 </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php script(); ?>
</body>

</html>