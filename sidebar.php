<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/sidebar.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="sidebar close">
    <div class="header">
      <div class="logo-details">
        <i class='bx bx-dumbbell'></i>
        <span class="logo_name">BE<span1>FIT</span1></span>
      </div>
    </div>
    <ul class="nav-links">
      <li class="<?php if($page=='dashboard'){ echo 'active'; }?>">
        <a href="dashboard.php"><i class='bx bx-grid-alt'></i><span class="link_name">TABLERO</span></a>
        <ul class="sub-menu blank">
          <li class="<?php if($page=='dashboard'){ echo 'active'; }?>"><a href="dashboard.php">TABLERO</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="member.php"><i class='bx bx-user-plus'></i><span class="link_name">GESTIONAR MIEMBROS</span></a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="member.php">GESTIONAR MIEMBROS</a></li>
          <li class="<?php if($page=='member'){ echo 'active'; }?>"><a href="member.php">NUEVOS MIEMBROS</a></li>
          <li class="<?php if($page=='staff'){ echo 'active'; }?>"><a href="staff.php">MIEMBROS DEL PERSONAL</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="dmem.php">
            <i class='bx bx-book-alt'></i>
            <span class="link_name">DETALLES DE MIEMBROS</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="dmem.php">DETALLES DE MIEMBROS</a></li>
          <li class="<?php if($page=='dmem'){ echo 'active'; }?>"><a href="dmem.php">NUEVOS MIEMBROS</a></li>
          <li class="<?php if($page=='dstaff'){ echo 'active'; }?>"><a href="dstaff.php">MIEMBROS DEL PERSONAL</a></li>
        </ul>
      </li>
      <li class="<?php if($page=='chart'){ echo 'active'; }?>">
        <a href="chart.php">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="link_name">GRÁFICO</span>
        </a>
        <ul class="sub-menu blank">
          <li class="<?php if($page=='chart'){ echo 'active'; }?>"><a class="link_name" href="chart.php">GRÁFICO</a></li>
        </ul>
      </li>
      <li class="<?php if($page=='analytic'){ echo 'active'; }?>">
        <a href="analytic.php">
          <i class='bx bx-line-chart'></i>
          <span class="link_name">ANÁLISIS</span>
        </a>
        <ul class="sub-menu blank">
          <li class="<?php if($page=='analytic'){ echo 'active'; }?>"><a class="link_name" href="analytic.php">ANÁLISIS</a></li>
        </ul>
      </li>
      <li class="<?php if($page=='payment'){ echo 'active'; }?>">
        <div class="iocn-link">
          <a href="payment.php">
            <i class='bx bx-money'></i>
            <span class="link_name">PAGOS</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li class="<?php if($page=='payment'){ echo 'active'; }?>"><a  href="payment.php">PAGOS</a></li>
        </ul>
      </li>
      <li class="<?php if($page=='music'){ echo 'active'; }?>">
        <a href="index.php">
          <i class='bx bxs-music'></i>
          <span class="link_name">MÚSICA</span>
        </a>
        <ul class="sub-menu blank">
        <li class="<?php if($page=='music'){ echo 'active'; }?>"><a class="link_name" href="index.php">MÚSICA</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <!-- <img src="photos/img12.jpg" alt="profileImg"> -->
          </div>
          <div class="name-job">
            <div class="profile_name">Cerrar Sesión</div>
          </div>
          <a href="home.php"><i class='bx bx-log-out'></i></a>
        </div>
      </li>
    </ul>
  </div>
  <div class="menu">
      <i class='bx bx-menu'></i>
      <!-- <span class="text">TABLERO</span> -->
      <!-- <label class="search">
        <input type="text" placeholder="Buscar aquí">
        <i class='bx bx-search'></i>
      </label> -->
  </div>


  <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement;
            arrowParent.classList.toggle("showMenu");
        });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        });
  </script>
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
