<?php require_once __DIR__.'/../config/app.php'; ?>
<!DOCTYPE html>
<html dir = "<?php echo $config['dir'] ?>" lang = "<?php echo $config['lang'] ?>">
    
    <head>
        
        <title><?php echo $config['app_name'] . " | " . $title ?></title>
        <link rel="icon" href="/ZakatAlelm/Logo/Logo.png"/>
        <meta charset="UTF-8">   

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="styles/header&footer.css" >
        <link rel="stylesheet" href="styles/index.css" >
        <link rel="stylesheet" href="styles/log&sign.css" >
        <link rel="stylesheet" href="styles/booklist.css" >


    </head>    
    <header>
            <ul class="menu">
                <div class="left">
                    <li class="item">
                        <div class="search">
                            <input type="text" name="search" class="searchbox" placeholder="بحث">
                            <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
                        </div>
                        <?php 
                        //شرط اذا المستخدم مسجل دخول
                        if(TRUE){
                        ?>
                        </li><li class="item"> <img src="images/user.png" width='30' height='30' class='rounded-circle'> <a href="profile.php">حسابي</a></li>       
                        <li class="item">|</li> 
                       <li class="item"><a href="#"> تسجيل الخروج</a></li>
                        <?php }else{
                       // اذا المستخدم مو مسجل دخول
                       ?>

                        </li><li class="item"><a href="signin.php">تسجيل</a></li>       
                        <li class="item">|</li> 
                       <li class="item"><a href="Login.php"> تسجيل الدخول</a></li>

                        <?php }?>
                </div>
                <div class="right">
                    <li class="item"><a href="#"></a><img src="Logo/Logo.png" alt=""></li>
                    <li class="item"><a href="#">زكاة العلم</a></li>
                    <li class="item"><a href="index.php">الرئيسية</a></li>
                    <li class="item"><a href="aboutzkah.php">عن المبادرة</a></li>
                    <li class="item"><a href="books.php">الكتب المعروضة</a></li>
                    <li class="item"><a href="about.php">من نحن</a></li>                   
                </div>
            </ul>
        </header>
    <body>
        
