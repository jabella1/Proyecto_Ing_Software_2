<h1>Registrarse</h1>

<?php if (isset($_SESSION['registro']) && $_SESSION['registro'] == 'COMPLETADO'): ?>
    <strong class="alerta_verde">Registro Completado Correctamente</strong>
<?php elseif (isset($_SESSION['registro']) && $_SESSION['registro'] == 'FALLIDO'): ?>
    <strong class="alerta_roja">Registro Fallido</strong>
<?php endif; ?>

<?php utils::BorrarSession('registro'); ?>


<form action = "<?=base_url?>Usuario/guardar" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required />
    
    <label for="Apellidos">Apellidos</label>
    <input type="text" name="apellidos" />
    
    <label for="correo">Correo</label>
    <input type="text" name="correo" required />
    
    <label for="password">Contraseña</label>
    <input type="text" name="password" required />
    
    <label for="cedula">Cedula</label>
    <input type="text" name="cedula" required/>
    
    <label for="ciudad">Ciudad</label>
    <select name="ciudad" > <!--SE UTILIZA PARA GENERAR UN CAMPO CON MULTIPLES OPCIONES DONDE SOLO SE PODRA ELEGIR UNA SELECIONANDOLA SELECCIONANDOLA BAJANDO UNA CAJITA DE OPCIONES-->  
        <option value=1>Cali</option>
        <option value=2>Popayan</option>
        <option value=3>Medellin</option>
        <option value=4>Cartagena</option>
        <option value=5>Pasto</option>	
    </select>

    <input type ="submit" value="Registrarse"/>
        
</form>