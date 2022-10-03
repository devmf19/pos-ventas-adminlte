<?php

require_once 'controlador/plantilla.controlador.php';
require_once 'controlador/administradores.controlador.php';
require_once 'controlador/clientes.controlador.php';
require_once 'controlador/compras.controlador.php';
require_once 'controlador/marcas.controlador.php';
require_once 'controlador/productos.controlador.php';
require_once 'controlador/proveedores.controlador.php';
require_once 'controlador/ventas.controlador.php';

require_once 'modelo/administrador.php';
require_once 'modelo/cliente.php';
require_once 'modelo/compra.php';
require_once 'modelo/marca.php';
require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';
require_once 'modelo/venta.php';

$plantilla = new ControladorPlantilla();
$plantilla -> strPlantilla();