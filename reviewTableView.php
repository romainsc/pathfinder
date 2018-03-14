    <!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<?php
$custId = $_REQUEST['customerId'];

?>
	<head>
		<title>Pathfinder</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />

    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    <script type="text/javascript">


    function getRequestApp(url) {
        const xhttp = new XMLHttpRequest();
        console.log(url);
        let data = null;

        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
            let data = JSON.parse(this.responseText);
            console.log(data);
            sortApplicationIds(data);
            }
        }
        xhttp.open("GET", url, true);
        xhttp.setRequestHeader("Content-type", "application/json");
        xhttp.send();
    }


    function sortApplicationIds(data){
        // console.log("hit");
        var appsAndId = [[]];
        for (let i = 0; i < data.length; i++){
            if (data[i]["Review"] !== null){
                appsAndId = [data[i]["Name"], data[i]["Id"], data[i]["Review"]];
                // console.log("hit2", appsAndId);
            }
        }
        getRequestReview(appsAndId);
    }


    function getRequestReview(appsAndId) {
        const xhttp = new XMLHttpRequest();
        let customerId = '<?php print $custId; ?>';
        let applicationName = appsAndId[0];
        let applicationId = appsAndId[1];
        let reviewId = appsAndId[2];
        let url = "http://pathtest-pathfinder.6923.rh-us-east-1.openshiftapps.com/api/pathfinder/customers/" + String(customerId) + "/applications/" + applicationId + "/review/" + reviewId + "/";
        let data = null

        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
            let data = JSON.parse(this.responseText);
            console.log("Review", data);
            sortReviewData(data);
            }
        }
        xhttp.open("GET", url, true);
        xhttp.setRequestHeader("Content-type", "application/json");
        xhttp.send();
    }

    function sortReviewData(data) {


    }


    function getApplications() {
        let customerId = '<?php print $custId; ?>';
        let url = "http://pathtest-pathfinder.6923.rh-us-east-1.openshiftapps.com/api/pathfinder/customers/" + String(customerId) + "/applications/";
        getRequestApp(url);

    }

    function getDataSet() {
            var dataSet = [
                [ "adasd", "Refactor", "Large", "3"],
                [ "Application 2", "Retire", "Medium", "5"],
            ];
        return dataSet;

    }

        

    getApplications();

    // var applicationName = getAppInfo();
    // for (let i = 0; i < applicationName.length; i++){
    //     console.log(applicationName[i]);
    // }
    // console.log("AppNames 2 ",applicationName);
    // console.log("asdasd ", applicationName[0]);
    // console.log(typeof applicationName);



$(document).ready(function() {
    $('#reviewTable').DataTable( {
        data: getDataSet(),
        columns: [
            { title: "Application" },
            { title: "Decision" },
            { title: "Estimate" },
            { title: "Business Priority" },
        ]
    } );
} );
</script>


		<script>
	  $( function() {
	    $( "#speed" ).selectmenu();

	    $( "#files" ).selectmenu();

	    $( "#number" )
	      .selectmenu()
	      .selectmenu( "menuWidget" )
	        .addClass( "overflow" );

	    $( "#salutation" ).selectmenu();
	  } );
	  </script>


      
	</head>

	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.php">Pathfinder</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>



    <div class="table-responsive">  
    <section id="banner2">
        <div class="inner">
            <h1>Review Pane</h1>
            <p>Review and view the results of all assessments.</div>
    </section>


    <table id="reviewTable" class="display" width="100%"></table>
<!--  
        <table id="table_id" class="display">
            <thead>  
                <tr>  
                    <td><b>Application Name</b></td>  
                    <td><b>Decision</b></td>  
                    <td><b>Estimate</b></td>  
                    <td><b>Business Priority</b></td>  
                </tr>  
            </thead>  
            <tr>
                <td>My App 1</td>
                <td>Refactor</td>
                <td>Large</td>
                <td>6</td>
            </tr>
            <tr>
                <td>My App 2</td>
                <td>Retire</td>
                <td>Large</td>
                <td>3</td>
            </tr>
            <tr>
                <td>My App 3</td>
                <td>Rehost</td>
                <td>Small</td>
                <td>9</td>
            </tr>
        </table>
        <script>
      $(document).ready( function () {
      $('#table_id').DataTable();
      } );
      </script> -->

    </div>



		<!-- Scripts -->
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
         


	</body>
</html>