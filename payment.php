<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Gimnasio</title>
    <link rel="stylesheet" href="css/payment.css">
    <link rel="stylesheet" href="css/details.css">
</head>
<body>
    <?php $page='payment'; include 'sidebar.php'?>
    <section class="pay-section" id="pay-section">
        <div class="pay-content">
            <h1>Detalles de Pago</h1>
            <!-- <label class="search">
              <input type="text" type="submit" name="search" value="<?php if (isset($_GET['search'])){echo $_GET['search'];}?>" placeholder="Buscar aquí" required>
              <i class='bx bx-search' type='submit'></i>
            </label> -->
        </div>
        <?php
            $conn=mysqli_connect("localhost","root","","gym");
            if(isset($_GET['search']))
            {
              $filtervalues=$_GET['search'];
              $query="SELECT * FROM member where concat(name,user_id) like '%$filtervalues%' ";
              $query_run=mysqli_query($conn,$query);
              if(mysqli_num_rows($query_run)>0){
                foreach($query_run as $items){
                  echo "krishna";
                 
                }
              }
              else{
                echo "No se encontraron resultados";
              }
            }
            ?>
          <div class='mem-content'>
	  
	  <?php

        $conn=new mysqli("localhost","root","","gym");
      $qry="select * from member";
      $cnt = 1;
        $result=mysqli_query($conn,$qry);

        
          echo"<table class='content-table'>
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre Completo</th>
                  <th>Género</th>
                  
                  <th>Plan</th>
                  <th>Número de Contacto</th>
                  <th>Dirección</th>
                  <th>Servicio Elegido</th>
                  <th>Monto</th>
                
                </tr>
              </thead>";
              
            while($row=mysqli_fetch_array($result)){
            
            echo"<tbody> 
               
                <td><div class='text-center'>".$cnt."</div></td>
                <td><div class='text-center'>".$row['fullname']."</div></td>               
                <td><div class='text-center'>".$row['gender']."</div></td>
                
                <td><div class='text-center'>".$row['plan']." Mes/es</div></td>
                <td><div class='text-center'>".$row['contact']."</div></td>                
                <td><div class='text-center'>".$row['address']."</div></td>
                <td><div class='text-center'>".$row['services']."</div></td>
                <td><div class='text-center'>$".$row['amount']."</div></td>
                
                
             
                
              </tbody>";
          $cnt++;  }
            ?>

            </table>
        </div>
    </div>
    </section>
          
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
