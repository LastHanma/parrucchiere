<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&family=Poppins:wght@300;400;600;700;800;900&family=Roboto:ital,wght@0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    *,*::before,*::after{
    box-sizing: border-box;
}
*{
    margin: 0;
    padding: 0;
    line-height: 1.5;
}
body{
    font-family: 'Poppins', sans-serif;
    background-color:rgb(10,10,10);
    color: white;
    height: 100vh;
}
button{
    border: none;
    background:none;
    color:inherit;
    font-family: inherit;
}
a{
    color:white;
    text-decoration: none;
}
input,select,option{
    outline: none;
    width: 50%;
    /* height: 50px; */
    /* border-radius: 5px; */
    padding: 0.5rem;
    /* border: 3px solid black; */
    
    
}

button{
    border: none;
    background: none;
    cursor: pointer;
    color: inherit;
    font-family: inherit;
}
.header{
    display: flex;
    align-items: center;
    width: 100%;
    margin-bottom: 5rem;
}
.header__title{
    font-size: 3rem;
    /* border: 3px solid green; */
    flex-grow:1;
}
.menu.show{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    /* border: 3px solid green; */
    background-color: rgb(0, 0, 0);
    position: absolute;
    top: 0;
    right:0;
    width: 100%;
    height: 100vh;
    z-index: 1;
    overflow: hidden;
    /* border: 3px solid red; */
}
.exit-menu {
display: none;
/* color: rgb(189, 27, 149); Cambia il colore a tuo piacimento */
color: white;
font-size: 1.5rem;
z-index: 2;
cursor:pointer;
}

.exit-menu.show {
    display: block;
}
.menu{
    /* border: 3px solid blue; */
    display: none;
}
.menu__link:hover{
    text-decoration: underline;
    text-decoration-thickness: 0.2rem;
    text-decoration-color:rgb(189, 27, 149);
    
}
.menu-bar{
    display: none;
}

.info{
    text-align: center;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    
}
.info__title{
    text-transform: uppercase;
    text-align: center;
    font-size: 2.2rem;

}
.info_paragraph1{
    max-width: 60ch;
    font-size: 1rem;
    /* border: 3px solid yellow; */
    margin: 0 auto;

}
.info-btn{
    padding: 0.5rem;
    background-color: rgb(189, 27, 149);
    width: 200px;
    font-size: inherit;
    /* font-weight: bold; */
    color: white;
    cursor: pointer;
}
.info-btn:hover{
    color: rgb(189, 27, 149);
    background-color: white;
    transition: all 0.5s ease;
}
.servizi{
    /* border: 3px solid red; */
    text-align: center;
}
.servizi__title{
    font-size: 2.2rem;
    margin-bottom: 0.5rem;
}

.servizi__box{
    background-color: white;
    color: black;
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1rem;
    
}
.pricing__box__description1{
    margin-bottom: 1rem;
    font-size: 0.75rem;
    color: rgb(189, 27, 149);
}
.pricing__box__description2{
    /* border: 3px solid pink; */
    max-width: 55ch;
    /* margin-bottom: 1rem; */
    /* background-color: rgb(189, 27, 149); */
    padding: 0.5rem;
    border-radius: 5px;
    color: black;
    margin-bottom: 1rem;
    margin-inline: auto;
}


.btn{
    background-color:rgb(189, 27, 149);
    color: white;
    padding: 0.5em 1em;
    border-radius: 6px;
    font-weight: 500;
    font-size: 1rem;
    cursor: pointer;
}
.btn:hover{
    background-color: rgb(10,10,10);
    transition: all 0.5s ease;
    
}
.tr{
    display:flex;
    width: 100%;
    justify-content: flex-end;
    
}
.container{
    width: 100%;
    /* border: 3px solid red; */
    margin-inline: auto;
    margin-bottom: 5rem;
    padding-inline: 0.5rem;
}
.contacts{
    background-color: white;
    width: 100%;
}
.contenitore__contacts{
    display: flex;
    /* gap: 1rem; */
    /* padding: 1rem 1rem 0 1rem; */
}
.contacts__box{
    background-color: white;
    color: black;
    flex-grow: 1;
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    
    border-width: 100%;
}

.contact__box__title{
    color: rgb(189, 27, 149);
}
.contacts__info a{
    color: black;
}
.contacts__info:hover a{
    color: rgb(189, 27, 149);
    transition: all 0.3s ease;
}
.icon__box{
    
}
.contacts__icon{
    color: inherit;
    font-size: 3rem;
    cursor: pointer;
}
.contacts__icon:hover{
    color: rgb(189, 27, 149);
}
.icon__box{
    display: flex;
    justify-content: flex-start;
    gap: 2rem;
}
.form__section{
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    /* border: 3px solid yellow; */
}
.form{
    background-color: rgb(189, 27, 149);
    padding: 1rem;
    /* flex-grow: 2; */
    width: 100%;
    
}
.contenuto{
    display: flex;
    flex-direction: column;
    gap: 1rem;
    /* width: 70%; */
    /* border: 3px solid blue; */
}
.input-box,.scelta-servizio{
    display: flex;
    justify-content: space-between;
    border: 1px solid #ccc;
    border-radius: 2px;
    padding: 0.5rem;
    align-items: center;
    /* gap: 1rem; */
    font-size: 1rem;
}
.btn-box{
    /* border: 3px solid blue; */
    justify-content: space-between;
    border: 1px solid #ccc;
    border-radius: 2px;
    padding: 0.5rem;
    display: flex;
    justify-content: end;
}
.invio-btn{
    background-color: white;
    color: rgb(189, 27, 149);
    width: 100px;
    padding: 0.3rem;
    /* border-radius: 5px; */
}
.div{
    background-color: white;
    border: 3px solid rgb(163, 22, 22);
    flex-grow: 2;
}
@media (min-width:320px){
    .header__title{
        font-size: 1.8rem;
    }
    .show{
        display: none;
        /* font-size: 0.6rem; */
    }
    .menu-bar{
        display: block;
        font-size: 1.5rem;
        cursor: pointer;
    }
    .info__title{
        font-size: 1.2rem;
    }
    .info_paragraph1{
        font-size: 0.5rem;
    }
    .info-btn{
        width: 70px;
        font-size: 0.5rem;
    }
    .menu.show .menu__link{
        background-color: rgb(1, 1, 1);
        color: rgb(255, 255, 255);
        width: 100px;
        padding: 0.5rem;
        text-align: center;
        border-radius: 5px;
        
    }
    .menu.show .menu__link:hover{
        background-color: rgb(189, 27, 149);
        text-decoration: none;
        transition: background-color, 0.5s ease;
    }
    .servizi__title{
        font-size: 1.2rem;
    }
    
    .pricing__box__title{
        font-size: 0.8rem;
    }
    .pricing__box__description1,.pricing__box__description2{
        font-size: 0.5rem;
    }
    .pricing__btn{
        font-size: 0.5rem;
    }
    /* .form__section{
        border: 3px solid orange;
    }
    .form{
        border: 10px solid green;
    } */
    
    .contenuto{
        width:100%;
    }
    
    .contenitore__contacts{
        flex-wrap: wrap;
    }
    .contenitore__contacts .contacts__box:nth-child(1){
        border-bottom: 2px solid #ccc;
    }
    .contenitore__contacts .contacts__box:nth-child(2){
        border-bottom: 2px solid #ccc;
    }
    .contacts__box{
        /* border: 3px solid red; */
    }
    .contact__box__title{
        font-size: 1rem;
    }
    .contacts__info{
        font-size: 0.5rem;
    }
    .contacts__icon{
        font-size: 0.8rem;
    }
    
}
@media (min-width:475px){
    .container{
        max-width:475px;
    }
    .header__title{
        font-size: 2rem;
    }
    .info_paragraph1{
        font-size: 0.rem;
    }
    
    
}

/* sm */
@media (min-width:640px){
    .container{
        max-width:640px;
    }
    .header__title{
        font-size: 2.5rem;
        margin-left: 2.5rem;
    }
    .menu{
        display: flex;
        font-size: 1rem;
        justify-content: end;
        gap: 1rem;
        flex-grow:1;
        margin-right: 2.5rem;
        /* font-size: 1.1rem; */
        /* border: 3px solid blue; */
    }
    .menu__link{
        background: none;
        color: white;
    }
    .menu__link:hover{
        background:none;
        text-decoration-color: rgb(189, 27, 149);
    }
    .menu-bar{
        display: none;
    }
    .info__title{
        font-size: 1.5rem;
    }
    .info_paragraph1{
        font-size: 0.7rem;
    }
    .info-btn{
        width: 100px;
        font-size: 0.7rem;
    }
    .servizi__title{
        font-size: 1.5rem;
    }
    .pricing__box__title{
        font-size: 1rem;
    }
    .pricing__box__description1,.pricing__box__description2{
        font-size: 0.8rem;
    }
    .pricing__btn{
        font-size: 0.8rem;
    }
    
    .input-box,.scelta-servizio{
        font-size: 0.8rem;
    }
    .contenitore__contacts{
        flex-wrap: nowrap;
    }
    .contenitore__contacts .contacts__box:nth-child(1){
        border-right: 2px solid #ccc;
    }
    .contenitore__contacts .contacts__box:nth-child(2){
        border-right: 2px solid #ccc;
    }
    
    .contact__box__title{
        font-size: 1rem;
    }
    .contacts__info{
        font-size: 0.8rem;
    }
    .contacts__icon{
        font-size: 1rem;
    }
} 

/* md */
@media (min-width:768px){
    .container{
        max-width:768px;
    }
    .header__title{
        font-size: 3rem;
    }
    .menu{
        font-size:1.2rem;
    }
    .info__title{
        font-size: 2rem;
    }
    .info_paragraph1{
        font-size: 1rem;
    }
    .info-btn{
        font-size: 1rem;
    }
    .servizi__title{
        font-size: 2rem;
    }
    .pricing__box__title{
        font-size: 1.2rem;
    }
    .pricing__box__description1,.pricing__box__description2{
        font-size: 1rem;
    }
    .pricing__btn{
        font-size: 1rem;
    }
    
    .input-box,.scelta-servizio{
        font-size: 1rem;
    }
    .contact__box__title{
        font-size: 1.2rem;
    }
    .contacts__info{
        font-size: 1rem;
    }
    .contacts__icon{
        font-size: 2.5rem;
    }
    
}

/* lg */
@media (min-width:1024px){
    .container{
        max-width:1024px;
    }
    .contenitore__servizi{
        /* border:3px solid blue; */
        display: grid;
        grid-template-areas:
        'a a a b b'
        'c c d d e';
        gap: 1.2rem;
        padding: 1rem;
    }
    .servizi__box{
        background-color: white;
        color: black;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        border-radius: 8px;
    }
    .servizi__box--a{
        grid-area: a;
    }
    .servizi__box--b{
        grid-area: b;
    }
    .servizi__box--c{
        grid-area: c;
    }
    .servizi__box--d{
        grid-area: d;
    }
    .servizi__box--e{
        grid-area: e;
    }
    
}

/* xl */
@media (min-width:1280px){
    .container{
        max-width:1280px;
    }
}

/* 2xl */
@media (min-width:1536px){
    .container{
        max-width:1536px;
    }
}

</style>

</head>
<body>
    <?php

// Sostituisci 'path_to_phpmailer' con il percorso relativo corretto della cartella PHPMailer nel tuo progetto
require __DIR__ . '/PHPMailer-master/src/Exception.php';
require __DIR__ . '/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/PHPMailer-master/src/SMTP.php';

// require __DIR__ . 'Exception.php';
// require __DIR__ . 'PHPMailer.php';
// require __DIR__ . '-SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inviati dal form
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $servizio = $_POST['servizio'];
    $giornata = $_POST['giornata'];

    $mail = new PHPMailer(true);

    try {
        // Configurazione del server SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lasthanma@gmail.com';
        $mail->Password = 'mtnjtvvvjdtjbnap';
        $mail->SMTPSecure = 'ssl'; // Usa 'tls' se richiesto
        $mail->Port = 465; // Porta SMTP di Gmail (può essere 587 per TLS)

        // Dettagli dell'email
        $mail->setFrom('lasthanma@gmail.com', 'Tony & Remo');
        $mail->addAddress('clinton10e@gmail.com');
        $mail->Subject = 'Dati del Form - Prenotazione';
        $mail->Body = "Nome: $name\nCognome: $surname\nEmail: $email\nTelefono: $telefono\nServizio: $servizio\nGiornata: $giornata";
        // Invia l'email
        $mail->send();
        header("Location: sentEmail.html");
    } catch (Exception $e) {
        echo 'Errore nell\'invio dell\'email: ', $mail->ErrorInfo;
    }

}

?>






    <header class="header">
        <h1 class="header__title"><a href="project2.php">Tony's & Remo's</a></h1>
        <i class='menu-bar bx bx-menu' id="menu-bar" ></i>
        <i class='exit-menu bx bx-x' id="exit-menu"></i>
        <nav class="menu" id="menu">
            <a class="menu__link" href="project2.php">Home</a>
            <a class="menu__link" href="">Info</a>
            <a class="menu__link" href="">Contatti</a>
        </nav>
    </header>
    <section class="form__section container">
        <form action="testFormTelefono.html" method="post" class="form">
            <div class="contenuto">
                <!-- <div class="box-icon">
                    <i class='exit-icon bx bx-x' id="chiudiForm"></i>
                </div> -->
                <div class="input-box">
                    <label for="name">Nome</label>
                    <input type="text" name="name" required>
                </div>

                <div class="input-box">
                    <label for="surname">Cognome</label>
                    <input type="text" name="surname" required>
                </div>

                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="input-box">
                    <label for="telefono">Telefono</label>
                    <input type="tel" name="telefono" required>
                </div>
                
                <div class="scelta-servizio">
                    <label for="servizio">Servizio</label>
                    <select name="servizio" id="servizio">
                        <option value="null">seleziona</option>
                        <option value="taglio capelli">taglio capelli</option>
                        <option value="taglio capelli+barba">taglio capelli+barba</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="giornata">Scegli Il Giorno</label>
                    <input type="datetime-local" name="giornata" id="giornata" >
                </div>
                <div class="btn-box">
                    <button class="invio-btn">Invia</button>
                </div>
            </div>
        </form>
        
    </section>
    <footer class="contacts ">
        <div class="contenitore__contacts">
            <div class="contacts__box">
                <h3 class="contact__box__title">Contatti</h3>
                <p class="contacts__info">Indirizzo: Via Nome della Strada, Numero Civico</p>
                <p class="contacts__info">Telefono: <a href="tel:+ +39 0123456789">+39 0123456789</a> </p>
                <p class="contacts__info">Email:<a class="email__link" href="mailto: info@tonyeremo.com"> info@tonyeremo.com</a></p>
                <div class="icon__box">
                    <i class='contacts__icon bx bxl-instagram-alt' ></i>
                    <i class='contacts__icon bx bxl-facebook-circle'></i>
                    <i class='contacts__icon bx bxl-whatsapp' ></i> 
                </div>
            </div>
            <div class="contacts__box">
                <h3 class="contact__box__title">Contatti</h3>
                <p class="contacts__info">Indirizzo: Via Nome della Strada, Numero Civico</p>
                <p class="contacts__info">Telefono: +39 0123456789</p>
                <p class="contacts__info">Email: info@tonyeremo.com</p>
            </div>
            <div class="contacts__box">
                <h3 class="contact__box__title">Contatti</h3>
                <p class="contacts__info">Indirizzo: Via Nome della Strada, Numero Civico</p>
                <p class="contacts__info">Telefono: +39 0123456789</p>
                <p class="contacts__info">Email: info@tonyeremo.com</p>
            </div>
        </div>
    </footer>
    <script>
        // Assicurati che questo codice venga eseguito dopo che il DOM è completamente caricato
document.addEventListener("DOMContentLoaded", function() {
  function toggleBodyOverflow() {
      const body = document.querySelector('body');
      if (body.style.overflow === 'hidden') {
          body.style.overflow = 'auto'; // Abilita lo scorrimento
      } else {
          body.style.overflow = 'hidden'; // Disabilita lo scorrimento
      }
  }

  const menuToggle = document.getElementById("menu-bar");
  const menu = document.getElementById("menu");
  const exitMenu = document.getElementById("exit-menu");

  menuToggle.addEventListener("click", function() {
      menu.classList.toggle("show");
      exitMenu.classList.toggle("show");
      toggleBodyOverflow(); // Chiama la funzione per cambiare l'overflow del body
  });

  exitMenu.addEventListener("click", function() {
      menu.classList.remove("show");
      exitMenu.classList.remove("show");
      toggleBodyOverflow(); // Chiama la funzione per cambiare l'overflow del body
  });

  // Inizializza flatpickr sul campo di input
  flatpickr('#giornata', {
      enableTime: true,
      dateFormat: "Y-m-d\\TH:i",
  });
});

    </script>
</body>
</html>