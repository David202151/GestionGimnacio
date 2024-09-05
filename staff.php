<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Gimnasio</title>
    <link rel="stylesheet" href="css/staff.css">
</head>

<body>
<?php $page = 'staff';include 'sidebar.php' ?>
    <div class="main">
        
        <form action="staff.php" method="post" role="form">
        <h1>DETALLES DEL PERSONAL</h1>
            <div class="row">
                <div class="col">
                    <h4>Detalles del Personal</h4>
                    <div class="input-box">
                        <label class="control-label">Nombre Completo :</label>
                        <input type="text" name="fullname" placeholder="Nombre Completo" required/>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Género :</label>
                        <select name="gender" required="required" id="select">
                            <option value="Male" selected="selected">Masculino</option>
                            <option value="Female">Femenino</option>
                            <option value="Other">Otro</option>
                        </select>
                    </div>
                
                    <div class="input-box">
                        <label class="control-label">Puesto :</label>
                        <select name="designation" required="required" id="select">
                            <option value="Cashier" selected="selected">Cajero</option>
                            <option value="Trainer">Entrenador</option>
                            <option value="Cleaning">Limpieza</option>
                            <option value="Manager">Gerente</option>
                        </select>
                    </div>
                </div>
                <div class="cols">
                    <h4>Detalles de Contacto</h4>
                    <div class="input-box">
                        <label class="control-label">Correo Electrónico :</label>
                        <input type="email" name="email" placeholder="Ingresa una dirección de correo válida" required/>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Número de Contacto</label>
                        <input type="number" id="mask-phone" name="contact" placeholder="9876543210" required/>
                        <span>(999) 999-9999</span>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Dirección :</label>
                        <input type="text" name="address" placeholder="Dirección" required/>
                    </div>
                   
                </div>
            </div>
            <div>
                <button type="submit" class="button" style="--clr:red">Enviar Detalles del Personal<i class='bx bx-save'></i></button>
            </div>
        </form>
        <?php
        if(isset($_POST['fullname']))
        {
            $fullname=$_POST["fullname"];
            $gender=$_POST["gender"];
            $designation=$_POST["designation"];
            $email=$_POST["email"];
            $contact=$_POST["contact"];
            $address=$_POST["address"];
            
            $host="localhost";
            $dbusername="root";
            $dbpassword="";
            $dbname="gym";
         
            $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
            if(mysqli_connect_error())
            {
                die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
            else{
                $sql="INSERT INTO staff (fullname,gender,designation,email,contact,address) values('$fullname','$gender','$designation','$email','$contact','$address')";
                if ($conn->query($sql)) {
                    // echo"New record is inserted Sucessfully";
                    // header('Location:../dstaff.php');
                    // header('location:staff.php');
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
  // una página diferente. Ignorar si el valor devuelto es una cadena vacía:
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
