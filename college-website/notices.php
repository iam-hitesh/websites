<?php
include 'dbconnect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    include 'head.php';
    ?>
    <?php
      include 'head-style.php';
    ?>
</head>
<body>
<div class="main">
    <div class="header-menu">
        <ul>
            <li><a href="">Students</a></li>
            <li><a href="">Faculty</a></li>
            <li><a href="">Staff</a></li>
            <li><a href="">Placement Cell</a></li>
        </ul>
    </div>
    <div class="header-logo">
        <img src="assets/images/CET.png">
    </div>
    <div class="nav-menu">
        <ul>
            <li><a href="">Academics</a></li>
            <li><a href="">Admissions</a></li>
            <li><a href="#department">Departments</a></li>
            <li><a href="">Community</a></li>
        </ul>
    </div>
    <div class="notice-page">
        Latest Updates &amp; Notices
        <div class="horizontal-line"></div>
        <?php
        if(empty($search = $_GET['s'])){
            ?>
            <ul>
                <?php
                $notice_sql = "SELECT * FROM notices";
                $notice_query = mysqli_query($connect,$notice_sql);
                while($notice = mysqli_fetch_array($notice_query)) {
                    ?>
                    <li><?php echo $notice['notice_posted'] ?> by <?php echo $notice['notice_posted_by']; ?> => <a href="notices.php?no=<?php echo $notice['id']; ?>"><?php echo $notice['notice_title']; ?></a></li>
                    <?php
                }
                ?>
            </ul>
            <?php
        }
        else{
            ?>
            <ul>
                <?php
                $search = $_GET['s'];
                $search_sql = "SELECT * FROM notices where notice_title LIKE '%$search%'";
                $search_query = mysqli_query($connect,$search_sql);
                while($notice = mysqli_fetch_array($search_query)) {
                    ?>
                    <li><?php echo $notice['notice_posted'] ?> by <?php echo $notice['notice_posted_by']; ?> => <a href="notice.php?no=<?php echo $notice['id']; ?>"><?php echo $notice['notice_title']; ?></a></li>
                    <?php
                }
                ?>
            </ul>
        <?php
        }
        ?>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>