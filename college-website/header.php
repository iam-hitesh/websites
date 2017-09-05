<div class="main">
    <div class="header-menu">
        <ul>
        <?php 
include 'dbconnect.php';
$mysql = "SELECT * FROM menu where menustatus='header-menu'";
$mysql_query = mysqli_query($connect,$mysql);

while($row = mysqli_fetch_array($mysql_query)){
    echo "<li><a href=\"\">".$row['menucontent']."</a></li>";
}
?>
            
        
        </ul>
    </div>
    <div class="header-logo">
        <img src="assets/images/CET.png">
    </div>
    <div id="nav" class="nav-menu">
        <ul>
        <?php 
include 'dbconnect.php';
$mysql = "SELECT * FROM menu where menustatus='nav-menu'";
$mysql_query = mysqli_query($connect,$mysql);

while($row = mysqli_fetch_array($mysql_query)){
    echo "<li><a href=\"\">".$row['menucontent']."</a></li>";
}
?>
        </ul>
    </div>