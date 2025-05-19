<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineVero</title>

  <link rel="stylesheet" href="./css/film.css">

  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"></head>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"></head>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">

</head>
<body>
  
<?php include 'include/header.php'; ?>
  
  <div class="borders">
    <div style="display: flex;">
    <div class="image">
        <img src="../assets/pulpfiction.jpg" alt="Pulp Fiction" />
    </div>
    <div class="section">
        <div class="section-title">
            <h1>Pulp fiction</h1>
        </div>
        <div class="genres">
            <button class="genre">Suspense</button>
            <button class="genre">Drama</button>
            
        </div>
        <div></div>
        <div>
            Direttore: <span style="color: rgb(98, 143, 92)">Quentin Tarantino</span>
        </div>
        <div style="margin-top:-20px;">
            Anno: <span style="color: rgb(98, 143, 92)">1994</span>
        </div>
        <div style="margin-top:-20px;">
            Durazione: <span style="color: rgb(98, 143, 92)">149 min</span>
        </div>

        <div>
            Sinopsis: <p style="color: rgb(98, 143, 92)">Un film commovente e profondamente umano. Roberto Benigni riesce a raccontare l'orrore dell'Olocausto con una delicatezza straordinaria, 
                mescolando comicità e tragedia in modo unico. È una celebrazione dell'amore, della speranza e della forza dello spirito umano anche nei momenti più bui.</p>
        </div>
        <div class="valorazione">
            &#9733; 4,9/5
        </div>
    </div>

    
    
    

    </div>

    <div class="film-noleggio">
        <p> Noleggia il film per 7 giorni</p>
        <div class="noleggio-button">
            <p> Solo per 4,99€</p>
            <span><button class="btn btn1 btn3">Noleggiare ora</button></span>
            
          </div>
        
    </div>

    <div class="film-noleggio film-sell">
        <p> Acquisita il film a tempo indeterminato</p>
        <div class="noleggio-button">
            <p> Solo per 15,99€</p>
            <span><button class="btn btn1 btn4">Acquisitare ora</button></span>
            
          </div>
        
    </div>

    


    <div class="review-forum">
        
        <textarea type="text" id="comment" name="comment" class="review-box comment-section" placeholder="Scrivi il tuo comento"></textarea>
        <div class="comment-send">
            <div class="stars" data-rating="5">
                
                <span class="star" id="star1">&#9733;</span>
                <span class="star" id="star2">&#9733;</span>
                <span class="star" id="star3">&#9733;</span>
                <span class="star" id="star4">&#9733;</span>
                <span class="star" id="star5">&#9733;</span>
                <h5 class="valorazione-text">La tua valorazione:</h5>
              </div>
            <button class="btn btn1 btn5">Inviare commento</button>
        </div>
        <input type="hidden" name="option_selected" id="valueSelected">
        
        

      <div class="review-box">
        <img class="user-avatar" src="../assets/user.png" alt="User">
        <div class="review-content">
          <span class="username">LucaRossi</span>
          <p>03.03.2025</p>
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
          <span class="username">ChiaraB</span>
          <p>13.09.2024</p>
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
          <span class="username">Alessiucci</span>
          <p>21.02.2025</p>
          <p>Un'esperienza cinematografica rivoluzionaria. 
            Matrix combina azione mozzafiato, filosofia profonda e effetti visivi all’avanguardia. 
            Il concetto della realtà simulata è affascinante e attuale, e Keanu Reeves è perfetto nel ruolo di Neo. 
            Un film che ha lasciato un segno indelebile nella cultura pop.</p>
          <div class="stars">★★★★★</div>
        </div>
      </div>

      <hr class="divider">
      <div class="review-box">
        <img class="user-avatar" src="../assets/user.png" alt="User">
        <div class="review-content">
          <span class="username">ChiaraB</span>
          <p>13.09.2024</p>
          <p>Un film commovente e profondamente umano. 
            Roberto Benigni riesce a raccontare l'orrore dell'Olocausto con una delicatezza straordinaria, mescolando comicità e tragedia in modo unico. 
            È una celebrazione dell'amore, della speranza e della forza dello spirito umano anche nei momenti più bui.</p>
          <div class="stars">★★★★☆</div>
        </div>
      </div>

      <h1 style="height:150px;"></h1>
      
    </div>  
  </div>
    
    
  <?php include 'include/footer.php'; ?>

  <script>
    const buttons = document.querySelectorAll('.star');
    const inputHidden = document.getElementById('valueSelected');

    buttons.forEach(button => {
      button.addEventListener('click', () => {

        buttons.forEach(b => b.classList.remove('selected'));
        
        buttons.forEach(b => {
          if(button.id <= b.id){
            console.log(b.id);
            b.classList.add('selected');
          }
        }
          );

        
        inputHidden.value = button.getAttribute('data-value');
      });
      
    });
  </script>

  
  

  

</body>
</html>
