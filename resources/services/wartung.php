<?php
$currPage = 'front_Wartung';
include BASE_PATH.'app/controller/PageController.php';

$sid = $helper->protect($_GET['id']);
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



                        <h4 class="title mb-1 text-left text-white style="font-size: 18px;float: left>
							<?= $row['title']; ?> 
                        </h4>

							<?php if($user->isAdmin($_COOKIE['session_token'])){ ?>
<td class="ticket-button"><a href="../team/editwartung/<?= $row['id']; ?>" class="btn btn-danger">Bearbeiten</a></td><br><br>
	<?php } ?>


                                                        
                        <table class="table table-padded" style="min-height: 100px;">
                                <tbody>

                                                                            
									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">


											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-stream text-danger"></i> STATUS</h4> 				
														<?php if($row['Status'] == 'Closed'){ echo '
														<h5 class="text-success">Beendet</h5>
														'; } ?>
														<?php if($row['Status'] == 'planed'){ echo '
														<h5 class="text-info">Geplant</h5>
														'; } ?>
														<?php if($row['Status'] == 'Running'){ echo '
														<h5 class="text-warning">Im Gange</h5>
														'; } ?>
												</center>
											</td>

											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-plus text-danger"></i> ERSTELLT AM</h4> 
													<h5 class="text-white"><?= $row['created_at']; ?></h5>
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
													<h4><i class="fa fa-copy text-danger"></i> BESCHREIBUNG</h4> 
													<h6 class="text-white">
															<?= $row['desc']; ?>
														
														<br>
														<br>
														Bearbeitet: <?= $row['updated_at']; ?>
														
													</h6>
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
