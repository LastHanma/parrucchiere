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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="homepage-barber.css">
    <link rel="stylesheet" href="form-barber.css">
    <link rel="stylesheet" href="contactsSection.css">
    <link rel="stylesheet" href="utility.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="barber-js.js"></script>

</head>

<body>
    <?php include('formBarber.php'); ?>
    <header class="header">
        <h1 class="header__title"><a href="barberSite.php">Tony's & Remo's</a></h1>
        <i class='menu-bar bx bx-menu' id="menu-bar"></i>
        <i class='exit-menu bx bx-x' id="exit-menu"></i>
        <nav class="menu" id="menu">
            <a class="menu__link" href="project2.php">Home</a>
            <a class="menu__link" href="">Info</a>
            <a class="menu__link" href="">Contatti</a>
        </nav>
    </header>
    <section class="form__section container">
        <div class="row justify-content-center">
            <div class="col-md-6 mx-auto">
                <form action="formBarber.php" method="post" class="form">
                    <div class="contenuto">
                        <div class="input-box">
                            <label for="name">Nome</label>
                            <input type="text" name="name" required class="form-control">
                        </div>

                        <div class="input-box">
                            <label for="surname">Cognome</label>
                            <input type="text" name="surname" required class="form-control">
                        </div>

                        <div class="input-box">
                            <label for="email">Email</label>
                            <input type="email" name="email" required class="form-control">
                        </div>

                        <div class="input-box">
                            <label for="telefono">Telefono</label>
                            <input type="tel" name="telefono" required class="form-control">
                        </div>

                        <div class="scelta-servizio">
                            <label for="servizio">Servizio</label>
                            <select name="servizio" id="servizio" class="form-control">
                                <option value="null">seleziona</option>
                                <option value="taglio capelli">taglio capelli</option>
                                <option value="taglio capelli+barba">taglio capelli+barba</option>
                            </select>
                        </div>

                        <div class="input-box">
                            <label for="giornata">Scegli Il Giorno</label>
                            <input type="datetime-local" name="giornata" id="giornata" class="form-control">
                        </div>
                        <div class="btn-box">
                            <button type="submit" class="invio-btn btn btn-primary">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="contacts ">
        <div class="contenitore__contacts">
            <div class="contacts__box">
                <h3 class="contact__box__title">Contatti</h3>
                <p class="contacts__info">Indirizzo: Via Nome della Strada, Numero Civico</p>
                <p class="contacts__info">Telefono: <a href="tel:+ +39 0123456789">+39 0123456789</a> </p>
                <p class="contacts__info">Email:<a class="email__link" href="mailto: info@tonyeremo.com"> info@tonyeremo.com</a></p>
                <div class="icon__box">
                    <i class='contacts__icon bx bxl-instagram-alt'></i>
                    <i class='contacts__icon bx bxl-facebook-circle'></i>
                    <i class='contacts__icon bx bxl-whatsapp'></i>
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
</body>

</html>