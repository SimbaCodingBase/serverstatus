<?php
$currPage = 'team_Teamler erstellen';
include BASE_PATH.'app/controller/PageController.php';
include BASE_PATH.'app/manager/customer/auth/register.php';

?>


    <section class="section" style="background-color: #2C2F33;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <div class="section-title mb-4 pb-2">


		<div class="card mt-5" style="background-color: primary;">
			<div class="card-body pt-6">
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
                            <button class="btn btn-success" type="submit" name="register">Account erstellen</button>


						<a href="../../" class="btn btn-danger">	
							<span class="btn__text">Abbrechen</span>	
						</a>
                        </div>
                    </form>
</div>
</div>
