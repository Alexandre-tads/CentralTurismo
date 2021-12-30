<?php
$titulo_pagina = "Central Turismo"; // Definindo nome da página

require_once "Controle/ControleListarUsuarios.php";

include("Visao/include/header.php");
include("Visao/include/Menu.php");
include("Visao/include/MensagemDeAlerta.php");

//var_dump($array_usuarios);
?>

<section class="container">
    <div class="row">
        <div class="col-12 mt-4">
            
        </div> 
    </div>   
    
    <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
              <img
                class="pt-7 pt-md-0 hero-img"
                src="assets/img/hero/hero-img.png"
                alt="hero-header"
              />
            </div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              
              <h4 class="fw-bold text-danger mb-3">
                
                Melhores destinos em todo o mundo
              </h4>
              <h1 class="hero-title">
                Viaje, aproveite e viva uma vida nova e plena
              </h1>

</section>

<?php
include("Visao/include/rodape.php");
?>