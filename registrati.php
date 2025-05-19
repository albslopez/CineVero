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
  <link rel="stylesheet" href="./css/registrati.css">
  
</head>
<body >

    <!--<div class="top"></div>-->
  <div class="borders">
  <section class="welcoming-register">
    
    <div class="icon">
        <p>Registrati in </p><br>
        <img src="../assets/cinema.png" alt="cinema icon" />
        <h1><span class="green">Cine</span><span class="light">Vero</span></h1>
    </div>
    <form id="form">
        <div class="form">
            <div class="column">
                <input type="text" id="nome" name="nome" class="spaces" placeholder="Nome" >
                <span id="nome_error" class="error-message">&nbsp;</span>
                <input type="text" id="user" name="user" class="spaces" placeholder="Username" >
                <span id="user_error" class="error-message">&nbsp;</span>
                <input type="password" id="password" name="password" class="spaces" placeholder="Password">
                <span id="password_error" class="error-message">&nbsp;</span>
            </div>
      
            <div class="column">
                <input type="text" id="cognome" name="cognome" class="spaces" placeholder="Cognome">
                <span id="cognome_error" class="error-message">&nbsp;</span>
                <label>
                    Sesso:
                    <input type="radio" name="sesso" value="no"> M
                    <input type="radio" name="sesso" value="si"> F
                </label>
                <span id="sesso_error" class="error-message error-radio">&nbsp;</span>
                <input type="text" id="email" name="email" class="spaces" placeholder="E-mail">
                <span id="email_error" class="error-message">&nbsp;</span>
            </div>
      
    
      
        </div>
        <div class="plan-title">Scegli il tuo plan</div>
        <div class="plan-error" id="plan_error">&nbsp;</div>
        <div class="plans">
          <!-- Columna 1 -->
          <div class="column2 mx-2">
            <div class="plan" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidth1" aria-expanded="false" aria-controls="collapseWidth1" data-value="option1">
              <div class="plan-header">
                <h4>Basic Plan</h4>
              </div>
            </div>
            <div style="min-height: 150px;">
              <div class="collapse collapse-horizontal" id="collapseWidth1">
                <div style="width: 300px;">
                  <ul>
                    <li>✔ Nessun costo mensile</li>
                    <li>✔ Qualità fino a 1080p Full HD</li>
                    <li>✔ 1 stream simultaneo</li>
                    <li></li>
                    <li class="price" style="padding-top:20px;">0,0€/mese</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Columna 2 -->
          <div class="column2 mx-2">
            <div class="plan" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidth2" aria-expanded="false" aria-controls="collapseWidth2" data-value="option2">
              <div class="plan-header">
                <h4>Gold Plan</h4>
              </div>
            </div>
            <div style="min-height: 150px;">
              <div class="collapse collapse-horizontal" id="collapseWidth2">
                <div style="width: 300px;">
                  <ul>
                    <li>✔ Costo mensile ridotto</li>
                    <li>✔ Sconti su noleggio e acquisto dei film</li>
                    <li>✔ Qualità fino a 1080p Full HD</li>
                    <li>✔ 2 stream simultanei</li>
                    <li class="price">6,99€/mese</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        
          <!-- Columna 3 -->
          <div class="column2 mx-2">
            <div class="plan" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidth3" aria-expanded="false" aria-controls="collapseWidth3" data-value="option3">
              <div class="plan-header">
                <h4>Diamond Plan</h4>
              </div>
            </div>
            <div style="min-height: 150px;">
              <div class="collapse collapse-horizontal" id="collapseWidth3">
                <div style="width: 300px;">
                  <ul>
                    <li>✔ Accesso completo a tutto il catalogo</li>
                    <li>✔ Qualità fino a 4K UHD & HDR</li>
                    <li>✔ 4 stream simultanei</li>
                    <li></li>
                    <li class="price" style="padding-top:20px;">12,99€/mese</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <input type="hidden" name="option_selected" id="valueSelected">

          

        <button id="submitbutton" type="submit" class="btn btn1">Registrarsi</button>
    </form>

  </div>

    




  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./js/registrati.js"></script>

  
    


  <!--</section>
  <section class="subscription login-bot">
  </section>-->

  

</body>
</html>
