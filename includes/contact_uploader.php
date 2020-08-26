<?php

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
    $email = filterEmail($_POST['email']);
    if(!$email){
        $_SESSION['contact_form']['email'] = '';
        $emailError = "الرجاء كتابة بريد الكتروني صحيح";
    }else{
        $_SESSION['contact_form']['email'] = $email;
    }
    
    
    $name = filterString($_POST['name']);
    if(!$name){
        $_SESSION['contact_form']['name'] = '';
        $nameError = 'الرجاء كتابة اسم صحيح';
    }else{
        $_SESSION['contact_form']['name'] = $name;
    }
    
    $suggest = filterString($_POST['suggest']);
    if(!$suggest){
        $_SESSION['contact_form']['suggest'] = '';
        $suggestError = 'الرجاء كتابة مشكلة صحيحة';
    }else{
        $_SESSION['contact_form']['suggest'] = $suggest;
    }
    
    if(!$nameError && !$emailError && !$suggestError){
        
        if(mail($config['admin_email'], 'message from'. $_SESSION['contact_form']['email'], $_SESSION['contact_form']['suggest'])){
            unset($_SESSION['contact_form']);
            header('Location: index.php');
            die();
        }else{
            echo 'حصلت مشكلة في الارسال';
        }
        
    }
    
}

