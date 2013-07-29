
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
		  
		  <form action="payment/submit" method="post">
  
  <!-- Label and text input -->
  <label for="cc_name">Name</label>
  <input type="text" id="cc_name" name="cc_name" />
 
  <!-- Label and select list -->
  <label for="cc_type">CC Type</label>
  <select id="cc_type" name="cc_type">
    <option value="visa">Visa</option>
    <option value="matercard">Mastercard</option>
  </select>
  
  
  <!-- Label and text input -->
  <label for="cc_number">CC Number</label>
  <input type="text" id="cc_number" name="cc_number" />
  
  <!-- Label and select list -->
  <label for="cc_month">Month</label>
  <select name="cc_month" id="cc_month">
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>

<label for="cc_year">Year</label>
  <select id="cc_year" name="cc_year">
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
  </select>
  
  <fieldset>
  <label for="pay_now">Pay Now</label>
  <input type="checkbox" name="pay_now" id="pay_now" value="yes" />
  </fieldset>
 
  <button type="submit">Pay</button>
 
</form>
		</div>

	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>