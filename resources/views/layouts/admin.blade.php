<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->

    @yield('styles')

    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="admin-page">

<div id="wrapper">

    @include('include.admin_top_and_bottom_nav')

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    @yield('content')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!---------------------------------------------------------------------->
<!------------------------- Bootstrap Model ---------------------------->
<!---------------------------------------------------------------------->

<!------------------------- Login User View Model ---------------------------->
<div id="auth-user-info" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">User Information</h4>
            </div>
            <div class="modal-body">
                <img src="{{ Auth::user()->photo ? Auth::user()->photo->file : asset('images/default/user.png') }}" width="100%" alt="{{ Auth::user()->name }}">
                <h4><b>Name: </b>{{ Auth::user()->name }}</h4>
                <h4><b>Email: </b><a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a></h4>
                <h4><b>Status: </b>{{ Auth::user()->status == 1 ? "Active" : "Not Active" }}</h4>
                <h4><b>Role: </b>{{ Auth::user()->role->name }}</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- jQuery -->
<script src="{{asset('js/libs.js')}}"></script>


@yield('footer')

@yield('scripts')



</body>

</html>
