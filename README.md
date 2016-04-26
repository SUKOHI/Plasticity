# Plasticity
A Laravel package to download file with utf8 file name.
(This is for Laravel 4.2. [For Laravel 5](https://github.com/SUKOHI/Plasticity))

# Installation

Execute composer command.

    composer require sukohi/plasticity:1.*

Register the service provider in app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\Plasticity\PlasticityServiceProvider',
    )

Also alias

    'aliases' => array(  
        ...Others...,  
        'Plasticity' => 'Sukohi\Plasticity\Facades\Plasticity',
    )

# Usage

    $file = public_path('example.jpg');
    $name = '日本語.jpg';
    return Plasticity::download($file, $name);
        
License
====

This package is licensed under the MIT License.

Copyright 2016 Sukohi Kuhoh
