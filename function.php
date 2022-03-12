<?php
    // function unosOpisUBazu($opis, $naziv, $id_zamerke){
    //     global $connection;
    //     $upit = "INSERT INTO zamerkeKritike(naziv_zamerke, opis, id_zamerke) VALUES(:naziv, :opis, :id)";

    //     $unos = $connection->prepare($upit);

    //     $unos -> bindParam(':opis', $opis);
    //     $unos -> bindParam(':naziv', $naziv);
    //     $unos -> bindParam(':id', $id_zamerke);

    //     $rezultat = $unos -> execute();
    //     return $rezultat;
    // }

    function upisUBazu($ime, $prezime, $email, $password){
        
        $upit = "INSERT INTO users(id_users, `name`, email, `password`) VALUE(:f_name, :l_name, :email, :pass)";

        $unos = $connection->prepare($upit);

        $unos -> bind_param("f_name", $ime);
        $unos -> bind_param("l_name", $prezime);
        $unos -> bind_param("email", $email);
        $unos -> bind_param("pass", $password);

        $rezultat = $unos->execute();
        return $rezultat;
    }
?>