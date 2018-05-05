<!-- Footer -->
    </div>
 	<div id="footer" class="navbar-footer"  style="background-color:#f8f8f8;;">
    	<div class="container">
        </div>
         <!-- footer Start -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-manu">
							<ul>
								<li><a href="#">Tentang</a></li>
								<li><a href="#">Kontak</a></li>
								<li><a href="#">Layanan</a></li>
								<li><a href="#">Bantuan</a></li>
							</ul>
						</div>
						<p class="copyright">Copyright 2018 &copy; <a href="">Pulsa Online</a>. All rights Reserved
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
	    <script>
	    new WOW().init();
	    </script>
	    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	    <script src="<?php echo base_url(); ?>assets/js/wizard.js"></script>


	    <!-- javascript login-Register -->
		<script type="text/javascript">
			$(function() {

			    $('#login-form-link').click(function(e) {
					$("#login-form").delay(100).fadeIn(100);
			 		$("#register-form").fadeOut(100);
					$('#register-form-link').removeClass('active');
					$(this).addClass('active');
					e.preventDefault();
				});
				$('#register-form-link').click(function(e) {
					$("#register-form").delay(100).fadeIn(100);
			 		$("#login-form").fadeOut(100);
					$('#login-form-link').removeClass('active');
					$(this).addClass('active');
					e.preventDefault();
				});

			});
		</script>
 	 </body>
</html>