<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>

    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>

        <div class="contenido">
          
          <?php
          // <!-- ************ 267 Hola Mundo ****************************** -->
          echo "<br>*************267 hola mundo <br>";
              echo "Hola Mundo";
          // <!-- ************ 268 variables ****************************** -->
          echo "<br>*************268 variables <br>";
          $hola = "Hola Mundo";
          $num = 12;
          $htmlH1 = "<h3> es un h3 </h3>";
          echo $hola;
          echo $num;
          echo $htmlH1;
          // ********************** 269 concatenar cadenas ******************************
          echo "<br>*************269 concatenando cadenas <br>";
          $nombre = "Javier";
          $apellido = "García";
          echo $nombre ." ".$apellido

          
          ?>

<!-- ********************** 270 html en php o viceversa ****************************** -->
<h4> <?php
    echo "<br>*************270 html en php o php en html <br>";
    echo "Texto php dentro de html"
?>
</h4>

  <?php
      echo "<br><h4> html dentro de PHP y una variable: {$apellido}</h4>"
  ?>

  <!-- ********************** 271 comentarios en PHP ****************************** -->
  <?php
      // comentario de una línea
      /*
      comentario de más de una línea
      La seugnda línea
       */
  ?>

  <!-- ********************** 272 Operaciones PHP ****************************** -->
  <?php
      echo "<br>*************272 operaciones PHP <br>";
      $num2 = 5;
      $num = 13;
      // suma
      echo ($num + $num2) . '<br>';
      echo ($num - $num2) . '<br>';
      echo ($num * $num2) . '<br>';
      echo ($num / $num2) . '<br>';
      echo ($num % $num2) . '<br>';

      echo "<br>*************273 estructuras de control <br>";
      if($num2>$num){
        echo 'el número1 es mayor. ' .$num2 .' mayor que '.$num;
      } elseif($num2<$num){
        echo 'el número2 es mayor. ' .$num .' mayor que '.$num2;
      } else{
        echo 'son iguales';
      }

      echo "<br>*************274 switch <br>";
      $lenguaje = 'Java';
      
      switch($lenguaje){
        case 'PHP':
          case 'Java':
          echo 'Switch: Backend';
          break;
        
        case 'JavaScript':
          echo 'Switch: Frontend';
          break;
      }

      echo "<br>*************275 array <br>";
      $lenguajes = array('CSS', 'jQuery', 'JavaScript');
      echo $lenguajes[0];

      echo "<br>*************276 print_r y var_dump <br>";

      ?>

      <pre>
          <?php print_r($lenguajes); ?>
          <?php var_dump($lenguajes); ?>
      </pre>
      <?php
      echo $lenguajes[2];     

      echo "<br>*************277 Agregando nuevos valores a un arreglo <br>";
      $lenguajes[] = 'Python';
      $lenguajes[6] = 'Java';
      $lenguajes[] = 'Django';
      print_r($lenguajes);
      echo '<br>';
      // array_pop
      $lastEelement = array_pop($lenguajes);
      echo $lastEelement . '<br>';
      print_r($lenguajes);
      echo '<br>';
      // unset
      unset($lenguajes[3]);
      echo '<br>';
      print_r($lenguajes);
      echo '<br>';
      // shift
      $firstElement = array_shift($lenguajes);
      echo $firstElement . '<br>';
      print_r($lenguajes);
      echo '<br>';
      // splice
      $lenguajes[] = 'Python';
      $lenguajes[] = 'Node';
      $newArray = array_splice($lenguajes, 1, 3, 'Angular');
      print_r($lenguajes);
      echo '<br> Splice <br>';
      print_r($newArray);
      echo '<br>';

      echo "<br>*************278 Array asociativos <br>";
      $persona = array(
        'nombre' => 'Javier',
        'pais' => 'México',
        'profesion' => 'desempleado'
      );

      print_r($persona);
      echo '<br>';
      echo $persona['nombre'];

      echo "<br>*************279 Arrays multidimensionales <br>";
      $persona2 = array(
        'datos' => array(
          'nombre' => 'Javier',
          'pais' => 'México',
          'profesion' => 'desempleado'
        ),
        'lenguajes' => array('Java', 'PHP')
      );
      print_r($persona2);

      echo "<br>*************280 Revisando si un valor existe en un arreglo <br>";
      $javaExists = in_array('Java', $lenguajes);
      var_dump($javaExists);

      echo "<br>*************281 forEach <br>";
      foreach($lenguajes as $lang){
        echo $lang . '<br>';
      }

      foreach($persona as $key => $valor) {
        echo $key .': '.$valor;
      }

      echo "<br>*************282 forEach multidimensional <br>";
      foreach($persona2['lenguajes'] as $key => $valor) {
        echo $key .': '.$valor;
      }

      echo "<br>*************283 for<br>";
      for($i = 0; $i<10; $i++){
        echo $i;
      }

      echo "<br>*************284 while<br>";
      $i=4;
      while($i<10){
        echo $i++;
      }

      echo "<br>*************285 funciones<br>";
      function saludar(){
        echo 'Hola amigos';
      }

      saludar();

      echo "<br>*************286 funciones con argumentos<br>";
      function sumar($num1, $num2){
        echo $num1+$num2;
      }

      sumar(4,3);

      echo "<br>*************287 funciones con return<br>";
      function sumar2($num1, $num2){
        return $num1+$num2;
      }

      echo sumar2(5,4);

      echo "<br>*************288 funciones valores por defecto<br>";
      function sumar3($num1=0, $num2=10){
        return $num1+$num2;
      }

      echo sumar3(4,);

      echo "<br>*************289 Guardando datos en un array mediante una función<br>";
      $agenda = array();

      function saveUser($nombre="SinNombre", $telefono="Sin número"){
        global $agenda;
        $agenda[] = array($nombre, $telefono);
      }

      saveUser("Javier", "632026146");
      saveUser("", "");
      print_r($agenda)

      echo "<br>*************290 Enviando valores GET <br>";
      $agenda = array();

      function saveUser($nombre="SinNombre", $telefono="Sin número"){
        global $agenda;
        $agenda[] = array($nombre, $telefono);
      }

      saveUser("Javier", "632026146");
      saveUser("", "");
      print_r($agenda)
 





      
  ?>
      

              
        </div>
    </div>




  </body>
</html>

