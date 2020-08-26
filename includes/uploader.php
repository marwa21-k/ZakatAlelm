<?php
$bookname=null;
$releaseDate =null;
$description =null;
$city = null;
$time = null;
function filterString($field) {

    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if (empty($field)) {
        return FALSE;
    } else {
        return $field;
    }
}

function canUpload($file) {
//    allowed file types
    $allowed = [
        'jpg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif'
    ];

    $maxFileSize = 100 * 1024 * 1024;

    $fileMimeType = mime_content_type($file['tmp_name']);

    $fileSize = $file['size'];

    if (!in_array($fileMimeType, $allowed))
        return "الرجاء ادخال صورة صحيحة";

    if ($fileSize > $maxFileSize)
        return "حجم الاصورة اكبر من المقبول الرجاء رفع صورة اقل من " . "100 MB";

    return true;
}

$nameError = $pictureError = $desciptionError = '';

$bookName = $bookDescription = $releaseDate = '';

//$_SESSION['new_post_form']['book_name'] = $_SESSION['new_post_form']['book_description'] = $_SESSION['new_post_form']['book_release_date'] = $_SESSION['new_post_form']['book_picture_name'] ='';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $bookName = filterString($_POST['bookName']);
    if (!$bookName) {
        $_SESSION['new_post_form']['book_name'] = '';
        $nameError = 'الرجاء كتابة اسم الكتاب';
    } else {
        $_SESSION['new_post_form']['book_name'] = $bookName;
    }

    $bookDescription = filterString($_POST['description']);
    if (!$bookDescription) {
        $_SESSION['new_post_form']['book_description'] = '';
        $desciptionError = 'الرجاء كتابة وصف صحيح';
    } else {
        $_SESSION['new_post_form']['book_description'] = $bookDescription;
    }
$pic = null;
    $releaseDate = $_POST['releaseDate'];
    $_SESSION['new_post_form']['book_release_date'] = $releaseDate;

    if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {

        $canUpload = canUpload($_FILES['picture']);

        if ($canUpload === true) {

            $uploadDir = 'uploads';

            if (!is_dir($uploadDir)) {
                umask(0);
                mkdir($uploadDir);
            }

            $filename = time() . $_FILES['picture']['name'];
            $_SESSION['new_post_form']['book_picture_name'] = $filename;

            if (file_exists($uploadDir . '/' . $filename)) {
                $pictureError = 'الصورة موجودة سابقا';
            } else {
                move_uploaded_file($_FILES['picture']['tmp_name'], $uploadDir . '/' . $filename);
                $pic = $filename;
            }
        } else {
            $pictureError = $canUpload;
        }
    }
    $bookname=$_POST['bookName'];
    $releaseDate =$_POST['releaseDate'];
    $description =$_POST['description'];
    $city = $_POST['city'];
    $time =  date("Y-m-d h:m:s");
echo  "$bookname,$releaseDate, $description, NULL,$pic ,'2', $city, '0', $time)";
   echo mysqli_query($mysqli, "INSERT INTO `post` (`id`, `BookName`, `BReleaseDate`, `description`, `gener`, `pic`, `userID`, `city`, `report`, `postDate`) VALUES (NULL, $bookname,$releaseDate, $description, NULL,null ,'2', $city, '0', $time);");
    
    if (!$nameError) {
        unset($_SESSION['new_post_form']);
        //header('Location: index.php');
    }
}

