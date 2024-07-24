<?php include "header.php"; ?>

<?php
    
    echo"
        <div class='row'>

            <div class='col-sm-3'></div>

            <div class='col-sm-6 text-center mb-5'>

                <!-- Carousel -->
                <div id='demo' class='carousel slide' data-bs-ride='carousel' style='margin:auto;'>

                    <!-- Indicators/dots -->
                    <div class='carousel-indicators'>
                        <button type='button' data-bs-target='#demo' data-bs-slide-to='0' class='active'></button>
                        <button type='button' data-bs-target='#demo' data-bs-slide-to='1'></button>
                        <button type='button' data-bs-target='#demo' data-bs-slide-to='2'></button>
                    </div>
                
                    <!-- The slideshow/carousel -->
                    <div class='carousel-inner'>
                        <div class='carousel-item active'>
                            <img src='img/switch.jpg' alt='Joaninha Vermelha - Foto 01' class='d-block w-100'>
                        </div>
                        <div class='carousel-item'>
                            <img src='img/switch.jpg' alt='Joaninha Vermelha - Foto 02' class='d-block w-100'>
                        </div>
                        <div class='carousel-item'>
                            <img src='img/switch.jpg' alt='Joaninha Vermelha - Foto 03' class='d-block w-100'>
                        </div>
                    </div>
                
                    <!-- Left and right controls/icons -->
                    <button class='carousel-control-prev' type='button' data-bs-target='#demo' data-bs-slide='prev'>
                        <span class='carousel-control-prev-icon'></span>
                    </button>
                    <button class='carousel-control-next' type='button' data-bs-target='#demo' data-bs-slide='next'>
                        <span class='carousel-control-next-icon'></span>
                    </button>
                </div>
                <h2>NOME DO PRODUTO</h2>
                <h3>R$ PREÇO</h3>
                <br>
                <a href='#realizarCompra.html' class='btn btn-primary text-center'>Comprar</a>
            
            </div>

        </div>
    ";

?>

<?php include("footer.php"); ?>