<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BetaDesign &mdash; Product</title>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/source/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="/source/assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" title="style" href="/source/assets/dest/css/style.css">
    <link rel="stylesheet" href="/source/assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="/source/assets/dest/css/huong-style.css">
    @yield('css')
</head>

<body>
    @include('components.header')
    @yield('banner')
    @yield('content')
    @include('components.footer')


    <!-- include js files -->
    <script src="/source/assets/dest/js/jquery.js"></script>
    <script src="/source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="/source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="/source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
    <script src="/source/assets/dest/vendors/animo/Animo.js"></script>
    <script src="/source/assets/dest/vendors/dug/dug.js"></script>
    <script src="/source/assets/dest/js/scripts.min.js"></script>

    <!--customjs-->
    <script type="text/javascript">
        $(function() {
            // this will get the full URL at the address bar
            var url = window.location.href;

            // passes on every "a" tag
            $(".main-menu a").each(function() {
                // checks if its the same on the address bar
                if (url == (this.href)) {
                    $(this).closest("li").addClass("active");
                    $(this).parents('li').addClass('parent-active');
                }
            });
        });
    </script>
    <script>
        jQuery(document).ready(function($) {
            'use strict';

            // color box

            //color
            jQuery('#style-selector').animate({
                left: '-213px'
            });

            jQuery('#style-selector a.close').click(function(e) {
                e.preventDefault();
                var div = jQuery('#style-selector');
                if (div.css('left') === '-213px') {
                    jQuery('#style-selector').animate({
                        left: '0'
                    });
                    jQuery(this).removeClass('icon-angle-left');
                    jQuery(this).addClass('icon-angle-right');
                } else {
                    jQuery('#style-selector').animate({
                        left: '-213px'
                    });
                    jQuery(this).removeClass('icon-angle-right');
                    jQuery(this).addClass('icon-angle-left');
                }
            });
        });
    </script>
    <script>
        // Kiểm tra xem có thông báo thành công từ controller không
var successMessage = "{{ session('success') }}";
var errorMessage = "{{ session('error') }}";

// Kiểm tra xem có thông báo thành công không
if (successMessage) {
    // Hiển thị hộp thoại thông báo thành công
    alert(successMessage);
}

// Kiểm tra xem có thông báo lỗi không
if (errorMessage) {
    // Hiển thị hộp thoại thông báo lỗi
    alert(errorMessage);
}

    </script>
    @yield('js');
</body>

</html>