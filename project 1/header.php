<!DOCTYPE html>
<html>
<head>
	<title>Rolling Stones Top 100 All Time</title>
	<meta name="description" content="A list of the top 100 albums of all time, according to Rolling Stone.">
	<link type="text/css" rel="stylesheet" href="index.css"/>
	<script>
		function replaceList() {
			// go out to the server
			// grab the data in data.txt
			// replace the favoriteFoods div

			var xhr = new XMLHttpRequest();
			xhr.open("POST", "sortTable.php", true);
			xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			var value = document.getElementById("sortOrder").value;
			var param = "sortOrder=" + value;
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status == 200) {
					document.getElementById("sortTable").innerHTML = xhr.responseText;
				}
			}
			xhr.send(param);
		}
	</script>

</head>
<body>
	<a href="index.php"><h1>Rolling Stones Top 100 All Time</h1></a>
	<h2>At least, according to some source.</h2>
	<form action="#" method="POST">	
		Sort by
		<select id="sortOrder" name="sortOrder">
			<option value="rank">Rank</option>
			<option value="title">Title</option>
			<option value="year">Year</option>
		</select>
		<input type="submit" id="submitSelection" onclick="replaceList(); return false;">
	</form>