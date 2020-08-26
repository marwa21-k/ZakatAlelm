<?php
$title = 'الصفحة الرئيسية';
require_once 'template/header.php'; 
?>
    <div class="intro">
        <img src="images/Asset3.png" alt="">

        <div>
            <h3>زكاة العلم</h3><br>
            <h4>“العلم يبني بيوتاً لا عماد لها و الجهل يهدم بيوت العز و الشرف”
                <br> احمد شوقي<br> لأن من واجباتنا الاجتماعيه نشر العلم و المعرفة انشأنا مبادرة زكاة العلم<br> وهي منصه غير ربحية تختص بعرض الكتب المقروءة وتبادلها بين افراد المجتمع
                <br> لكي لا تهجر الكتب ولأن زكاة العلم نشره
            </h4>
        </div>
    </div>

    <div class="newbooks">

        <h3>أُضيف مؤخرا</h3>

        <div class="lastposts">

            <!--   قائمة الكتب اللي تجي من الداتا بيس حسب اخر بوستات بالداتا-->

            <?php
        require_once 'config/databaseBookData.php';
        displaylastbooks();
        ?>

        </div>

    </div>
    <?php require_once 'template/footer.php'; ?>