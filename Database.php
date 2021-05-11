<?php
class Database {
    function Conn(){
        return pg_connect("host=ec2-174-129-225-160.compute-1.amazonaws.com port=5432 dbname=dfb9ne0r15jl31 user=lkdruotybqiygj password=d3a76b0edb876149390875f7906938fd1b3e23dc4bdd4680b41c65f3b17ce772");
    }
    
    function ReturnAllPosts(){
        $posts = array();
        $result = pg_query(self::Conn(), "SELECT dm.naziv,dm.opis,dm.placa,dm.trajanje,dm.delovnik, dm.sifra, dm.prosta_mesta,k.ime,p.naslov, dm.slika_dmesta FROM delovna_mesta dm INNER JOIN kraji k ON dm.kraj_id = k.id INNER JOIN podjetja p ON dm.podjetje_id = p.id");
        $x=0;
        while ($row = pg_fetch_row($result)){
            $post =  new DelovnaMesta($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9]);
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
    
    function ReturnAllCities(){
        $cities = array();
        $result = pg_query(self::Conn(), "SELECT * FROM kraji");
        $x=0;
        while ($row = pg_fetch_row($result)){
            $city =  new Kraji($row[1], $row[2], $row[3], $row[4]);
            $cities[$x] = $city;
            $x++;
        }
        pg_close();
        return $cities;
    }
    
    function ReturnAllStudents(){
        $students = array();
        $result = pg_query(self::Conn(), "SELECT s.ime, s.priimek, s.spol, s.datum_roj, s.telefon, s.email, k.ime, dm.naziv FROM studenti s INNER JOIN kraji k ON k.id = s.kraj_id LEFT JOIN narocanja n ON n.student_id = s.id LEFT JOIN delovna_mesta dm ON dm.id = n.delovno_mesto_id");
        $x=0;
        while ($row = pg_fetch_row($result)){
            $student =  new Studenti($row[0], $row[1], $row[2], $row[3],$row[4],$row[5],$row[6],$row[7]);
            $students[$x] = $student;
            $x++;
        }
        pg_close();
        return $students;
    }
}
