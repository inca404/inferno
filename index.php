<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stardew Valley</title>
    <link rel="stylesheet" href="gordito.css">
</head> 
<body>
   
    <header>
        <nav>
                <img src="./moto.jpg" alt="">        
                <h1>Mateo Francisco</h1>
        </nav>
    </header>
    
                
                <a href="jjjj.php"><button> bardeo rolfi</button></a>
                <a href="mi cuenta.php"><button>la nada misma</button></a>
                <a href="index.php"><button>inicio</button></a>
    <h1>nosotros:</h1>
    <p>
        .... solo estoy yo y el myrko y esta dormido encima el xd
    </p>
    
    <a href="https://www.youtube.com/watch?v=L19P3uMTE-g&ab_channel=oliverUnU"></a>
    
<?php
    
    $conexion = mysqli_connect("localhost", "root", "" , "mateo")or exit("no se puede conectar...");
    $consulta = mysqli_query($conexion, "SELECT * FROM DatosPer");

    while ($lista = mysqli_fetch_assoc($consulta)){
        echo $lista["nombre"];

?>
        <div>
        <h1> <?php echo $lista ["nombre"];?> </h1>
        <h1> <?php echo $lista ["apellido"]; ?> </h1>
</div>   
    <?php };
    
?>
    <?php
    $consulta_foto = mysqli_query($conexion, "SELECT * FROM Fotos_Personales");

        while ($lista_foto = mysqli_fetch_assoc($consulta_foto)){
        echo $lista_foto['descripción'];
    
?>
    <div>
        <h1> <?php echo $lista ["descripción"];?> </h1>
        <img class = "foto" src="<?php echo $lista_foto["url_foto"];?>">
    </div>


    <?php };
    include("formulario.php");

?>




</body>
</html>