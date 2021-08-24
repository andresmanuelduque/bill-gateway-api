# API para la administración de facturas

Este proyecto contiene elservicio API GATEWAY para la adminsitracion y pago de facturas

## Comenzando 

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._


### Pre-requisitos 📋

```
Para configurar el proyecto necesitas:

Docker
```

### Instalación 🔧
Ir a la raiz del proyecto

* Configurar las variables de entorno

```
IVA_PERCENT = Porcentaje de iva para el calculo de impuestos)
PAY_PAGE_URL = Url de la ubicacion de la aplicación Administrador de Facturas (dte-frontend)
APP_KEY= Key de la app (debe coincidir con el key del proyecto bill-manage-api)
JWT_KEY= Key del JWT (debe coincidir con el key del proyecto bill-manage-api)
USER_SERVICE_BASE_URL= Ruta del microservicio de usuarios
BILL_SERVICE_BASE_URL= Ruta del microservicio de facturas
```

* Asegurarnos que existe la red "bill-network" si no existe correr el siguiente comando
```
> docker network create bill-network
```

* Ejecutar el siguiente comando para levantar el contenedor de lumen
```
>docker-compose up
```

## Construido con 🛠️

* [Lumen](https://lumen.laravel.com/docs/8.x) - El framework web usado
* [Composer](https://getcomposer.org/doc/) - Manejador de dependencias

## Autor ✒️

* **Andrés Duque** - [andres-duque](https://github.com/andresmanuelduque)
