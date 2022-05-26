    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart3);
      function drawChart3() {
        <?php
        // print_r($data);
        $data3 = json_encode($data3);
        echo "var data = google.visualization.arrayToDataTable($data3);";
        ?>

        var options = {
          title: 'File Types',
          pieHole: 0.1,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart_file_types'));
        chart.draw(data, options);
      }
    </script>