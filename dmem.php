<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Gimnasio</title>
    <link rel="stylesheet" href="css/details.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php $page='dmem'; include 'sidebar.php' ?>
    <div class='mem-section'>
          <div class='mem-title'>
            <h2>Tabla de Miembros</h2>
            <form id="search" role="search" method="POST" action="dmem.php">
              <label class="search">
              <input type="text" type="submit" name="search" placeholder="Buscar aquí..." required/>
              <i class='bx bx-search' type='submit'></i>
              </label>
            </form>
            <a href="dmem.php" class="back">VOLVER</a>
          </div>         
          <div class='mem-content'>
	  
	<?php
        $conn=mysqli_connect("localhost","root","","gym");
        @$search=$_POST['search'];
        $qry="select * from member where fullname like '%$search%' or user_id like '%$search%'";
        $cnt = 1;
        $result=mysqli_query($conn,$qry);

        if (mysqli_num_rows($result)==0){

            echo"<div class='error_ex'>
            <h1>403</h1>
            <h3>¡Ups! No se encontraron resultados</h3>
            <p>Parece que no hay ningún registro disponible en nuestra base de datos.</p>
            <a class='btn btn-danger btn-big'  href='dmem.php'>Volver</a> </div>'";
        }else{
    echo"<table class='content-table'>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre Completo</th>
                  <th>Género</th>
                  <th>Fecha de Registro</th>
                  <th>Plan</th>
                  <th>Número de Contacto</th>
                  <th>Dirección</th>
                  <th>Servicio Elegido</th>
                  <th>Monto</th>
                  <th>Acciones</th>
                </tr>
              </thead>";

    while ($row=mysqli_fetch_array($result)) {
        echo"<tbody> 
               
                <td><div class='text-center'>".$cnt."</div></td>
                <td><div class='text-center'>".$row['fullname']."</div></td>               
                <td><div class='text-center'>".$row['gender']."</div></td>
                <td><div class='text-center'>".$row['dor']."</div></td>
                <td><div class='text-center'>".$row['plan']." Mes/es</div></td>
                <td><div class='text-center'>".$row['contact']."</div></td>                
                <td><div class='text-center'>".$row['address']."</div></td>
                <td><div class='text-center'>".$row['services']."</div></td>
                <td><div class='text-center'>$".$row['amount']."</div></td>
                <td><div class='text-center'><a href='update-mem.php?id=".$row['user_id']."'><i class='bx bxs-edit-alt' style='color:#28b779'></i> Editar |</a> <a href='delete-mem.php?id=".$row['user_id']."' style='color:#F66;'><i class='bx bxs-trash'></i> Eliminar</a></div></td>
                
             
                
              </tbody>";
        $cnt++;
    }
}
            ?>

            </table>
        </div>
    </div>
    

    <script type="text/javascript">
        // Esta función es llamada desde los menús emergentes para transferir a
        // una página diferente. Ignora si el valor devuelto es una cadena vacía:
        function goPage (newURL) {

        // si la URL está vacía, salta los divisores del menú y restablece la selección del menú a la opción predeterminada
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
