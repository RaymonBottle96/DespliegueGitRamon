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
                    <h4 id="h4javascript">JavaScript</h4>
                    <p id="javascript">JavaScript (abreviado comúnmente JS) es un lenguaje de programación interpretado, 
                        dialecto del estándar ECMAScript. Se define como orientado a objetos, 
                        basado en prototipos, imperativo, débilmente tipado y dinámico.
                        Se utiliza principalmente en su forma del lado del cliente (client-side), 
                        implementado como parte de un navegador web permitiendo mejoras en la interfaz de usuario 
                        y páginas web dinámicas
                    </p>
                </div>
                <div>
                    <iframe width="550" height="300" src="https://www.youtube.com/embed/H5NdtjnO2Fk" 
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
                </div>
            </section>
            <?php
                include('includes/footer.inc');
            ?>
        </div>
    </body>
</html>