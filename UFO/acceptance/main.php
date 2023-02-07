<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="main.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../../style/fonts.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://d3js.org/d3.v4.min.js"></script>
</head>
<?php
$randomtoken = base64_encode( openssl_random_pseudo_bytes(32));
$_SESSION['csrfToken']=$randomtoken;
?>
<body>
<div id="pageTitle">
GDAS UFO Acceptance
</div>
<div id="pageContents">
<center>
<br><br>UFO H(x), QC, and error acceptance status using GSI produced GeoVaLs:
<?php include('status_geovals.html') ?>
<br><br>UFO H(x), QC, and error acceptance status using FV3-JEDI:
<br><br>Work not yet begun
</center>
</div>
</body>
</html>
