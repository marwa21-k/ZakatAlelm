<?php
session_start();
// دالة الشرط للتحقق من ضغط زر login
if(isset($_POST['login'])){
    echo 55;
	// تخزين الحقول فى متغيرات
	$user = $_POST['username'];
	$pass = $_POST['password'];
    // انشاء استعلام
    
	// فى هذا الاستعلام استخدمنا الشرط وجود اسم المستخدم وكلمة المرور
	$qu = "select * from user where username = '$user' && password = '$pass'";
	echo $qu;

	// ارسال الاستعلام والتحقق من وجود العضو
	if(mysqli_num_rows(mysqli_query($con, $qu)) > 0){
		// اذا تم وجود النتيجة يتم اضافة اسم العضو فى الجلسه 
        $ss = mysqli_query($con, $qu);
		$row = mysqli_fetch_array($ss);
    	$_SESSION['username'] = $user;
		$_SESSION['usertype'] = $usertype;
		$_SESSION['userid'] = $row['id'];
		echo $qu;
		// ثم يتم الانتقال الى منطقة الاعضاء
        header("Location: index.html");
        
	} else {
		// اذا لم يتم ايجاد اى قيمه 0
		echo 'اسم المستخدم او كلمة المرور خطأ';
	}
}
?>