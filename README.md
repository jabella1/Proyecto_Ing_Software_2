# Proyecto_Ing_Software_2

## Citizen Web Application
Citizen es una aplicación web que le permitirá a la administración de la ciudad tener una vista estructurada de los problemas en el área y en tiempo real. Esta solución facilita la planificación operativa y permite orientar las acciones preventivas o correctivas donde se necesiten (por ejemplo, deterioro de x infraestructura, daños a propiedad pública, elementos susceptibles a volcamiento, etc). La aplicación web, ayuda a crear un marco democrático para que los ciudadanos informen sobre cualquier peligro en la ciudad. Se utiliza una aplicación web para crear los reportes, clasificarlos teniendo en cuenta la prioridad (dada por consenso ciudadano), adjuntar fotografías y actualizar la trazabilidad de cada uno. La aplicación adjunta automáticamente las coordenadas de ubicación a la imagen y los datos se envían al servidor. La administración de la ciudad podrá visualizar los problemas emergentes en el mapa de la ciudad. Los ciudadanos pueden seguir el estado de los informes hasta que sean fijados por la administración de la ciudad.

## Diagrama de Componentes y Conectores

<div align="left">
    <img src="/docs/UML/Diagrama_Componentes_Conectores.PNG" width="600px"</img> 
</div>

## Diagrama Secuencia - Citizen
<div align="left">
    <img src="/docs/UML/Diagrama_Secuencia_Citizen.png" width="600px"</img> 
</div>

## Diagrama Secuencia - Usuario
<div align="left">
    <img src="/docs/UML/Diagrama_Secuencia_Usuario.png" width="600px"</img> 
</div>

## Diagrama de Modulos
<div align="left">
    <img src="/docs/UML/Diagrama_Modulos.PNG" width="600px"</img> 
</div>

## Modelo C4
El modelo C4 se utilizó para representar la arquitectura en diferentes niveles de abstracción:
```
1.Sistema: muestra los sistemas externos utilizados y la interacción con los usuarios
2.Contenedor: muestra los componentes de alto nivel que interactúan para completar una solicitud.
3.Componente: muestra cómo está organizado un componente específico.
```
## 1. Diagrama del Sistema
<div align="left">
    <img src="/docs/C4/Diagrama_Sistema.PNG" width="600px"</img> 
</div>

## 2. Diagrama de Contenedores
<div align="left">
    <img src="/docs/C4/Diagrama_Contenedores.PNG" width="600px"</img> 
</div>

## 3. Diagrama de Componentes
<div align="left">
    <img src="/docs/C4/Diagrama_Componentes.PNG" width="600px"</img> 
</div>

# Pasos para ejecutar el software
```
debera tener instalado Wamp Server en su equipo, si no lo tiene lo puede descargar de su pagina oficial https://www.wampserver.com/en/
1. Descargar la carpeta Citizen que se encuentra en este repositorio.
2. Ir al disco local C e ir a la siguiente ruta navegando entre las siguientes carpetas wamp64/www
3. En esta ruta se procede a pegar la carpeta que se descargo,Citizen.
4. Ejecutar todos los servicios de wamp server.
5. en el navegador ir al siguiente enlace http://localhost/phpmyadmin/ , El usuario por defecto es root y no tiene contraseña.
6. estando ya en la interfaz seleccionar en la barra superior el apartado que dice SQL.
7. ahora debera ingresar a Citizen/database/database.sql , copiar todo el contenido que se encuentra
adentro,pegarlo en el apartado del punto anterior y posteriormente ejecutarlo presionando Continuar.
8. por ultimo en el navegador debera ingresar al siguiente enlace localhost/Citizen/  con esto, ya estara dentro del sitio web.
```
