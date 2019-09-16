<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Array Manteman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
        <p> From Array </p> 
    </center>
    <fieldset>
          <legend>From Array</legend>
          <from ACTION="" methode="get">
          <label for="">Masukan Jumlah</label>
          <input type="number" name="jml">
          <br>
         </from>
         <?php
          if (isset ($_GET['submit'] )) {
             $jml_from = $_GET['jml'];
             for ($a=1; $a<= $jml_from; $a++) { 
                 ?>
                 <from action="fromarraypro.php"methode"post">
                 <label for="">Nama</label>
                 <input type="text"name="nama[]"required>
                 <label for="">Kelas</label>
                 <input type="text" name="kelas[]"required>
                 <br>
                 <br>
            
            
                <?php }?>
                <input type="submit" name="sbm" value= "simpan">
                <input type="reset"  value= "reset">

         </from>
          
        <?php  } ?>
  </fieldset>       
  </body>
  </html>