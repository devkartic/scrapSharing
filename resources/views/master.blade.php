<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scrap and Sharing</title>
    <!-- Bootstrap Styles-->
    <link href="{{ asset('scrap/assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('scrap/assets/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->

    <!-- Custom Styles-->
    <link href="{{ asset('scrap/assets/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="{{ asset('scrap/assets/js/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />
</head>
<body>

<div class="container">
    <div class="row">

        @yield('content')

    </div>
</div>

<!-- jQuery Js -->
<script src="{{ asset('scrap/assets/js/jquery-1.10.2.js') }}"></script>
<!-- Bootstrap Js -->
<script src="{{ asset('scrap/assets/js/bootstrap.min.js') }}"></script>
<!-- Metis Menu Js -->
<script src="{{ asset('scrap/assets/js/jquery.metisMenu.js') }}"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="{{ asset('scrap/assets/js/dataTables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('scrap/assets/js/dataTables/dataTables.bootstrap.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
<!-- Custom Js -->
<script src="{{ asset('scrap/assets/js/custom-scripts.js') }}"></script>


</body>
</html>
