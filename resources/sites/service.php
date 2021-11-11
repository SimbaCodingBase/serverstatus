<?php
$currPage = 'front_Service';
include BASE_PATH.'app/controller/PageController.php';

$sid = $helper->protect($_GET['id']);
?>

                    <?php
                    $SQL = $db -> prepare("SELECT * FROM `services` WHERE `id` = :id");
                    $SQL->execute(array(":id" => $sid));
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

    <section class="section" style="background-color: #2C2F33;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <div class="section-title mb-4 pb-2">



                        <h4 class="title mb-1 text-left text-white style="font-size: 18px;float: left>
							<i class="text-<?= $statuscol ?> <?= $row['icon']; ?>"></i> <?= $row['name']; ?> 
                        </h4>


                                                        
                        <table class="table table-padded" style="min-height: 100px;">
                                <tbody>

                                                                            
									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">


											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-stream text-danger"></i> STATUS</h4> 
													<h5 class="text-<?= $statuscol; ?>"><?= $status; ?></h5>
												</center>
											</td>

											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-search-location text-danger"></i> STANDORT</h4> 
													<h5 class="text-white"><?= $row['standort']; ?></h5>
												</center>
											</td>



                                    </tr>



                                </tbody>
                            </table>

                        <table class="table table-padded" style="min-height: 100px;">
                                <tbody>

                                                                            
									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">


											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-link text-danger"></i> SERVICE-LINK</h4> 
													<h5 class="text-white">
														
														<a href="<?= $row['link']; ?>" target="_blank" class="text-white">
															<?= $row['link']; ?>
														</a>
														
													</h5>
												</center>
											</td>


                                    </tr>



                                </tbody>
                            </table>
						
						<br><br><br>


                        <table class="table table-padded" style="min-height: 100px;">
                                <tbody>

                                                                            
									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">


											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-clock text-danger"></i> SERVICE-UPTIME</h4> 
													<h5 class="text-<?= $statuscol; ?>"><?= $row['uptime']; ?>%</h5>
												</center>
											</td>


                                    </tr>



                                </tbody>
                            </table>


                        <!--<h4 class="title mb-1 text-left text-white style="font-size: 18px;float: left>
							<i class="text-danger fa fa-info"></i> Weitere Servicedaten
                        </h4>-->

                        </div>
                        </div>




                        


                </div>


                
            </div>
                <?php } } ?>