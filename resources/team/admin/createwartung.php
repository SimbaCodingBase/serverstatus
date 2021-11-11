<?php
$currPage = 'team_Wartung erstellen';
include BASE_PATH.'app/controller/PageController.php';

$sid = $helper->protect($_GET['id']);


if(isset($_POST['createWartung'])){
    $error = null;

    if(empty($error)){
        $SQL = $db->prepare("INSERT INTO `wartungen` SET `title` = :title, `desc` = :desc, `Status` = :Status");
        $SQL->execute(array(":title" => $_POST['title'], ":desc" => $_POST['desc'], ":Status" => $_POST['Status']));

    header('Location: '.$helper->url().'');


        echo sendSuccess('Wartung erfolgreich hinzugefügt');
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

					
					<label>Wartungs Title</label>			
				<div class="form-group input-group">
					<input name="title" class="form-control" type="title" required="required">
				</div>


					<label>Wartungs Beschreibung</label>
             <textarea name="desc" style="height:150px;resize:vertical;width:100%;" minlength="50" required=""></textarea>

					<label>Status</label><br>
				<input type="radio" name="Status" value="Running" id="Running" class="radiolabelbutton" checked="checked">
				<label for="Running" class="flexwidth1sixth">							
					Läuft						
				</label>

				<input type="radio" name="Status" value="planed" id="planed" class="radiolabelbutton">
				<label for="planed" class="flexwidth1sixth">							
					Geplant						
				</label>

				<input type="radio" name="Status" value="Closed" id="Closed" class="radiolabelbutton">
				<label for="Closed" class="flexwidth1sixth">							
					Ende						
				</label>


				
				
				<div class="form__actions">
					<div class="p-3 text-center m-t-3x">
											
						<button type="submit" name="createWartung" class="btn btn-success">	
							<span class="btn__text">Wartung erstellen</span>	
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

