<?php
$currPage = 'team_Wartung bearbeiten';
include BASE_PATH.'app/controller/PageController.php';

$sid = $helper->protect($_GET['id']);


if(isset($_POST['updateWartung'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("UPDATE `wartungen` SET `title` = :title, `desc` = :desc, `Status` = :Status WHERE `id` = $sid");
        $SQL->execute(array(":title" => $_POST['title'], ":desc" => $_POST['desc'], ":Status" => $_POST['Status']));

    header('Location: '.$helper->url().'wartungen');


        echo sendSuccess('Die Wartung wurde angepasst');
    } else {
        echo sendError($error);
    }
}


if(isset($_POST['deleteWartung'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("DELETE FROM `wartungen` WHERE `id` = $sid");
        $SQL->execute(array());

    header('Location: '.$helper->url().'wartungen');

        echo sendSuccess('Produkt gelöscht');
    } else {
        echo sendError($error);
    }
}
?>

				

                    <?php
                    $SQL = $db -> prepare("SELECT * FROM `wartungen` WHERE `id` = :id");
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

					
					<label>Wartungs Title</label>			
				<div class="form-group input-group">
					<input name="title" class="form-control" type="title" value="<?= $row['title']; ?>">
				</div>


					<label>Beschreibung</label>
             <textarea name="desc" style="height:150px;resize:vertical;width:100%;" minlength="50" required=""><?= $row['desc']; ?></textarea>


					<label>Status</label><br>
				<input type="radio" name="Status" value="Running" id="Running" class="radiolabelbutton"
					   <?php if($row['Status'] == 'Running'){ echo 'checked="checked"'; } ?>>
				<label for="Running" class="flexwidth1sixth">							
					Läuft						
				</label>

				<input type="radio" name="Status" value="planed" id="planed" class="radiolabelbutton"
					   <?php if($row['Status'] == 'planed'){ echo 'checked="checked"'; } ?>>
				<label for="planed" class="flexwidth1sixth">							
					Geplant						
				</label>

				<input type="radio" name="Status" value="Closed" id="Closed" class="radiolabelbutton"
					   <?php if($row['Status'] == 'Closed'){ echo 'checked="checked"'; } ?>>
				<label for="Closed" class="flexwidth1sixth">							
					Ende						
				</label>


				
				
				<div class="form__actions">
					<div class="p-3 text-center m-t-3x">
											
						<button type="submit" name="updateWartung" class="btn btn-success">	
							<span class="btn__text">Überschreiben</span>	
							<!--<span class="btn-hover-effect"></span>-->
						</button>
						

						<button type="submit" name="deleteWartung" class="btn btn-danger">	
							<span class="btn__text">Wartung Löschen</span>	
							<!--<span class="btn-hover-effect"></span>-->
						</button>
						

						<a href="../../wartungen" class="btn btn-danger">	
							<span class="btn__text">Abbrechen</span>	
						</a>
										</div>
				</div>
			</form>
</div>
</div>
			

                <?php } } ?>
