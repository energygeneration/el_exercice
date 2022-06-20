<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <title>Document</title>
</head>
<body">
  <div class="container-fluid ">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand">TVA_CALCULATOR</a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="container mt-5 ps-auto" >
      <div class="formulaire ">

        <form   name="F" action="" method="post" >
          
          <div class="mb-3">
            <label  class="form-label">Montants HT </label>
            <input type="text" class="form-control"  name="Ht" value=""  >
            <div id="emailHelp" class="form-text">Seulement les montants positifs sont valides </div>
          </div>
          <button type="submit">Calculer</button>
        </form>

        <?php

        $ht =  $_POST['Ht'] ;

        $taux_tva = 18;

        if($_POST['Ht'] <= 0 ) {
          echo" invalid amount";
         } else { 
          $tva = round(($ht * $taux_tva)/100);
          echo " Your VAT is:$tva";
         };
         ?>
</div>
    </div>
  </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>