<?php
/* Setup database connection variables */
$dbserver = "mysql.hostinger.in";
$dbname = "u207649351_db";
$dbuser = "u207649351_in";
$dbpassword = "discovery";

/* Connect to database using credential in config.php */
$db = new mysqli();
$db->connect($dbserver, $dbuser, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    echo "Failure $db->error<br />";
}

function checkValue($globalVar, $param)
{
	if(isset($globalVar[$param]) && !empty($globalVar[$param]))
	{
		return $globalVar[$param];
	}
	return false;
}

if(!checkValue($_REQUEST, "action"))
{
	die("ERROR");
}

function addUser($email, $db)
{
	$query = "INSERT IGNORE INTO `subscribe` (`id`, `email`) VALUES('$id', '$email')";
	$result = $db->query($query);
	if($result)
	{
		return $db->affected_rows;
	}
	else
	{
		echo "ERROR $db->error";
	}
	return 0;
}

switch($_REQUEST["action"]){
	case "addUser":
		
		if(!($email = checkValue($_REQUEST, "email")))
		{
                        echo '{"result":"fail"}';
			die("email_ERROR");
		}
		if(AddUser($email, $db)>0){
                        // echo "You are on our list. We will keep you updated .";
echo '{"result":"success"}';
                 }else 
                         //echo "Could not connect to the registration server. Please try again later.";
 echo '{"result":"fail"}';
		$db->close();
		break;
	default:
		echo "Error";
		break;
	}
?>	