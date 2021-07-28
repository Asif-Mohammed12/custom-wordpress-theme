
<?php
    wp_footer();
?>  
<footer class="footer text-center py-2 theme-bg-dark">
    
	<section class="theme-bg-dark py-5 mt-4 text-center">
				<h3 class='text-light d-block'>Subscribe to the Newsletter</h3>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
				</section>
    <p class="copyright"><a href="https://youtube.com/FollowAndrew">Asif Mohammed</a></p>
    <?php
		dynamic_sidebar('footer-1');
	?>
 
</footer>
   
    </div>
</body>
</html> 
