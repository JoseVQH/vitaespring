<!-- Main content starts -->

<div class="content">
<div id="myModal" class="modal hide">
    <div class="modal-header">
        <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
         <h3>Eliminar</h3>
    </div>
    <div class="modal-body">
        <p>Eliminando Fase de Prospectación del sistema.</p>
        <p>Estas seguro?</p>
    </div>
    <div class="modal-footer">
      <a href="#" id="btnYes" class="btn danger">Si</a>
      <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
    </div>
</div>
  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Opciones del Sistema</a></div>

        <div class="sidebar-inner">
          <?php $data["current"] = "empleados"; $this->load->view("empresa/includes/menu",$data); ?>
        </div>

    </div>

    <!-- Sidebar ends -->

  	<!-- Main bar -->
  	<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
        <!-- Page heading -->
	      <h2 class="pull-left">Empleados 
          <!-- page meta -->
          <span class="page-meta">Lista de empleados.</span>
        </h2>


        <!-- Breadcrumb -->
        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter -->

	    <div class="matter">
        <div class="container-fluid">

   <div class="widget wlightblue">

                <div class="widget-head">
                  <div class="pull-left">Empleados</div>
                       <div class="pull-right">
                        <!--p><a href="<?php echo site_url("fases/nuevo"); ?>" class="btn btn-primary">Nuevo</a></p-->
                      </div>
                  <div class="clearfix"></div>
                </div>

                  <div class="widget-content">
					<?php
					if(isset($mensaje) && !empty($mensaje)){
						echo "<div class=\"alert alert-".$class."\">".$mensaje."</div>";
					}
                    ?>
                    <table class="table  table-bordered " id="estudios-listing">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Fase</th>
                          <!--th></th-->
                        </tr>
                      </thead>
                      <tbody>

                    <?php 
                    if (isset($empleados) && !empty($empleados)) {
                      foreach ($empleados as $empleado) {
                        echo "<tr>
                        <td>".$empleado->id."</td>
                        <td><strong>".$empleado->nombre."</strong></td>
                        <!--td>
                              <a class=\"btn btn-mini btn-warning\" href=\"".site_url("empleados/edit/".$empleado->id)."\"><i class=\"icon-pencil\"></i> </a>
                              <!--a class=\"btn btn-mini btn-danger\" data-id=\"".$empleado->id."\" href=\"".site_url("empleados/delete/".$empleado->id)."\"><i class=\"icon-remove\"></i> </a-->
                        </td-->
                        </tr>";
                      }
                    }else{
                      echo "<tr>";
                      echo "<td colspan=\"4\">No se encontraron registros grabados.</td>";
                      echo "</tr>";
                    }
                    ?>
                      </tbody>
                    </table>

                  </div>

                </div>


              </div>

          </div>       

        </div>
		  </div>

		<!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->	    	
   <div class="clearfix"></div>

</div>
<!-- Content ends -->


 

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 