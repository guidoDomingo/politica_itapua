<div class="content-wrapper">

    <section class="content-header d-flex justify-content-between">

        <h1>

            Reportes Veedor

        </h1>

        <ol class="breadcrumb ">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio /</a></li>

            <li class="active" style="margin-left:7px">Administrar reportes veedor</li>

        </ol>

    </section>

    <section class="content">

        <div class="box">


            <div class="box-body">

                <div class="row">
                    <div class="col-md-12 col-xs-12">

                        <?php

                        include "reporte_fileros.php";

                        ?>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-xs-12">

                        <?php

                        include "votante_sin_filero.php";

                        ?>

                    </div>
                </div>

            </div>

        </div>

    </section>

</div>