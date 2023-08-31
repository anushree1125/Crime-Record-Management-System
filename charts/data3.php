<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<canvas id="myChart" width="400" height="400"></canvas>
<canvas id="myChart2" width="400" height="400"></canvas>
<script>
const ctx = document.getElementById('myChart');
const ctx2 = document.getElementById('myChart2');

const myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
      fill: true,
      borderWidth: 1,
    }]
  },
});

const myChart2 = new Chart(ctx2, {
  type: 'line',
  data: {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
      fill: true,
      borderWidth: 1,
    }]
  },
});


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
const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    const myChart2= new Chart(
      document.getElementById('myChart2'),
      config2
    ); 
    
    
</script>
</body>
</html>