
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		var root = 'https://jsonplaceholder.typicode.com/photos';

		function logResults(json)
		{
  			console.log("Output : " + JSON.stringify(json));
  			$("#div1").html("Output : " + JSON.stringify(json));
		}
		$.ajax({
  			//url: "https://api.github.com/users/jeresig",
  			url: root,
  			dataType: "jsonp",
  			jsonpCallback: "logResults"
		});

	</script>
</head>
<body>
	<div><h2>jQuery AJAX Call Example</h2></div>
	<div id="div1">jQuery AJAX Call Output</div>
</body>
</html>