<?php
$title = 'تسجيل الدخول';
require "config/databaseConnection.php";

require_once 'template/header.php'; 
require "config/loginConnection.php";
?>
    <div class="wrapper">

        <div class="wrap">

            <div class="card">


                <div class="form-outer">
                <div class="header"><i class="fi-xnsuxl-user-solid"></i><span>تسجيل الدخول</span></div>

                    <form class="form">
                        <div class="form-div">
                            <input type="text" name="username" autocomplete="off" required/>
                            <label for="name" class="label"><span class="label-content">اسم المستخدم</span>
                            </label>
                        </div>
                        <div class="form-div">
                            <input type="password" name="password" autocomplete="off" required />
                            <label for="pass" class="label">
                <span class="label-content">كلمة المرور</span>
            </label>
                        </div>
                        <div class="buttons">
                    <button class="forgot">نسيت كلمة المرور؟</button>
                    <button id="bt" type="submit" name="login" class="btn btn-defualt">دخول</button>
                    </form>

                   
                </div>
                </div>

                <script>
                 //  document.getElementById("bt").addEventListener("click", function(event){
                 ///      console.log(55);
  //  event.preventDefault()
//});
               </script>
            </div>
        </div>
        <?php require_once 'template/footer.php'; ?>