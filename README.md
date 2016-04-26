# Plasticity
A Laravel package to download file with utf8 file name.
(This is for Laravel 5+. [For Laravel 4.2](https://github.com/SUKOHI/Plasticity/tree/1.0))

# Installation

Execute composer command.

    composer require sukohi/plasticity:2.*

Register the service provider in app.php

    'providers' => array(  
        ...Others...,  
        Sukohi\Plasticity\PlasticityServiceProvider::class,
    )

Also alias

    'aliases' => array(  
        ...Others...,  
        'Plasticity' => Sukohi\Plasticity\Facades\Plasticity::class,
    )

# Usage

    $file = public_path('example.jpg');
    $name = '日本語.jpg';
    return Plasticity::download($file, $name);
        
License
====

This package is licensed under the MIT License.

Copyright 2016 Sukohi Kuhoh
