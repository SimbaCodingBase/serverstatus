<?php
$currPage = 'team_Servicemanager';
include BASE_PATH.'app/controller/PageController.php';

$sid = $helper->protect($_GET['id']);


if(isset($_POST['updateService'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("UPDATE `services` SET `name` = :name, `standort` = :standort, `anzeigen` = :anzeigen, `icon` = :icon, `sort_id` = :sort_id, `status` = :status, `link` = :link, `uptime` = :uptime WHERE `id` = $sid");
        $SQL->execute(array(":name" => $_POST['name'], ":standort" => $_POST['standort'], ":anzeigen" => $_POST['anzeigen'], ":icon" => $_POST['icon'], ":status" => $_POST['status'], ":sort_id" => $_POST['sort_id'], ":link" => $_POST['link'], ":uptime" => $_POST['uptime']));

    header('Location: '.$helper->url().'team/services');


        echo sendSuccess('Der Service wurde angepasst');
    } else {
        echo sendError($error);
    }
}

if(isset($_POST['dupeService'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("INSERT INTO `services` SET `name` = :name, `standort` = :standort, `anzeigen` = :anzeigen, `icon` = :icon, `sort_id` = :sort_id, `status` = :status, `link` = :link, `uptime` = :uptime");
        $SQL->execute(array(":name" => $_POST['name'], ":standort" => $_POST['standort'], ":anzeigen" => $_POST['anzeigen'], ":icon" => $_POST['icon'], ":status" => $_POST['status'], ":sort_id" => $_POST['sort_id'], ":link" => $_POST['link'], ":uptime" => $_POST['uptime']));

    header('Location: '.$helper->url().'team/services');


        echo sendSuccess('Deine Antwort wurde an das Team übermittelt');
    } else {
        echo sendError($error);
    }
}


if(isset($_POST['deleteService'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("DELETE FROM `services` WHERE `id` = $sid");
        $SQL->execute(array());

    header('Location: '.$helper->url().'team/services');

        echo sendSuccess('Produkt gelöscht');
    } else {
        echo sendError($error);
    }
}
?>


				

                    <?php
                    $SQL = $db -> prepare("SELECT * FROM `services` WHERE `id` = :id");
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

					
					<label>Service Name</label>			
				<div class="form-group input-group">
					<input name="name" class="form-control" type="name" value="<?= $row['name']; ?>">
				</div>


					<label>Service Standort</label>
				<div class="form-group input-group">
					<input name="standort" type="standort" class="form-control" value="<?= $row['standort']; ?>">
				</div>



				<label>Service Icon (<a href="https://fontawesome.com/v5.15/icons" target="_blank">Icons</a>)</label>
				<div class="form-group input-group">
					<input name="icon" class="form-control" type="icon" value="<?= $row['icon']; ?>">
				</div>

				<label>Sortierung</label>
				<div class="form-group input-group">
					<input name="sort_id" class="form-control" type="number" min="1" max="1000" value="<?= $row['sort_id']; ?>" step="1" required="required">
				</div>

				<label>Uptime</label>
				<div class="form-group input-group">
					<input name="uptime" class="form-control" type="number" min="1,00" max="100" value="<?= $row['uptime']; ?>" step="0.01" required="required">
				</div>

				<label>Link</label>
				<div class="form-group input-group">
					<input name="link" class="form-control" type="link" value="<?= $row['link']; ?>">
				</div>

					<label>Service Status</label><br>
				<input type="radio" name="status" value="Online" id="Online" class="radiolabelbutton" 
					   <?php if($row['status'] == 'Online'){ echo 'checked="checked"'; } ?> >
				<label for="Online" class="flexwidth1sixth">							
					Online						
				</label>


				<input type="radio" name="status" value="Wartung" id="Wartung" class="radiolabelbutton"
					   <?php if($row['status'] == 'Wartung'){ echo 'checked="checked"'; } ?>>
				<label for="Wartung" class="flexwidth1sixth">							
					Wartung						
				</label>

				<input type="radio" name="status" value="Leistung" id="Leistungsabfall" class="radiolabelbutton"
					   <?php if($row['status'] == 'Leistung'){ echo 'checked="checked"'; } ?>>
				<label for="Leistungsabfall" class="flexwidth1sixth">							
					Leistungsabfall						
				</label>

				<input type="radio" name="status" value="Offline" id="Offline" class="radiolabelbutton"
					   <?php if($row['status'] == 'Offline'){ echo 'checked="checked"'; } ?>>
				<label for="Offline" class="flexwidth1sixth">							
					Offline						
				</label>
				
				<br>

					<label>Sichtbar?</label><br>
				<input type="radio" name="anzeigen" value="Ja" id="Ja" class="radiolabelbutton"
					   <?php if($row['anzeigen'] == 'Ja'){ echo 'checked="checked"'; } ?>>
				<label for="Ja" class="flexwidth1sixth">							
					Ja						
				</label>

				<input type="radio" name="anzeigen" value="Nein" id="Nein" class="radiolabelbutton"
					   <?php if($row['anzeigen'] == 'Nein'){ echo 'checked="checked"'; } ?>>
				<label for="Nein" class="flexwidth1sixth">							
					Nein						
				</label>


				
				
				<div class="form__actions">
					<div class="p-3 text-center m-t-3x">
											
						<button type="submit" name="updateService" class="btn btn-success">	
							<span class="btn__text">Überschreiben</span>	
							<!--<span class="btn-hover-effect"></span>-->
						</button>


						<button type="submit" name="dupeService" class="btn btn-info">	
							<span class="btn__text">Service kopieren</span>	
							<!--<span class="btn-hover-effect"></span>-->
						</button>
						

						<button type="submit" name="deleteService" class="btn btn-danger">	
							<span class="btn__text">Service Löschen</span>	
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
		
	