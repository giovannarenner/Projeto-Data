<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>InsiraData</title>
</head>
<body>
    
        <h1>Insira uma data dd/mm/yyyy</h1>
<form  method="POST">
   <div class="input1">
            <p class="input2">
           <input class="input3" type="text" name="data" />
            </p>
            </div>
        <button class="resposta">Mostrar</button> <br>
        
        <?php
      if(isset($_POST['data'])){
      $data = $_POST['data'];
      $dia = substr($data,0,2);
      $mes = substr($data,3,2);
      $ano = substr($data,6,4);
      
        echo "<p '>
        Dia: $dia <br>
        Mês: $mes <br>
        Ano: $ano </p>";
      }
            
         ?>
        </form>
        
</body>
</html>