<?php get_header();?>

<!-- Top Navbar-->
<div class="navbar">
	<div class="navbar-inner">
	<!-- We have home navbar without left link-->
	<div class="center sliding">Awesome App</div>
		<div class="right">
			<!-- Right link contains only icon - additional "icon-only" class-->
			<a href="#" class="link icon-only open-panel"><i class="icon icon-bars"></i></a>
		</div>
	</div>
</div>

<!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
<div class="pages navbar-through toolbar-through">
	<!-- Page, data-page contains page name-->
	<div data-page="index" class="page">
		<!-- Scrollable page content-->
		<div class="page-content">
			<div class="content-block-title">Welcome To My Awesome App</div>
			<div class="content-block">
				<div class="content-block-inner">
					<p>Couple of worlds here because my app is so awesome!</p>
					<p>Duis sed erat ac eros ultrices pharetra id ut tellus. Praesent rhoncus enim ornare ipsum aliquet ultricies. Pellentesque sodales erat quis elementum sagittis.</p>
				</div>
			</div>
			<div class="content-block-title">What about simple navigation?</div>
			<div class="list-block">
				<ul>
					<li>
						<a href="about.html" class="item-link">
							<div class="item-content">
								<div class="item-inner">
									<div class="item-title">About</div>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="services.html" class="item-link">
							<div class="item-content">
								<div class="item-inner">
									<div class="item-title">Services</div>
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="form.html" class="item-link">
							<div class="item-content">
								<div class="item-inner">
									<div class="item-title">Form</div>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="content-block-title">Side panels</div>
			<div class="content-block">
				<div class="row">
					<div class="col-50"><a href="#" data-panel="left" class="button open-panel">Left Panel</a></div>
					<div class="col-50"><a href="#" data-panel="right" class="button open-panel">Right Panel</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>