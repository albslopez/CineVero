<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forum</title>

  

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"></head>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"></head>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="./css/reviews.css">
  <script src="./bootstrap/js/bootstrap.js"></script>

</head>

<body>
  <?php include ("include/header.php"); ?> 
 
  <div class="borders">

    <div class="title">
      <h1>
          Forum
      </h1>
    </div>

    <div class="review-forum">
      <div class="review-box">
        <img class="user-avatar" src="../assets/user.png" alt="User">
        <div class="review-content">
          <div class="review-meta">
            <span class="username">LucaRossi</span>
            <span class="review-date">• 12 maggio 2025</span>
          </div>
          <h4>Pulp Fiction</h4>
          <p>Un capolavoro assoluto del cinema moderno. 
            Tarantino intreccia storie apparentemente scollegate con una regia brillante, dialoghi iconici e una colonna sonora indimenticabile. 
            Ogni personaggio è memorabile e ogni scena lascia il segno. 
            Un film che ha ridefinito il genere crime con stile e ironia.</p>
          <div class="stars">★★★★★</div>
        </div>
      </div>

      <hr class="divider">

      <div class="review-box">
        <img class="user-avatar" src="../assets/user.png" alt="User">
        <div class="review-content">
          <div class="review-meta">
            <span class="username">ChiaraB</span>
            <span class="review-date">• 13 settembre 2024</span>
          </div>
          <h4>La vita è bella</h4>
          <p>Un film commovente e profondamente umano. 
            Roberto Benigni riesce a raccontare l'orrore dell'Olocausto con una delicatezza straordinaria, mescolando comicità e tragedia in modo unico. 
            È una celebrazione dell'amore, della speranza e della forza dello spirito umano anche nei momenti più bui.</p>
          <div class="stars">★★★★☆</div>
        </div>
      </div>

      <hr class="divider">

      <div class="review-box">
        <img class="user-avatar" src="../assets/user.png" alt="User">
        <div class="review-content">
          <div class="review-meta">
            <span class="username">Alessiucci</span>
            <span class="review-date">• 03 marzo 2024</span>
          </div>
          <h4>Matrix</h4>
          <p>Un'esperienza cinematografica rivoluzionaria. 
            Matrix combina azione mozzafiato, filosofia profonda e effetti visivi all’avanguardia. 
            Il concetto della realtà simulata è affascinante e attuale, e Keanu Reeves è perfetto nel ruolo di Neo. 
            Un film che ha lasciato un segno indelebile nella cultura pop.</p>
          <div class="stars">★★★★★</div>
        </div>
      </div>
    </div> 
    
    
  </div>

  <?php include 'include/footer.php'; ?>
  
  
</body>
</html>