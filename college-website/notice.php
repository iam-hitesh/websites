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
<?php
include 'header.php';
?>
    <div class="news-blog">
        <div class="search-bar">
            Search for all Notices
            <form name="search-posts" action="notices.php?search=">
                <input type="text" name="search" class="search-form" placeholder="Search for Notices here">
                <input type="submit" value="Search" class="submit-button">
            </form>
        </div>
        <?php
        $nid = mysqli_real_escape_string($connect,$_GET['no']);
        $notice_sql = "SELECT * FROM notices where id='$nid'";
        $notice_query = mysqli_query($connect,$notice_sql);
        $notice = mysqli_fetch_array($notice_query);
        ?>
        <div class="news-blog-section">
            <div class="news-blog-content">
                <h2>
                    <?php echo $notice['notice_title']; ?>
                </h2>
                <div class="author">
                    <a href="#"><?php echo $notice['notice_posted_by']; ?></a>
                    <br/>
                    <span class="news-post-time"><?php echo $notice['notice_posted']; ?></span>
                </div>
                <div class="horizontal-line"></div>
                <?php echo $notice['notice_content']; ?>
                <p><a href="<?php echo $notice['notice_attachment']; ?>">Click Here</a> to download attachment</p>
                <img src="assets/images/image2.jpeg">
            </div>
        </div>
    </div>
<?php 
include 'footer.php';
?>
</body>
</html>