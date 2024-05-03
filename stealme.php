<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
  border-left: 1px solid white;
}

li a {
  display: block;
  color: #BF5700;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

li:last-child {
	border-left: none;
}
.active {
  background-color: #Bf5700;
  color:white;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="/contact.php">Contact</a></li>
  <li><a href="/classes.php">Classes</a></li>
  <li><a href="/news.php">News</a></li>
  <li><a href="/index.php">Home</a></li>
  <li style="float:left"><img src="logo.jpg" width="42" height="42" alt="logo"></li>
</ul>

</body>
</html>


