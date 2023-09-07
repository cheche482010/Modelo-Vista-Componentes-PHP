-# Plantilla de Proyecto PHP MVC con PDO

Esta plantilla de proyecto proporciona una estructura base para aplicaciones web desarrolladas en PHP utilizando el patrón Modelo-Vista-Controlador (MVC) y el acceso a la base de datos PDO. La estructura de carpetas y archivos está diseñada para ayudarte a organizar tu código de manera efectiva.

## Estructura de Carpetas y Archivos

El proyecto se organiza de la siguiente manera:

- **.htaccess**: Archivo de configuración para manejar las rutas amigables y otras configuraciones de Apache.

- **README.md**: Este archivo que proporciona información sobre la estructura y el propósito del proyecto.

- **app**: Carpeta principal que contiene la lógica de la aplicación.

  - **Components**: Carpeta para componentes reutilizables de la aplicación, como `ButtonComponent.php` y `Component.php`.

  - **Controllers**: Carpeta que almacena los controladores de la aplicación, como `HomeController.php`.

  - **Models**: Carpeta que contiene los modelos de la aplicación para interactuar con la base de datos, como `BaseModel.php` y `ExampleModel.php`.

  - **Views**: Carpeta para las vistas de la aplicación, como `404.php` y `home.php`.

- **composer.json** y **composer.lock**: Archivos de configuración de Composer, utilizados para gestionar las dependencias del proyecto.

- **core**: Carpeta que contiene componentes principales de la aplicación.

  - **Database**: Carpeta para componentes relacionados con la base de datos, como `Connection.php`.

  - **FrontController.php**: Controlador frontal que maneja todas las solicitudes y enruta hacia los controladores apropiados.

  - **Router.php**: Enrutador de la aplicación que establece las rutas y las asocia a controladores.

- **public**: Carpeta que contiene recursos públicos y archivos accesibles desde el navegador.

  - **assets**: Carpeta para recursos estáticos, incluyendo subcarpetas para CSS, imágenes, JavaScript y plugins.

  - **index.php**: Punto de entrada principal de la aplicación.

- **vendor**: Carpeta generada por Composer que contiene las dependencias del proyecto.

## Uso de PDO y MVC

La plantilla utiliza PDO (PHP Data Objects) para interactuar con la base de datos, lo que proporciona una capa de abstracción segura y eficiente. La arquitectura MVC se utiliza para separar la lógica de la aplicación en modelos, vistas y controladores, lo que facilita la mantenibilidad y escalabilidad del proyecto.

## Configuración

Antes de utilizar el proyecto, asegúrate de ejecutar `composer install` para instalar las dependencias especificadas en `composer.json`.

## Contribuir

Si deseas contribuir al proyecto o personalizarlo para tu aplicación específica, no dudes en hacer un fork y enviar pull requests. Tus contribuciones son bienvenidas.

## Licencia

Este proyecto se distribuye bajo la licencia , lo que significa que puedes usarlo de forma gratuita para tus propios proyectos.