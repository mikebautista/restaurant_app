
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Your Page Title Here :)</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<div class="sixteen columns">Welcome to the restaurant app</div>
		<div class="sixteen columns">
  
		  <!-- Label and text input -->
  <form action="order/submit" method="post">
  
  <!-- Label and text input -->
  <label for="person_name">Person Name</label>
  <input type="text" id="person_name" name="person_name" />
 
  <!-- Label and select list -->
  <label for="meal">Meal</label>
  <select id="meal" name="meal">
    <option value="hot dog">Hot Dog</option>
    <option value="hamberger">Hamburger</option>
    <option value="chicken">Chicken</option>
  </select>
  
  <!-- Label and select list -->
  <label for="drinks">Drinks</label>
  <select id="drinks" name="drinks">
    <option value="water">Water</option>
    <option value="soda">Soda</option>
    <option value="tea">Tea</option>
  </select>
  
  <!-- Label and textarea -->
  <label for="special_instructions">Special Instructions</label>
  <textarea id="special_instructions" name="special_instructions"></textarea>
  
  
  <label for="time">Time</label>
  <input type="text" id="time" name="time" />
 
  <button type="submit">Order Meal</button>
 
</form>
		</div>

	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>