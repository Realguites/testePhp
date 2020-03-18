<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class = "ei">
        <?php
        
            $lista = array(10,58,"plok",34,78.98,true);
            
            echo $lista[2].'<br>' ;
              

            $lista2 = array("chave1" => 45, "chave2" => true, "chave3" => "coronavirus");

            print_r($lista2["chave3"])
        ?>
    </h1>
</body>

<style>
    .ei{
        color: purple;
        background-color: black;
    }
</style>

<script>

</script>

</html>