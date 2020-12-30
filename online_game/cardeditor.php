<?php 

include "conex.php";

$id = $_GET['id'];


if ($_POST['titul'] == ""){

$sql = "SELECT * FROM static_gamecards WHERE id = ".$id." LIMIT 1";
$qr = mysqli_query($conn, $sql);

    if ($qr){
        
        $rs = mysqli_fetch_assoc($qr);

        
        $id = $rs['id'];
        $sprt = $rs['Sprint'];
        $titulo = $rs['titulo'];
        $contenido = $rs['contenido'].$rs['dorso'];
        $numero = $rs['number'];
        $valor = $rs['valor'];

        $contenido = str_replace("\n", "", $contenido);

    } else {
        echo "error";
    }

} else {
    

        $sprt = $_POST['sprin'];
        $id = $_POST['id'];
        $titulo = $_POST['titul'];
        $contenido = $_POST['contenid'];
        $numero = $_POST['numer'];
        $valor = $_POST['valo'];

        $contenido = str_replace("'", "\'", $contenido);
        $contenido = str_replace("`'", "\'", $contenido);

        $SQL = "UPDATE static_gamecards SET `titulo`='".$titulo."', `valor`=".$valor.", `contenido` = '".$contenido."', `number`='".$numero."' WHERE  `id`=".$id." ;";
        $qr = mysqli_query($conn, $SQL);
        if ($qr) {echo "Contenido Guardado";}
        else {echo "Error al Guardar en id:".$id." -> ".mysqli_error($conn);}
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <title>Cards Editor</title>
  <meta charset="utf-8">

  
  
<link rel="stylesheet" href="plugins/quill/katex.min.css" />
<link rel="stylesheet" href="plugins/quill/monokai-sublime.min.css" />
<link rel="stylesheet" href="plugins/quill/quill.snow.css" />

<style>
  body > #standalone-container {
    margin: 50px auto;
    max-width: 720px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10pt;
  }
  #editor-container {
    height: 350px;
  }

  form {
    margin: 50px auto;
    max-width: 720px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10pt;
  }
</style>


</head>
<body>
  

<form method="POST" onsubmit="CheckCont();">
<input id="id" name="id" type ="text" hidden value="<?= $id ?>"></input>
<input id="contenido" name="contenid" type ="text" hidden ></input>
<input id="sprint" name="sprin" type ="text" value = "<?= $sprt ?>" hidden></input>

<div id="standalone-container">
  <div id="toolbar-container">
    <span class="ql-formats">
      <select class="ql-font"></select>
      <select class="ql-size"></select>
    </span>
    <span class="ql-formats">
      <button class="ql-bold"></button>
      <button class="ql-italic"></button>
      <button class="ql-underline"></button>
      <button class="ql-strike"></button>
    </span>
    <span class="ql-formats">
      <select class="ql-color"></select>
      <select class="ql-background"></select>
    </span>
    <span class="ql-formats">
      <button class="ql-script" value="sub"></button>
      <button class="ql-script" value="super"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-header" value="1"></button>
      <button class="ql-header" value="2"></button>
      <button class="ql-blockquote"></button>
      <button class="ql-code-block"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-list" value="ordered"></button>
      <button class="ql-list" value="bullet"></button>
      <button class="ql-indent" value="-1"></button>
      <button class="ql-indent" value="+1"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-direction" value="rtl"></button>
      <select class="ql-align"></select>
    </span>
    <span class="ql-formats">
      <button class="ql-link"></button>
      <button class="ql-image"></button>
      <button class="ql-video"></button>
      <button class="ql-formula"></button>
    </span>
    <span class="ql-formats">
      <button class="ql-clean"></button>
    </span>
  </div>
  <br>
  Titulo: <input id="Titulo" name="titul" type ="text" size = 40 value="<?= $titulo ?>"></input>
  Número de Card: <input id="numero" name="numer" type ="text" size=2 value="<?= $numero ?>"></input>
  <br><br>

  <div id="editor-container"></div>
  <br><br>
  
  <?php 
  if ($sprt != 3) {
    echo 'Valor: <input id="valor" name = "valo" type ="text" value="<?= $valor ?>"></input>';
  } else {
    echo 'Tipo: <select>
                  <option value="0"> Create </option>
                  <option value="0"> Create / Raise-Reduce </option>
                  <option value="0"> Raise-Reduce </option>
                  <option value="0"> Eliminate </option>
              </select>';
  }
  ?>

  </p><input type ="submit" value=  "Guardar"></input>
  <br>

</div>

  
  
<script src="plugins/quill/katex.min.js"></script>
<script src="plugins/quill/highlight.min.js"></script>

<script src="plugins/quill/quill.min.js"></script>

<script>
  var quill = new Quill('#editor-container', {
    modules: {
      formula: true,
      syntax: true,
      toolbar: '#toolbar-container'
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
  });

  quill.container.firstChild.innerHTML = '<?= $contenido ?>';

  function CheckCont(){
      id = document.getElementById('id').value
      
    document.getElementById('contenido').value = quill.container.firstChild.innerHTML;
  }

</script>


</form>
</body>
</html>
