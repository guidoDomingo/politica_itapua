
<div class="content-wrapper">

<section class="content-header d-flex justify-content-between">
 
 <h1>
   
   Administrar Filero
 
 </h1>

 <ol class="breadcrumb ">
   
   <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio /</a></li>
   
   <li class="active" style="margin-left:7px">Administrar Filero</li>
 
 </ol>

</section>

<section class="content">

 <div class="box">

   <div class="box-header with-border mb-2">

     <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarLider">
       
       Agregar Filero

     </button>

   </div>

   <div class="card">
           <div class="card-header">
             <h3 class="card-title">Tabla de Fileros</h3>
           </div>
           <!-- /.card-header -->
           <div class="card-body">
             <table id="example1" class="table table-bordered table-striped tablas">
               
               <thead>
      
                  <tr>
                    
                    <th style="width:10px">#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>cedula</th>
                    <th>Acciones</th>

                  </tr> 

                 </thead>

                 <tbody>

                       <?php

                       $item = null;
                       $valor = null;

                      $lider = ControladorLider::ctrMostrarFileros($item, $valor);


                      foreach ($lider as $key => $value){
                        
                         echo ' <tr style="text-align:center">
                                 <td>'.($key+1).'</td>
                                 <td>'.$value["nombre"].'</td>
                                 <td>'.$value["apellido"].'</td>
                                 <td>'.$value["cedula"].'</td>
                                 <td>

                                   <div class="btn-group">
                                       
                                     <button class="btn btn-warning btnEditarFilero" idFilero="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarLider"><i class="fa fa-pencil-alt"></i></button>

                                     <button class="btn btn-danger btnEliminarFilero" idFilero="'.$value["id"].'"><i class="fa fa-times"></i></button>

                                   </div>  

                                 </td>

                               </tr>';
                       }


                       ?> 

                 </tfoot>

             </table>

           </div>
           <!-- /.card-body -->
   </div>

 </div>

</section>

</div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarLider" class="modal fade" role="dialog">

<div class="modal-dialog">

 <div class="modal-content">

   <form role="form" method="post" enctype="multipart/form-data">

     <!--=====================================
     CABEZA DEL MODAL
     ======================================-->

      <div class="modal-header d-flex justify-content-between" style="background:#3c8dbc; color:white">
       <div>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <div>
         <h4 class="modal-title">Agregar Filero</h4>
       </div>

     </div>

     <!--=====================================
     CUERPO DEL MODAL
     ======================================-->

     <div class="modal-body">

       <div class="box-body">

          <!-- ENTRADA PARA la cedula -->

          <div class="form-group">
           
           <div class="input-group">
           
             <button class="btn btn-outline-secondary" type="button">
                 <i class="fa fa-lock"></i>
             </button> 

             <input type="text" class="form-control input-lg" id="validarCedula" name="nuevoCedula" placeholder="Ingresar cedula" required>

           </div>

         </div>

         <!-- ENTRADA PARA EL NOMBRE -->
         
         <div class="form-group">
           
           <div class="input-group">
           
             <button class="btn btn-outline-secondary" type="button">
                 <i class="fa fa-user"></i>
             </button> 

             <input type="text" class="form-control input-lg" name="nuevoNombre" id="nuevoNombre" placeholder="Ingresar nombre" required>

           </div>

         </div>

         <!-- ENTRADA PARA EL Apellido -->

          <div class="form-group">
           
           <div class="input-group">
           
             <button class="btn btn-outline-secondary" type="button">
                 <i class="fa fa-key"></i>
             </button>  

             <input type="text" class="form-control input-lg" name="nuevoApellido" placeholder="Ingresar apellido" id="nuevoApellido" required>

           </div>

         </div>

       </div>

     </div>

     <!--=====================================
     PIE DEL MODAL
     ======================================-->

     <div class="modal-footer">

       <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

       <button type="submit" class="btn btn-primary">Guardar Filero</button>

     </div>

     <?php

       $crearLider = new ControladorLider();
       $crearLider -> ctrCrearFilero();

     ?>

   </form>

 </div>

</div>

</div>

<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div id="modalEditarLider" class="modal fade" role="dialog">

<div class="modal-dialog">

 <div class="modal-content">

   

    <form role="form" method="post" enctype="multipart/form-data">

     <!--=====================================
     CABEZA DEL MODAL
     ======================================-->

      <div class="modal-header d-flex justify-content-between" style="background:#3c8dbc; color:white">
       <div>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <div>
         <h4 class="modal-title">Agregar Puntero</h4>
       </div>

     </div>

     <!--=====================================
     CUERPO DEL MODAL
     ======================================-->

     <div class="modal-body">

       <div class="box-body">

         <!-- ENTRADA PARA EL NOMBRE -->
         
         <div class="form-group">
           
           <div class="input-group">
           
             <button class="btn btn-outline-secondary" type="button">
                 <i class="fa fa-user"></i>
             </button> 

             <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre" required>

             <input type="hidden" class="form-control input-lg" name="idPersona" id="idPersona" required>
           </div>

         </div>

         <!-- ENTRADA PARA EL Apellido -->

          <div class="form-group">
           
           <div class="input-group">
           
             <button class="btn btn-outline-secondary" type="button">
                 <i class="fa fa-key"></i>
             </button>  

             <input type="text" class="form-control input-lg" name="editarApellido"  id="editarApellido" required>

           </div>

         </div>

         <!-- ENTRADA PARA LA ciudad -->

          <div class="form-group">
           
           <div class="input-group">
           
             <button class="btn btn-outline-secondary" type="button">
                 <i class="fa fa-lock"></i>
             </button> 

             <input type="text" class="form-control input-lg" name="editarCiudad" id="editarCiudad" required>

           </div>

         </div>

         <!-- ENTRADA PARA SELECCIONAR SU barrio -->

         <div class="form-group">
           
           <div class="input-group">
           
             <button class="btn btn-outline-secondary" type="button">
                 <i class="fa fa-lock"></i>
             </button> 

             <input type="text" class="form-control input-lg" name="editarBarrio" id="editarBarrio" required>

           </div>

         </div>

         <!-- ENTRADA PARA SUBIR FOTO -->

          <div class="form-group">
           
           <div class="input-group">
           
             <button class="btn btn-outline-secondary" type="button">
                 <i class="fa fa-lock"></i>
             </button> 

             <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" required>

           </div>

         </div>

             <!-- ENTRADA PARA la cedula -->

          <div class="form-group">
           
           <div class="input-group">
           
             <button class="btn btn-outline-secondary" type="button">
                 <i class="fa fa-lock"></i>
             </button> 

             <input type="text" class="form-control input-lg" name="editarCedula" id="editarCedula" required>

           </div>

         </div>

              <!-- ENTRADA PARA la zona -->

          <div class="form-group">
           
           <div class="input-group">
           
             <button class="btn btn-outline-secondary" type="button">
                 <i class="fa fa-lock"></i>
             </button> 

             <input type="text" class="form-control input-lg" name="editarZona" id="editarZona" required>

           </div>

         </div>

       </div>

     </div>

     <!--=====================================
     PIE DEL MODAL
     ======================================-->

     <div class="modal-footer">

       <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

       <button type="submit" class="btn btn-primary">Actualizar Puntero</button>

     </div>

     <?php

       $editarLider = new ControladorLider();
       $editarLider -> ctrEditarLider();

     ?> 

 

   </form>



 </div>

</div>

</div>

<?php

$borrarLider = new ControladorLider();
$borrarLider -> ctrBorrarLider();

?> 


