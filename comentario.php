    <div class="cajaFormulario">
        <div class="titulo">
            <label>Comentarios</label>
        </div>
            <ul class="listaComentarios">
                <?php
                    $conexion = mysqli_connect("localhost","root","","comentario");

                    if(isset($_POST['submit']))  {
                        $nombre = $_POST['name'];
                        $comentario = $_POST['comentario'];
                        $lenguaje = $_POST['lenguaje'];

                        //preparacion stmt//
                        $stmt = $conexion->prepare("INSERT INTO tablacomentario(nombre, comentario,lenguaje) VALUES (?, ?, ?)");
                        $stmt->bind_param("sss", $nombre, $comentario, $lenguaje);
                        $stmt->execute();
                        $stmt->close();
                    }

                    if($resultado = $conexion->query("SELECT * from tablacomentario")) {
                        if (mysqli_num_rows($resultado) > 0) {
                            while($fila = mysqli_fetch_assoc($resultado)) {
                                echo '<li>';
                                    echo '<div>';
                                        echo "<p class='nombre'>".$fila['nombre']."</p><p> Tipo de lenguaje: ".$fila ['lenguaje']."</p><p>".$fila['comentario']."</p>";

                                    echo '</div>';
                                echo '</li>';
                            }
                        }
                    }else {
                        echo "Error en la sentencia: (" . $conexion->errno . ") " . $conexion->error; 
                    }
                    mysqli_close($conexion);
                ?>
            </ul>
            <form class="form-inline" action="#" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeHolder="Nombre" required>
                    <input type="text" class="form-control" name="lenguaje" placeHolder="Lenguaje">
                    <textarea class="form-control" maxlength="128" name="comentario" placeHolder="Máximo 150 caracteres"></textarea>
                    <input type="submit" class="botonAnadir" name="submit" value="Añadir">
                </div>
            </form>
        </div>
