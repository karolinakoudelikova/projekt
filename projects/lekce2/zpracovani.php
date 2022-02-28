<?php
//$json = file_get_contents('https://private-78495-test24061.apiary-mock.com/questions');
//$obj = json_decode($json);
//echo $json;
//var_dump($obj);

$postdata = http_build_query(
    array(
        'email' => $_POST["email"],
        'password' => $_POST["password"],
        'checkbox' => isset($_POST["checkbox"]) ? true : false
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context  = stream_context_create($opts);

$result = file_get_contents('https://private-78495-test24061.apiary-mock.com/login', false, $context);
echo $_POST["email"];
//echo $_POST["checkbox"] ? "dal souhlas" : "nesouhlas";
if  (isset($_POST["checkbox"])) echo "souhlas";
else echo "nesouhlas";
echo $result;

