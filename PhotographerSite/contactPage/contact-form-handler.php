<?php 

   $con=mysqli_connect('localhost','root');
   if($con){
    echo"connection successful ";
   }
else{
    echo"not connected to server";
}

mysqli_select_db($con,'userdata');

$user=isset($_POST['user']) ? $_POST['user']: '';
$email=isset($_POST['email']) ?$_POST['email']: '';
$mobile=isset($_POST['mobile']) ?$_POST['mobile']: '';
$comment=isset($_POST['comment']) ?$_POST['comment']: '';
 
$query=" insert into userinfo(user,email,mobile,comment)
value('$user','$email','$mobile','$comment')  ";

echo"$query";
mysqli_query($con,$query);


header('location: http://localhost/bhaiKaWeb/HTML/index.html ');


?>