<div class="detailBox">
    <div class="titleBox">
      <label>Comentarios</label>
    </div>
    <div class="actionBox">
        <ul class="commentList">
            <?php
                $conexion = mysqli_connect("localhost","root","","comentario");

                if(isset($_POST['submit']))  {
                    $nombre = $_POST['name'];
                    $comentario = $_POST['comentario'];
                    $hora = date('H:i d/m/Y');
                    $lenguaje = $_POST['lenguaje'];

                    //preparamos stmt
                    $stmt = $conexion->prepare("INSERT INTO tablacomentario(nombre, comentario, fecha_hora, lenguaje) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("ssss", $nombre, $comentario, $hora, $lenguaje);
                    $stmt->execute();
                    $stmt->close();
                }

                if($resultado = $conexion->query("SELECT * from tablacomentario")) {
                    if (mysqli_num_rows($resultado) > 0) {
                        while($row = mysqli_fetch_assoc($resultado)) {
                            echo '<li>';
                                echo '<div class="commentText">';
                                    echo "<p class='nombre'>".$row['nombre']."</p><p>".$row ['lenguaje']."</p><p>".$row['comentario']."</p><span class='date sub-text'>";
                                
                                echo '</div>';
                            echo '</li>';
                        }
                    }
                }else {
                    echo "Falló la sentencia: (" . $conexion->errno . ") " . $conexion->error; 
                }
                mysqli_close($conexion);
            ?>
        </ul>
        <form class="form-inline" role="form" action="#" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeHolder="Nombre de usuario" required>
                <input type="text" class="form-control" name="lenguaje" placeHolder="Lenguaje">
                <textarea class="form-control" maxlength="128" name="comentario" placeHolder="Máximo 150 caracteres"></textarea>
                <input type="submit" class="btn btn-dark" name="submit" value="Añadir">
            </div>
        </form>
    </div>
</div>