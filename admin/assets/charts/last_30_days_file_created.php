<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart2);

    function drawChart2() {
      <?php
      // print_r($data);
      $data2 = json_encode($data2);
      echo "var data = google.visualization.arrayToDataTable($data2);";
      ?>
      var options = {
        title: 'Aantal toegevoegde bestanden per 30 dagen',
        hAxis: {title: 'Dag',  titleTextStyle: {color: '#333'} ,format:'0'},
        vAxis: {minValue: 0 , format:'0'}, 
      };

      var chart = new google.visualization.AreaChart(document.getElementById('chart_div_2'));
      chart.draw(data, options);
    }
</script>