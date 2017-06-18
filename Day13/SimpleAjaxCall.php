<!DOCTYPE html>
<html>
<head>
	<title>AJAX Example 1</title>
	<script>
    var xhr = new XMLHttpRequest();
    var url = "https://api.github.com/users/jeresig";
    xhr.open("GET", url);
    xhr.onreadystatechange = function() {

        if (xhr.status === 200 && xhr.readyState === 4) {

            document.querySelector("body").innerHTML = xhr.responseText
        }
    }
    xhr.send();
</script>
</head>
<body>

</body>
</html>
