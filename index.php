<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['enviar'])){
        $arquivo = $_FILES['file'];
        $extensao = pathinfo($arquivo['name'],PATHINFO_EXTENSION);
        $ex_permitidos = array('jpg','jpeg','png','gif');

        if(!in_array(strtolower($extensao),$ex_permitidos))
        {
            die("Voce não pode fazer upload desse tipo de arquivo");
        }else{
            print'<script>alert("Upload efetuado com sucesso")
            </script>';
            move_uploaded_file($arquivo['tmp_name'],'uploads/'. $arquivo['name']);
        }
    }

    
    
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
    <label for="">Selecione sua imagem</label>
    <input type="file" name="file">
    <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    $imagem = 'uploads/download.jpg';
    ?>  
    <img src="<?php echo $imagem; ?>" class="rosto" alt="">

    </body>
    </html>