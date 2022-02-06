<h1>Reportar problema</h1>


<form action = "<?=base_url?>Problema/guardar" method="POST">
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" required />
    
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" cols = "120" rows="5" style="resize:both;"></textarea>
    
    <label for="prioridad">Prioridad</label>
    <select name="prioridad"> <!--SE UTILIZA PARA GENERAR UN CAMPO CON MULTIPLES OPCIONES DONDE SOLO SE PODRA ELEGIR UNA SELECIONANDOLA SELECCIONANDOLA BAJANDO UNA CAJITA DE OPCIONES-->  
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>	
    </select>
    
    <label for="ciudad">Ciudad</label>
    <select name="ciudad"> <!--SE UTILIZA PARA GENERAR UN CAMPO CON MULTIPLES OPCIONES DONDE SOLO SE PODRA ELEGIR UNA SELECIONANDOLA SELECCIONANDOLA BAJANDO UNA CAJITA DE OPCIONES-->  
        <option value=1>Cali</option>
        <option value=2>Popayan</option>
        <option value=3>Medellin</option>
        <option value=4>Cartagena</option>
        <option value=5>Pasto</option>	
    </select>

    <input type ="submit" value="Enviar"/>
        
</form>