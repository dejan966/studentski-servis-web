<?php
/*$host="ec2-52-213-167-210.eu-west-1.compute.amazonaws.com";
$user="agzigsarirffns";
$password="0bbb063c271cbf8b6ad1108669ae17fe0e978ab530c693b62fdc6b4debae87ca";
$database="d72om3lphmskj1";

$link=pg_connect($host, $user, $password, $database);

if($link)
{
    echo "Connection Failed";
}
*/
$dbconn = pg_connect("host=ec2-52-213-167-210.eu-west-1.compute.amazonaws.com port=5432 dbname=d72om3lphmskj1 user=agzigsarirffns password=0bbb063c271cbf8b6ad1108669ae17fe0e978ab530c693b62fdc6b4debae87ca");
$stat = pg_connection_status($dbconn);
if($stat == PGSQL_CONNECTION_OK)
    echo 'ok';

