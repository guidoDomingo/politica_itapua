<?php

$item = null;
$valor = null;


$votantes = ControladorPuntero::ctrVotanteNombres();

$colores = array("red","green","yellow","aqua","purple","blue","cyan","magenta","orange","gold");
$array1 = [
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
//voto total
$total = ControladorPuntero::ctrPosibleVotanteTotal();

$votosTotales = ControladorPuntero::ctrVotanteTotal();

$faltaVotar = ModeloPuntero::mdlTodaviaNoVotaron("puntero");


?>

<!--=====================================
PRODUCTOS MÁS VENDIDOS
======================================-->

<div class="box box-default">
	
	<div class="box-header with-border">
  
      <h3 class="box-title">Votos totales</h3>

    </div>

	<div class="box-body">
    
      	<div class="row">

	        <div class="col-md-7">

	 			<div class="chart-responsive">
	            
	            <canvas id="pieChart1" height="150"></canvas>
	          
	          	</div>

	        </div>

		    <div class="col-md-5">
		      	
		        <ul class="votosTotales">
      
               <?php


                    $votos = 0;
                    
                    //foreach ($votantes as $key => $value) {

                      
                      //$votos = ControladorPuntero::ctrMostrarCantidadVotante($value["id_lider"]);
                 
                      

                      echo '


                      <li>
                          
                        
                           <p><strong>Total de votos:<strong><span class="pull-right text-white voto" p-5>'.$votosTotales["total"].'</span>
                           </p>
                        
                         

                      </li> 

                      <li>
                     
                         <p><strong>Todavía no votaron:<strong><span class="pull-right text-white voto" p-5>'.$faltaVotar["total"].'</span>
                         </p>
                         

                      </li>



                      ';

                    

             // }

              ?>


          </ul>

		    </div>

		</div>

    </div>

    <div class="box-footer no-padding punteroVotante p-3">
    	
		<ul class="">
			
			 <?php


            $votos = 0;
            
          	foreach ($votantes as $key => $value) {

              
              //$votos = ControladorPuntero::ctrMostrarCantidadVotante($value["id_lider"]);
         
             $contador = $key + 1;

          		echo '


              <li>
						 
    						<spam>'. strval($contador).'</spam> <p>'.$value["nombre"].'<span class="pull-right text-'.$array1[$key].'"> Ya Voto  </span>
    			       </p>
                 

      				</li> ';

            

			}

			?>


		</ul>

    </div>

</div>

<script>
	

  // -------------
  // - PIE CHART -
  // -------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $('#pieChart1').get(0).getContext('2d');

  var pieChart       = new Chart(pieChartCanvas);
  console.log(pieChart);
  var PieData        = [

  <?php



          for($i = 0; $i < count($votantes); $i++){

              $votos = ControladorPuntero::ctrVotanteTotal();
             

              echo '
                 {
                    value    : '.ceil(intval($votos["total"])*100/intval($total["total"])).',
                    color    : "'.$array1[$i].'",
                    highlight: "'.$array1[$i].'",
                    label    : " % de votos"
                  },

              ';

            
          }
    

    
   ?>
  ];
  var pieOptions     = {
    // Boolean - Whether we should show a stroke on each segment
    segmentShowStroke    : true,
    // String - The colour of each segment stroke
    segmentStrokeColor   : '#fff',
    // Number - The width of each segment stroke
    segmentStrokeWidth   : 1,
    // Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    // Number - Amount of animation steps
    animationSteps       : 100,
    // String - Animation easing effect
    animationEasing      : 'easeOutBounce',
    // Boolean - Whether we animate the rotation of the Doughnut
    animateRotate        : true,
    // Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale         : false,
    // Boolean - whether to make the chart responsive to window resizing
    responsive           : true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio  : false,
    // String - A legend template
    legendTemplate       : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<segments.length; i++){%><li><span style=\'background-color:<%=segments[i].fillColor%>\'></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
    // String - A tooltip template
    tooltipTemplate      : '<%=value %> <%=label%>'
  };
  // Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
 pieChart.Doughnut(PieData, pieOptions);

  // -----------------
  // - END PIE CHART -
  // -----------------


</script>