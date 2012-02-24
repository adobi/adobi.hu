		
			</div> <!-- content -->
		</div><!-- container -->
		<?php if(isset($DisplayFooter)) : ?>
			<div id="footer">
				<div id="footer-content">
					<div id="adobi">
						<a href="<?= base_url(); ?>"><strong>&laquo;</strong> back to <strong>adobi.hu</strong></a>
					</div>
					<div id="project">
						<h3>&nbsp;Project</h3>
						<ul>
							<li>
								<a href="javascript:void(0);" data = "{id:1}">colors</a>
							</li>
							<li>
								<a href="http://adobi.github.com/" target = "_blank">github repos</a>
							</li>
						</ul>					
					</div>
					<div id="work">
						<h3>&nbsp;Work</h3>
						<ul>
							<li>
								<a href="javascript:void(0);" data = "{id:6}">kassayzsuzsa.com</a>
							</li>						
							<li>
								<a href="javascript:void(0);" data = "{id:2}">error handler</a>
							</li>							<li>
								<a href="javascript:void(0);" data = "{id:3}">server admin</a>
							</li>							<li>
								<a href="javascript:void(0);" data = "{id:4}">est vest</a>
							</li>

						</ul>
					</div>
					<div id="contact">
						<ul>
							<li><strong>email:</strong> <a href="<?= base_url(); ?>contact">hello[at]adobi.hu</a></li>
							<li><img src="<?= base_url(); ?>img/frontpage-bird.png" alt="" style = "position:relative; top:10px;"/> <a href="http://yamm.hu/adobi" target = "_blank"><strong>@adobi</strong></a></li>
							<li>&nbsp;</li>
							<li>&nbsp;</li>
							<li>&nbsp;
								<!-- 
								<p>This page was handmade using CSS &amp; XHTML.</p>
								<p>It runs thanks to Code Igniter &amp; jQuery.</p>
								 -->
							</li>
							
							<li>&nbsp;</li>
							<li style = "text-align:right;"><em><strong>&copy; <?php echo date('Y'); ?> adobi.hu</strong></em></li>
						</ul>
					</div>
				</div> <!-- footer-content -->
												
	        </div> <!-- footer -->    		
        <?php endif; ?>
		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-10524332-1");
		pageTracker._trackPageview();
		} catch(err) {}</script>		
	</body>

</html>