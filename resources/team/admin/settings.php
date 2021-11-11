<?php
$currPage = 'team_Einstellungen bearbeiten';
include BASE_PATH.'app/controller/PageController.php';

$sid = 1;


if(isset($_POST['saveSettings'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("UPDATE `mainsettings` SET `mainstatus` = :mainstatus, `checker` = :checker, `webhookdiscord` = :webhookdiscord WHERE `id` = 1");
        $SQL->execute(array(":mainstatus" => $_POST['mainstatus'], ":checker" => $_POST['checker'], ":webhookdiscord" => $_POST['webhookdiscord']));

    header('Location: '.$helper->url().'dashboard');


        echo sendSuccess('Fehler erfolgreich bearbeitet');
    } else {
        echo sendError($error);
    }
}


?>

                    <?php
                    $SQL = $db -> prepare("SELECT * FROM `mainsettings` WHERE `id` = '1'");
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

					
					<label>Discord Webhook <span class="badge bg-success bg-sm mr-2">NEU</span></label>			
				<div class="form-group input-group">
					<input name="webhookdiscord" class="form-control" type="webhookdiscord" value="<?= $row['webhookdiscord']; ?>">
				</div>


					<!--<label>Beschreibung</label>
             <textarea name="desc" style="height:150px;resize:vertical;width:100%;" minlength="50" required=""><?= $row['desc']; ?></textarea>-->

				<label>Update-Timer</label>
				<div class="form-group input-group">
					<input name="checker" class="form-control" type="number" min="10" max="100" value="<?= $row['checker']; ?>" step="1" required="required">
				</div>


					<label>Gesamter Status</label><br>
				<input type="radio" name="mainstatus" value="online" id="online" class="radiolabelbutton" 
					   <?php if($row['mainstatus'] == 'online'){ echo 'checked="checked"'; } ?>>
				<label for="online" class="flexwidth1sixth">							
					online						
				</label>

				<input type="radio" name="mainstatus" value="teils" id="teils" class="radiolabelbutton"
<?php if($row['mainstatus'] == 'teils'){ echo 'checked="checked"'; } ?>>
				<label for="teils" class="flexwidth1sixth">							
					eingeschränkt						
				</label>

				<input type="radio" name="mainstatus" value="wartung" id="wartung" class="radiolabelbutton"
<?php if($row['mainstatus'] == 'wartung'){ echo 'checked="checked"'; } ?>>
				<label for="wartung" class="flexwidth1sixth">							
					Wartung						
				</label>

				<input type="radio" name="mainstatus" value="offline" id="offline" class="radiolabelbutton"
<?php if($row['mainstatus'] == 'offline'){ echo 'checked="checked"'; } ?>>
				<label for="offline" class="flexwidth1sixth">							
					offline						
				</label>


				
				
				<div class="form__actions">
					<div class="p-3 text-center m-t-3x">
											
						<button type="submit" name="saveSettings" class="btn btn-success">	
							<span class="btn__text">Speichern</span>	
							<!--<span class="btn-hover-effect"></span>-->
						</button>
						

						<a href="../../dashboard" class="btn btn-danger">	
							<span class="btn__text">Abbrechen</span>	
						</a>
										</div>
				</div>
			</form>
</div>
</div>
                <?php } } ?>

