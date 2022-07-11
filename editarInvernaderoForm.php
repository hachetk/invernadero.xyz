<?php 
  require('./header.php'); 
  include './backend/connect.php';
  $con=conectar();
  $ID_INVERNADERO=$_GET['id'];
  $query=mysqli_query($con,"SELECT * FROM invernadero WHERE ID_INVERNADERO='$ID_INVERNADERO'");
  //$data=mysqli_fetch_array($query);
?>
    <div class="container py-5">
        <h3 class="text-center">Editar Invernadero</h3>
        <form action="./backend/editarInvernadero.php" class="p-2" method="POST" >
            <?php
                foreach($query as $data){
            ?>
            <div class="row mb-3">
            <input id="prodId" name="ID_INVERNADERO" type="hidden" value="<?php echo $data['ID_INVERNADERO']?>">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
                <input type="text" name="NOMBRE" class="form-control form-control-lg" value="<?php echo $data['NOMBRE']?>" required>
                <div class="invalid-feedback">El nombre es requerido!</div>
            </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ubicacion:</label>
                <input type="text" name="UBICACION" class="form-control form-control-lg" value="<?php echo $data['UBICACION']?>" required>
            <div class="invalid-feedback">La ubicacion es requerida!</div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Capacidad:</label>
                <input type="text" name="CAPACIDADCULTIVO" class="form-control form-control-lg" value="<?php echo $data['CAPACIDADCULTIVO']?>" required>
            <div class="invalid-feedback">la capacidad es requerida!</div>
            </div>
            <?php
                };
              ?>
            <div class="mb-3">
            <input type="submit" value="Actualizar" class="btn btn-outline-success btn-block btn-lg" id="add-user-btn">
            </div>
        </form>
    </div>
    <script src="main.js"></script>

</body>
</html>