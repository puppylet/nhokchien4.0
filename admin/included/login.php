<!DOCTYPE html>
<html lang="vi">
<?php include 'modules/head.php' ?>
<body style="background: #FFF">
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Trang đăng nhập</div>
            </div>
            <div style="padding-top:10px" class="panel-body">
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form id="loginform" class="form-horizontal" role="form">
                    <div style="margin-bottom: 10px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" type="text" class="form-control" name="username" value="" placeholder="Tên đăng nhập">
                    </div>
                    <div style="margin-bottom: 10px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password"  placeholder="Mật khẩu">
                    </div>
                    <div class="input-group">
                        <div class="checkbox">
                            <label><input id="login-remember" type="checkbox" name="remember" value="1"> Ghi nhớ thông tin</label>
                        </div>
                    </div>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <a id="btn-login" href="#" class="btn btn-success">Đăng nhập </a>
                            <a id="btn-fblogin" href="#" class="btn btn-primary">Về trang chủ</a>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 0">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                Đây là trang dành riêng cho BQT. Nếu bạn không phải là thành viên quản trị, vui lòng trở
                                lại trang chủ
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
    