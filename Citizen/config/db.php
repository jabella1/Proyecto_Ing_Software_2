<?php



class Database{
public static function conectar(){
    /* se le pasa como parametro los datos para ingresar a la base de dato
     * localhost, el usuario, la contraseña y el nombre de la base de datos.
     * */
    $db = new mysqli('localhost','root','','citizen');
    $db->query("SET NAMES 'utf8") ; /*consulta que permite que los resultados que saque de la base de datos
     * sea en castellano totalmente, o sea que las tildes y las ñ y todo eso la devuelva correctamente mysql */
    return $db;
  }
}
