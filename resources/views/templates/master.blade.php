<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/owlcarousel2/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/owlcarousel2/owl.theme.default.css">

    <!-- <link rel="stylesheet" type="text/css" href="vendor/style-detail.css"> -->
    <!-- javascript -->
    <script type="text/javascript" src="vendor/jquery/jquery.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="vendor/owlcarousel2/owl.carousel.js"></script>

</head>
<body>
<div class="container">
    @section('content')
    @show
</div>
<script type="text/javascript" src="/{!! url('public/js/jquery.min.js') !!}"></script>
<script type="text/javascript" src="/{!! url('public/js/bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="/{!! url('public/js/jquery.dataTables.min.js') !!}"></script>
<script type="text/javascript" src="/{!! url('public/js/dataTables.bootstrap.min.js') !!}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#DataList").DataTable({
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Tất cả"]],
            "iDisplayLength": 10,
            "oLanguage": {
                "sLengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
                "oPaginate": {
                    "sFirst": "<span class='glyphicon glyphicon-step-backward' aria-hidden='true'></span>",
                    "sLast": "<span class='glyphicon glyphicon-step-forward' aria-hidden='true'></span>",
                    "sNext": "<span class='glyphicon glyphicon-triangle-right' aria-hidden='true'></span>",
                    "sPrevious": "<span class='glyphicon glyphicon-triangle-left' aria-hidden='true'></span>"
                },
                "sEmptyTable": "Không có dữ liệu",
                "sSearch": "Tìm kiếm:",
                "sZeroRecords": "Không có dữ liệu",
                "sInfo": "Hiển thị từ _START_ đến _END_ trong tổng số _TOTAL_ dòng được tìm thấy",
                "sInfoEmpty" : "Không tìm thấy",
                "sInfoFiltered": " (trong tổng số _MAX_ dòng)"
            }
        });
    });
</script>
</body>
</html>