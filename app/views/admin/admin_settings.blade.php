@extends('admin.layouts.default')
<?
$title = 'Settings';
$menu = '';
?>
@section('content')
<h3 class="margin-none">
    Change Password
</h3>
<div class="rows">
        <div class="widget widget-heading-simple widget-body-white">
        <!-- // Widget heading END -->
        <div class="widget-body">
            <div class="innerLR">
                <form role="form" class="form-horizontal" action="{{ url('/admin/admin_settings') }}" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">User</label>
                        <div class="col-sm-10">
                            <p class="form-control-static">mosaicpro</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputEmail3">User Name</label>
                        <div class="col-sm-10">
                            <input type="email" placeholder="username" id="userName" name="userName" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputPassword3">Old Password</label>
                        <div class="col-sm-10">
                            <input type="password" placeholder="Old Password" id="userOldPassword" name="userOldPassword" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="inputPassword4">New Password</label>
                        <div class="col-sm-10">
                            <input type="password" placeholder="New Password" id="userNewPassword" name="userNewPassword" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button class="btn btn-primary" type="submit">Change Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop