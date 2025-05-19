<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineVero</title>

  

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"></head>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"></head>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="./css/style.css">
  <script src="./bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

  <?php include 'include/header.php'; ?>

  <div class="circle"></div>

  <section class="welcoming">
    <h2>Film e serie per chi è alla ricerca di qualcosa</h2>
    <p>
      CineVero è la piattaforma di streaming dove puoi acquistare o noleggiare i migliori film, 
      per guardare quello che vuoi, come vuoi. 
      Il cinema che cerchi, sempre a portata di mano.
    </p>
    <a class="btn btn2" href="catalogo.php">Vedi il catalogo</a>
    

  </section>

  <section class="posters">
    <img src="assets/holiday.jpg" alt="holiday" class="poster poster1">
    <img src="assets/jaws.jpg" alt="jaws" class="poster poster2">
    <img src="assets/gf.jpg" alt="gf" class="poster poster3">
    <img src="assets/rings.jpg" alt="rings" class="poster poster4">
    <img src="assets/rocky.jpg" alt="rocky" class="poster poster5">
  </section>

  <section class="subscription">
    <h3>Scegli l'opzione che fa per te</h3>

    <div class="plans">
      <div class="plan">
        <div class="plan-header">
          <h4>Basic Plan<br>Gratuito</h4>
        </div>
        <ul class="plan-body">
          <li>✔ Nessun costo mensile</li>
          <li>✔ Acquisto o noleggio dei film singolarmente</li>
          <li>✕ Più di 1 stream simultaneo</li>
          <li>✕ Riproduzione in 4K UHD</li>
        </ul>
      </div>
      <div class="plan">
        <div class="plan-header">
          <h4>Gold Plan<br>6,99€/mese</h4>
        </div>
        <ul class="plan-body">
          <li>✔ Costo mensile ridotto</li>
          <li>✔ Sconti su noleggio e acquisto dei film</li>
          <li>✔ 2 stream simultanei</li>
          <li>✕ Riproduzione in 4K UHD</li>
        </ul>
      </div>
      <div class="plan">
        <div class="plan-header">
          <h4>Diamond Plan<br>12,99€/mese</h4>
        </div>
        <ul class="plan-body">
          <li>✔ Accesso completo a tutto il catalogo</li>
          <li>✔ Include anteprime e contenuti esclusivi</li>
          <li>✔ Qualità fino a 4K UHD & HDR</li>
          <li>✔ 4 stream simultanei</li>
        </ul>
      </div>
    </div>
  </section>

  <?php include 'include/footer.php'; ?>

</body>
</html>