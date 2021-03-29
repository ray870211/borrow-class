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
$sql = "SELECT `class`,`date`,`time` from class where `user` = {$_POST['account']};";
$query = mysqli_query($conn, $sql);

if (!$query) {
    exit('<h1>使用者無借用教室</h1>');
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
                            <td>借用教室</td>
                            <td>天</td>
                            <td>時間</td>
                            <td>刪除</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($item = mysqli_fetch_assoc($query)) : ?>
                            <tr>
                                <td><?php echo $item['class']; ?></td>
                                <td><?php echo $item['date']; ?></td>
                                <td><?php echo $item['time']; ?></td>
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