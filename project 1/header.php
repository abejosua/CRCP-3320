<!DOCTYPE html>
<html>
<head>
	<title>Rolling Stones Top 100 All Time</title>
	<meta name="description" content="A list of the top 100 albums of all time, according to Rolling Stone.">
	<link type="text/css" rel="stylesheet" href="index.css"/>
	<script type="text/javascript" src="index.js"></script>

</head>
<body>
	<a href="index.php"><h1>Rolling Stones Top 100 All Time</h1></a>
	<h2>At least, according to some source.</h2>
	<form>	
		Sort by
		<select onchange="location = this.options[this.selectedIndex].value;">
			<option>Select</option>
			<option value="index.php?sort=rank">Rank</option>
			<option value="index.php?sort=title">Title</option>
			<option value="index.php?sort=year">Year</option>
		</select>
		<br>
	</form>