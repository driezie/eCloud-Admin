    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart4);
      function drawChart4() {
        <?php
        // print_r($data);
        $data4 = json_encode($data4);
        echo "var data = google.visualization.arrayToDataTable($data4);";
        ?>

        var options = {
          title: 'File Size',
          pieHole: 0.1,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart_file_size'));
        chart.draw(data, options);
      }
    </script>