<?php

$item = null;
$valor = null;
$tabla = null;

$fileros = ModeloLider::reporteVotantesSinFileros($tabla,$item, $valor);

$colores = array("red","green","yellow","aqua","purple","blue","cyan","magenta","orange","gold");
$colores = [
  'orange',
  'yellow',
  'green',
  'blue',
  'purple',
  'brown',
  'black',
  'grey',
  'white',
  'indigo',
  'pink',
  'light blue',
  'pale blue',
  'sky blue',
  'dark blue',
  'deep blue',
  'navy blue',
  'Brightblue',
  'olive green',
 ' jet black',
  'apple green',
  'apricot',
  'aquamarine',
  'avocado',
  'beige',
  'cerise',
  'cream',
  'crimson',
  'dusty-pink',
  'emerald',
  'fuchsia',
  'golden',
  'ivory',
  'jade',
  'khaki',
  'lavender',
  'lemon',
  'lilac',
  'lime',
  'magenta',
  'mustard',
  'oatmeal',
  'ochre',
 ' off-white',
  'peach',
  'plum',
  'russet',
  'salmon',
  'sienna',
  'silver',
  'tan',
 ' terra cotta',
  'topaz',
  'tortoiseshell',
  'turquoise',
 ' food colouring',
  'violet'
];



?>

<!--=====================================
PRODUCTOS MÁS VENDIDOS
======================================-->

<div class="box box-default">
	
	<div class="box-header with-border">
  
      <h3 class="box-title">Votantes que pasaron por pc, pero no tienen fileros</h3>

    </div>

	<div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabla de Votantes sin fileros</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-striped tablas">

            <thead>

              <tr>
                <th style="width:10px">#</th>
                <th>Cedula</th>
                <th>Votante</th>
                <!-- <th>Zona</th> -->
                <th>Estado</th>
    
              </tr>

            </thead>

            <tbody>

              <?php


              foreach ($fileros as $key => $value) {
                
                if($value['activo_veedor'] == 1){
                    $mensaje = "<td class='veedor_voto'>Con Filero</td>";
                }else{
                    $mensaje = "<td class='veedor_no_voto'>Sin Filero</td>";
                }

                

                echo '
                             <tr style="text-align:center">
                                  <td>' . ($key + 1) . '</td> 
                                  <td>' . $value['cedula'].'</td>
                                  <td>' . $value['votante'] . '</td>
                                  '.$mensaje.' 
                            </tr>      
                      ';
              }

              ?>

            </tbody>

          </table>

        </div>
        <!-- /.card-body -->
      </div>

</div>

