<?php
$currPage = 'front_Account erstellen_auth';
include BASE_PATH.'app/controller/PageController.php';
include BASE_PATH.'app/manager/customer/auth/register.php';
?>
<div class="container" data-layout="container">
    <div class="row flex-center min-vh-100 py-6">
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <a class="d-flex flex-center mb-4" href="<?= $helper->url(); ?>">
                <img class="mr-2" src="<?= $helper->cdnUrl(); ?>img/illustrations/falcon.png" alt="" width="58" />
                <span class="text-sans-serif font-weight-extra-bold fs-5 d-inline-block"><?= $helper->siteName(); ?></span>
            </a>
            <div class="card">
                <div class="card-body p-4 p-sm-5">
                    <div class="row text-left justify-content-between align-items-center mb-2">
                        <div class="col-auto">
                            <h5><?= $currPageName; ?></h5>
                        </div>
                        <div class="col-auto">
                            <p class="fs--1 text-600 mb-0">or <a href="<?= $helper->url(); ?>login">Login</a></p>
                        </div>
                    </div>
                    <form method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="Username" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email address" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password_repeat" placeholder="Password repeat" />
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block mt-3" type="submit" name="register">Create account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
