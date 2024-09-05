<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/analytic.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <title>Sistema de Gestión de Gimnasio</title>
</head>
<body>
<?php $page = 'analytic';
    include 'sidebar.php' ?>
<?php 
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "gym";
    $con = new mysqli($host, $dbusername, $dbpassword, $dbname);
  
  $query = $con->query("
    SELECT 
      services as services,
        SUM(amount) as amount
    FROM member
    GROUP BY services
  ");

  foreach($query as $data)
  {
    $services[] = $data['services'];
    $amount[] = $data['amount'];
  }

?>

<div class="ana">
<div class="analytic">
  <canvas id="myChart"></canvas>
</div>
</div>
 
<script>
  // === include 'setup' then 'config' above ===
  const labels = <?php echo json_encode($services) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Total de Miembros en Servicios',
      data: <?php echo json_encode($amount) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
<script type="text/javascript">
        // Esta función se llama desde los menús emergentes para transferir a
        // una página diferente. Ignora si el valor devuelto es una cadena nula:
        function goPage (newURL) {

        // si la url está vacía, omite los divisores del menú y restablece la selección del menú a predeterminado
            if (newURL != "") {
      
                // si la url es "-", es esta página -- restablece el menú:
                if (newURL == "-" ) {
                resetMenu();            
                } 
                // de lo contrario, envía la página a la URL designada            
                else {  
                    document.location.href = newURL;
                }
            }
        }
        // restablece la selección del menú al entrar en esta página:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>  
</body>
</html>
