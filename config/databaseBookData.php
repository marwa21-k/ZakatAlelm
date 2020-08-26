<?php
function displaylastbooks(){
    require 'databaseConnection.php';

$books = mysqli_query($mysqli, "SELECT * FROM post ORDER BY postDate ASC");
$len = mysqli_num_rows($books);
if($books && $len > '0'){
    for($i=0;$i<$len;$i++){
        if($i>4){
        break;
        }
        $book = mysqli_fetch_array($books);
        $userId = $book["userID"];
        

        $q = "SELECT username , pic FROM user WHERE id = $userId";
        $res2 = mysqli_query($mysqli,$q);
        $user = mysqli_fetch_array($res2);

        $bookName = $book["BookName"];
        if($book['pic'] == null){
            $bookpic = "images/book-cover.jpg";
        }else{
            $bookpic = "uploads/" . $book['pic'];
        }
        
        if($user['pic'] == null){
            $userpic = "images/user.png";
        }else{
            $userpic = "uploads/" . $user['pic'];
        }
    ?>
    <div class="post">
        <div class="user"><a><?php echo $user['username'] ?><img src="images/user.png" alt=""></a></div>
        <img src="<?php echo $bookpic ?>" alt="كتاب">
        <a class="booktitle">اسم الكتاب: <?php echo $bookName; ?></a>
    </div>
    <?php
}}}


function displaybooks(){
    require 'databaseConnection.php';

    $books = mysqli_query($mysqli, "SELECT * FROM post ORDER BY postDate ASC");
    $len = mysqli_num_rows($books);
    if($books && $len > '0'){
        for($i=0;$i<$len;$i++){
            $book = mysqli_fetch_array($books);
            $userId = $book["userID"];
            
    
            $q = "SELECT username , pic FROM user WHERE id = $userId";
            $res2 = mysqli_query($mysqli,$q);
            $user = mysqli_fetch_array($res2);
    
            $bookName = $book["BookName"];
            if($book['pic'] == null){
                $bookpic = "images/book-cover.jpg";
            }else{
                $bookpic = "uploads/" . $book['pic'];
            }
            
            if($user['pic'] == null){
                $userpic = "images/user.png";
            }else{
                $userpic = "uploads/" . $user['pic'];
            }
        ?>
        <div class="postL">
                    <div class="user">
                        <a><?php echo $user['username'] ?>
                          <img src="images/user.png" alt=""></a>
                    </div>
                    
                    <img src="<?php echo $bookpic ?>" alt="كتاب">
                    <a class="booktitle"> <?php echo $bookName; ?></a>
                </div>
        <?php
    }}}
    









?>