<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Practica Despliegue Lenguajes de programacion</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="contenedor">
            <?php 
                include('includes/header.inc');
                include('includes/nav.inc');
            ?>
            
            <section>
                <div class="parrafos">
                    <h4 id="h4java">JAVA</h4>
                    <p id="java">Java es un lenguaje de programación de propósito general, 
                        concurrente, orientado a objetos, que fue diseñado específicamente 
                        para tener tan pocas dependencias de implementación como fuera posible. 
                        Su intención es permitir que los desarrolladores de aplicaciones escriban 
                        el programa una vez y lo ejecuten en cualquier dispositivo (conocido en inglés como WORA, 
                        o "write once, run anywhere"), lo que quiere decir que el código que es ejecutado en 
                        una plataforma no tiene que ser recompilado para correr en otra. 
                        Java es, a partir de 2012, uno de los lenguajes de programación más populares en uso, 
                        particularmente para aplicaciones de cliente-servidor de web, 
                        con unos diez millones de usuarios reportados
                    </p>
                </div>
                <div>
                    <iframe width="550" height="300" src="https://www.youtube.com/embed/Z0F7sJaOQtw" 
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </section>

            <?php
                include('includes/footer.inc');
            ?>
        </div>
    </body>
</html>