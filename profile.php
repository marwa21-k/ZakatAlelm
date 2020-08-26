<?php
$title = 'حسابي';
require_once 'template/header.php'; 
?>
    <div class="wrapper">

        <div class="wrap profile">

            <div class="card s">
                <div class="info">

                    <div class="header" style="margin-bottom:8px;"><i class="fi-xnsuxl-user-solid"></i><span>حسابي</span></div>

                    <div class="newPic">

                        <img src="images/user.png" width='80' height='80' class='rounded-circle'>

                        <input type="file" name="file-input" id="file-input" class="file-input__input" placeholder="Upload File">
                        <label class="file-input__label" for="file-input">رفع صورة للحساب


                    </div>

                    <div class="form-outer">
                        <form class="form">
                            <div class="form-div">
                                <input type="text" name="name" autocomplete="off" required/>
                                <label for="name" class="label"><span class="label">اسم المستخدم</span>
                                </label>
                    </div>
                    <div class="form-div">
                        <input type="email" name="email" autocomplete="off" required/>
                        <label for="email" class="label"><span class="label">الايميل</span>
                                </label>
                    </div>
                    <div class="form-div">
                        <input type="password" name="pass" autocomplete="off" required />
                        <label for="pass" class="label"><span class="label">كلمة المرور</span>
                            </div>
                    
                    <div>
                    <span class="label">الوصف</span></label></div>

                        <textarea style="height:70px ;width:100%" type="text" name="name" class="form-control" autocomplete="off" ></textarea>
                        <label for="name" class="label">
                    </form>
                </div>
                <div class="buttons">
                    <button class="submit">تحديث</button>
                </div>
            </div>
            <div id="buttons">
                <button class="submit"><a style="color:white" href="newPost.php">اضافة كتاب</a></button>
                <button class="submit"><a >كتبي المعروضة</a></button>

            </div>
        </div>
    </div>
    <?php require_once 'template/footer.php'; ?>