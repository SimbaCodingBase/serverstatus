<!-- nothing here yet -->





    <section class="bg-half-170 pb-0 d-table h-25 w-100" style="background-color:black;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="title-heading text-center mt-1">
                        <h1 class="heading mb-3 text-white">
							
							<center>
								<img src="<?= env('APP_LOGO'); ?>" width="50">
							</center>
							
                        </h1>

						<center><h6 class="mb-3 text-white">
							<a href="<?= env('URL') ?>" class="text-white">Startseite</a> | 
							<a href="<?= env('URL') ?>login" class="text-white">Login</a> 
							</h6></center>	

                    <?php
                    $SQL = $db -> prepare("SELECT * FROM `mainsettings` WHERE `id` = '1'");
                    $SQL->execute(array(":user_id" => $userid));
                    if ($SQL->rowCount() != 0) {
                        while ($row = $SQL -> fetch(PDO::FETCH_ASSOC)){

                            ?>

                            <?php if($currPageName == 'Service'){ ?>

<!-- Reloader -->
<meta http-equiv="refresh" content="<?= $row['checker']; ?>" />
<!-- Reloader -->

<!-- Count Script -->			
<script>
var incomeTicker = <?= $row['checker']; ?>;

window.setInterval(function(){
 if (incomeTicker > 0)
	 incomeTicker--;
      document.getElementById("incomeTicker").innerHTML = "Aktualisierung in " + incomeTicker + " Sekunden";
}, 1000);
			</script>
<!-- Count Script -->	

                        <h6 class="mb-3 text-white incomeTicker banner__title" id="incomeTicker">
                            Aktualisierung in <?= $row['checker']; ?> Sekunden
                        </h6>
					
                            <?php } elseif($currPageName == 'Issue') { ?>
<!-- Reloader -->
<meta http-equiv="refresh" content="<?= $row['checker']; ?>" />
<!-- Reloader -->

<!-- Count Script -->			
<script>
var incomeTicker = <?= $row['checker']; ?>;

window.setInterval(function(){
 if (incomeTicker > 0)
	 incomeTicker--;
      document.getElementById("incomeTicker").innerHTML = "Aktualisierung in " + incomeTicker + " Sekunden";
}, 1000);
			</script>
<!-- Count Script -->	

                        <h6 class="mb-3 text-white incomeTicker banner__title" id="incomeTicker">
                            Aktualisierung in <?= $row['checker']; ?> Sekunden
                        </h6>

                            <?php } elseif($currPageName == 'Wartung') { ?>
<!-- Reloader -->
<meta http-equiv="refresh" content="<?= $row['checker']; ?>" />
<!-- Reloader -->

<!-- Count Script -->			
<script>
var incomeTicker = <?= $row['checker']; ?>;

window.setInterval(function(){
 if (incomeTicker > 0)
	 incomeTicker--;
      document.getElementById("incomeTicker").innerHTML = "Aktualisierung in " + incomeTicker + " Sekunden";
}, 1000);
			</script>
<!-- Count Script -->	

                        <h6 class="mb-3 text-white incomeTicker banner__title" id="incomeTicker">
                            Aktualisierung in <?= $row['checker']; ?> Sekunden
                        </h6>

                            <?php } elseif($currPageName == 'Serverstatus') { ?>
<!-- Reloader -->
<meta http-equiv="refresh" content="<?= $row['checker']; ?>" />
<!-- Reloader -->

<!-- Count Script -->			
<script>
var incomeTicker = <?= $row['checker']; ?>;

window.setInterval(function(){
 if (incomeTicker > 0)
	 incomeTicker--;
      document.getElementById("incomeTicker").innerHTML = "Aktualisierung in " + incomeTicker + " Sekunden";
}, 1000);
			</script>
<!-- Count Script -->	

                        <h6 class="mb-3 text-white incomeTicker banner__title" id="incomeTicker">
                            Aktualisierung in <?= $row['checker']; ?> Sekunden
                        </h6>

                            <?php } else { ?>
                                
                            <?php } ?>



                        <?php } } ?>
	
						
						                       
						
						<br>
						<br>
						
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="position-relative">
        <div class="shape overflow-hidden" style="color: #2C2F33">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>