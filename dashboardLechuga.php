<?php 

session_start();
if(isset($_SESSION['nombreUsuario'])){
    
require('./header.php');

?>

<section class="container py-5">

<h4 class="page-title mt-2 text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Variables Ambientales - Lechuga</font></font></h4>

        

            



                     

<body>

        

        

        <div class="row">

            <div class="col-lg-3 col-md-5">

                <div class="card">

                    <h3 >TEMPERATURA</h3>

                    <div class="card-content">

                        <div class="gauge-temperature GaugeMeter gaugeMeter"  data-theme="green" data-width="16"  data-style="Arch" data-animationstep="0"></div>

                    </div>

                    <p class="value-temperature bg-danger">0 C°</p>

                </div>

            </div>

            <div class="col-lg-3 col-md-5">

                <div class="card">

                    <h3>HUMEDAD</h3>

                    <div class="card-content">

                        <div class="gauge-humidity gaugeMeter" data-theme="blue" data-width="16"  data-style="Arch" data-animationstep="0"></div>

                    </div>  

                    <p class="value-humidity">0 %</p>

                </div>

            </div>

            <div class="col-lg-3 col-md-5">

                <div class="card">

                    <h3 >C02</h3>

                    <div class="card-content">

                        <div class="gauge-gas GaugeMeter gaugeMeter"  data-theme="green" data-width="16"  data-style="Arch" data-animationstep="0"></div>

                    </div>

                    <p class="value-gas">0 %</p>

                </div>

            </div>

            <div class="col-lg-3 col-md-5">

                <div class="card">

                    <h3 >TEM AGUA</h3>

                    <div class="card-content">

                        <div class=" gauge-agua GaugeMeter gaugeMeter"  data-theme="green" data-width="16"  data-style="Arch" data-animationstep="0"></div>

                        </div>

                    <p class="value-agua">0 C°</p>

                </div>

                    </div>



                    </section>

<script type='text/javascript' src="js/jquery-3.5.1.min.js"></script>

<script type='text/javascript' src="js/gauge-meter.js"></script>

<script>

    $(document).ready(function () {



       setInterval(charts, 1500);



    });



    function charts(){



        $.ajax({

            url:"https://proyectosw.cl/backend/getData.php",

            type:"POST",

            dataType:"json",

            success:function(data){

                

                $(".gauge-temperature").gaugeMeter({ percent: data.TEMPERATURA*100/50});

                $(".value-temperature").html(data.TEMPERATURA+" C°");    

                $(".gauge-humidity").gaugeMeter({ percent: data.HUMEDAD});

                $(".value-humidity").html(data.HUMEDAD+" %");

                $(".gauge-gas").gaugeMeter({ percent: data.GAS});

                $(".value-gas").html(data.GAS+" %");

                $(".gauge-agua").gaugeMeter({ percent: data.AGUA});

                $(".value-agua").html(data.AGUA+" C°");





            }

        });



    }



</script>


</body>

</html>
<?php
}
else{
    header("location: https://proyectosw.cl/login.php");
}
?>