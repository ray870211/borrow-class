<?php
session_start();
include("fun.php");


function sumbit()
{
    $date = $_POST['date'];
    $GLOBALS['date'] = $date;
    include("mysql_connect.php");
    $sql = "SELECT * FROM class where `date`='{$date}'";
    $query = mysqli_query($conn, $sql);
    $item = mysqli_fetch_assoc($query);
    // var_dump($item);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    sumbit();
}
function show($time, $class)
{
    include("mysql_connect.php");
    $sql = "SELECT * FROM class where `date`='{$_POST['date']}' and `time`={$time} and `class`='{$class}'";
    $query = mysqli_query($conn, $sql);
    $item = mysqli_fetch_assoc($query);

    if ($item['user'] == NULL) {
        echo '<td>未使用</td>';
    } else {
        echo '<td>' . $item['user'] . '</td>';
    }
}
function show_table()
{
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
                                    <li class="my-2">選擇日期後再選擇要查詢的教室</li>
                                    <li class="my-2">頁面呈現:用bootstrap的tablist</li>
                                    <li class="my-2">呈現功能:表單送出後post接受到後會從資料庫讀取資料，然後呈現</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?> " method="POST">
                <label for="date"></label>
                <input type="date" name="date" value="<?php echo $date ?>">
                <button>送出</button>
            </form>
        </div>
        <?php if ($date != NULL) : ?>
            <div class="row mt-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">H</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">I</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">M</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <td>/</td>
                                    <td>H001</td>
                                    <td>H002</td>
                                    <td>H003</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">8:00~10:00</th>
                                    <?php show(8, 'H001') ?>
                                    <?php show(8, 'H002') ?>
                                    <?php show(8, 'H003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">10:00~12:00</th>
                                    <?php show(10, 'H001') ?>
                                    <?php show(10, 'H002') ?>
                                    <?php show(10, 'H003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">12:00~14:00</th>
                                    <?php show(12, 'H001') ?>
                                    <?php show(12, 'H002') ?>
                                    <?php show(12, 'H003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">14:00~16:00</th>
                                    <?php show(14, 'H001') ?>
                                    <?php show(14, 'H002') ?>
                                    <?php show(14, 'H003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">16:00~18:00</th>
                                    <?php show(16, 'H001') ?>
                                    <?php show(16, 'H002') ?>
                                    <?php show(16, 'H003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">18:00~20:00</th>
                                    <?php show(18, 'H001') ?>
                                    <?php show(18, 'H002') ?>
                                    <?php show(18, 'H003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">20:00~22:00</th>
                                    <?php show(20, 'H001') ?>
                                    <?php show(20, 'H002') ?>
                                    <?php show(20, 'H003') ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <td>/</td>
                                    <td>H001</td>
                                    <td>H002</td>
                                    <td>H003</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">8:00~10:00</th>
                                    <?php show(8, 'I001') ?>
                                    <?php show(8, 'I002') ?>
                                    <?php show(8, 'I003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">10:00~12:00</th>
                                    <?php show(10, 'I001') ?>
                                    <?php show(10, 'I002') ?>
                                    <?php show(10, 'I003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">12:00~14:00</th>
                                    <?php show(12, 'I001') ?>
                                    <?php show(12, 'I002') ?>
                                    <?php show(12, 'I003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">14:00~16:00</th>
                                    <?php show(14, 'I001') ?>
                                    <?php show(14, 'I002') ?>
                                    <?php show(14, 'I003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">16:00~18:00</th>
                                    <?php show(16, 'I001') ?>
                                    <?php show(16, 'I002') ?>
                                    <?php show(16, 'I003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">18:00~20:00</th>
                                    <?php show(18, 'I001') ?>
                                    <?php show(18, 'I002') ?>
                                    <?php show(18, 'I003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">20:00~22:00</th>
                                    <?php show(20, 'I001') ?>
                                    <?php show(20, 'I002') ?>
                                    <?php show(20, 'I003') ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <td>/</td>
                                    <td>I001</td>
                                    <td>H002</td>
                                    <td>H003</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">8:00~10:00</th>
                                    <?php show(8, 'M001') ?>
                                    <?php show(8, 'M002') ?>
                                    <?php show(8, 'M003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">10:00~12:00</th>
                                    <?php show(10, 'M001') ?>
                                    <?php show(10, 'M002') ?>
                                    <?php show(10, 'M003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">12:00~14:00</th>
                                    <?php show(12, 'M001') ?>
                                    <?php show(12, 'M002') ?>
                                    <?php show(12, 'M003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">14:00~16:00</th>
                                    <?php show(14, 'M001') ?>
                                    <?php show(14, 'M002') ?>
                                    <?php show(14, 'M003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">16:00~18:00</th>
                                    <?php show(16, 'M001') ?>
                                    <?php show(16, 'M002') ?>
                                    <?php show(16, 'M003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">18:00~20:00</th>
                                    <?php show(18, 'M001') ?>
                                    <?php show(18, 'M002') ?>
                                    <?php show(18, 'M003') ?>
                                </tr>
                                <tr>
                                    <th scope="row">20:00~22:00</th>
                                    <?php show(20, 'M001') ?>
                                    <?php show(20, 'M002') ?>
                                    <?php show(20, 'M003') ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </div>



    <?php script(); ?>
</body>

</html>