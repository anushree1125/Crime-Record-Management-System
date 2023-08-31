<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualisation</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
  <?php 
include('chart.css');
?>
    </style> 
</head>
<body>
<h2>Visualizing total number of cases filed yearly</h2>
    <nav class="option">
    <a class="btn btn-primary" href="data_location.php" role="button">Location</a></br>
    <a class="btn btn-primary" href="case_branch.php" role="button">Case branch</a></br>
    <a class="btn btn-primary" href="data_police.php" role="button">Police</a></br>
    <a class="btn btn-primary" href="case_status.php" role="button">Case status</a>
  </nav>
<?php 
$con = new mysqli('localhost','root','','crime3');
$query=$con->query("select count(distinct case_id) as Total_cases,year from cases group by year
");
foreach($query as $r) {
    $year[]=$r['year'];
    $no_of_cases[]=$r['Total_cases'];
    
}
?>
<div class="chartBox">
  <canvas id="myChart"></canvas>
  </div>
  <script>
const labels = <?php echo json_encode($year) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Number of cases',
      data:  <?php echo json_encode($no_of_cases)?>,
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
    type: 'line',
    data: data,
    options: {
      scales: {
      y: {
        ticks: {
          stepSize: 1,
          beginAtZero: true,
        },
      },
    },
    },
  };
  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
    
</body>
</html>
































































































































