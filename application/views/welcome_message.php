<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Xibusinness</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {

		background-color: #ff0000;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #c0c0c0;
	}

	a {
		color: #fcfcfc;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #FCFCFC;
		background-color: #000000;
		border-bottom: 1px solid #808080;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #808080;
		color: #00ff00;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		background-color: #000000;
		margin: 0 15px 0 15px;
	}

	p.footer {
		background-color: #000000;
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		background-color: #000000;
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #808080;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Inicio</h1>

	<div id="body">
		<p>Ey que onda</p>


		<p>Vamos por una maruchan?</p>

		<p>Dale click aquiiiiiiii</p>

		<code>Hola mundo HTML</code>

		<p>De la sierra morena cielito lindo vienen bajando</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>