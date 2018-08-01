</div>

<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
			<!--	<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
		
				</p>-->
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>

		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		
		  <!--Scripts_Begin_Here-->
                <script src="main.js" type="text/javascript"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" 
                integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">				</script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">				</script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">				</script>


				<script>
					function myFunction(x) {
   				 x.classList.toggle("change"); 

    			 var x = document.getElementById("menuContent");
    
  				  if (x.style.display === "none") {
   			     x.style.display = "block";
  				 	 } else {
    		   	 x.style.display = "none";
   					 }
				}
</script>
<script>
	
					$(document).ready(function(){ 
					$('.field_manipulation').hide();
						$('.moreInfo').click(function(){
							$('.field_manipulation').toggle();
						})
					
					});

</script>
	</body>
</html>
