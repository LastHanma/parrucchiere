<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenotazione-Tony & Remo's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&family=Poppins:wght@300;400;600;700;800;900&family=Roboto:ital,wght@0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <section class="form__section container flex-column justify-content-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-6 mx-auto">
                <div class="contenuto  form ">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="nome" required class="form-control">
                    </div>

                    <div class="input-box">
                        <label for="surname">Cognome</label>
                        <input type="text" name="surname" id="cognome" required class="form-control">
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required class="form-control">
                    </div>

                    <div class="input-box">
                        <label for="telefono">Telefono</label>
                        <input type="tel" name="telefono" id="telefono" required class="form-control">
                    </div>

                    <div class="scelta-servizio">
                        <label for="servizio">Servizio</label>
                        <select name="servizio" id="servizio" class="form-control">
                            <option value="taglio capelli">taglio capelli</option>
                            <option value="taglio capelli+barba">taglio capelli+barba</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <label for="giornata">Scegli Il Giorno</label>
                        <input type="date" name="giornata" id="giornata" class="form-control">
                    </div>
                    <div class="input-box">
                        <label for="orario">Scegli l'orario</label>
                        <input type="time" name="orario" id="orario" class="form-control">
                    </div>
                    <div class="btn-box">
                        <button class="invio-btn btn btn-primary" onclick="prenotazione()">Invia</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="risposta">

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    async function prenotazione() {
        nome = document.getElementById("nome").value;
        cognome = document.getElementById("cognome").value;
        email = document.getElementById('email').value;
        telefono = document.getElementById("telefono").value;
        servizio = document.getElementById('servizio').value;
        data = document.getElementById('giornata').value;
        orario = document.getElementById("orario").value;


        try {
            const richiesta = await fetch(
                "http://127.0.0.1:8000/api/v1/inserimento_prenotazione", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        nome: nome,
                        cognome: cognome,
                        email: email,
                        telefono: telefono,
                        servizio: servizio,
                        data: data,
                        ora: orario
                    }),
                }
            )
            const risposta = await richiesta.json();
            if (risposta.status !== true) {
                console.log("non ci siamo")
                document.getElementById("risposta").innerHTML = `
      <div class="alert alert-danger" role="alert">
                  ${risposta.msg}
              </div>
      `
                setTimeout(() => {
                    window.location.href = "form.php";
                }, 500);
            } else {
                document.getElementById("risposta").innerHTML = `
      <div class="alert alert-success" role="alert">
                  ${risposta.msg}
              </div>
      `
                setTimeout(() => {
                    localStorage.setItem("utenti", JSON.stringify(risposta.utente))
                    window.location.href = "barberSite.php";
                }, 500);
            }
        } catch (error) {
            console.error("Error:", error);
            document.getElementById("risposta").innerHTML = "Ci è stato un errore";
        }


    }
</script>

</html>