<?php require 'include/head.php';
?>

            <?php if ($_SESSION['user'] == 'admin') {
    ?>
                                        <a type="button" href="action.php?act=pwr" class="btn btn-default"><i class="fa  fa-5x fa-power-off"></i><hr>Stop</a>
                                        <a type="button" href="action.php?act=restart" class="btn btn-default"><i class="fa fa-5x fa-refresh"></i><hr>Restart</a>
                                        <a type="button" href="action.php?act=server" class="btn btn-default"><i class="fa fa-5x fa-server"></i><hr>Restart</a>
                                        <a type="button" href="action.php?act=mysql" class="btn btn-default"><i class="fa fa-5x fa-database"></i><hr>Restart</a><hr>
                                        <a type="button" href="newserv.php" class="btn btn-default"><i class="fa fa-5x fa-plus"></i><hr>New Server</a>
                                        <a type="button" href="index.php?page=list#" class="btn btn-default"><i class="fa fa-5x fa-user"></i><hr>Users</a>
                                        <a type="button" href="plans.php" class="btn btn-default"><i class="fa fa-5x fa-columns" aria-hidden="true"></i><hr>Plans</a>
                                        <a type="button" href="settings.php" class="btn btn-default"><i class="fa fa-5x fa-sliders"></i><hr>Settings</a><hr>
            <?php 
} ?>
<br>
                                        <a type="button" href="FileManager.php" class="btn btn-default"><i class="fa fa-5x fa-file"></i><hr>Files</a>
                                        <a type="button" href="adminer-4.2.4.php?server=localhost" class="btn btn-default"><i class="fa fa-5x fa-database"></i><hr>Database</a>
                                        <a type="button" href="wp.php" class="btn btn-default"><i class="fa fa-5x fa-wordpress"></i><hr>Wordpress</a>
                                        <a type="button" href="phpinfo.php" class="btn btn-default"><i class="fa fa-5x fa-code"></i><hr>PHP Info</a>
                                        <a type="button" href="mobiapp.php" class="btn btn-default"><i class="fa fa-5x fa-mobile"></i><hr>App</a>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>IP</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
<?php  $mysqli = new mysqli();
    $con = mysqli_connect("$host", "$user", "$pass", "$data"); $sql = "SELECT * \n"
    ."FROM `FailedLogin` \n"
    .'LIMIT 0 , 5';

if ($result = mysqli_query($con, $sql)) {
    // Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
        echo '
    <tr><th scope="row">'.$row[0].'</th>
													<td>'.$row[1].'</td>
													<td>'.$row[2].'</td></tr>';
    }
}
    ?>
  
                                            </tbody>
                                        </table>


    
<?php require 'include/footer.php'; ?>
