<!DOCTYPE html>
<html>
	<head>
		<title> Leaderboard </title>
		<script language = "JavaScript" type = "text/javascript" 						src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<script language = "JavaScript" type = "text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		
		<script>
			function sampleFunction(){
				alert("hello");
			}
			function loadLeaderboard(){
				//alert("Leader board loading");
				$.get("http://localhost:8888/l4/public/api/v1/getLeaderboard/kills",function(data){
				 	alert("Data: " + data);
				 });
			}
			//http://localhost:8888/l4/public/api/v1/getLeaderboard
		</script>
	</head>
	
	<body >
		<h1> Leaderboard </h1>
		<button onclick=loadLeaderboard()> Click Me </button>
	</body>
</html>