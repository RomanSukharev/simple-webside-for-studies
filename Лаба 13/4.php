<html>
<head>
<meta charset="utf-8">
<title>Обратгная связь</title>
</head>
<style>
	body {
  	overflow-x: hidden;
	}
	.A{
		display: flex;
		flex-direction: row;
		justify-content: center;
		background-color:#5EB8DA;
	}
	.A1{
		margin:10px;
		font-size: 20px; 
		font-style: normal;
		vertical-align: baseline;
		
	}
	
	a {
		text-decoration: none;
		color:#030B66;
	}
	a:visited{
		color:#030B66;
		
	}
	table {
	  border-collapse: collapse; 
	  line-height: 1.1;
	  font-family: serif;
	  background:  radial-gradient(farthest-corner at 50% 50%, white, #DCECF8);
	  color: #0C213B;
	}
	th {
	  padding: 10px; 
	  border: 1px solid #FFFFFF;
	  text-align:center;
	}
	td {
	  background:#D2D2D2;
	  padding: 10px; 
	  border: 1px solid #FFFFFF;
	  text-align:center;	
	}
	
	p1{
		align-content: center;
		margin-left: 80px;
		margin-right: 80px;
		font-style: italic;
		text-indent: 20px;
	}
	p2{
		align-content: center;
		margin-left: 100px;
		margin-right: 100px;
		font-style: italic;
		text-indent: 10px;
		word-spacing: 3px;
		letter-spacing: normal;
	}
	p{
		line-height: 1;
		text-transform: none;
	}
	
</style>

<script>
	function img(n, action)
 {
	if (action)
	{document.images[n-1].src= "c"+n+".png"}
	else
	{document.images[n-1].src= n+".png"}
 }
</script>
<body bgcolor="#000000">
	<div class="A">
		<div class="A1"> | <img width="40" height="40" src="1.png"><a href="1.html" onmouseover="img(1,1)" onmouseout="img(1,0)">Главная страница |</a></div>
		<div class="A1"> | <img width="40" height="40" src="2.png"><a href="2.html" onmouseover="img(2,1)" onmouseout="img(2,0)">Искусственный интеллект |</a></div>
		<div class="A1"> | <img width="40" height="40" src="3.png"><a href="3.html" onmouseover="img(3,1)" onmouseout="img(3,0)">Интерактивчик |</a></div>
		<div class="A1"> | <img width="40" height="40" src="4.png"><a href="4.html" onmouseover="img(4,1)" onmouseout="img(4,0)">Обратная связь |</a></div>
	</div>
	
	<form>
	<p align="center"> 
	<p align="center"><font color="#FFFFFF" size="+3" face="serif"> 
	_____________________________________________________________________________ <br>
	</font></p>
	<p align="center"><font color="#FFFFFF" size="+3" face="serif">Коты меняющиеся местами (силой мысли и нажатием на кнопку)</font></p> 
	</form>
 
	
	<form method="POST">
    <p align="center"><font color="#FFFFFF" size="+3" face="serif"> 
	Введите свое имя: <br>
	</font></p>
    <p align="center"><input type="text" name="f_name"><br></p>
    <p align="center"><font color="#FFFFFF" size="+3" face="serif"> 
	Введите свою фамилию: <br>
	</font></p>
    <p align="center"><input type="text" name="l_name"><br><br></p>
 
    <p align="center"><input type="submit" value="Display" name="submit"></p>
    </form>

	<?php
     
    // When the submit button is clicked
    if (isset($_POST['submit'])) {
     
        // Creating variables and 
        // storing values in it
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
 
        echo "<p align="center"><font color="#FFFFFF" size="+3" face="serif"><i> Good Morning, $f_name $l_name </i></font></p>";
    }
	?>

	<p align="center"><font color="#FFFFFF" size="+3" face="serif"> 
	_____________________________________________________________________________ <br>
	</font></p>
</body>

</html>
