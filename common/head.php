<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>CubaData</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/css/main.min.css" />
		<link rel="stylesheet" href="/assets/css/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/switchery.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/flags.min.css">
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" href="/images/cubadata_icon.png">
		<?php require $_SERVER['DOCUMENT_ROOT'] . "/google-analytics.inc"; ?>
	</head>

    <?php $surveys = json_decode(file_get_contents("../model/surveys.json")); ?>