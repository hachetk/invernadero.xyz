<?php require('./header.php') ?>

<section class="container py-5" >
        <div class="row">
            <div class="col-md-7 ">
                <div class="shadow-lg p-9 mb-9">
                    <form style="margin: auto; width: 700px">
                        <div class="form-group">
                            <h1>Ingreso de Cultivo</h1>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput"> Nombre del Cultivo:</label>
                            <input type="text" class="form-control bg-transparent rounded-pill" id="input" placeholder="Ingrese Nombre del cultivo (Ej:Lechuga,Tomates,etc)">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Temperatura Maxima Del Cultivo:</label>
                            <input type="text" class="form-control bg-transparent rounded-pill" id="inputName" placeholder="Ingrese Temperatura Maxima Del Cultivo">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Temperatura Minima Del Cultivo:</label>
                            <input type="text" class="form-control bg-transparent rounded-pill" id="inputName" placeholder="Ingrese Temperatura Minima Del Cultivo">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Humedad Maxima Del Cultivo:</label>
                            <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Ingrese Humedad Maxima del Cultivo">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Temperatura Maxima De Agua :</label>
                            <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Ingrese Humedad Maxima De Agua">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Temperatura Minima De Agua :</label>
                            <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Ingrese Minima De Agua">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Humedad Maxima Del Cultivo :</label>
                            <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Ingrese Humedad Maxima del Cultivo">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Humedad Minima Del Cultivo :</label>
                            <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Ingrese Humedad Minima del Cultivo">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">CO2 Maximo Del Cultivo :</label>
                            <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Ingrese CO2 Maximo del Cultivo">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">CO2 Minimo Del Cultivo :</label>
                            <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Ingrese CO2 Minimo del Cultivo">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-4">
                                    <button class="btn btn-dark  btn-block">Ingresar Cultivo</button>
                                </div>
                                <div class="form-group col-md-4 col-sm-4">
                                    <button class="btn btn-dark  btn-block">Modificar Cultivo</button>
                                </div>
                                
                            </div>
                        </div>
                    </br>
                    </form>
                    
                </div>
                <div class="col p-4 ">
                    <div class="row p-30" alling="rigth">
                        <div class="col-md-15">
                            <div id="template" class="h-100">
                              <div class="card h-100">
                                <div class="card-header">
                                   <center> <h1 class="h1"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-droplet-half" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                                        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                                      </svg> Cultivos Agregados</h1></center>
                                </div>
                                <div class="card-body overflow-auto">
                                    <div class="row px-2 py-2">
                                      <div class="col-md-8 p-0">
                                          <h6 >Lechugas</h6>
                                          <span class="card-text text-success">3 Cultivos</span>
                                        </div>
                                      </div>
                                  </div>
                                 </div>
                                  <div class="card-footer p-0 bg-primary">
                                  <button class="btn btn-dark btn-lg btn-block"><a href="menu.html"> Mas detalles</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> 

</body>
</html>