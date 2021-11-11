<?php
$currPage = 'back_Dashboard';
include BASE_PATH.'app/controller/PageController.php';


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
													<h4><i class="fa fa-user text-danger"></i> STATUS-NAME</h4> 
													<h5 class="text-white"><?= env('APP_NAME') ?></h5>
												</center>
											</td>

											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-search-location text-danger"></i> DEIN-NAME</h4> 
													<h5 class="text-white"><?= $username; ?></h5>
												</center>
											</td>



                                    </tr>



                                </tbody>
                            </table>
						
						<br><br>

                        <table class="table table-padded" style="min-height: 100px;">
                                <tbody>

                                                                            
									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">


											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-list text-danger"></i> [+] SERVICE</h4> 
													<h5 class="text-white"><a href="team/createservice" class="text-white">Klick mich</a></h5>
												</center>
											</td>


                                    </tr>

									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">


											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-copy text-danger"></i> [;] SERVICE</h4> 
													<h5 class="text-white"><a href="team/services" class="text-white">Klick mich</a></h5>
												</center>
											</td>


                                    </tr>

									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">

											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-tools text-danger"></i> [+] WARTUNG</h4> 
													<h5 class="text-white"><a href="team/createwartung" class="text-white">Klick mich</a></h5>
												</center>
											</td>


                                    </tr>

									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">


											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-list text-danger"></i> [+] FEHLER</h4> 
													<h5 class="text-white"><a href="team/createissue" class="text-white">Klick mich</a></h5>
												</center>
											</td>




                                    </tr>

									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">


											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-tools text-danger"></i> [+] TEAM</h4> 
													<h5 class="text-white"><a href="team/createteamler" class="text-white">Klick mich</a></h5>
												</center>
											</td>



                                    </tr>

									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">


											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-copy text-danger"></i> [;] TEAM</h4> 
													<h5 class="text-white"><a href="team/team" class="text-white">Klick mich</a></h5>
												</center>
											</td>



                                    </tr>

									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">


											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-cog fa-spin text-danger"></i> [+] EINSTELLUNGEN <span class="badge bg-warning bg-sm mr-2">UPDATE</span></h4> 
													<h5 class="text-white"><a href="team/settings" class="text-white">Klick mich</a></h5>
												</center>
											</td>




                                    </tr>



                                </tbody>
                            </table>
						
						<br><br>

                        <table class="table table-padded" style="min-height: 100px;">
                                <tbody>

                                                                            
									<tr class="tr-hover text-no-select" style="display: width: 100%;" onclick="toggleCollapse('#bar-1')">


											<td style="text-align: width: 25%" id="title-2" class="">
												<center>
													<h4><i class="fa fa-link text-danger"></i> STATUS-VERSION</h4> 
													<h5 class="text-white">
															<?= env('VERSION') ?>
														
													</h5>
												</center>
											</td>


                                    </tr>



                                </tbody>
                            </table>

                        </div>
                        </div>




                        


                </div>


                
            </div>

