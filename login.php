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
		<form action="connect.php" method="post">
			
			<h1>Crear Cuenta</h1>
			<span>o usa tu correo electrónico para registrarte</span>
			<input type="text" placeholder="Nombre" name="name" required/>
			<input type="email" placeholder="Correo Electrónico" name="email" required/>
			<input type="password" placeholder="Contraseña" name="password" required/>
			<button>Registrarse</button>
			
		</form>
	</div>
	<div class="form-container sign-in-container">
	
		<form action="login.php" method="post">
					<h1>Iniciar Sesión</h1>
			<span>o usa tu cuenta</span>
			<input type="email" placeholder="Correo Electrónico" name="email" required/>
			<input type="password" placeholder="Contraseña" name="password" required/>
			<button>Iniciar Sesión</button>
		
		</form>
			<?php
   					$email=$_POST['email'];
   					$password=$_POST['password'];

   					$con=new mysqli("localhost","root","","gym");
   					if($con->connect_error)
					{
      					die("Fallo al conectar: ".$con->connect_error);
   					}
					else 
					{
    					$stmt=$con->prepare("select * from register where email='$email' and password='$password'");
      					$stmt->execute();
     					$stmt_result=$stmt->get_result();
      					if($stmt_result->num_rows>0)
						{
         					$data =$stmt_result->fetch_assoc();
         					if($data['password']===$password)
							{
            				header('location:dashboard.php');
         					}
      					}
						else
						{
        				 	echo "Correo o contraseña inválidos";
      					}
   					}
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
        // Esta función se llama desde los menús emergentes para transferir a
        // una página diferente. Ignorar si el valor devuelto es una cadena nula:
        function goPage (newURL) {

        // si la URL está vacía, omite los divisores del menú y restablece la selección del menú al valor predeterminado
            if (newURL != "") {
      
                // si la URL es "-", es esta página -- restablece el menú:
                if (newURL == "-" ) {
                resetMenu();            
                } 
                // de lo contrario, envía la página a la URL designada            
                else {  
                    document.location.href = newURL;
                }
            }
        }
        // restablece la selección del menú al ingresar a esta página:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>  
</body>
</html>
