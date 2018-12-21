<?php include ('../header.php'); ?>

<h1><center>Grafik Polling Opsi Kuesioner Customer</center></h1>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<div class="row">

	<script type="text/javascript">
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
	</script>

    <div class="col-lg-12 style="margin-top:10px ">        
    	<div class="col-lg-12" id="piechart"></div>
    </div>
                
    <div class="col-lg-12 style="margin-top:10px">
    	<script type="text/javascript">
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
        <div class="col-lg-12" id="piechart2"></div>
    </div>

 	<div class="col-lg-12 style="margin-top:10px">
 		<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {

			    var data = google.visualization.arrayToDataTable([
			      ['Opsi', 'Terpilih'],
			      <?php
			      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '3' ORDER BY terpilih DESC");
			      if($result->num_rows > 0){
			          while($row = $result->fetch_assoc()){
			            echo "['".$row['opsi']."', ".$row['terpilih']."],";
			          }
			      }
			      ?>
			    ]);

		    var options = {
		        title: 'Fasilitas yang diharapkan',
		        width: 700,
		        height: 400,
		    };

		    var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

    		chart.draw(data, options);
				}
		</script>
  		<div class="col-lg-12" id="piechart3"></div>
	</div>

	<div class="col-lg-12 style="margin-top:10px">
		<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {

			    var data = google.visualization.arrayToDataTable([
			      ['Opsi', 'Terpilih'],
			      <?php
			      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '4' ORDER BY terpilih DESC");
			      if($result->num_rows > 0){
			          while($row = $result->fetch_assoc()){
			            echo "['".$row['opsi']."', ".$row['terpilih']."],";
			          }
			      }
			      ?>
			    ]);

		    var options = {
		        title: 'Tipe rumah ideal',
		        width: 700,
		        height: 400,
		    };

		    var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

   			chart.draw(data, options);
	}
	</script>
  		<div class="col-lg-12" id="piechart4"></div>
	</div>


<div class="col-lg-12 style="margin-top:10px">
		<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {

			    var data = google.visualization.arrayToDataTable([
			      ['Opsi', 'Terpilih'],
			      <?php
			      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '5' ORDER BY terpilih DESC");
			      if($result->num_rows > 0){
			          while($row = $result->fetch_assoc()){
			            echo "['".$row['opsi']."', ".$row['terpilih']."],";
			          }
			      }
			      ?>
			    ]);

		    var options = {
		        title: 'Hal yang pertama dilihat',
		        width: 700,
		        height: 400,
		    };

		    var chart = new google.visualization.PieChart(document.getElementById('piechart5'));

   			chart.draw(data, options);
	}
	</script>
  		<div class="col-lg-12" id="piechart5"></div>
	</div>

<div class="col-lg-12 style="margin-top:10px">
		<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {

			    var data = google.visualization.arrayToDataTable([
			      ['Opsi', 'Terpilih'],
			      <?php
			      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '6' ORDER BY terpilih DESC");
			      if($result->num_rows > 0){
			          while($row = $result->fetch_assoc()){
			            echo "['".$row['opsi']."', ".$row['terpilih']."],";
			          }
			      }
			      ?>
			    ]);

		    var options = {
		        title: 'Tampilan flyer/brosur',
		        width: 700,
		        height: 400,
		    };

		    var chart = new google.visualization.PieChart(document.getElementById('piechart6'));

   			chart.draw(data, options);
	}
	</script>
  		<div class="col-lg-12" id="piechart6"></div>
	</div>


	<div class="col-lg-12 style="margin-top:10px">
		<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {

			    var data = google.visualization.arrayToDataTable([
			      ['Opsi', 'Terpilih'],
			      <?php
			      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '7' ORDER BY terpilih DESC");
			      if($result->num_rows > 0){
			          while($row = $result->fetch_assoc()){
			            echo "['".$row['opsi']."', ".$row['terpilih']."],";
			          }
			      }
			      ?>
			    ]);

		    var options = {
		        title: 'Gimmick yang menarik sebagai hadiah',
		        width: 700,
		        height: 400,
		    };

		    var chart = new google.visualization.PieChart(document.getElementById('piechart7'));

   			chart.draw(data, options);
	}
	</script>
  		<div class="col-lg-12" id="piechart7"></div>
	</div>

<div class="col-lg-12 style="margin-top:10px">
		<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {

			    var data = google.visualization.arrayToDataTable([
			      ['Opsi', 'Terpilih'],
			      <?php
			      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '8' ORDER BY terpilih DESC");
			      if($result->num_rows > 0){
			          while($row = $result->fetch_assoc()){
			            echo "['".$row['opsi']."', ".$row['terpilih']."],";
			          }
			      }
			      ?>
			    ]);

		    var options = {
		        title: 'Mall yang sering dikunjungi',
		        width: 700,
		        height: 400,
		    };

		    var chart = new google.visualization.PieChart(document.getElementById('piechart8'));

   			chart.draw(data, options);
	}
	</script>
  		<div class="col-lg-12" id="piechart8"></div>
	</div>

<div class="col-lg-12 style="margin-top:10px">
		<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {

			    var data = google.visualization.arrayToDataTable([
			      ['Opsi', 'Terpilih'],
			      <?php
			      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '9' ORDER BY terpilih DESC");
			      if($result->num_rows > 0){
			          while($row = $result->fetch_assoc()){
			            echo "['".$row['opsi']."', ".$row['terpilih']."],";
			          }
			      }
			      ?>
			    ]);

		    var options = {
		        title: 'Tempat makan yang paling sering dikunjungi',
		        width: 700,
		        height: 400,
		    };

		    var chart = new google.visualization.PieChart(document.getElementById('piechart9'));

   			chart.draw(data, options);
	}
	</script>
  		<div class="col-lg-12" id="piechart9"></div>
	</div>

<div class="col-lg-12 style="margin-top:10px">
		<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {

			    var data = google.visualization.arrayToDataTable([
			      ['Opsi', 'Terpilih'],
			      <?php
			      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '10' ORDER BY terpilih DESC");
			      if($result->num_rows > 0){
			          while($row = $result->fetch_assoc()){
			            echo "['".$row['opsi']."', ".$row['terpilih']."],";
			          }
			      }
			      ?>
			    ]);

		    var options = {
		        title: 'Koran yang sering dibaca',
		        width: 700,
		        height: 400,
		    };

		    var chart = new google.visualization.PieChart(document.getElementById('piechart10'));

   			chart.draw(data, options);
	}
	</script>
  		<div class="col-lg-12" id="piechart10"></div>
	</div>

<div class="col-lg-12 style="margin-top:10px">
		<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {

			    var data = google.visualization.arrayToDataTable([
			      ['Opsi', 'Terpilih'],
			      <?php
			      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '11' ORDER BY terpilih DESC");
			      if($result->num_rows > 0){
			          while($row = $result->fetch_assoc()){
			            echo "['".$row['opsi']."', ".$row['terpilih']."],";
			          }
			      }
			      ?>
			    ]);

		    var options = {
		        title: 'Provider yang digunakan',
		        width: 700,
		        height: 400,
		    };

		    var chart = new google.visualization.PieChart(document.getElementById('piechart11'));

   			chart.draw(data, options);
	}
	</script>
  		<div class="col-lg-12" id="piechart11"></div>
	</div>

	<div class="col-lg-12 style="margin-top:10px">
		<script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {

			    var data = google.visualization.arrayToDataTable([
			      ['Opsi', 'Terpilih'],
			      <?php
			      $result = mysqli_query($con,"SELECT terpilih,opsi FROM chart WHERE id_soal = '12' ORDER BY terpilih DESC");
			      if($result->num_rows > 0){
			          while($row = $result->fetch_assoc()){
			            echo "['".$row['opsi']."', ".$row['terpilih']."],";
			          }
			      }
			      ?>
			    ]);

		    var options = {
		        title: 'Akun sosial media yang sering digunakan',
		        width: 700,
		        height: 400,
		    };

		    var chart = new google.visualization.PieChart(document.getElementById('piechart12'));

   			chart.draw(data, options);
	}
	</script>
  		<div class="col-lg-12" id="piechart12"></div>
	</div>



</div>

<? include ('../footer.php'); ?>