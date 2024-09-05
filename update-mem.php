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
<?php $page = 'member';include 'sidebar.php' ?>
<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="gym";
@$id=$_GET['id'];
$con=new mysqli($host, $dbusername, $dbpassword, $dbname);
$qry= "select * from member where user_id='$id'";
$result=mysqli_query($con, $qry);
while ($row=mysqli_fetch_array($result)) {
?> 
    <div class="main">
        <form role="form" action="update-mem.php" method="post">
            <h1>ACTUALIZAR DETALLES DEL MIEMBRO</h1>
            <div class="row">
                <div class="col">
                    <h4>Información Personal</h4>
                    <div class="input-box">
                        <label class="control-label">Nombre Completo :</label>
                        <input type="text" name="fullname" placeholder="Nombre Completo" value='<?php echo $row['fullname']; ?>' required/>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Género :</label>
                        <input type="text" class="span11" name="gender" value='<?php echo $row['gender']; ?>' required/>
                       
                    </div>
                    <div class="input-box">
                        <label class="control-label">Fecha de Registro :</label>
                        <input type="date" name="dor" value='<?php echo $row['dor']; ?>' required/>
                        <span>Fecha de registro</span>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Planes :</label>
                        <input type="text" class="input-box" name="plan" value='<?php echo $row['plan']; ?>' required/>
                        
                    </div>
                </div>


                <div class="col">
                    <h4>Detalles de Contacto</h4>
                    <div class="input-box">
                        <label class="control-label">Número de Contacto</label>
                        <input type="number" id="mask-phone" name="contact" placeholder="9876543210" value='<?php echo $row['contact']; ?>' required/>
                        <span>(999) 999-9999</span>
                    </div>
                    <div class="input-box">
                        <label class="control-label">Dirección :</label>
                        <input type="text" name="address" placeholder="Dirección" value='<?php echo $row['address']; ?>' required/>
                    </div>

                    <h4>Detalles del Servicio</h4>
                    <div class="input-box">
                        <label class="control-label">Servicio</label>
                        <input type="text" name="services" placeholder="Servicios" value='<?php echo $row['services']; ?>' required/>
                        
                     </div>
                    <div class="input-box">
                        <label class="control-label">Monto Total</label>
                        <div class="input-append">
                            <span class="add-on"></span>
                            <input type="number" placeholder="50" name="amount" class="span11" value='<?php echo $row['amount']; ?>'  required/>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="button" name="id" value="<?php echo $row['user_id'];?>" style="--clr:#1e9bff">Enviar Detalles del Miembro<i></i></button>
            </div>
        </form>
    </div>
<?php
}
?>
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
<?php
if(!isset($_SESSION['user_id'])){	
}
?>
<?php 
    if(isset($_POST['fullname'])){
    $fullname=$_POST["fullname"];
    $gender=$_POST["gender"];
    $dor=$_POST["dor"];
    $plan=$_POST["plan"];
    $contact=$_POST["contact"];
    $address=$_POST["address"];
    $services=$_POST["services"];
    $amount=$_POST["amount"];
    $id = $_POST["id"];
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="gym";
    $con=new mysqli($host,$dbusername,$dbpassword,$dbname);
    $qry = "update member set fullname='$fullname',gender='$gender',dor='$dor',plan='$plan', contact='$contact',  address='$address', services='$services',amount='$amount' where user_id='$id'";
    $result = mysqli_query($con,$qry); 
    if(!$result){
        echo"¡ERROR!";
    }else {
        echo "<h3>...............ACTUALIZADO EXITOSAMENTE, VOLVER A <a href='dmem.php'>DETALLES DEL MIEMBRO</a></h3>";
    }
    }
?>
