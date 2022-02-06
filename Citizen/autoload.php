<?php

function controllers_autoload($classname){ /* autocarga los controladores */
    include 'controllers/' . $classname . '.php'; /* ENTRA A LAS CARPETAS DE LOS CONTROLADORES
     * *(
     */
}
spl_autoload_register('controllers_autoload'); /*Lo que hace es que toma cada archivo de la ruta y lo incluye en el proyecto.
por tanto cargara todos los controladores */