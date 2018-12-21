
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Opsi', 'Terpilih'],
      <?php
      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '1' ORDER BY terpilih DESC");
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['opsi']."', ".$row['terpilih']."],";
          }
      }
      ?>
    ]);

    var options = {
        title: 'Informasi Perumahan Jayametro',
        width: 700,
        height: 400,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}


google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Opsi', 'Terpilih'],
      <?php
      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '2' ORDER BY terpilih DESC");
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['opsi']."', ".$row['terpilih']."],";
          }
      }
      ?>
    ]);

    var options = {
        title: 'Yang menarik dari Jayametro',
        width: 700,
        height: 400,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

    chart.draw(data, options);
}
</script>