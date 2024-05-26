<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrazione-Tonye & Remo's</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&family=Poppins:wght@300;400;600;700;800;900&family=Roboto:ital,wght@0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="modernNormalize.css" />
  <style>
    :root {
      --bgcolor_btn: #bd1b95;
    }

    body {
      font-family: "Poppins", sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: "Poppins", sans-serif;
      background-color: rgb(10, 10, 10);
      color: white;
      height: 100vh;
    }

    .logo_title {
      font-size: 4.5rem;
      margin-left: 0.5rem;
      /* border: 3px solid green; */
      font-weight: bold;
    }

    .btn-primary {
      background-color: var(--bgcolor_btn) !important;
      border: none;
    }
  </style>
</head>

<body>
  <h1 class="logo_title">Tony's & Remo's</h1>


  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="" />
  </div>
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="" />
  </div>
  <div class="mb-3">
    <label for="cognome" class="form-label">Cognome</label>
    <input type="text" class="form-control" id="cognome" name="cognome" aria-describedby="" />
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" />
  </div>
  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="tel" class="form-control" id="telefono" name="telefono" aria-describedby="" />
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="pwd" />
  </div>
  <div class="mb-3">
    <a href="login-Utente.php">Hai già un account?clicca qui</a>
  </div>
  <div class="mb-3 d-flex justify-content-end">
    <button id="btn" class="btn btn-primary w-100" onclick="registrazione()">
      Registrati
    </button>
  </div>
  </form>

  <div id="risposta"></div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  async function registrazione() {
    const username = document.getElementById("username").value;
    const nome = document.getElementById("nome").value;
    const cognome = document.getElementById("cognome").value;
    const email = document.getElementById("email").value;
    const telefono = document.getElementById("telefono").value;
    const password = document.getElementById("password").value;
    try {
      const request = await fetch(
        "http://127.0.0.1:8000/api/v1/registrazione", {
          method: 'POST',
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({
            username: username,
            nome: nome,
            cognome: cognome,
            email: email,
            telefono: telefono,
            pwd: password,
          }),
        }
      );

      const risposta = await request.json();
      document.getElementById("risposta").innerHTML =
        `<div class="alert alert-success" role="alert">
                ${risposta.msg}
            </div>
          `;
      setTimeout(() => {
        window.location.href = "barberSite.php";
      }, 500);

    } catch (error) {
      console.error("Error:", error);
      document.getElementById("risposta").innerHTML = "An error occurred";
    }
  }
</script>

</html>