<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="" method="post">
            <h1>Crear Cuenta</h1>
            <span>o usa tu correo electrónico para registrarte</span>
            <input type="text" placeholder="Nombre" name="name" required/>
            <input type="email" placeholder="Correo Electrónico" name="email" required/>
            <input type="password" placeholder="Contraseña" name="password" required/>
            <button type="submit" name="register">Registrarse</button>
        </form>
    </div>

    <div class="form-container sign-in-container">
        <form action="" method="post">
            <h1>Iniciar Sesión</h1>
            <span>o usa tu cuenta</span>
            <input type="email" placeholder="Correo Electrónico" name="email" required/>
            <input type="password" placeholder="Contraseña" name="password" required/>
            <button type="submit" name="login">Iniciar Sesión</button>
        </form>

        <?php
        // Conexión a la base de datos
        $con = new mysqli("localhost", "root", "", "gym");
        if ($con->connect_error) {
            die("Fallo al conectar: " . $con->connect_error);
        }

        // Registro de usuario
        if (isset($_POST['register'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Asegurarse de que no exista un usuario con el mismo correo
            $stmt_check = $con->prepare("SELECT * FROM register WHERE email = ?");
            $stmt_check->bind_param("s", $email);
            $stmt_check->execute();
            $stmt_check_result = $stmt_check->get_result();

            if ($stmt_check_result->num_rows > 0) {
                echo "<script>alert('Ya existe una cuenta con este correo electrónico.');</script>";
            } else {
                // Encriptar la contraseña
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Insertar el usuario en la base de datos
                $stmt = $con->prepare("INSERT INTO register (name, email, password) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $name, $email, $hashed_password);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.');</script>";
                } else {
                    echo "<script>alert('Error al registrarse.');</script>";
                }

                $stmt->close();
            }
            $stmt_check->close();
        }

        // Inicio de sesión del usuario
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Verificar si el usuario existe en la base de datos
            $stmt = $con->prepare("SELECT * FROM register WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt_result = $stmt->get_result();

            if ($stmt_result->num_rows > 0) {
                $data = $stmt_result->fetch_assoc();

                // Verificar la contraseña ingresada con la contraseña encriptada almacenada
                if (password_verify($password, $data['password'])) {
                    echo "<script>alert('Inicio de sesión exitoso. Redirigiendo...'); window.location.href = 'dashboard.php';</script>";
                    exit();
                } else {
                    echo "<script>alert('Correo o contraseña inválidos.');</script>";
                }
            } else {
                echo "<script>alert('Correo o contraseña inválidos.');</script>";
            }

            $stmt->close();
        }

        $con->close();
        ?>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>¡Bienvenido de nuevo!</h1>
                <p>Para mantenerte conectado con nosotros, por favor inicia sesión con tu información personal</p>
                <button class="ghost" id="signIn">Iniciar Sesión</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>¡Hola, Amigo!</h1>
                <p>Ingresa tus datos personales y empieza tu viaje con nosotros</p>
                <button class="ghost" id="signUp">Registrarse</button>
            </div>
        </div>
    </div>
</div>

<script src="js/login.js"></script>
<script type="text/javascript">
    function goPage (newURL) {
        if (newURL != "") {
            if (newURL == "-" ) {
                resetMenu();            
            } else {  
                document.location.href = newURL;
            }
        }
    }
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
</body>
</html>
