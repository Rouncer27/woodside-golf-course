			<footer class="mainfooter">
				<div class="mainfooter__container">
					<div class="address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<div class="homeLink" ><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/whitetree.png" alt="Woodside Golf Course's Logo"></a></div>
						<div class="social">
							<ul>
								<li><a class="email" href="mailto:info@woodsidegc.com">Email</a></li>
								<li><a target="_blank" class="facebook" href="https://www.facebook.com/woodsidegc">Facebook</a></li>
								<li><a target="_blank" class="twitter" href="https://twitter.com/intent/follow?screen_name=woodsidegc">twitter</a></li>
								<li><a target="_blank" class="instagram" href="https://instagram.com/woodsidegolf/">instagram</a></li>
							</ul>
						</div>
						<h5><?php bloginfo( 'name' ); ?></h5>
						<p><span itemprop="streetAddress">525 Woodside Drive NW</span> <span itemprop="addressLocality">Airdrie</span>, <span itemprop="addressRegion">Alberta</span> <span itemprop="postalCode">T4B 2C6</span></p>
						<p><span itemprop="telephone">Pro Shop 403.686.GOLF (4653)</span> • <span itemprop="telephone">Restaurant 403.948.7416</span> • <span itemprop="telephone">Office 403.948.6717</span></p>
						<p>E-mail <a href="mailto:info@woodsidegc.com" itemprop="email">info@woodsidegc.com</a> • Fax 403.948.0106</p>
					</div>
				</div>

				<div class="mainfooter__footercopy">
					<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved. Website designed and developed by <a target="_blank" title="Switchback Creative Inc" href="http://switchbackcreative.ca">Switchback Creative</a></p>
				</div>
			</footer>
	<?php wp_footer(); ?>
	</body>	
</html>