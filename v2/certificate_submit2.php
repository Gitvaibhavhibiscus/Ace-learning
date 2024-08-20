<?php
// Create connection
$conn = new mysqli("localhost", "uhft5c5rloais", "e8.h34ds8+M*", "db0bffoueftbi4");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Fetching Values from URL
$get_name=$_POST['name'];
$get_whatsapp_number=$_POST['whatsapp_number'];
$get_email=$_POST['email'];
$get_experience=$_POST['experience'];
$submittedAt = date('Y-m-d H:i:s');

// Validate email address
function validateEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

//Insert query
$sql = "INSERT INTO aceTrainingCenter(name, whatsappNumber, email, experience, submittedAt) VALUES ('$get_name', '$get_whatsapp_number', '$get_email', '$get_experience', '$submittedAt')";

if($get_experience == 1){
	$experience = "Yes";
} else{
	$experience = "No";
}

$from = "vaibhav@hibiscus.services";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From:" . $from;

$admin_to = "vaibhav@hibiscus.services";
$admin_subject = "New query: ".$get_name."";
$admin_message ="Name: ".$get_name."<br/>";
$admin_message .= "Whatsapp Number: ".$get_whatsapp_number."<br/>";
$admin_message .= "Email: ".$get_email."<br/>";
$admin_message .= "Experience in RCM: ".$experience."<br/>";

$admin_notification = mail($admin_to,$admin_subject,$admin_message,$headers);

if(!$admin_notification){
	$status = 0;
	echo $status;
} else{
	if ($conn->query($sql) === TRUE) {
   $status = 1;
   echo $status;
	} else {
	   //echo "Error: " . $sql . "<br>" . $conn->error;
	   $status = 0;
	   echo $status;
	}
}

$conn->close();
?>
