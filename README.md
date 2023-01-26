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

2. Se abre una consola MySQL y se entra con las credenciales propias del equipo (para el
caso de la solución, las credenciales se han configurado en el archivo **conexion.php con
usuario root y una clave vacía**).

3. Al abrir la consola MySQL, se copian los contenidos ubicados en el archivo gemasas.sql y
se pegan dentro de esta.

![imagen](https://user-images.githubusercontent.com/43209755/214956804-65396081-490d-4c73-9ae8-43791c08455e.png)

4. Se activa el servidor Apache y se copia todo el repositorio (incluyendo la carpeta que lo
contiene) dentro de la ubicación determinada para su ejecución (como ejemplo, XAMPP
ubica sus soluciones en la subcarpeta htdocs ubicada dentro de la carpeta xampp en el
disco :C).

![imagen](https://user-images.githubusercontent.com/43209755/214956833-8b1361b9-200f-45fa-9fc1-82e4f92108ef.png)

5. Se ubica la ruta de dirección del servidor Apache activado y se ejecuta la solución
colocando la ruta en un navegador, antecedido de ‘/index.php’.

![imagen](https://user-images.githubusercontent.com/43209755/214956895-d30b2d9b-aa12-4b87-8a6d-d8358f7d675a.png)

6. Con lo anterior, el navegador muestra la solución ya desplegada

![imagen](https://user-images.githubusercontent.com/43209755/214956928-09409568-2f9b-4b91-a5be-2385870dfd14.png)
