<?php 
$title = 'اتصل بنا';
require_once 'template/header.php'; 

function filterString($field){
    
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(empty($field)){
        return FALSE;
    }else{
        return $field;
    }
}

function filterEmail($field){
    
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    }else{
        return FALSE;
    }
    
}

$nameError = $emailError = $suggestError = '';

$name = $email = $suggest = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
//  validate email address
    if(!filterEmail($_POST['email'])) $emailError = "الرجاء كتابة بريد الكتروني صحيح";
    
    
    $name = filterString($_POST['name']);
    if(!$name) $nameError = 'الرجاء كتابة اسم صحيح';
    
    $suggest = filterString($_POST['suggest']);
    if(!$suggest) $suggestError = 'الرجاء كتابة مشكلة صحيحة';
    
}

?>
    <div class="wrapper">
    <div class="wrap">


<form style="width:500px" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
<h1>اتصل بنا</h1>

    <div class="form-group">
        <label for="name">الاسم</label>
        <input type="text" name="name" value="<?php echo $name ?>" class="form-control" placeholder="اسمك" required>
        <span class="text-danger"><?php echo $nameError ?></span>
    </div>
    
    <div class="form-group">
        <label for="email">البريد الالكتروني</label>
        <input type="email" name="email" value="<?php echo $email ?>" class="form-control" placeholder="بريدك الالكتروني" required>
        <span class="text-danger"><?php echo $emailError ?></span>
    </div>
        
    <div class="form-group">
        <label for="suggest">وصف المشكلة</label>
        <textarea type="text" name="suggest" <?php echo $suggest ?> class="form-control" placeholder="وصف المشكلة" required></textarea>
        <span class="text-danger"><?php echo $suggestError ?></span>
    </div>
    
    <button class="btn btn-primary">أرسل</button>
    
</form>
</div>
<?php require_once 'template/footer.php'; ?>
