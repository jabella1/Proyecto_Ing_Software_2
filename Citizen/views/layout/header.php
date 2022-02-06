<!DOCTYPE HTML>
<html lang="es" html> <!-- lenguaje español -->
    <head>
        <meta charset="utf-8"   /> <!-- para aceptar caracteres raros -->
        <title>CITIZEN</title>
        <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
    </head>
    <body>
        <div id ="container">
        <!-- CABECERA -->
        <hEADER id = "header">
            <div id="logo">
                <img src="<?=base_url?>assets/img/citizen.png" alt="Citizen Logo" />
                <a href ="index.php">
                 CITIZEN - RESUELVE TUS PROBLEMAS
                </a>
        </HEADER>
        <!-- MENU -->
        <nav id="Menu">
            <ul>
                <li>
                    <a href="<?=base_url?>Usuario/index">Inicio</a>
                </li>
                <li>
                    <a href="<?=base_url?>Problema/reportar">Reportar Problema</a>
                </li>
                <li>
                    <a href="#">Ciudad Con mas Problemas</a><!-- PARA REDIRECCIONAR TO DO... -->
                </li><!-- comment -->
                <li>
                    <a href="#">Problemas sin revisar</a><!-- PARA REDIRECCIONAR TO DO... -->
                </li><!-- comment -->
            </ul>
            
        </nav>
    
        <div id ="content">