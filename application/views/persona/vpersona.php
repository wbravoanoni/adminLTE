
<div class="col-md-10">
         <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ingresar Nueva Persona</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url()?>cpersonas/guardar">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">DNI</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Ingresa tu DNI" name="txtDni">
                  </div>
                </div>

		    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Ingresa tu apellido paterno" name="txtNombre">
                  </div>
                </div>

                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido Paterno</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Ingresa tu apellido paterno" name="txtApPaterno">
                  </div>
                </div>

                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido Materno</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Ingresa tu apellido materno" name="txtApMaterno">
                  </div>
                </div>

                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Ingresa tu correo" name="txtEmail">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ciudades</label>
                  <div class="col-sm-10">
					<select name="" id="cboCiudad" class="form-control">
						<option value="">Eliga una Ciudad</option>
					</select>
                  </div>
                </div>

                

				<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Fecha Nacimiento</label>
				<div class="col-sm-10">
				<input type="date" name="datFecNac" class="form-control" id="inputEmail3">
				</div>
				</div>

                <h3>Usuario</h3>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Ingresa tu correo" name="txtUsuario">
                  </div>
                </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Clave</label>
                  <div class="col-sm-10">
                    <input type="password" name="txtClave" class="form-control" id="inputEmail3" placeholder="Ingresa tu correo">
                  </div>
                </div>



                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Actualizar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

<script type="text/javascript">
  var baseurl="<?php echo base_url();?>";
</script>



<div class="col-sm-12 box box-primary">
<div class="">
  <table id="tblPersonas" class="table table-bordered">
     <tr>
       <th style="width: 10px">#</th>
<th>Nombre</th>
<th>Paterno</th>
<th>Materno</th>
<th>Ciudad</th>
<th>Email</th>
<th>DNI</th>
<th>fecha Nac</th>
  </tr>
   </table> 
</div>  
</div>

<button id="btnGetPersonas" class="btn btn-default">Buscar</button>

</div>
