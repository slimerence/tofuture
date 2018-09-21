<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tofuture</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap.css" />
    <link href="{{ url('css/dataTables.responsive.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('css/customadmin.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

@include(_get_frontend_theme_path('admin.layout.nav'))
@yield('content')


</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.0/raphael-min.js"></script>

<script src="{{ url('js/dataTable.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ url('js/admin.js') }}"></script>

<script>
    $(document).ready(function() {
        if($('#dataTables-example').length>0){
        $('#dataTables-example').DataTable({
            responsive: true
        });
        }
        // Customer Register
        if($('#general-customer-register-btn').length>0){
            $('#general-customer-register-btn').on('click',function(event){
                event.preventDefault();
                // check if email has existed
                let email = $('#inputEmail').val();
                $('#checkingEmailIcon').removeClass('is-invisible');
                axios.post(
                    '/frontend/customer/is_email_exist',
                    {email:email}
                ).then(res=>{
                    if(res.data.error_no == 100){
                        if(res.data.msg == 'ok'){
                            // 可以注册
                            $('#general-customer-register-form').submit();
                        }else{
                            $('#checkingEmailIcon').addClass('is-invisible');
                            $('#inputEmail').addClass('is-invalid');
                            $('#inputEmailErrorMessage').html('This email has been registered.');
                        }
                    }
                });
            })
        }

    });
</script>
</body>

</html>
