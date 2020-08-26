<?php
$title = 'التسجيل';
require_once 'template/header.php'; 
?>
    <div class="wrapper">

        <div class="swrap">

            <div class="card sign" slot="width: 600px;">

               

                <div class="form-outer" >
                <div class="header"><i class="fi-xnsuxl-user-solid"></i><span>تسجيل جديد</span></div>

<div class="newPic">

    <img src="images/user.png" width='80' height='80' class='rounded-circle'>

    <input type="file" name="file-input" id="file-input" class="file-input__input" placeholder="Upload File">
    <label class="file-input__label" for="file-input">رفع صورة للحساب


</div>
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
                    <div class="form-div">
                    <input type="password" name="pass" autocomplete="off" required />
                    <label for="pass" class="label">
                    <span class="label">تأكيد كلمة المرور</span>
                    </label>
                        </div>
                        <div>
                            <span class="label">الوصف</span></label>

                            <textarea style="height:70px" type="text" name="name" class="form-control" autocomplete="off" ></textarea>
                            <label for="name" class="label">
</div>
                    </form>

                    <div class="buttons">
                    <button class="submit">تسجيل</button>
                </div>
                </div>

                
            </div>
        </div>
        <?php require_once 'template/footer.php'; ?>