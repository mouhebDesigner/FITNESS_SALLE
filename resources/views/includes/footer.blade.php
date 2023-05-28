<!--    footer-area start    -->
<footer class="footer-area">
	<div class="footer-top" data-background="{{ asset('frontOffice/assets/img/bg/footer-bg.jpg') }}">
		<div class="container">
			<div class="footer-top-bg">
				<div class="row">
					
				</div>
			</div>

			<div class="row mt-80 pb-40">
				<div class="col-md-6 col-lg-4">
					<div class="footer-widgets footer-about-widget">
						<div class="footer-logo">
						<h1 class="widget-title">Karmi GYM </h1>
							
						</div>
						<p>
							Ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
							sit amet, consectetur, adipisci velit, sed quia non um quam eius modi tempora incidunt ut
							labore et magnam aliquam quaerat voluptatem.
						</p>
					
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="footer-widgets latest-news">
						<h3 class="widget-title">Menu</h3>
						<ul>
                            <li class="" style="color: #aca8a8">
                                <a href="/" style="color: #aca8a8">Accueil</a>
                                
                            </li>
                            <li class="" style="color: #aca8a8">
                                <a href="{{ route('abonnements.index') }}" style="color: #aca8a8">Abonnements</a>
                                
                            </li>
                            <li class="" style="color: #aca8a8">
                                <a href="{{ route('entraineurs.index') }}" style="color: #aca8a8">Entraineurs</a>
                            </li>
                            
                            @if(Auth::check())
                            <li class="" style="color: #aca8a8">
                                <a href="{{ route('schedule.index') }}" style="color: #aca8a8">Schedule</a>
                            </li>
                            @endif

                            <li class="" style="color: #aca8a8">
                                <a href="{{ route('competitions.index') }}" style="color: #aca8a8">Compétition</a>
                            </li>

                            <li class="" style="color: #aca8a8">
                                <a href="{{ route('contact.index') }}" style="color: #aca8a8">Contact</a>
                                
                            </li>
                        

                           
                            
                        </ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="footer-widgets contact-widget">
						<h3 class="widget-title">Contact Us</h3>
						<ul>
							<li>
								<i class="fas fa-home"></i>
								<span>No.123 Chalingt Gates, Supper market New York</span>
							</li>
							<li>
								<a href=#"">
									<i class="fas fa-envelope"></i>
									<span>support@gmail.com</span>
								</a>
							</li>
							<li>

								<a href="#">
									<i class="fas fa-phone"></i>
									<span>+012 (4567) 789</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-7 col-lg-6">
					<div class="copyright">
						<p>Copyright <a href="index.html">GYMEE</a> ©2020. All Rights Reserved</p>
					</div>
				</div>
				<div class="col-md-5 col-lg-6">
					<div class="footer-social-link">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-google"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--    footer-area end    -->