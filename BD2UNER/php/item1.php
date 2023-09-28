<?php

$itemInicio = '<main>
            <h1>Productos destacados</h1>
            <div class="contenedor-productos">';
            
$item = '<article>
            <figure>
                <img src="img/foco.jpg">
                <p>New</p>
            </figure>
            <div class="item-descripcion">
                <p>Un foco blanco</p>
            </div>
            <div class="item-botonera">
                <span class="icon-eye"></span>
                <span class="icon-cart"></span>
            </div>
        </article>';


$itemFinal = '</div>
        </main>';


$items = $itemInicio;
$cantidadArticulos = 5;

for($i = 0; $i < $cantidadArticulos; $i++){
    $items .= $item;
}

$items .= $itemFinal;

?>