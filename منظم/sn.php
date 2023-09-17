<?php
$hostname_localhost="localhost";
$database_localhost="sn";
$username-localhost="fnam";
$name_localhost="nam";
$data_localhost="data";
$lieu_localhost="lieu";
$wil_localhost="wil";
$comm_localhost="comm";
$localhost=mysql_connect($hostname_localhost,$username_localhost,$name_localhost;$data_localhost;$lieu_localhost,$wil_localhost,$comm_localhost)
or
trigger_error(mysql_erroe(),E_USER_ERROR);
mysql_select_db($database_localhost,$localhost);
$username=$post['username'];
$name=$post['name'];
$data=$post['data'];
$lieu=$post['lieu'];
$wil=$post['wil'];
$comm=$post['com'];
$query_search="select*from users where usearname='".$username."' and name='".name."' anddata='".data."' and lieu='".lieu."' and wil='".wil."' and comm='".comm."' ;
query_exec=mysql_query($query_search)or die(mysql_error());
$rows=mysql_num_rows($query_exec);
//echo $rows;
if($rows==0){
echo "no such user found";
}
elso{
echouser found";
}
?>