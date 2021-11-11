


			<center>
				<font color="white"> <!-- style="font-weight: bold;" -->
					Version: <?= env('VERSION') ?>
					<br>
					Made with <i class="fa fa-heart text-danger"></i> by Simba Buchmann

					<br><br>

					<a class="red-link" target="_blank" href="https://black-host.eu/impressum">
					Impressum
					</a>
					
					-

					<a class="red-link" target="_blank" href="https://black-host.eu/datenschutz">
					Datenschutz 
					</a>

					-

					<a class="red-link" target="_blank" href="https://black-host.eu/agb">
					AGBs
					</a>
				</font>
			</center>


	<!-- Scripts -->
<!-- javascript -->
<script src="<?= $helper->Url(); ?>js/jquery.min.js"></script>
<script src="<?= $helper->Url(); ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= $helper->Url(); ?>js/jquery.easing.min.js"></script>
<script src="<?= $helper->Url(); ?>js/scrollspy.min.js"></script>
<script src="<?= $helper->Url(); ?>js/fontawesome.html"></script>
<!-- SLIDER -->
<script src="<?= $helper->Url(); ?>js/owl.carousel.min.js"></script>
<script src="<?= $helper->Url(); ?>js/owl.init.js"></script>
<script src="<?= $helper->Url(); ?>js/app.js"></script>
		<script>
		$(document).ready(function()
		{
			if (window.location.hash !== '')
			{
				var location = window.location.hash;
				var unhashed = location.split('#');
				if (unhashed.length === 2)
				{
					var anchor = unhashed[1];
					var data_toggle = '#location-info-' + anchor;
					$("[data-target='" + data_toggle + "']").trigger('click');
				}
			}
		});
	</script>


<div id="cookieconsent_accept"></div>
<script type="text/javascript">
$(document).ready(function()
{
	$('div[class=cookie-bar]').addClass('is-active');
});
$(window).on('load', function()
{
	var dismiss_btn = $('.cookie-bar__action');
	var dialog = $('.cookie-bar');
	dismiss_btn.click(function()
	{
		ccSetCookie('dismiss');
		ccAccept();
		dialog.fadeOut();
	});
});
function ccSetCookie(value)
{
	var name = 'cookieconsent_status';
	var domain = '.vultr.com';
	var path = 'index.html';
	var exdate = new Date();
	exdate.setDate(exdate.getDate() + 365);
	var cookie = [
		name + '=' + value,
		'expires=' + exdate.toUTCString(),
		'path=' + (path || '/')
	];
	cookie.push('domain=' + domain);
	document.cookie = cookie.join(';');
}
function ccAccept()
{
	$.ajax({
		url: '/_ajax/cc_accept.php',
		cache: false,
		dataType: 'html',
		type: 'GET',
		success: function (data, textStatus, jqXHR)
		{
			$('#cookieconsent_accept').html(data);
		}
	});
}
</script>

		<script>
		$(function(){
			lazyload();
			$('.full-width-slider__nav button, .full-width-slider__nav li').on('click', function(){
				lazyload();
			});
		});
	</script>
