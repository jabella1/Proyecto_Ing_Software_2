<?php

class utils {

    public static function BorrarSession($NombreSession) {
        if (isset($_SESSION[$NombreSession])) {
            $_SESSION[$NombreSession] = null;
        }
        return $NombreSession;
    }

}
