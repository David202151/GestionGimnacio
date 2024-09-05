<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Gimnasio</title>
    <link rel="stylesheet" href="../css/staff.css">
</head>

<body>
    <?php $page = 'staff';
    include 'sidebar.php' ?>

    <?php

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "gym";
    @$id = $_GET['id'];
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    $qry = "select * from staff where user_id='$id'";
    $result = mysqli_query($conn, $qry);
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <div class="main">

            <form action="update-staff.php" method="post" role="form">
                <h1>ACTUALIZAR DETALLES DEL PERSONAL</h1>
                <div class="row">
                    <div class="col">
                        <h4>Detalles del Personal</h4>
                        <div class="input-box">
                            <label class="control-label">Nombre Completo :</label>
                            <input type="text" name="fullname" placeholder="Nombre Completo" value='<?php echo $row['fullname']; ?>' required />
                        </div>
                        <div class="input-box">
                            <label class="control-label">Género :</label>
                            <input type="text" class="input-box" name="gender" value='<?php echo $row['gender']; ?>' required />
                        </div>

                        <div class="input-box">
                            <label class="control-label">Designación :</label>
                            <input type="text" class="input-box" name="designation" value='<?php echo $row['designation']; ?>' required />
                        </div>
                    </div>
                    <div class="cols">
                        <h4>Detalles de Contacto</h4>
                        <div class="input-box">
                            <label class="control-label">Correo Electrónico :</label>
                            <input type="email" name="email" placeholder="Introduce un Correo Válido" value='<?php echo $row['email']; ?>' required />
                        </div>
                        <div class="input-box">
                            <label class="control-label">Número de Contacto</label>
                            <input type="number" id="mask-phone" name="contact" placeholder="9876543210" value='<?php echo $row['contact']; ?>' required />
                            <span>(999) 999-9999</span>
                        </div>
                        <div class="input-box">
                            <label class="control-label">Dirección :</label>
                            <input type="text" name="address" placeholder="Dirección" value='<?php echo $row['address']; ?>' required />
                        </div>

                    </div>
                </div>
                <div>
                    <button type="submit" class="button" name="id" value="<?php echo $row['user_id']; ?>" style="--clr:red">Enviar Detalles del Personal<i class='bx bx-save'></i></button>
                </div>
            </form>
        </div>
    <?php
    }
    ?>
    <script type="text/javascript">
        // Esta función se llama desde los menús emergentes para transferir a
        // una página diferente. Ignorar si el valor devuelto es una cadena vacía:
        function goPage(newURL) {

            // si la URL está vacía, omite los divisores del menú y restablece la selección del menú al valor predeterminado
            if (newURL != "") {

                // si la URL es "-", es esta página -- restablece el menú:
                if (newURL == "-") {
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
// header('location:../member.php');	
}
?>

<?php 
        
            if(isset($_POST['fullname'])){
                $fullname = $_POST["fullname"];
                $gender = $_POST["gender"];
                $designation = $_POST["designation"];
                $email = $_POST["email"];
                $contact = $_POST["contact"];
                $address = $_POST["address"];
                $id = $_POST['id'];

                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "gym";

         
            $con=new mysqli($host,$dbusername,$dbpassword,$dbname);
       
            $qry = "update staff set fullname='$fullname',gender='$gender',designation='$designation',email='$email', contact='$contact',  address='$address' where user_id='$id'";
            $result = mysqli_query($con,$qry); 

            if(!$result){
                echo"¡ERROR!";
            }else {

                echo "<h3>...............ACTUALIZADO EXITOSAMENTE, VOLVER A <a href='dstaff.php'>DETALLES DEL PERSONAL</a></h3>";

            }

            }
?>
