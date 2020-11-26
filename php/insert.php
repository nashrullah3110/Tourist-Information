<?php
$name=$_POST['name'];
$last=$_POST['last'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['inlineRadioOptions'];
$file=$_POST['file'];

if(!empty($name)||!empty($last)||!empty($email)||!empty($password)||!empty($gender)||!empty($file)){
  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="shadi_signup";

  $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
  if (mysqli_connect_error()) {
    die('Connect Error('.mysqli_connect_errno()')'.mysqli_connect_error());
  }else {
    $SELECT = "SELECT email From signup Where email = ? Limit 1";
    $INSERT = "INSERT Into register (name, last, email, password, gender, file) values(?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssss", $name, $last, $email, $password, $gender, $file);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
}else {
  echo "All Field are required";
  die();
}
 ?>
