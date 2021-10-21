<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Insert title here</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
				$(document).ready(function() {
					$("#header").load("headerContent.php"   );
					$("#sct01" ).load("section01Content.php");
					$("#sct02" ).load("section02Content.php");
					$("#footer").load("footerContent.php"   );
				});
		</script>
	</head>
<body>
	<header id="header">innerHTML header</header>
	<section class="sct" id="sct01" >innerHTML sct01</section>
	<section class="sct" id="sct02">innerHTML sct02</section>
	<footer id="footer">innerHTML footer</footer>
</body>
</html>