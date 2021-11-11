<?php
$currPage = 'team_Issue bearbeiten';
include BASE_PATH.'app/controller/PageController.php';

$sid = $helper->protect($_GET['id']);


if(isset($_POST['updateIssue'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("UPDATE `issues` SET `title` = :title, `desc` = :desc, `Status` = :Status WHERE `id` = $sid");
        $SQL->execute(array(":title" => $_POST['title'], ":desc" => $_POST['desc'], ":Status" => $_POST['Status']));

    header('Location: '.$helper->url().'issues');


        echo sendSuccess('Fehler erfolgreich bearbeitet');
    } else {
        echo sendError($error);
    }
}


if(isset($_POST['deleteIssue'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("DELETE FROM `issues` WHERE `id` = $sid");
        $SQL->execute(array());

    header('Location: '.$helper->url().'issues');

        echo sendSuccess('Produkt gelöscht');
    } else {
        echo sendError($error);
    }
}
?>

                    <?php
                    $SQL = $db -> prepare("SELECT * FROM `issues` WHERE `id` = :id");
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

					
					<label>Issue Title</label>			
				<div class="form-group input-group">
					<span class="input-group__icon">
						<i class="fa fa-tag"></i>
					</span>
					<input name="title" class="form-control" type="title" value="<?= $row['title']; ?>">
				</div>


					<label>Beschreibung</label>
             <textarea name="desc" style="height:150px;resize:vertical;width:100%;" minlength="50" required=""><?= $row['desc']; ?></textarea>


					<label>Status</label><br>
				<input type="radio" name="Status" value="Offen" id="Offen" class="radiolabelbutton" 
					   <?php if($row['Status'] == 'Offen'){ echo 'checked="checked"'; } ?>>
				<label for="Offen" class="flexwidth1sixth">							
					Offen						
				</label>

				<input type="radio" name="Status" value="Closed" id="Closed" class="radiolabelbutton"
<?php if($row['Status'] == 'Closed'){ echo 'checked="checked"'; } ?>>
				<label for="Closed" class="flexwidth1sixth">							
					Zu						
				</label>


				
				
				<div class="form__actions">
					<div class="p-3 text-center m-t-3x">
											
						<button type="submit" name="updateIssue" class="btn btn-success">	
							<span class="btn__text">Überschreiben</span>	
							<!--<span class="btn-hover-effect"></span>-->
						</button>
						

						<button type="submit" name="deleteIssue" class="btn btn-danger">	
							<span class="btn__text">Issue Löschen</span>	
							<!--<span class="btn-hover-effect"></span>-->
						</button>
						

						<a href="../../issues" class="btn btn-danger">	
							<span class="btn__text">Abbrechen</span>	
						</a>
										</div>
				</div>
			</form>
</div>
</div>
                <?php } } ?>

