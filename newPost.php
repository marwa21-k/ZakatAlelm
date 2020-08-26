<?php
$title = 'إنشاء إعلان';
require_once 'template/header.php';
require "config/databaseConnection.php";
require_once 'includes/uploader.php';
?>
    <div class="wrapper">
    <div class="wrap">

<div class="container" style="width: 500px">
    <form style="width:500px" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="bookName">اسم الكتاب</label>
            <input type="text" name="bookName" value="<?php if(isset($_SESSION['new_post_form']['book_name'])) echo $bookName ?>" class="form-control" placeholder="اسم الكتاب" required>
            <span class="text-danger"><?php echo $nameError ?></span>
        </div>

        <div class="form-group">
            <label for="city">المدينة</label>
            <?php require 'includes/cities.php'; ?>
        </div>

        <div class="form-group">
            <label for="releaseDate"> سنة الإصدار</label>
            <input type="number" min="0" max="<?php echo date('Y'); ?>" name="releaseDate" value="<?php if(isset($_SESSION['new_post_form']['book_release_date'])) echo $releaseDate ?>" class="form-control" placeholder="سنة اصدار الكتاب" >
        </div>

        <div class="form-group">
            <label for="picture">صورة للكتاب</label>
            <input type="file" name="picture" >
            <span class="text-danger"><?php echo $pictureError ?></span>
        </div> 

        <div class="form-group">
            <label for="description">وصف الكتاب</label>
            <textarea type="text" name="description" class="form-control" placeholder="وصف الكتاب" ><?php if(isset($_SESSION['new_post_form']['book_description'])) echo $bookDescription ?></textarea>
            <span class="text-danger"><?php echo $desciptionError ?></span>
        </div>

        <button class="btn btn-primary">تم</button>

    </form>
</div>
</div>
<?php require_once 'template/footer.php'; ?>
