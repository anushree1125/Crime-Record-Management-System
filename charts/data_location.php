<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
      <?php 
include('chart.css');
?>
    </style>
   
</head>
<body>
<h2>Visualizing number of cases filed based on location</h2>
    <nav class="option">
    <!-- <a class="btn btn-primary" href="data_location.php" role="button">Location</a></br> -->
    <a class="btn btn-primary" href="case_branch.php" role="button">Case branch</a></br>
    <a class="btn btn-primary" href="data_police.php" role="button">Police</a></br>
    <a class="btn btn-primary" href="year.php" role="button">Year</a></br>
    <a class="btn btn-primary" href="case_status.php" role="button">Case status</a>
  </nav>
    <?php 
$con = new mysqli('localhost','root','','crime3');
$query=$con->query("SELECT count(DISTINCT case_id) as Total_cases,location from cases GROUP BY location;");
foreach($query as $r) {
    $location[]=$r['location'];
    $no_of_cases[]=$r['Total_cases'];
    
}
?>
<div class="chartBox">
  <canvas id="myChart"></canvas>
  </div>
  <script>
const labels = <?php echo json_encode($location) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Total cases',
      data:  <?php echo json_encode($no_of_cases)?>,
      backgroundColor: [
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)'
      ],
      borderColor: [
        'rgb(54, 162, 235)',
        'rgb(54, 162, 235)',
        'rgb(54, 162, 235)',
        'rgb(54, 162, 235)',
        'rgb(54, 162, 235)',
        'rgb(54, 162, 235)',
        'rgb(54, 162, 235)'
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