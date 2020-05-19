<?php

if(isset($_SESSION['email']))
{
 $x=$_SESSION['lastdaycalorie'] ;
  if($_SESSION['currentweight']>$_SESSION['targetweight'])
  {
      $y=$_SESSION['dcr']-500;
  }
  else
  $y=$_SESSION['dcr']+500;
?>
<script>
Highcharts.chart('container2', {
    chart: {
        type: 'cylinder',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 100,
            viewDistance: 25
        }
    },
    title: {
        text: 'Calories history'
    },
    plotOptions: {
        series: {
            depth: 25,
            colorByPoint: true
        }
    },
    series: [{
        // data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
    
    
        data: [null,null,null,<?php echo $x; ?>,<?php echo $y ?>,null,null,null],
        name: 'Cylinders',
        showInLegend: false
    }]
});
</script>

<?php }
?>