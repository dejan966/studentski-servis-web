<?php
$dbconn = pg_connect("host=ec2-52-213-167-210.eu-west-1.compute.amazonaws.com port=5432 dbname=d72om3lphmskj1 user=agzigsarirffns password=0bbb063c271cbf8b6ad1108669ae17fe0e978ab530c693b62fdc6b4debae87ca");
$stat = pg_connection_status($dbconn);
if($stat != PGSQL_CONNECTION_OK)
    echo 'ne dela';

//funkcija za dobivanje podatkov iz heroku
$queryDM = "SELECT dm.naziv,dm.opis,dm.placa,dm.trajanje,dm.delovnik, dm.sifra, dm.prosta_mesta,k.ime,p.naslov, dm.slika_dmesta FROM delovna_mesta dm INNER JOIN kraji k ON dm.kraj_id = k.id INNER JOIN podjetja p ON dm.podjetje_id = p.id";
//$resultDM=mysqli_query($link, $query);
//while ($row = mysqli_fetch_array($result))