<?php
  require 'connection.php';
  $result = mysql_query("SELECT * FROM songs");
   $counter = 0;
   while($row = mysql_fetch_array($result))
    {
      $song[$counter] = $row['song'];
      $hits[$counter] = $row['hits'];
      $counter = $counter +1;
    }
?>
<head>
	<title>Music Crazy</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script type="text/JavaScript">
      $('.carousel').carousel({
        interval: 3000
      })
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      var song1 = '';
      var hit2 = '<?php echo $hits[0] ?>';
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Song', 'Hits'],
          ['<?php echo $song[0]."  ."; ?>',  <?php echo $hits[0]; ?>],
          ['<?php echo $song[1]; ?>',  <?php echo $hits[1]; ?>],
          ['<?php echo $song[2]; ?>',  <?php echo $hits[2]; ?>],
          ['<?php echo $song[3]; ?>',  <?php echo $hits[3]; ?>],
          ['<?php echo $song[4]; ?>',  <?php echo $hits[4]; ?>],
         ['<?php echo $song[5]; ?>',  <?php echo $hits[5]; ?>],
         ['<?php echo $song[6]; ?>',  <?php echo $hits[6]; ?>],
          ['<?php echo $song[7]; ?>',  <?php echo $hits[7]; ?>],
          ['<?php echo $song[8]; ?>',  <?php echo $hits[8]; ?>],
          ['<?php echo $song[9]; ?>',  <?php echo $hits[9]; ?>],
        ]);

        var options = {
          title: 'Songs',
          vAxis: {title: '',  titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
<body>

<div class="container col-sm-offset-1 col-sm-8">
	<div class="row header">
		<div class="col-sm-4"><a href="index.php"><img src="images/site_logo.png"></a></div>
		<div class="menuBar col-sm-7 col-sm-offset-1">
			
				<div class="col-sm-12">
					<nav>
						<ul class="nav nav-pills">
							<li class="active"><a href="index.php">Home</a></li>
							<li class=""><a href="#">Gallery</a></li>
							<li class=""><a href="#">Music</a></li>
							<li class=""><a href="#">About Us</a></li>
							<li class=""><a href="#">Artists</a></li>
							<li class=""><a href="#">FAQs</a></li>
							<li class=""><a href="#">Contact us</a></li>
						</ul>
					</nav>
				</div>
		</div>
	</div>
	 <div class="row col-sm-12">
                <div id="slider" class="carousel slide">
                  <div class="carousel-inner">
                    <div class="item">
                      <img src="images/slider-img1.jpg">
                        <div class="carousel-caption">
                         
                          
                        </div>
                    </div><!--item-->
                    <div class="item active">
                      <img src="images/slider-img2.jpg">
                        <div class="carousel-caption">
                         
                          
                        </div>
                    </div>
                    <div class="item">
                      <img src="images/slider-img3.jpg">
                        <div class="carousel-caption">
                          
                          
                        </div>
                    </div>
                  </div>
                  <a href="#slider" class="left carousel-control" data-slide="prev">&lsaquo;</a>
                  <a href="#slider" class="right carousel-control" data-slide="next">&rsaquo;</a>

                </div>
              </div>
              <div class="row">
              	<div class="col-sm-4">
					<table>
          <tr>
            <td style='padding:5px 10px 0 10px'>
              <h2><b>Position</b> </h2>
            </td>
            <td style='padding:5px 10px 0 10px;padding-left:20px;'>
              <h2>Song</h2>
            </td>
            
            <td style='padding:5px 10px 0 10px'>
              <h2><b>Hits</b> </h2>
            </td>
          </tr>
            <?php
              $result = mysql_query("SELECT * FROM songs ORDER BY hits DESC");
              $counter = 1;
              while($row = mysql_fetch_array($result))
              {
                echo "<tr>";
                  $song = $row['song'];
                  $ref = $row['href'];
                  $artist = $row['artist'];
                  $hits = $row['hits'];
                  
                  echo "<td style='padding:7px 10px 7px 10px ;text-align:center; font-size:1.3em'>";
                    echo "<strong>".$counter."</strong>";
                  echo "</td>";
                  echo "<td style='padding:7px 10px 7px 10px ; font-size:1.0em'>";
                    echo "<a href='$ref'>".$song."</a>";
                  echo "</td>";
                 /* echo "<td style='padding:7px 10px 7px 10px; font-size:1.0em'>";
                    echo "$artist";
                  echo "</td>";*/
                  echo "<td style='padding:7px 10px 7px 10px; font-size:1.0em;text-align:center'>";
                    echo "$hits";
                  echo "</td>";
                echo "</tr>";
                $counter++;
              }
              ?>
          </table>
					
				</div>
				  <div class="col-sm-8 content" style = "border-left-width:2px; border-left-style: dashed;border-left-color: #76644f;height: 550px;" id="chart_div"></div>
			  </div>
			  <div class="footer">
			  	<div class="text-center"> <span>Copyright &copy; <a href="#">musiccrazy.com</a> All Rights Reserved</span> Designed by <a target="_blank" href="http://www.navisandhu.com/">Navi Sandhu</a> </div>
			  </div>
	</div>
	<script type="text/JavaScript">
      $('.carousel').carousel({
        interval: 3000
      })
    </script>
</head>


</body>