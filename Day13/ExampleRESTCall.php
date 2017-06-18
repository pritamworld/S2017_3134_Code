<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		
		$(document).ready(function()
		{
				$("#btn1").click(function()
				{
		    		$.get("https://jsonplaceholder.typicode.com/posts/1", function(data,status)
		    		{
		        		//alert("Data: " + data + "\nStatus: " + status);
		        		//$("#div1").html("Output : " + JSON.stringify(data));
		        		var str = "<br/>User ID : " + data.userId;
		        		str += "<br/>ID : " + data.id;
		        		str += "<br/>Title : " + data.title;
		        		str += "<br/>Body : " + data.body;
		        		$("#div1").html(str);
		    		});
		    	});

		    	$("#btn2").click(function()
		    	{
		        	$.ajax(
		        		{
		        			url: "https://jsonplaceholder.typicode.com/posts/1", success: function(result)
		        			{
		            			$("#div2").html(JSON.stringify(result));
		        			}
		        		});
		   
				});

				$("#btn3").click(function()
		    	{
		        	$.ajax(
		        		{
		        			url: "https://jsonplaceholder.typicode.com/photos", success: function(result)
		        			{
		        		
		            			$("#div3").html("Output : " + JSON.stringify(result));
		            		
		        			}
		        		});
		   
				});
		   });

	</script>
</head>
<body>
	<div><h2>jQuery AJAX Call Example</h2></div>
	<div id="div1">Output 1</div>
	<div id="div2">Output 2</div>
	<div id="div3">Output 3</div>
	<button id="btn1">Click to Send an REST JSON HTTP GET request</button><br/>
	<button id="btn2">Click to Send an REST JSON AJAX request</button><br/>
	<button id="btn3">Click to get 5000 Records</button>
</body>
</html>