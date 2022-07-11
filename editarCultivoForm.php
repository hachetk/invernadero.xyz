<?php 
  require('./header.php'); 
  include './backend/connect.php';
  $con=conectar();
  $ID_CULTIVO=$_GET['id'];
  $query=mysqli_query($con,"SELECT * FROM cultivo WHERE ID_CULTIVO='$ID_CULTIVO'");
  //$data=mysqli_fetch_array($query);

?>
    <div class="container py-5">
        <h3 class="text-center">Editar Cultivo</h3>
        <form action="./backend/editarCultivo.php" class="p-2" method="POST" >
            <?php
                foreach($query as $data){
            ?>
            <input id="prodId" name="ID_CULTIVO" type="hidden" value="<?php echo $data['ID_CULTIVO']?>">
            <div class="row mb-3">
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Invernadero:</label>
                <select name="ID_INVERNADERO" class="form-select" aria-label="Default select example" >

                    <option value="<?php echo $data['ID_INVERNADERO']?>"><?php echo $data['NOMBRE']?></option>
                </select>
                <div class="invalid-feedback">El invernadero es requerido</div>
              </div>
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
              <input type="text" name="NOMBRE" class="form-control form-control-lg" placeholder="Ingrese el nombre del cultivo" value="<?php echo $data['NOMBRE']?>" required>
              <div class="invalid-feedback">El nombre es requerido!</div>
            </div>

            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempMax:</label>
                    <input type="text" name="TEMPERATURAMAX" class="form-control form-control-lg" placeholder="" value="<?php echo $data['TEMPERATURAMAX']?>" required >
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempMin:</label>
                    <input type="text" name="TEMPERATURAMIN" class="form-control form-control-lg" placeholder="" value="<?php echo $data['TEMPERATURAMIN']?>" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
            </div>
            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">HumedadMax:</label>
                    <input type="text" name="HUMEDADMAX" class="form-control form-control-lg" placeholder="" value="<?php echo $data['HUMEDADMAX']?>" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">HumedadMin:</label>
                    <input type="text" name="HUMEDADMIN" class="form-control form-control-lg" placeholder="" value="<?php echo $data['HUMEDADMIN']?>" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
            </div>
            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempAguaMax:</label>
                    <input type="text" name="TEMPERATURAAGUAMAX" class="form-control form-control-lg" placeholder="" value="<?php echo $data['TEMPERATURAAGUAMAX']?>" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempAguaMin:</label>
                    <input type="text" name="TEMPERATURAAGUAMIN" class="form-control form-control-lg" placeholder="" value="<?php echo $data['TEMPERATURAAGUAMIN']?>" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
            </div>
            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Co2Max:</label>
                    <input type="text" name="CO2MAX" class="form-control form-control-lg" placeholder="" value="<?php echo $data['CO2MAX']?>" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Co2Min:</label>
                    <input type="text" name="CO2MIN" class="form-control form-control-lg" placeholder="" value="<?php echo $data['CO2MIN']?>" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
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