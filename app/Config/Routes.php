<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('/saludo', 'Home::saludo');
//$routes->get('/saludar/(:num)', 'Home::saludarPersona/$1');
//Pasar  parametros en las rutas
//$routes->get('/saludar/(:any)', 'Home::saludarPersona/$1/$2');
//$router->get('url','controlador::funcion');
$routes->get('/Pelicula', 'Pelicula::index');
//$routes->presenter('Pelicula');

