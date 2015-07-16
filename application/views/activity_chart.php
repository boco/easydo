<html>


<?php include 'header.php';

	$taskMonths = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'); // podatki iz php controlerja
	$taskCompleted = array(0, 0, 3, 4, 5,6,7,8,3,4,11,5); // podatki iz php controlerja
	$taskInProgress = array(0, 0, 2, 4, 2,1,7,3,7,1,1,2); // podatki iz php controlerja
	$taskUncompleted = array(0, 0, 0, 4, 2,4,5,7,2,4,4,5); // podatki iz php controlerja
 ?>

<body>
	<?php include 'navbar_online.php'; ?>

	<div class="container" id="wrap">
		<div class="row about" >

			<div class="col-md-12">
				<div class="jumbotron">
					<div class="container">
						<div class="row">
							<div id="container" style="min-width: 640px; height: 400px; margin: 0 auto" class=""></div>
							</div>
						</div>

							<div class=" visible-xs">
							<div class="col-md-1"></div>
							<div class="col-md-10">
									<table class="table table-bordered">
							    <thead>
							      <tr>
							        <th>Month</th>
							        <th>Completed</th>
							        <th>In progress</th>
							        <th>Uncompleted</th>
							      </tr>
							    </thead>
							    <tbody>
							    <?php 
						    		$length = count($taskMonths);
							    	for ($i = 0; $i < $length; $i++) { ?>
										

							      <tr>
							        <td><?php echo $taskMonths[$i];?></td>
							        <td><?php echo $taskCompleted[$i];?>	</td>
							        <td><?php echo $taskInProgress[$i];?></td>
							        <td><?php echo $taskUncompleted[$i];?></td>
							      </tr>

								<?php 
									}
							    ?>

							    </tbody>
							  </table>

							</div>
							<div class="col-md-1"></div>
								
							</div>
				</div>	
			</div>
		</div>	
	</div>
	<?php include 'footer_online.php'; ?>
	
</body>


<?php include 'includeJs.php'; ?>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>
	$(function () {
    $('#container').highcharts({
        title: {
            text: 'Progress graph of your tasks',
            x: -20 //center
        },
        chart: {
        	backgroundColor:"#eee"
        },
        exporting: {
         enabled: false
        },
        subtitle: {
            text: 'Your yearly progress',
            x: -20
        },
        xAxis: {
            categories: <?php echo json_encode($taskMonths);?>
        },
        yAxis: {
            title: {
                text: 'Number of tasks'
            },
            min:0,
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Completed',
            data: 
			<?php echo json_encode($taskCompleted);?>,
            color: '#5cb85c'
        }, {
            name: 'In progress',
            data: 
			<?php echo json_encode($taskInProgress);?>,
            color: '#f0ad4e'
        }, {
            name: 'Uncompleted',
            data: 
			<?php echo json_encode($taskUncompleted);?>,
            color: '#d9534f'
        }]
    });
});
</script>
</html>