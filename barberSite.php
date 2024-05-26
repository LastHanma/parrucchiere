<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home-Tony & Remo's</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&family=Poppins:wght@300;400;600;700;800;900&family=Roboto:ital,wght@0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="modernNormalize.css" />
  <link rel="stylesheet" href="general.css" />
  <link rel="stylesheet" href="homepage-barber.css" />
  <link rel="stylesheet" href="sectionServizi.css" />
  <link rel="stylesheet" href="contactsSection.css" />
  <link rel="stylesheet" href="utility.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/it.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/en.js"></script>
  <script src="barber-js.js"></script>
</head>

<body>
  <header class="header" id="header">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="d-flex justify-content-between w-100">
        <h1 class="header__title navbar-brand">
          <a href="#header">Tony's & Remo's</a>
        </h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="form-barber.php">Prenota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Contatti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="account-Utente.html">Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="info container">
    <h2 class="info__title">Eleva il Tuo Stile con Tony's & Remo's</h2>
    <div class="contenitore">
      <!-- <img src="remo1.jpg" alt=""> -->
      <p class="info_paragraph1">
        Il tuo stile è la tua firma, la tua identità nel mondo. Presso Tony's
        & Remo's, ti offriamo l'elevazione dello stile, trasformando la tua
        visione in realtà con precisione e maestria.
      </p>
    </div>
    <div class="contenitore">
      <a class="info-btn" id="mostraForm" href="form.php">Prenota</a>
    </div>
  </section>

  <section class="servizi container">
    <h2 class="servizi__title">I Nostri Servizi</h2>
    <div class="contenitore__servizi">
      <div class="servizi__box servizi__box--a">
        <div>
          <h2 class="pricing__box__title">
            Taglio di Capelli Personalizzato
          </h2>
          <p class="pricing__box__description1">Stile Su Misura</p>
        </div>
        <div>
          <p class="pricing__box__description2">
            Lascia che i nostri esperti barbieri trasformino il tuo look con
            tagli di capelli personalizzati. Approfitta della nostra
            consulenza professionale per un taglio che si adatti perfettamente
            alla tua fisionomia e al tuo stile di vita, seguendo le ultime
            tendenze e tecniche di precisione.
          </p>
        </div>
        <div class="tr">
          <p class="price">15€</p>
          <button class="btn pricing__btn">Prenota</button>
        </div>
      </div>
      <div class="servizi__box servizi__box--b">
        <div>
          <h2 class="pricing__box__title">Rasature e Trattamenti Barba</h2>
          <p class="pricing__box__description1">Eleganza Grooming</p>
        </div>
        <div>
          <p class="pricing__box__description2">
            Dai un tocco di classe al tuo grooming quotidiano. Offriamo
            rasature classiche e trattamenti per la barba che vanno oltre il
            semplice taglio. I nostri servizi di grooming garantiscono un
            aspetto curato e impeccabile, mantenendo la salute della tua pelle
            e della tua barba.
          </p>
        </div>
        <div class="tr">
          <p class="price">20€</p>
          <button class="btn pricing__btn">Prenota</button>
        </div>
      </div>
      <div class="servizi__box servizi__box--c">
        <div>
          <h2 class="pricing__box__title">
            Colore e Trattamenti per Capelli Unisex
          </h2>
          <p class="pricing__box__description1">Colori e Cura Profonda</p>
        </div>
        <div>
          <p class="pricing__box__description2">
            Sia che tu sia un uomo o una donna, offriamo servizi di
            colorazione e trattamenti mirati per i capelli. Il nostro team di
            esperti utilizza prodotti di alta qualità e tecniche avanzate per
            garantire risultati duraturi e un look impeccabile.
          </p>
        </div>
        <div class="tr">
          <p class="price">25€</p>
          <button class="btn pricing__btn">Prenota</button>
        </div>
      </div>
      <div class="servizi__box servizi__box--d">
        <div>
          <h2 class="pricing__box__title">
            Trattamenti per Sopracciglia e Rifiniture
          </h2>
          <p class="pricing__box__description1">Dettagli di Bellezza</p>
        </div>
        <div>
          <p class="pricing__box__description2">
            I dettagli fanno la differenza. Oltre ai servizi per capelli,
            offriamo rifiniture professionali per le sopracciglia. Con la
            massima precisione, modelliamo e definiamo le sopracciglia per
            migliorare l'aspetto naturale del tuo viso.
          </p>
        </div>
        <div class="tr">
          <p class="price">15€</p>
          <button class="btn pricing__btn">Prenota</button>
        </div>
      </div>
      <div class="servizi__box servizi__box--e">
        <div>
          <h2 class="pricing__box__title">
            Stile e Consulenza per Acconciature
          </h2>
          <p class="pricing__box__description1">Idee per il Look Perfetto</p>
        </div>
        <div>
          <p class="pricing__box__description2">
            Approfitta della nostra consulenza professionale sull'acconciatura
            e lo stile. Dai consigli su misura e suggerimenti pratici, il
            nostro obiettivo è realizzare il look desiderato, garantendo
            soddisfazione e fiducia nel tuo nuovo stile.
          </p>
        </div>
        <div class="tr">
          <p class="price">10€</p>
          <button class="btn pricing__btn">Prenota</button>
        </div>
      </div>
    </div>
  </section>

  <footer class="contacts">
    <div class="contenitore__contacts">
      <div class="contacts__box">
        <h3 class="contact__box__title">Contatti</h3>
        <p class="contacts__info">
          Indirizzo: Via Nome della Strada, Numero Civico
        </p>
        <p class="contacts__info">
          Telefono: <a href="tel:+ +39 0123456789">+39 0123456789</a>
        </p>
        <p class="contacts__info">
          Email:<a class="email__link" href="mailto: info@tonyeremo.com">
            info@tonyeremo.com</a>
        </p>
        <div class="icon__box">
          <i class="contacts__icon bx bxl-instagram-alt"></i>
          <i class="contacts__icon bx bxl-facebook-circle"></i>
          <i class="contacts__icon bx bxl-whatsapp"></i>
        </div>
      </div>
      <div class="contacts__box">
        <h3 class="contact__box__title">Contatti</h3>
        <p class="contacts__info">
          Indirizzo: Via Nome della Strada, Numero Civico
        </p>
        <p class="contacts__info">Telefono: +39 0123456789</p>
        <p class="contacts__info">Email: info@tonyeremo.com</p>
      </div>
      <div class="contacts__box">
        <h3 class="contact__box__title">Contatti</h3>
        <p class="contacts__info">
          Indirizzo: Via Nome della Strada, Numero Civico
        </p>
        <p class="contacts__info">Telefono: +39 0123456789</p>
        <p class="contacts__info">Email: info@tonyeremo.com</p>
      </div>
    </div>
  </footer>
</body>

</html>