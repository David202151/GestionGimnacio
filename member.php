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
                            <option value="Masculino" selected="selected">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Fecha de Registro:</label>
                        <input type="date" name="dor" required/>
                        <span>Fecha de registro</span>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Planes:</label>
                        <select name="plan" required="required" id="planSelect" onchange="actualizarMontoTotal()">
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
                     
                    

                    <div class="row discount-total-row">
                        <div class="col">
                            <div class="input-box">
                                <label class="control-label">Descuento:</label>
                                
                                <select name="discout" required="required" id="select" onchange="actualizarMontoTotal()">
                                    <option value="0.00" selected="selected">Ninguno</option>
                                    <option value="0.05">5%</option>
                                    <option value="0.25">25%</option>
                                    <option value="0.50">50%</option>
                                </select>

                                 
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-box">
                                <label class="control-label">Monto Total</label>
                                <input type="number" placeholder="50" id="montoTotal" name="amount" class="span11" step="0.01" required/>
                                <span id="montoInicial" style="color: red; text-decoration: line-through;"></span>
                            </div>
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
            $amount = $_POST["amount"];

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
                $sql = "INSERT INTO member(fullname, gender, dor, plan, contact, address, services, amount) VALUES('$fullname', '$gender', '$dor', '$plan', '$contact', '$address', '$services', '$amount')";
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

    function actualizarMontoTotal() {
        var planSelect = document.getElementById('planSelect');
        var descuentoSelect = document.querySelector('select[name="discout"]');
        var montoTotal = document.getElementById('montoTotal');
        var montoInicial = document.getElementById('montoInicial');
        
        var planSeleccionado = planSelect.value; 
        var descuentoSeleccionado = descuentoSelect.value; 
        var total = 0;

        //  precios según el plan
        if (planSeleccionado == '1') {
            total = 50; 
        } else if (planSeleccionado == '3') {
            total = 150; 
        } else if (planSeleccionado == '6') {
            total = 300; 
        } else if (planSeleccionado == '12') {
            total = 500; 
        }

        
        if (descuentoSeleccionado == '0.00' || descuentoSeleccionado == '0') {
            montoInicial.style.display = 'none'; 
        } else {
            montoInicial.style.display = 'inline'; 
            montoInicial.innerText = total.toFixed(2) + " USD";  // dos decimales
        }

        // Aplicar el descuento
        var totalConDescuento = total - (total * descuentoSeleccionado);
        
        
        montoTotal.value = totalConDescuento.toFixed(2);
    }

  //  transferir a una página diferente. 
  function goPage (newURL) {

      // si la URL está vacía, omite los divisores del menú y restablece la selección del menú al valor predeterminado
      if (newURL != "") {
      
          
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // envía la página a la URL designada            
          else {  
            document.location.href = newURL;
          }
      }
  }

// restablece la selección del menú al ingresar la página:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
