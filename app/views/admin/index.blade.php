@extends('admin.layouts.login')
<?
$title = 'Admin Login';
?>
@section('content')
<div class="container">
    <!-- row-app -->
    <div class="row row-app">
        <!-- col -->
        <!-- col-separator.box -->
        <div class="col-separator col-unscrollable box">
            <!-- col-table -->
            <div class="col-table">
                <h4 class="innerAll margin-none border-bottom text-center"><i class="fa fa-lock"></i> Login to
                    your Account</h4>
                <!-- col-table-row -->
                <div class="col-table-row">
                    <!-- col-app -->
                    <div class="col-app col-unscrollable">
                        <!-- col-app -->
                        <div class="col-app">
                            <div class="login">
                                <div class="placeholder text-center"><i class="fa fa-lock"></i>
                                </div>
                                <div class="panel panel-default col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-4">
                                    <div class="panel-body">
                                        @if ($errors->has())
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                            {{ $error }}<br>
                                            @endforeach
                                        </div>
                                        @endif
                                        <form role="form" action="{{ url('/admin') }}" method="post">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">User Name</label>
                                                <input type="text" class="form-control" id="userName" name="userName"
                                                       placeholder="Enter Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control"
                                                       id="userPassword" name="userPassword" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block">Login
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- // END col-app -->
                    </div>
                    <!-- // END col-app.col-unscrollable -->
                </div>
                <!-- // END col-table-row -->
            </div>
            <!-- // END col-table -->
        </div>
        <!-- // END col-separator.box -->
    </div>
    <!-- // END row-app -->
</div>
@stop