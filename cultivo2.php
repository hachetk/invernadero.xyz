<?php 

session_start();
if(isset($_SESSION['nombreUsuario'])){
    
require('./header.php');

  include './backend/connect.php';

  $con=conectar();

  $sql="SELECT * FROM invernadero WHERE RUT='13529601-5'";

  $query=mysqli_query($con,$sql);







  $queryy=mysqli_query($con,"SELECT * FROM cultivo");

  $dataCultivo=mysqli_fetch_array($queryy);

?>



<!-- Add New User Modal Start -->

<div class="modal fade" tabindex="-1" id="addNewUserModal">

    <div class="modal-dialog modal-dialog-centered">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title text-primary">Agregar Cultivo</h5>

          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

        </div>

        <div class="modal-body">

          <form action="https://proyectosw.cl/backend/registrarCultivo.php" id="add-user-form" class="p-2" method="POST">

            <div class="row mb-3">

              <div class="col">

                <label for="exampleFormControlInput1" class="form-label">Invernadero:</label>

                <select name="ID_INVERNADERO" class="form-select" aria-label="Default select example" >

                    <option selected>Selecciona un invernadero</option>

                    <?php

                      foreach($query as $data){

                    ?>

                    <option value="<?php echo $data['ID_INVERNADERO']?>"><?php echo $data['NOMBRE']?></option>

                    <?php

                      };

                    ?>

                </select>

                <div class="invalid-feedback">El invernadero es requerido</div>

              </div>

            </div>



            <div class="mb-3">

            <label for="exampleFormControlInput1" class="form-label">Nombre:</label>

              <input type="text" name="NOMBRE" class="form-control form-control-lg" placeholder="Ingrese el nombre del cultivo" required>

              <div class="invalid-feedback">El nombre es requerido!</div>

            </div>



            <div class="row mb-3 gx-3">

                <div class="col">

                    <label for="exampleFormControlInput1" class="form-label">TempMax:</label>

                    <input type="text" name="TEMPERATURAMAX" class="form-control form-control-lg" placeholder="" required>

                    <div class="invalid-feedback">El nombre es requerido!</div>

                </div>

                <div class="col">

                    <label for="exampleFormControlInput1" class="form-label">TempMin:</label>

                    <input type="text" name="TEMPERATURAMIN" class="form-control form-control-lg" placeholder="" required>

                    <div class="invalid-feedback">El nombre es requerido!</div>

                </div>

            </div>

            <div class="row mb-3 gx-3">

                <div class="col">

                    <label for="exampleFormControlInput1" class="form-label">HumedadMax:</label>

                    <input type="text" name="HUMEDADMAX" class="form-control form-control-lg" placeholder="" required>

                    <div class="invalid-feedback">El nombre es requerido!</div>

                </div>

                <div class="col">

                    <label for="exampleFormControlInput1" class="form-label">HumedadMin:</label>

                    <input type="text" name="HUMEDADMIN" class="form-control form-control-lg" placeholder="" required>

                    <div class="invalid-feedback">El nombre es requerido!</div>

                </div>

            </div>

            <div class="row mb-3 gx-3">

                <div class="col">

                    <label for="exampleFormControlInput1" class="form-label">TempAguaMax:</label>

                    <input type="text" name="TEMPERATURAAGUAMAX" class="form-control form-control-lg" placeholder="" required>

                    <div class="invalid-feedback">El nombre es requerido!</div>

                </div>

                <div class="col">

                    <label for="exampleFormControlInput1" class="form-label">TempAguaMin:</label>

                    <input type="text" name="TEMPERATURAAGUAMIN" class="form-control form-control-lg" placeholder="" required>

                    <div class="invalid-feedback">El nombre es requerido!</div>

                </div>

            </div>

            <div class="row mb-3 gx-3">

                <div class="col">

                    <label for="exampleFormControlInput1" class="form-label">Co2Max:</label>

                    <input type="text" name="CO2MAX" class="form-control form-control-lg" placeholder="" required>

                    <div class="invalid-feedback">El nombre es requerido!</div>

                </div>

                <div class="col">

                    <label for="exampleFormControlInput1" class="form-label">Co2Min:</label>

                    <input type="text" name="CO2MIN" class="form-control form-control-lg" placeholder="" required>

                    <div class="invalid-feedback">El nombre es requerido!</div>

                </div>

            </div>



            <div class="mb-3">

              <input type="submit" value="Registrar" class="btn btn-success btn-block btn-lg" id="add-user-btn">

            </div>

          </form>

        </div>

      </div>

    </div>

  </div>

  <!-- Add New User Modal End -->



  <!-- Edit User Modal End -->

  

  <div class="container py-5">

    <div class="row mt-4">

      <div class="col-lg-12 d-flex justify-content-between align-items-center">

        <div>

          <h4 class="text-primary">Listado de Cultivos</h4>

        </div>

        <div>

          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addNewUserModal">Agregar Nuevo Cultivo</button>

        </div>

      </div>

    </div>

    <hr>

    <div class="row">

      <div class="col-lg-12">

        <div id="showAlert"></div>

      </div>

    </div>

    <div class="row">

      <div class="col-lg-12">

        <div class="table-responsive">

          <table class="table table-striped table-bordered text-center">

            <thead>

              <tr>

                <th>ID</th>

                <th>Invernadero</th>

                <th>Nombre</th>

                <th>TempMax</th>

                <th>TempMin</th>

                <th>HumedadMax</th>

                <th>HumedadMin</th>

                <th>TempAguaMax</th>

                <th>TempAguaMin</th>

                <th>Co2Max</th>

                <th>Co2Min</th>

                

                <th>Acciones</th>

              </tr>

            </thead>

            <tbody>

            <?php

                foreach($queryy as $dataCultivo){

              ?>

                  <tr>

                      <th><?php echo $dataCultivo['ID_CULTIVO']?></th>

                      <th><?php echo $dataCultivo['ID_INVERNADERO']?></th>

                      <th><?php echo $dataCultivo['NOMBRE']?></th>

                      <th><?php echo $dataCultivo['TEMPERATURAMAX']?></th>

                      <th><?php echo $dataCultivo['TEMPERATURAMIN']?></th>

                      <th><?php echo $dataCultivo['HUMEDADMAX']?></th>

                      <th><?php echo $dataCultivo['HUMEDADMIN']?></th>

                      <th><?php echo $dataCultivo['TEMPERATURAAGUAMAX']?></th>

                      <th><?php echo $dataCultivo['TEMPERATURAAGUAMIN']?></th>

                      <th><?php echo $dataCultivo['CO2MAX']?></th>

                      <th><?php echo $dataCultivo['CO2MIN']?></th>

                      

                      <td>

                        <a href="https://proyectosw.cl/editarCultivoForm.php?id=<?php echo $dataCultivo['ID_CULTIVO'];?>" class="text-warning" ><span class="material-symbols-outlined">edit</span></a>

                        <a href="https://proyectosw.cl/backend/eliminarCultivo.php?id=<?php echo $dataCultivo['ID_CULTIVO'];?>" class="text-danger"><span class="material-symbols-outlined">cancel</span></a>

                        <a href="https://proyectosw.cl/dashboardLechuga.php" class="text-info"><span class="material-symbols-outlined">visibility</span></a>

                      </td>

                  </tr>

              <?php

                };

              ?>

            </tbody>

          </table>

        </div>

      </div>

    </div>

  </div>

  <script src="main.js"></script>



</body>

</html>

<?php
}
else{
    header("location: https://proyectosw.cl/login.php");
}
?>