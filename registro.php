<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
    <link rel="stylesheet" href="stylelogin.css">
    <script src="https://kit.fontawesome.com/e21e2e48d7.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="hero">
        <h1>Crea una cuenta</h1>
        <div class="singup-box">
            <div class="left-box">
                <form action="" method="POST" class="formulario">
                    <?php
                    
                    ?>
                    <input type="text" placeholder="Ingrese su nombre" required class="input-box">
                    <input type="text" placeholder="Nombre de usuario" required class="input-box">
                    <input type="email" placeholder="Correo electrónico" required class="input-box">
                    <input type="password" placeholder=" Cree una contraseña" required class="input-box">
                    <input type="checkbox" id="terms">
                    <label for="terms">Acepto los términos y condiciones.</label>
                    <button type="submit">Registrarse <span>&#x27f6;</span></button>
                </form>
            </div>
            <div class="right-box">
                <a href="" class="fb-link"><i class="fa-brands fa-facebook"></i>Registrarse con Facebook</a>
                <a href="" class="g-link"><i class="fa-brands fa-google"></i>Registrarse con Google</a>
                <a href="" class="tw-link"><i class="fa-brands fa-twitter"></i>Conectar con Twitter</a>
            </div>
        </div>
        <p class="login-msg">¿Ya tienes una cuenta? <a href="login.html">Iniciar Sesión</a></p>
    </div>
</body>
</html>