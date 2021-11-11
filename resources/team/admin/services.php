<?php
$currPage = 'team_Services';
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
                    $SQL = $db -> prepare("SELECT * FROM `services` ORDER BY `sort_id`");
                    $SQL->execute(array(":user_id" => $userid));
                    if ($SQL->rowCount() != 0) {
                        while ($row = $SQL -> fetch(PDO::FETCH_ASSOC)){

                            if($row['status'] == 'Online'){
                                $status = '<b><a class="text-success">Funktionsfähig</a></b>';
                            } elseif($row['status'] == 'Offline'){
                                $status = '<b><a class="text-danger">Nicht erreichbar</a></b>';
                            } elseif($row['status'] == 'Leistung'){
                                $status = '<b><a class="text-warning">Leistungsabfall</a></b>';
                            } elseif($row['status'] == 'Wartung'){
                                $status = '<b><a class="text-info">Wartungsarbeiten</a></b>';
                            }

                            if($row['status'] == 'Online'){
                                $statusimg = 'https://cdn.discordapp.com/emojis/801013167035383808.gif?v=1';
                            } elseif($row['status'] == 'Offline'){
                                $statusimg = 'https://cdn.discordapp.com/attachments/758684576993378334/853250583087808532/ezgif-6-ca91c3cedbbf.gif';
                            } elseif($row['status'] == 'Leistung'){
                                $statusimg = 'https://cdn.discordapp.com/attachments/758684576993378334/853250240575569940/ezgif-6-776e947170fb.gif';
                            } elseif($row['status'] == 'Wartung'){
                                $statusimg = 'https://cdn.discordapp.com/attachments/758684576993378334/853250796812500992/ezgif-6-8b7dc34421dd.gif';
                            }

                            if($row['status'] == 'Online'){
                                $statuscol = 'success';
                            } elseif($row['status'] == 'Offline'){
                                $statuscol = 'danger';
                            } elseif($row['status'] == 'Leistung'){
                                $statuscol = 'warning';
                            } elseif($row['status'] == 'Wartung'){
                                $statuscol = 'info';
                            }

                            ?>

			
                                        <tr class="tr-hover text-no-select" style="display: block!important;width: 100%;" onclick="toggleCollapse('#bar-1')"
                                            id="monitor-1"                              
											data-title="<?= $row['name']; ?> 
														<br>Status: <?= $row['status']; ?>
														<br>Sichtbar: <?= $row['anzeigen']; ?>
														<br>Sort-ID: <?= $row['sort_id']; ?>
														<br>Standort: <?= $row['standort']; ?>" 
                                        data-html="true" data-toggle="tooltip">
    
    
                                            <td style="text-align: left;width: 100%" id="title-1"
                                                class="">												
												<img width="4%" src="<?= $statusimg; ?>">&nbsp;|&nbsp;
												<i class="<?= $row['icon']; ?> text-<?= $statuscol; ?>"></i> 
												<a href="servicemanager/<?= $row['id']; ?>" class="text-white"><?= $row['name']; ?></a>
											</td>
											
											
																							
                                            <td style="text-align: left;width: 10000%">                                       
                                            </td>
                                        </tr>

                        <?php } } ?>

                                </tbody>
                            </table>

