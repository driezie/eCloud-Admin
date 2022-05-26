<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      <?php
      // print_r($data);
      $data = json_encode($data);
      echo "var data = google.visualization.arrayToDataTable($data);";
      ?>
      var options = {
        title: 'Aantal aangemaakte gebruikers per 30 dagen',
        hAxis: {title: 'Dag',  titleTextStyle: {color: '#333'} ,format:'0'},
        vAxis: {minValue: 0 , format:'0'}, 
      };

      var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
</script>