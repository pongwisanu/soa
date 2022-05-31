<?php
session_start();

/*$link = $_SERVER['PHP_SELF'];
$link_array = explode('/',$link);
$page = end($link_array);
echo $page;*/

$username = $_POST['username'];
$password = $_POST['password'];

echo $username . " " . $password;

$url = 'http://localhost:8080/soa64_01/rest/services/user/login';
$data = array('username' => $username, 'password' => $password);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, true, $context);
$response = (array) json_decode($result);


$userdata = null;
if (isset($response["status"])) {
    if ($response["status"] == "200") {
        $result = $response["result"];
        $userdata = (array)$result;
        $_SESSION["userdata"] = $userdata;
        header("location: ./index.php");
    } else {
        header("location: ./index.php?error=2");
    }
} else {
    header("location: ./index.php?error=2");
}

/*if (isset($_POST["username"])) {
    if ($username == "6120502734") {
        $userdata["userId"] = "1";
        $userdata["username"] = "6120502734";
    } else {
       
    }
}
*/
