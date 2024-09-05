<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/member.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Gimnasio</title>
</head>

<body>
    <?php $page = 'member';
    include 'sidebar.php' ?>
    <div class="main">
        <form role="form" action="member.php" method="post">
            <h1>DETALLES DEL MIEMBRO</h1>
            <div class="row">
                <div class="col">
                    <h4>Información Personal</h4>
                    <div class="input-box">
                        <label class="control-label">Nombre Completo:</label>
                        <input type="text" name="fullname" placeholder="Nombre Completo" required/>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Género:</label>
                        <select name="gender" required="required" id="select">
                            <option value="Male" selected="selected">Masculino</option>
                            <option value="Female">Femenino</option>
                            <option value="Other">Otro</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Fecha de Registro:</label>
                        <input type="date" name="dor" required/>
                        <span>Fecha de registro</span>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Planes:</label>
                        <select name="plan" required="required" id="select">
                            <option value="1" selected="selected">Un Mes</option>
                            <option value="3">Tres Meses</option>
                            <option value="6">Seis Meses</option>
                            <option value="12">Un Año</option>
                        </select>
                    </div>
                </div>


                <div class="col">
                    <h4>Detalles de Contacto</h4>
                    <div class="input-box">
                        <label class="control-label">Número de Contacto</label>
                        <input type="number" id="mask-phone" name="contact" placeholder="9876543210" required/>
                        <span>(999) 999-9999</span>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Dirección:</label>
                        <input type="text" name="address" placeholder="Dirección" required/>
                    </div>

                    <h4>Detalles del Servicio</h4>
                    <div class="input-box">
                        <label class="control-label">Servicio</label>
                        <div class="controls">
                            <label>
                                <input type="radio" value="Fitness" name="services" required/>
                                Fitness</label>
                            <label>
                                <input type="radio" value="Cardio" name="services" required/>
                                Cardio</label>
                            <label>
                                <input type="radio" value="Gymnastic" name="services" required/>
                                Gimnasia</label>
                            <label>
                                <input type="radio" value="Yoga" name="services" required/>
                                Yoga</label>
                        </div>
                     </div>
                    <div class="input-box">
                        <label class="control-label">Monto Total</label>
                        <div class="input-append">
                            <span class="add-on"></span>
                            <input type="number" placeholder="50" name="amount" class="span11" required/>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="button" style="--clr:#1e9bff">Enviar Detalles del Miembro<i></i></button>
            </div>
        </form>
        <?php
        if(isset($_POST['fullname']))
        {
            $fullname=$_POST["fullname"];
            $gender=$_POST["gender"];
            $dor=$_POST["dor"];
            $plan=$_POST["plan"];
            $contact=$_POST["contact"];
            $address=$_POST["address"];
            $services=$_POST["services"];
            $amount=$_POST["amount"];
            $host="localhost";
            $dbusername="root";
            $dbpassword="";
            $dbname="gym";
         
            $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
            if(mysqli_connect_error())
            {
                die('Error de conexión ('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
            else{
                $sql="INSERT INTO member(fullname,gender,dor,plan,contact,address,services,amount) values('$fullname','$gender','$dor','$plan','$contact','$address','$services','$amount')";
                if ($conn->query($sql)) {
                    // echo"INSERTADO";
                    // header('location:../dmem.php');
                } else {
                        echo "Error : " .$sql . "<br>" .$conn->error;
                        
                }
                    $conn->close();
            }
        }
        ?>
    </div>
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
