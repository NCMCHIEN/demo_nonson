<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pie Chart Example</title>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Tên hàng hóa');
      data.addColumn('number', 'Số lượng bán');
      data.addRows([
        <?php
        $hh = new hanghoa();
        $result = $hh->getThongKe();
        while ($set = $result->fetch()) {
          $tenhh = $set['tenhh'];
          $slb = $set['soluong'];
          echo "['$tenhh', $slb],";
        }
        ?>
      ]);

      var options = {
        title: 'Thống kê số lượng bán',
        width: 600,
        height: 500,
        backgroundColor: '#f0f0f0',
        pieSliceTextStyle: {
          color: 'black',
          fontSize: 14,
        },
        legend: {
          position: 'right',
          alignment: 'center',
          textStyle: {
            color: 'black',
            fontSize: 14,
          },
        },
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <div class="thongke">
    <div style="width: 100%" id="chart_div"></div>
    <select name="" id="">
      <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
    </select>
  </div>
</body>

</html>