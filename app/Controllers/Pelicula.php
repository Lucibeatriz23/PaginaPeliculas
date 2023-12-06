<?php

namespace App\Controllers;

use APP\Models\PeliculaModel;

class Pelicula extends BaseController
{
    public function index()
     {
        $peliculaModel = new PeliculaModel();
       
        $data = [
            'tituloPagina' => 'Las mejores peliculas',
             'peliculas' => $peliculaModel->findAll()

        ];

        echo view('index', $data);
    }
    
}