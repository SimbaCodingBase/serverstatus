<?php
$currPage = 'team_Teamler bearbeiten';
include BASE_PATH.'app/controller/PageController.php';

$sid = $helper->protect($_GET['id']);


if(isset($_POST['updateTeamler'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("UPDATE `users` SET `username` = :username, `email` = :email, `role` = :role, `state` = :state WHERE `id` = $sid");
        $SQL->execute(array(":username" => $_POST['username'], ":email" => $_POST['email'], ":role" => $_POST['role'], ":state" => $_POST['state']));

    header('Location: '.$helper->url().'team/teamler');


        echo sendSuccess('Teamaccount erfolgreich angepasst');
    } else {
        echo sendError($error);
    }
}



if(isset($_POST['deleteTeamler'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("DELETE FROM `users` WHERE `id` = $sid");
        $SQL->execute(array());

    header('Location: '.$helper->url().'team/teamler');

        echo sendSuccess('Produkt gelöscht');
    } else {
        echo sendError($error);
    }
}
?>

				

                    <?php
                    $SQL = $db -> prepare("SELECT * FROM `users` WHERE `id` = :id");
                    $SQL->execute(array(":id" => $sid));
                    if ($SQL->rowCount() != 0) {
                        while ($row = $SQL -> fetch(PDO::FETCH_ASSOC)){

                            ?>

    <section class="section" style="background-color: #2C2F33;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <div class="section-title mb-4 pb-2">


		<div class="card mt-5" style="background-color: primary;">
			<div class="card-body pt-6">
			
			<form class="form" method="post"><!-- required="required"-->

					
					<label>Benutzername</label>			
				<div class="form-group input-group">
					<input name="username" class="form-control" type="username" value="<?= $row['username']; ?>">
				</div>


					<label>E-Mail</label>
				<div class="form-group input-group">
					<input name="email" type="email" class="form-control" value="<?= $row['email']; ?>">
				</div>


					<label>Rang</label><br>
				<input type="radio" name="role" value="support" id="support" class="radiolabelbutton"
					   <?php if($row['role'] == 'support'){ echo 'checked="checked"'; } ?>>
				<label for="support" class="flexwidth1sixth">							
					Support						
				</label>

				<input type="radio" name="role" value="admin" id="admin" class="radiolabelbutton"
					   <?php if($row['role'] == 'admin'){ echo 'checked="checked"'; } ?>>
				<label for="admin" class="flexwidth1sixth">							
					Admin						
				</label>


				<br>

					<label>Status</label><br>
				<input type="radio" name="state" value="active" id="active" class="radiolabelbutton"
					   <?php if($row['state'] == 'active'){ echo 'checked="checked"'; } ?>>
				<label for="active" class="flexwidth1sixth">							
					Aktiv						
				</label>

				<input type="radio" name="state" value="pending" id="pending" class="radiolabelbutton"
					   <?php if($row['state'] == 'pending'){ echo 'checked="checked"'; } ?>>
				<label for="pending" class="flexwidth1sixth">							
					Pending						
				</label>

				<input type="radio" name="state" value="banned" id="banned" class="radiolabelbutton"
					   <?php if($row['state'] == 'banned'){ echo 'checked="checked"'; } ?>>
				<label for="banned" class="flexwidth1sixth">							
					Banned						
				</label>


				
				
				<div class="form__actions">
					<div class="p-3 text-center m-t-3x">
											
						<button type="submit" name="updateTeamler" class="btn btn-success">	
							<span class="btn__text">Überschreiben</span>	
							<!--<span class="btn-hover-effect"></span>-->
						</button>

						<button type="submit" name="deleteTeamler" class="btn btn-danger">	
							<span class="btn__text">Teamler Löschen</span>	
							<!--<span class="btn-hover-effect"></span>-->
						</button>

						<a href="../services" class="btn btn-danger">	
							<span class="btn__text">Abbrechen</span>	
						</a>
										</div>
				</div>
			</form>
</div>
</div>
									
			


                <?php } } ?>
		
