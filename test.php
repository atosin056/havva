<?php
// Set your time variable dynamically
$time = "8hrs 30mins"; // Replace this with a variable or data from your database
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customizable Time-Based Progress Circle</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .chart-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f0f8f5;
    }
    #progressText {
      position: absolute;
      font-size: 24px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="chart-container">
    <canvas id="progressChart" width="200" height="200"></canvas>
    <div id="progressText">Loading...</div>
  </div>

  <script>
    // Replace with your PHP variable to dynamically set the time
    const timeInput = "<?php echo $time; ?>"; // For example, $time = "8hrs 30mins";

    // Set up initial chart
    const ctx = document.getElementById('progressChart').getContext('2d');
    const progressChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        datasets: [{
          data: [0, 100], // Initial: 0% progress
          backgroundColor: ['#28a745', '#e0e0e0'],
          borderWidth: 0
        }]
      },
      options: {
        rotation: -90,
        circumference: 270,
        cutout: '75%',
        plugins: { tooltip: { enabled: false } }
      }
    });

    // Function to update progress based on timeInput
    function updateProgress() {
      const totalMinutes = parseTimeInput(timeInput);
      const maxMinutes = 24 * 60; // 24 hours in minutes
      const percentage = (totalMinutes / maxMinutes) * 100;

      // Update the chart data
      progressChart.data.datasets[0].data = [percentage, 100 - percentage];
      progressChart.update();

      // Update the text inside the chart
      document.getElementById('progressText').innerText = timeInput || "No Time Provided";
    }

    // Helper function to parse time input
    function parseTimeInput(input) {
      let hours = 0, minutes = 0;
      const hourMatch = input.match(/(\d+)\s*hrs?/i);
      const minuteMatch = input.match(/(\d+)\s*mins?/i);

      if (hourMatch) hours = parseInt(hourMatch[1]);
      if (minuteMatch) minutes = parseInt(minuteMatch[1]);

      return hours * 60 + minutes;
    }

    // Call updateProgress on page load
    updateProgress();
  </script>
</body>
</html>

