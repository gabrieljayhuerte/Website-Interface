<!DOCTYPE html>
<html>
	<head>
	<!-- usage of special character -->
	<meta charset="utf-8">
	<!-- This is a mobile application -->
	<meta name="viewport" content="width=device-width", initial-scale="1.0", maximum-scale="1.0">
	<!-- Use for Internet Exploer -->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    
	<title><?php display_title(); ?></title>
	<!-- import UIKIT cdn css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
	<!-- import jquery -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <!-- import uikit js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
  <!-- Font Awesome -->
	<script src="https://use.fontawesome.com/acc6bc0537.js"></script>
	<!-- For CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
   <?php styles_include() ?>
	</head>
  <body>
    <?php require 'layouts/nav.blade.php'; ?>
    <?php display_content(); ?>
    <?php require 'layouts/footer.blade.php'; ?>
    
    <?php scripts_include() ?>

	</body>
</html>