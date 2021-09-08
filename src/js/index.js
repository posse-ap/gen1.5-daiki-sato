
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(
        function() {
            var data = google.visualization.arrayToDataTable([
                [       '', '売上高', '営業利益', '経常利益'],
                ['2004 年',     1000,        400,        380],
                ['2005 年',     1170,        460,        400],
                ['2006 年',      660,       1120,        900],
                ['2007 年',     1030,        540,        480],
                ['2008 年',     1350,        750,        800]
            ]);
    
            var options = {
                title: '会社業績',
                hAxis: {title: '年度'}
            };
    
            var chart = new google.visualization.ColumnChart(document.getElementById('gct_sample_column'));
            chart.draw(data, options);
        }
    );
// </script>
// <div id="gct_sample_column" style="width:80%; height:250pt" ></div>