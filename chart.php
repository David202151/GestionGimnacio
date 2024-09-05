<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Gimnasio</title>
    <link rel="stylesheet" href="css/chart.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>
    <?php $page = 'chart';
    include 'sidebar.php' ?>
    <div class="piechart">
    
    <div id="piechart">
    
    <?php
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "gym";
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
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
                is3D:true,  
                pieHole: 0.4
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>


    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Designación', 'Cantidad'],
                <?php
                while ($row = mysqli_fetch_array($result1)) {
                    echo "['" . $row["designation"] . "', " . $row["number"] . "],";
                }
                ?>
            ]);
            var options = {
                
                title: 'Porcentaje de personal por designación',
                  is3D:true,  
                pieHole: 0.4
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
            chart.draw(data, options);
        }
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
