<?php
class Database {
    function Conn(){
        return pg_connect("host=ec2-52-213-167-210.eu-west-1.compute.amazonaws.com port=5432 dbname=d72om3lphmskj1 user=agzigsarirffns password=0bbb063c271cbf8b6ad1108669ae17fe0e978ab530c693b62fdc6b4debae87ca");
    }
    function ReturnAllPosts(){
        $posts = array();
        $result = pg_query(self::Conn(), "SELECT dm.naziv,dm.opis,dm.placa,dm.trajanje,dm.delovnik, dm.sifra, dm.prosta_mesta,k.ime,p.naslov, dm.slika_dmesta FROM delovna_mesta dm INNER JOIN kraji k ON dm.kraj_id = k.id INNER JOIN podjetja p ON dm.podjetje_id = p.id");
        $x=0;
        while ($row = pg_fetch_row($result)){
            $post =  new DelovnaMesta($row[0], $row[1], $row[2], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9]);
            $posts[$x] = $post;
            $x++;
        }
        pg_close();
        return $posts;
    }
    function ReturnAllCompanies(){
        $companies = array();
        $result = pg_query(self::Conn(), "SELECT p.naslov,p.telefon,k.ime FROM podjetja p INNER JOIN kraji k ON k.id = p.kraj_id");
        $x=0;
        while ($row = pg_fetch_row($result)){
            $company =  new Podjetja($row[0], $row[1], $row[2]);
            $companies[$x] = $company;
            $x++;
        }
        pg_close();
        return $companies;
    }
}
