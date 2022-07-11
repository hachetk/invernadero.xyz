<?php 

session_start();
if(isset($_SESSION['nombreUsuario'])){
    
require('./header.php');

include './backend/connect.php';

  $con=conectar();

  $sql="SELECT * FROM invernadero";

  $query=mysqli_query($con,$sql);

  $data=mysqli_fetch_array($query);

?>

<!-- Add New User Modal Start -->

<div class="modal fade" tabindex="-1" id="addNewUserModal">

    <div class="modal-dialog modal-dialog-centered">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title text-primary">Agregar Nuevo Invernadero</h5>

          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

        </div>

        <div class="modal-body">

          <form action="https://proyectosw.cl/backend/registrarInvernadero.php" class="p-2" method="POST">

            <div class="row mb-3">

              <div class="col">

                <label for="exampleFormControlInput1" class="form-label">Nombre:</label>

                <input type="text" name="NOMBRE" class="form-control form-control-lg" placeholder="Ingrese el nombre del invernadero" required>

                <div class="invalid-feedback">El nombre es requerido</div>

              </div>

            </div>



            <div class="mb-3">

            <label for="exampleFormControlInput1" class="form-label">Ubicación:</label>

              <input type="text" name="UBICACION" class="form-control form-control-lg" placeholder="Ingrese la ubicacion del invernadero" required>

              <div class="invalid-feedback">La ubicación es requerido!</div>

            </div>



            <div class="mb-3">

            <label for="exampleFormControlInput1" class="form-label">Capacidad:</label>

              <input type="text" name="CAPACIDADCULTIVO" class="form-control form-control-lg" placeholder="Ingrese la capacidad de cultivo" required>

              <div class="invalid-feedback">la capacidad es requerido!</div>

            </div>



            <div class="mb-3">

              <input type="submit" value="Agregar" class="btn btn-success btn-block btn-lg" >

            </div>

          </form>

        </div>

      </div>

    </div>

  </div>

  <!-- Add New User Modal End -->

  <!-- Edit User Modal 2 Start -->



  <!-- Edit User Modal End -->

  

  <div class="container py-5">

    <div class="row mt-4">

      <div class="col-lg-12 d-flex justify-content-between align-items-center">

        <div>

          <h4 class="text-primary">Listado de Invernaderos</h4>

        </div>

        <div>

          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addNewUserModal">Agregar Nuevo invernadero</button>

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

                <th>Nombre</th>

                <th>Ubicación</th>

                <th>Capacidad Cultivo</th>

                

                <th>Acciones</th>

              </tr>

            </thead>

            <tbody>

              <?php

                foreach($query as $data){

              ?>

                  <tr>

                      <th><?php echo $data['ID_INVERNADERO']?></th>

                      <th><?php echo $data['NOMBRE']?></th>

                      <th><?php echo $data['UBICACION']?></th>

                      <th><?php echo $data['CAPACIDADCULTIVO']?></th>

                      

                      <td>

                        <a href="./editarInvernaderoForm.php?id=<?php echo $data['ID_INVERNADERO'];?>" class="text-warning" ><span class="material-symbols-outlined">edit</span></a>

                        <a href="./backend/eliminarInvernadero.php?id=<?php echo $data['ID_INVERNADERO'];?>" class="text-danger"><span class="material-symbols-outlined">cancel</span></a>

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