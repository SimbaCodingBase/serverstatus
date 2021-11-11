<?php
$currPage = 'team_Alle Teamler';
include BASE_PATH.'app/controller/PageController.php';
?>

    <section class="section" style="background-color: #2C2F33;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <div class="section-title mb-4 pb-2">


                        <table class="table table-padded" style="min-height: 150px;">
                                <tbody>


                    <?php
                    $SQL = $db -> prepare("SELECT * FROM `users` ORDER BY `id`");
                    $SQL->execute(array(":user_id" => $userid));
                    if ($SQL->rowCount() != 0) {
                        while ($row = $SQL -> fetch(PDO::FETCH_ASSOC)){

                            if($row['state'] == 'active'){
                                $status = '<b><a class="text-success">Aktiv</a></b>';
                            } elseif($row['state'] == 'pending'){
                                $status = '<b><a class="text-danger">Pending</a></b>';
                            } elseif($row['state'] == 'banned'){
                                $status = '<b><a class="text-warning">Gebannt</a></b>';
                            } 

                            ?>

			
                                        <tr class="tr-hover text-no-select" style="display: block!important;width: 100%;" onclick="toggleCollapse('#bar-1')"
                                            id="monitor-1"                              
											data-title="<?= $row['username']; ?> 
														<br>Status: <?= $row['state']; ?>
														<br>Rang: <?= $row['role']; ?>" 
                                        data-html="true" data-toggle="tooltip">
    
    
                                            <td style="text-align: left;width: 100%" id="title-1"
                                                class="">												
												<a href="editteamler/<?= $row['id']; ?>" class="text-white"><?= $row['username']; ?></a>
											</td>
											
											
																							
                                            <td style="text-align: left;width: 10000%">                                       
                                            </td>
                                        </tr>

                        <?php } } ?>

                                </tbody>
                            </table>

								