# Pruebatecnica
El siguiente repositorio se ha creado con la finalidad de presentar la prueba técnica en el caso de la empresa de datos GEMA SAS

# Manual de instalación

Para instalar la solución se requiere lo siguiente:

  ● Lenguajes/servicios:
  
  1. PHP: Lenguaje de programación en el que se ha realizado la solución.
  2. MySQL: Lenguaje de consultas para ejecutar y alojar los datos requeridos.
  3. Apache : Apertura de un puerto para el despliegue del aplicativo.

Se recomienda la utilización del aplicativo XAMPP, debido a que condensa las tecnologías
necesarias en un servicio.
Los pasos a llevar a cabo en la instalación de la solución son los siguientes :
1. Se descarga o clona el repositorio en Github del enlace
https://github.com/Gabelonio/Pruebatecnica

![imagen](https://user-images.githubusercontent.com/43209755/214956664-4f3eba17-9b14-4674-a0b5-50c5fbb10c8a.png)

2. Activar el módulo MySQL (tomando como ejemplo a XAMPP, se ubica MySQL dentro de
los módulos disponibles y se da click en Start, repetir este proceso con el módulo
Apache).

![imagen](https://user-images.githubusercontent.com/43209755/214968014-4850b732-f8f7-4c33-a2de-c9b2bcb88565.png)

![imagen](https://user-images.githubusercontent.com/43209755/214968029-f696ad61-d44d-4ca2-bcc9-7fff88e9064d.png)


3. Al activarse, abrir una consola MySQL (En el caso de XAMPP, se da click a la opción
Admin, se abrirá una pestaña con nombre phpMyAdmin, dentro de ella, dar click en la
opción SQL)

![imagen](https://user-images.githubusercontent.com/43209755/214968064-306e8eae-474e-45d9-8ce5-ea449268ff4b.png)

![imagen](https://user-images.githubusercontent.com/43209755/214968067-c8dcfc92-d050-4749-9bdf-7220c5346c64.png)

**Nota : Las credenciales configuradas en la solución tienen usuario root y una clave
vacía, si las credenciales de su equipo son diferentes a estas, cambiar las
credenciales dentro del archivo conexion.php**

![imagen](https://user-images.githubusercontent.com/43209755/214956804-65396081-490d-4c73-9ae8-43791c08455e.png)

4. Copiar los contenidos ubicados en el archivo gemasas.sql y pegarlos dentro de la
consola, al copiarlos, ejecutar el contenido copiado (en el caso de XAMPP, dar click en
continuar, ubicado en la parte inferior de la página).

![imagen](https://user-images.githubusercontent.com/43209755/214968156-ffa3fae4-b7ba-4973-8013-336196300ecf.png)

![imagen](https://user-images.githubusercontent.com/43209755/214968170-054e54f7-caab-47d5-9757-28441698e1cf.png)


5. Se activa el servidor Apache (en el caso de XAMPP, ya se encuentra activado).

6. Copiar todo el repositorio (incluyendo la carpeta que lo contiene) dentro de la ubicación
del servidor Apache (como ejemplo, XAMPP ubica dicho servidor en la subcarpeta htdocs
ubicada dentro de la carpeta xampp en el disco :C).

![imagen](https://user-images.githubusercontent.com/43209755/214968223-b8dea1cf-62d2-46a2-b4eb-478ee80d281a.png)

7. Se copia la ruta de la solución alojada en el servidor Apache y se ejecuta la solución
pegando esta ruta en un navegador, antecedido de ‘/index.php’ (En el caso de XAMPP
esta ruta será localhost/pruebatecnica/index.php).

![imagen](https://user-images.githubusercontent.com/43209755/214968247-1316196d-fcd0-45b9-a643-b43985e52d85.png)

8. Con lo anterior, el navegador muestra la solución ya desplegada.

![imagen](https://user-images.githubusercontent.com/43209755/214968340-39fca252-a9e7-40fc-9fba-7eefb53c3f81.png)

