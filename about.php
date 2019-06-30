<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
		<meta charset="utf-8" />
		<title> Anthony Davis: Personal Website </title>
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
		<header>
			<h1><b>ANTHONY DAVIS</b></h1>
		</header>
		
		<!-- Thematic change in content -->
		<hr /> 
        <nav>
			<a href="index.php">Home</a>
			<b><a href="about.php">ABOUT</a></b>
			<a href="contact.php">Contact</a>
		</nav>
		
		<br /><br />
		
		<div id="content">
			<table>
				<tr id="table-header">
					<td><strong>Programming Language</strong></td>
					<td><strong>Years Experience</strong></td>
				</tr>
				<tr class="table-row">
					<td>Java</td>
					<td>3</td>
				</tr>
				<tr class="table-row">
					<td>C++</td>
					<td>2</td>
				</tr>
				<tr class="table-row">
					<td>PHP</td>
					<td>1</td>
				</tr>
			</table>
			
			<ul>
				<li><span class="hobby">Video games</span>: I primarily play on PC, but hold a soft spot for console games from the 80s and 90s.</li>
				<li><span class="hobby">Walking</span>: Although I'm no athlete, I enjoy the refreshing air as I walk around my town.</li>
				<li><span class="hobby">Programming</span>: I'm learning new things as much as possible.</li>
			</ul>
			
		</div>
		
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
			<hr>
				CST336 Internet Programming. 2019&copy; Davis <br />
				<strong>Disclaimer:</strong>The information in this webpage is fictitious.
				 It is used for academic purposes only. <br />

				<img src="img/csumb_logo.png" alt="CSU Monterey Bay logo" />
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>