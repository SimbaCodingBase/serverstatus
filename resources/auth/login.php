<?php
$currPage = 'front_Login_auth';
include BASE_PATH.'app/controller/PageController.php';
include BASE_PATH.'app/manager/customer/auth/login.php';

?>

    <section class="section" style="background-color: #2C2F33;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <div class="section-title mb-4 pb-2">


		<div class="card mt-5" style="background-color: #2C2F33;">
			<div class="card-body pt-6">
			<form class="form" method="post">

					
					<label class="text-white">Deine E-Mail</label>			
				<div class="form-group input-group">
					<input name="email" class="form-control" type="email" required="required">
				</div>


					<label class="text-white">Passwort</label>
				<div class="form-group input-group">
					<input name="password" type="password" class="form-control" required="required">
				</div>


				
				
				<div class="form__actions">
					<div class="p-3 text-center m-t-3x">
											
						<button type="submit" name="login" class="btn btn-success">	
							<span class="btn__text">Login</span>	
							<!--<span class="btn-hover-effect"></span>-->
						</button>
										</div>
				</div>
			</form>
</div>
</div><br><br><br><br><br>



