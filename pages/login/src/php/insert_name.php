<?php 

try{
session_start();

$user_name = filter_input(INPUT_POST, "name", FILTER_DEFAULT); 


$_SESSION['user_name'] = $user_name;


echo '{"status":"1"}';

}catch(Exception $e){
    echo $e;
}