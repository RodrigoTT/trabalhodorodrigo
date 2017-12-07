<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div class = "classe">
    <?php
        $name = $_POST['name'];

        echo "Obrigado por viajar com a Tonácio, sr(a) $name!
        Logo entraremos em contato com a sua reserva efetuada e com o método de pagameento!";
    ?>
    <br/><br/>
    <a href = "index.html" class = "botao">Home</a>
</div>
</body>
</html>