
    // <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    // <script type="text/javascript">
        google.charts.load("current", {packages : ["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['ID', 'Effort', 'Priority', 'Complexity'],
            ['App1',   8,  1,      220],
            ['App2',   2,  3,      130],
            ['App3',   8,  1,      50],
            ['App4',   5,  2,      230],
            ['App5',   1,  2,      210],
            ['App6',   2,  1,      10],
            ['App7',   5,  3,      80]
        ]);

        var options = {
        title: 'Correlation between effort, priority ' +
                'and complexity',
            colorAxis: {colors: ['yellow', 'red']},
        hAxis: {title: 'Effort'},
        vAxis: {title: 'Priority'},        };

        var chart = new google.visualization.BubbleChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        }
    // </script>
    // <script type="text/javascript">
    //     google.charts.load('current', {'packages':['corechart']});
    //     google.charts.setOnLoadCallback(drawSeriesChart);

    // function drawSeriesChart() {

    //     var data = google.visualization.arrayToDataTable([
    //     ['ID', 'Effort', 'Priority', 'AppGroup',     'Complexity'],
    //     ['App1',    8,              1,      'Application Group1',  220],
    //     ['App2',    2,              3,      'Application Group1',         130],
    //     ['App3',    8,              1,      'Application Group2',         50],
    //     ['App4',    5,              2,      'Application Group2',    230],
    //     ['App5',    2,              2,      'Application Group2',         210],
    //     ['App6',    2,              1,    'Application Group2',    10],
    //     ['App7',    5,              3,      'Application Group3',    80]
    //     ]);

    //     var options = {
    //     title: 'Correlation between effort, priority ' +
    //             'and complexity',
    //     hAxis: {title: 'Effort'},
    //     vAxis: {title: 'Priority'},
    //     colorAxis: {colors: ['green', 'red']},
    //     bubble: {textStyle: {fontSize: 11}}
    //     };

    //     var chart = new google.visualization.BubbleChart(document.getElementById('series_chart_div'));
    //     chart.draw(data, options);
    // }
    // // </script>    
    
    // // <script type="text/javascript">
    //     google.charts.load('current', {'packages':['corechart']});
    //     google.charts.setOnLoadCallback(drawSeriesChart);

    // function drawSeriesChart() {

    //     var data = google.visualization.arrayToDataTable([
    //     ['ID', 'Effort', 'Complexity', 'AppGroup',     'Importance'],
    //     ['App1',    8,             220,      'Application Group1',  1],
    //     ['App2',    2,              130,      'Application Group1',         3],
    //     ['App3',    8,              50,      'Application Group2',         1],
    //     ['App4',    5,              230,      'Application Group2',    2],
    //     ['App5',    2,              210,      'Application Group2',         5],
    //     ['App6',    2,              10,    'Application Group2',    4],
    //     ['App7',    5,              80,      'Application Group3',    8]
    //     ]);

    //     var options = {
    //     title: 'Correlation between effort, complexity ' +
    //             'and bubble size by importance',
    //     hAxis: {title: 'Effort'},
    //     vAxis: {title: 'Complexity'},
    //     colorAxis: {colors: ['green', 'red']},
    //     bubble: {textStyle: {fontSize: 11}}
    //     };

    //     var chart = new google.visualization.BubbleChart(document.getElementById('series_chart_priority'));
    //     chart.draw(data, options);
    // }
    // </script>        
//   </head>
    <body>
    <p>Using colours for complexity (yelow -> red)</p>
    <div id="chart_div" style="width: 1000px; height: 800px;"></div>
    {/* <p>Using groups + bubble sizes for complexity</p>    
    <div id="series_chart_div" style="width: 1000px; height: 800px;"></div>
        <p>Using groups + bubble sizes for importance</p>    
    <div id="series_chart_priority" style="width: 1000px; height: 800px;"></div> */}
    </body>
// </html>