<?php

class DBHelper{

    var $dbserver = 'localhost';
    var $dbuser = 'root';
    var $dbpass = 'Jota1510*/';
    var $dbname = 'challenge_user';

    public function __construct($table_name){
        $dbname = $table_name;
    }

    public function ExecuteQuery($sql){
        $conexion = mysql_connect($dbserver ,$dbuser, $dbpass) or die ('PLSTR: Error al conectar a la BD');
    
        $data = array();
        $exe = mysql_query($sql) or die(mysql_error().$sql);
    
        while($row = mysql_fetch_assoc($exe)){
            $data[] = $row;
        }
        @mysql_close($conexion);
        return $data;
    }

    public function ExecuteNonQuery($sql){
        $result = 0;
        $conexion = mysql_connect($dbserver ,$dbuser, $dbpass) or die ('PLSTR: Error al conectar a la BD');
    
        $data = array();
        $exe = mysql_query($sql) or die(mysql_error().$sql);
        if(mysql_affected_rows($exe) >= 1){
            $result = 1;
        }
        @mysql_close($conexion);
        return $result;
    }
}

function get_text($name){
    $code7 = [
        "Konrad" => "El Jefazo!",
        "Paul" => "Villalobos",
        "Tacuchi" => "Ola k ase"
    ];

    foreach($code7 as $menber=>$detail){
        if($menber == $name){
            return $detail;
            break;
        }
    }
}