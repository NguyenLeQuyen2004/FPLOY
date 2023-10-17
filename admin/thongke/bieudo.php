<?php
//var_dump($thongke);
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>Biểu đồ</h1>
    </div>
    <div class="row2 form_content ">
        <div id="myChart" style="width:800px; height:500px; align-items: center">
        </div>

        <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.arrayToDataTable([
                ['DANH MỤC', 'SỐ LƯỢNG'],
                <?php foreach($thongke as $value) {
                extract($value);
                echo "['$tendm', $soluong],";
      }?>
            ]);
            // Set Options
            const options = {
                title: 'Thống kê sản phẩm theo loại hàng',
                is3D: true
            };

            // Draw
            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);

        }
        </script>
    </div>
</div>