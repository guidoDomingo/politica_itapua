<?php

$item = null;
$valor = null;
$tabla = null;

$fileros = ModeloLider::reporteFileros($tabla,$item, $valor);

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
  
      <h3 class="box-title">Fileros con sus votantes</h3>

    </div>

	<div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabla de Fileros</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-striped tablas">

            <thead>

              <tr>
                <th style="width:10px">#</th>
                <th>Cantidad de votantes</th>
                <th>Filero</th>
                <!-- <th>Zona</th> -->
                <th>Votante</th>
                <th>PC</th>
                <th>Ya voto</th>
    
              </tr>

            </thead>

            <tbody>

              <?php


              foreach ($fileros as $key => $value) {
                
                if($value['ya_voto'] == 1){
                    $mensaje = "<td class='veedor_voto'>Ya voto</td>";
                }else{
                    $mensaje = "<td class='veedor_no_voto'>No voto</td>";
                }

                if($value['paso_pc'] == 1){
                    $mensaje_pc = "<td class='veedor_voto'>Ya Paso</td>";
                }else{
                    $mensaje_pc = "<td class='veedor_no_voto'>No Paso</td>";
                }

                echo '
                             <tr style="text-align:center">
                                  <td>' . ($key + 1) . '</td> 
                                  <td>' . $value['count'].'</td>
                                  <td>' . $value['filero'] . '</td>
                                  <td>' . $value['votante'] . '</td>
                                  '.$mensaje_pc.' 
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

