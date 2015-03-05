<?php 
session_start(); 
$id = session_id(); 
$return = "index.php"; 
$search = array("subject", "mail","phone","spam", "sent"); 
if($id != $_SESSION['check']) { 
$_SESSION['message'] = 1; 
header("Location:$return"); 
exit; 
} 
foreach($_POST as $key => $val) { 
if(array_search($key, $search) === FALSE) { 
$_SESSION['message'] = 1; 
header("Location:$return"); 
exit; 
} 
if($val == "") { 
$_SESSION['message'] = 2; 
header("Location:$return"); 
exit; 
} 
}


if($_POST['spam'] != $_SESSION['spam'] || strpos($id, $_POST['spam']) === FALSE) { 
$_SESSION['message'] = 3; 
header("Location:$return"); 
exit; 
} 
$regexp="/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i"; 
if (!preg_match($regexp, $_POST['mail']) && !empty($_POST['mail'])) { 
    $_SESSION['message'] = 4; 
    header("Location:$return"); 
    exit; 
} 
if(strpos($_POST['sent'], "GET IT NOW!") === FALSE) { 
$_SESSION['message'] = 1; 
header("Location:$return"); 
exit; 
} else { 

$reply = $_POST['mail']; 
$phone = htmlspecialchars($_POST['phone']); 
$phone = trim($phone);
$subject = htmlspecialchars($_POST['subject']); 
$subject = trim($subject); 


$conteudo = "Name: $subject: $phone\r\n"."Company of $subject: $phone\r\n". "Email of $subject: $reply\r\n";

$to = "shobha.shankar@wwstay.com"; // type here right email

@mail($to, $subject, $conteudo, "From: $reply\r\n"."Reply-To: $reply\r\n");
$_SESSION['message'] = 5; 
header("Location:$return"); 
exit; 
} 
?>