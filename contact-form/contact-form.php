<?php

$Title = $_POST["inputTitle"];

$Fname = $_POST ["inputFname"];  
if (!preg_match ("/[a-zA-z]*$/", $Fname) ) {  
    $ErrMsg = "Only alphabets are allowed.";  
    echo $ErrMsg;  
}

$Lname = $_POST ["inputLname"];  
if (!preg_match ("/[a-zA-z]*$/", $Lname) ) {  
    $ErrMsg = "Only alphabets are allowed.";  
    echo $ErrMsg;  
}

$DOB = $_POST["inputDOB"];

$Telno = $_POST["inputTelno"];  
        
if (!preg_match ("/^[0-9]*$/", $Telno) ) {  
    $mobilenoErr = "Only numeric value is allowed.";  
}  
  
if (strlen ($Telno) != 10) {  
   $mobilenoErr = "Mobile no must contain 10 digits.";  
}

$Email = $_POST ["inputEmail"];  
if(!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
  $ErrMsg = "Email not valid.";  
  echo $ErrMsg;  
}

$allowed_types = array('jpg', 'png', 'jpeg', 'gif'); 
$Filename = $_FILES['inputFile']['name'];
//$ext = pathinfo($Filename, PATHINFO_EXTENSION);
//if (!in_array($ext, $allowed_types)) {
//    echo 'File Type error';
//}

$Message = $_POST["inputMessage"];

echo "Thank You $Title $Fname $Lname ";
echo "You have submitted the following detail: ";
echo "Date of Birth: $DOB \n";
echo "Telephone number: $Telno \n";
echo "File Uploaded: $Filename \n";
echo "Message: $Message \n";
?>