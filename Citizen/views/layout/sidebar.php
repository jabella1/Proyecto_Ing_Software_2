
<!-- BARRA LATERAL -->
<aside id ="lateral"> 
    <div id="login" class="block_aside">
        
        
        <?php if(!isset($_SESSION['identidad'])): ?>
        <h3>Entrar a la web </h3>
        <form action="<?=base_url?>Usuario/IniciarSesion" method="post">
            <label for="correo">Correo</label>
            <input type="email" name="correo" required=""/>
            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña" required=""/>
                <input type="submit"value="Enviar"/>
            </form>
            
                <ul>
                    <li><a href="#">¿Olvido su contraseña?</a></li>
                    <li><a href="<?=base_url?>Usuario/registro">Registrarse</a></li>   
                </ul>

        <?php else: ?>
        <h3><?=$_SESSION['identidad']->nombre?> <?=$_SESSION['identidad']->apellidos?></h3>
        <a href="<?=base_url?>Usuario/CerrarSesion">Cerrar Sesion</a>
        <?php endif; ?>
        
        
    </div>
</aside>  
<!-- CONTENIDO CENTRAL -->
<div id="central">