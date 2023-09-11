<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>ShoeShop</title>
	<!--
		CSS
		============================================= -->
	<link  href="<?= base_url() ?>template/olshop/css/linearicons.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/font-awesome.min.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/themify-icons.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/bootstrap.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/owl.carousel.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/nice-select.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/nouislider.min.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/ion.rangeSlider.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/magnific-popup.css" rel="stylesheet">
	<link  href="<?= base_url() ?>template/olshop/css/main.css" rel="stylesheet">
	<!-- Include jQuery -->
	  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Owl Carousel CSS and JS -->
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/olshop/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="<?= base_url() ?>template/olshop/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	
</head>


	
	<script src="<?= base_url() ?>template/olshop/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?= base_url() ?>template/olshop/js/vendor/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/jquery.nice-select.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/jquery.sticky.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/nouislider.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/countdown.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="<?= base_url() ?>template/olshop/ttps://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?= base_url() ?>template/olshop/js/gmaps.min.js"></script>
	<script src="<?= base_url() ?>template/olshop/js/main.js"></script>
	
<!-- Add the following JavaScript code at the bottom of your HTML page, before the closing </body> tag -->
<script>
    $(document).ready(function() {
        // Initialize Owl Carousel slider
        $(".active-banner-slider").owlCarousel({
            items: 1,               // Number of items to display at once
            loop: true,             // Enable looping
            autoplay: true,         // Enable autoplay
            autoplayTimeout: 5000,  // Autoplay interval in milliseconds (5 seconds)
            autoplayHoverPause: true // Pause autoplay on hover
        });
    });
</script>
</body>

</html>