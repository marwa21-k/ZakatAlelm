<?php 
$title = 'الكتب المعروضة';
require_once 'template/header.php'; 
?>
<div class="wrapper">

    <div id="content">
        <div id="head">
            <div id="filters">
                <div>
                    <span>تصنيف</span>
                    <select class="form-control" name="sort">
                        <option value="0">الرجاء الاختيار</option>
                        <option value="2">تصاعدي</option>
                        <option value="3">تنازلي</option>
                    </select>
                </div>
                <div>
                    <span>ترتيب</span>
                    <select class="form-control" name="sort">
                        <option value="0">الرجاء الاختيار</option>
                        <option value="2">تصاعدي</option>
                        <option value="3">تنازلي</option>
                    </select></div>
            </div>

        </div>
        <div id="books">
            <div class="book-list">
                <?php
                require_once 'config/databaseBookData.php';
                displaybooks();
                ?>


            </div>

        </div>
    </div>









    <?php require_once 'template/footer.php'; ?>