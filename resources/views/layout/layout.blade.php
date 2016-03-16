@include('layout.header')
<body>
    <section class="body">
        <!-- start: header -->
        @include('layout.topo')
        <!-- end: header -->
        <div class="inner-wrapper">
            <!-- start: sidebar -->
            @include('layout.sidebar')
            <!-- end: sidebar -->

            <!-- start: page -->
            <div class="row">
                <div class="col-md-6 col-lg-12 col-xl-6">
                    <section class="panel">
                        <div class="panel-body">
						@yield('content')

                        </div>
                        <!-- end: page -->
                    </section>
                </div>

            </section>
            <!-- Vendor -->
          	@include('layout/scripts_master')

            <!-- Specific Page Vendor -->
            <script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
            <script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
            <script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
            <script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
            <script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
            <script src="assets/vendor/flot/jquery.flot.js"></script>
            <script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
            <script src="assets/vendor/flot/jquery.flot.pie.js"></script>
            <script src="assets/vendor/flot/jquery.flot.categories.js"></script>
            <script src="assets/vendor/flot/jquery.flot.resize.js"></script>
            <script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
            <script src="assets/vendor/raphael/raphael.js"></script>
            <script src="assets/vendor/morris/morris.js"></script>
            <script src="assets/vendor/gauge/gauge.js"></script>
            <script src="assets/vendor/snap-svg/snap.svg.js"></script>
            <script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
            <script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
       

            <!-- Theme Base, Components and Settings -->
            <script src="assets/javascripts/theme.js"></script>

            <!-- Theme Custom -->
            <script src="assets/javascripts/theme.custom.js"></script>

            <!-- Theme Initialization Files -->
            <script src="assets/javascripts/theme.init.js"></script>
            <!-- Examples -->
            <script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
        </body>
    </html>