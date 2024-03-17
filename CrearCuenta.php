<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>

    <style>
        body {
            background-image: radial-gradient(circle at 50% -20.71%, #0c4181 0, #4b89df 12.5%, #78b0e1 25%,#0f4d79 37.5%, #092432 50%, #27a4de 62.5%, #2f3650 87.5%, #4843dc 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        * {
            font-family: 'lato', sans-serif;
            font-family: 'Open Sans', sans-serif;
            font-family: 'PT Sans', sans-serif;
            box-sizing: border-box;
        }
        form {
            width: 600px;
            border: 2px solid black;
            padding: 5rem;
            background-color: #8cc3fdd7;
            border: none;
            border-radius: 20px;
            color: rgb(13, 62, 105);
        }
        h2 {
            display: block;
            border: 2px solid black;
            width: 100%;
            padding: 10px;
            margin: 0 auto 10px auto; 
            border-radius: 10px;
            font-size: 24px;
            text-align: center;
            background-color: #4d6ad2;
            color: white;
        }
        label {
            color: #1a5276; 
            font-size: 18px;
            padding: 11px;
            font-weight: 350;
        }
        input {
            display: block;
            border: 2px solid black;
            width: 95%;
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
        }
        button {
            background-color: #4d6ad2;
            padding: 1rem 2rem;
            color: white;
            border: none;
            border-radius: 5px;
            margin: 1rem auto;
            text-decoration: none;
            display: block;
            font-size: 20px; 
        }
        button:hover {
            background-color: white;
            color: #4d6ad2;
        }
        .error {
            background-color: rgb(175, 74, 74);
            color: whitesmoke;
            padding: 10px;
            width: 95%;
            font-size: 80%;
            border-radius: 5px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="Login/Registrarse.php" method="POST">
<?php if (isset($_GET['error'])){ ?>
    <p class="error"><?php echo $_GET['error']?></p>
<?php } ?>
<br>
<?php if (isset($_GET['success'])){ ?>
    <p class="success"><?php echo $_GET['success']?></p>
<?php } ?>
<br>
                            <h2 class="card-title text-center mb-4">Crear Cuenta</h2> 
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="contraseña" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="contraseña" name="contraseña" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirmar_contraseña" class="form-label">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="confirmar_contraseña" name="confirmar_contraseña" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Crear Cuenta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
