<?php
$currPage = 'team_Service erstellen';
include BASE_PATH.'app/controller/PageController.php';

$sid = $helper->protect($_GET['id']);


if(isset($_POST['createService'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("INSERT INTO `services` SET `name` = :name, `standort` = :standort, `anzeigen` = :anzeigen, `icon` = :icon, `status` = :status, `sort_id` = :sort_id, `link` = :link, `uptime` = :uptime");
        $SQL->execute(array(":name" => $_POST['name'], ":standort" => $_POST['standort'], ":anzeigen" => $_POST['anzeigen'], ":icon" => $_POST['icon'], ":status" => $_POST['status'], ":sort_id" => $_POST['sort_id'], ":link" => $_POST['link'], ":uptime" => $_POST['uptime']));

    header('Location: '.$helper->url().'team/services');


        echo sendSuccess('Service wurde erfolgreich erstellt');
    } else {
        echo sendError($error);
    }
}

?>
    <section class="section" style="background-color: #2C2F33;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <div class="section-title mb-4 pb-2">


		<div class="card mt-5" style="background-color: primary;">
			<div class="card-body pt-6">
			<form class="form" method="post">

					
					<label>Service Name</label>			
				<div class="form-group input-group">
					<input name="name" class="form-control" type="name" value="" required="required">
				</div>


					<label>Service Standort</label>
				<div class="form-group input-group">
					<input name="standort" type="standort" class="form-control" value="" required="required">
				</div>


				<label>Service Icon (<a href="https://fontawesome.com/v5.15/" target="_blank">Icons</a>)</label>
				<div class="form-group input-group">
					<input name="icon" class="form-control" type="icon" value="" required="required">
				</div>

				<label>Sortierung</label>
				<div class="form-group input-group">
					<input name="sort_id" class="form-control" type="number" min="1" max="1000" value="1" step="1" required="required">
				</div>

				<label>Uptime</label>
				<div class="form-group input-group">
					<input name="uptime" class="form-control" type="number" min="1" max="100" value="100,00" step="0.01" required="required" >
				</div>

				<label>Link</label>
				<div class="form-group input-group">
					<input name="link" class="form-control" type="link" value="" required="required">
				</div>

					<label>Service Status</label><br>
				<input type="radio" name="status" value="Online" id="Online" class="radiolabelbutton" checked="checked" >
				<label for="Online" class="flexwidth1sixth">							
					Online						
				</label>

				<input type="radio" name="status" value="Wartung" id="Wartung" class="radiolabelbutton">
				<label for="Wartung" class="flexwidth1sixth">							
					Wartung						
				</label>

				<input type="radio" name="status" value="Leistung" id="Leistungsabfall" class="radiolabelbutton">
				<label for="Leistungsabfall" class="flexwidth1sixth">							
					Leistungsabfall						
				</label>

				<input type="radio" name="status" value="Offline" id="Offline" class="radiolabelbutton">
				<label for="Offline" class="flexwidth1sixth">							
					Offline						
				</label>
				
				<br>

					<label>Sichtbar?</label><br>
				<input type="radio" name="anzeigen" value="Ja" id="Ja" class="radiolabelbutton" checked="checked">
				<label for="Ja" class="flexwidth1sixth">							
					Ja						
				</label>

				<input type="radio" name="anzeigen" value="Nein" id="Nein" class="radiolabelbutton">
				<label for="Nein" class="flexwidth1sixth">							
					Nein						
				</label>


				
				
				<div class="form__actions">
					<div class="p-3 text-center m-t-3x">
											
						<button type="submit" name="createService" class="btn btn-success">	
							<span class="btn__text">Service erstellen</span>	
							<!--<span class="btn-hover-effect"></span>-->
						</button>
					


						<a type="button" class="btn btn-danger" href="../../">Abbrechen</a>
										</div>
				</div>
			</form>
</div>
</div>

