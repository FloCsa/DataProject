<?php

echo $this->header;

?>
    <div id="fullscreen_bg" class="fullscreen_bg"/>
    <div id="regContainer" class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="login" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <label for="email">E-Mail</label>
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-Mail" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Remember Me</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="action" value="login">
                                </form>

                                <form id="register-form" action="login.html" method="post" role="form" style="display: none;">
                                    <div class="form-group">
                                        <label for="email1">E-Mail</label>
                                        <input type="email" name="email" required id="email1" tabindex="1" class="form-control" placeholder="E-Mail" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="password1">Password</label>
                                        <input type="password" name="password" required id="password1" minlength="6" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-password">Confirm password</label>
                                        <input type="password" name="confirm-password" required id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit"  name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register"  value="Register Now" >
                                                <span id="confirmMessage" class="confirmMessage"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="action" value="register">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

echo $this->footer;

?>