<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/dashboard.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php include 'sidebar.php'?>

<section class="home-section" id="home-section">  
  <div class="cardbox">

    <div class="card">
      <div>
        <div class="numbers">
          <?php
            $servername="localhost";
            $uname="root";
            $pass="";
            $db="gym";
            $conn=mysqli_connect($servername,$uname,$pass,$db);
            if(!$conn)
            {
              die("Error de Conexión");
            }
            $sql = "SELECT * FROM register";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total de Registros</div>
      </div>
      <div class="iconbox">
        <i class="fa fa-eye" aria-hidden="true"></i>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $sql = "SELECT * FROM member";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total de Miembros</div>
      </div>
      <div class="iconbox">
        <i class="fa fa-users" aria-hidden="true"></i>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $sql = "SELECT * FROM staff";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total del Personal</div>
      </div>
      <div class="iconbox">
      <i class="fa fa-briefcase" aria-hidden="true"></i>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $sql = "SELECT * FROM staff where designation='cleaning'";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total del Personal de Limpieza</div>
      </div>
      <div class="iconbox">
      <i class="fa fa-home" aria-hidden="true"></i>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $sql = "SELECT * FROM staff where designation='cashier'";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total de Cajeros</div>
      </div>
      <div class="iconbox">
        <i class="fa fa-money" aria-hidden="true"></i>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $sql = "SELECT * FROM staff where designation='Trainer'";
            $query = $conn->query($sql);
            echo "$query->num_rows";
          ?>
        </div>
        <div class="cardname">Total de Entrenadores</div>
      </div>
      <div class="iconbox">
      <i class="fa fa-user-circle" aria-hidden="true"></i>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="numbers">
        <?php
            $sql = "SELECT SUM(amount) as total_amount FROM member";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            echo "$" . $row['total_amount'];
          ?>
        </div>
        <div class="cardname">Monto Total</div>
      </div>
      <div class="iconbox">
      <i class="fa fa-dollar" aria-hidden="true"></i>
      </div>
    </div>
  </div>

  <div class="piechart">
    <div id="piechart">
    <?php
        $qry = "select gender, count(*) as number from member group by gender";
        $result = mysqli_query($conn, $qry);
    ?>
    </div>
    <div id="piechart1">
    <?php
        $qry = "select designation, count(*) as number from staff group by designation";
        $result1 = mysqli_query($conn, $qry);
    ?>
    </div>
  </div>

  <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Género', 'Cantidad'],
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "['" . $row["gender"] . "', " . $row["number"] . "],";
            }
            ?>
        ]);
        var options = {
            title: 'Porcentaje de Miembros por Género',
            is3D: true,
            pieHole: 0.4
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }

    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart1);

    function drawChart1() {
        var data = google.visualization.arrayToDataTable([
            ['Designación', 'Cantidad'],
            <?php
            while ($row = mysqli_fetch_array($result1)) {
                echo "['" . $row["designation"] . "', " . $row["number"] . "],";
            }
            ?>
        ]);
        var options = {
            title: 'Porcentaje del Personal por Designación',
            is3D: true,
            pieHole: 0.4
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
        chart.draw(data, options);
    }
  </script>

<?php 
    $query = $conn->query("
    SELECT 
      services as servicios,
      SUM(amount) as monto
    FROM member
    GROUP BY services
  ");

  foreach($query as $data)
  {
    $servicios[] = $data['servicios'];
    $monto[] = $data['monto'];
  }
?>

<div class="ana">
  <div class="analytic">
    <canvas id="myChart"></canvas>
  </div>
</div>
 
<script>
  const labels = <?php echo json_encode($servicios) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Total de Miembros en Servicios',
      data: <?php echo json_encode($monto) ?>,
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

</section>

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
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
</script>

</body>
</html>
