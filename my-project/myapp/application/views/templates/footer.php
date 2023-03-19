<footer id="tt-footer" class="tt-footer-02">
	<div class="tt-footer-layout">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-3 col-lg-4">
					<a class="tt-logo" href="index.html">
						<img src="<?= base_url('assets/'); ?>images/motorleader/logo.png" alt="">
					</a>
					<div class="tt-logo-description">
						MoLis will make your life easier.
						Eco-friendly and modern
					</div>
					<ul class="tt-social-icon hidden-xs">
						<li><a href="https://www.facebook.com/" target="_blank" class="icon-226234"></a></li>
						<li><a href="https://twitter.com/"  target="_blank" class="icon-8800"></a></li>
						<li><a href="https://www.google.com/" target="_blank" class="icon-733613"></a></li>
					</ul>
				</div>
				<div class="col-12 col-md-9 col-lg-8">
					<div id="tt-footer-menu">

					</div>
					<div class="row row-info">
						<div class="col-md-4">
							<div class="tt-box-info02">
								<div class="tt-item">
									<i class="icon-149984"></i>
									Graha Samali 1st Floor,<br>No: 31B Kalibata, Jaksel 12740
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tt-box-info02">
								<div class="tt-item">
									<i class="icon-15874"></i>
									+62 811 9291 725
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tt-box-info02">
								<a href="mailto:riyadaliasad@gmail.com" class="tt-item">
									<i class="icon-mail"></i>
									riyadaliasad@gmail.com
								</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tt-box-info">
								<div class="tt-item">
									<h6 class="tt-ttile"><i class="icon-icon"></i>Sales Department</h6>
									<ul>
										<li>Mon-Sat : 8:00am - 5:00pm</li>
										<li>Sunday is closed</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tt-box-info">
								<div class="tt-item">
									<h6 class="tt-ttile"><i class="icon-icon"></i>Service Department</h6>
									<ul>
										<li>Mon-Sat : 8:00am - 5:00pm</li>
										<li>Sunday is closed</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="tt-box-info">
								<div class="tt-item">
									<h6 class="tt-ttile"><i class="icon-mail1"></i>NEWSLETTER</h6>
									<form id="newsletterform" method="post" novalidate="novalidate" action="#">
										<div class="form-group">
											<input type="text" name="email" class="form-control" placeholder="enter your email to subscribe">
										</div>
										<button type="submit" class="tt-btn">SUBSCRIBE</button>
										<div class="tt-modal-message">Form sent successfully</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center visible-xs">
				<div class="col col-auto">
					<ul class="tt-social-icon">
						<li><a href="https://www.facebook.com/" target="_blank" class="icon-226234"></a></li>
						<li><a href="https://twitter.com/"  target="_blank" class="icon-8800"></a></li>
						<li><a href="https://www.google.com/" target="_blank" class="icon-733613"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="tt-footer-bottom">
			<div class="tt-col-left">
				<span>&copy; Copyright 2022 Motor Leader</span>
			</div>
			<div class="tt-col-right">
				<ul class="tt-list">
					<li><a href="#">privacy statement</a></li>
					<li><a href="#">terms of use</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<a href="#" id="ttBackToTop" class="tt-back-to-top">BACK TO TOP</a>
<!-- modal (AddToCartProduct) -->
<div class="modal fade" id="modalAddYourItem" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content ">
			<div class="modal-body modal-layout-dafault">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon-close"></span></button>
				<h5 class="modal-title">Add your Item</h5>
				<p class="tt-default-color02">
					Trading in your current car can help serve as a springboard into your new one. One of our team members will be in touch with a quote for your trade in right away.
				</p>
				<form class="tt-form-default02 tt-form-default02 tt-form-review" id="formAddYourItem" method="post" novalidate="novalidate" action="#">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Your name*">
					</div>
					<div class="row">
						<div class="col-12 col-sm-6">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="E-mail*">
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group">
								<input type="text" name="phone" class="form-control" placeholder="Phone #">
							</div>
						</div>
					</div>
					<h6 class="tt-title">Vehicle Info</h6>
					<div class="form-group tt-row-select tt-skinSelect-01">
						<select name="year" class="tt-select">
							<option value="YEAR" disabled selected>YEAR</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
						</select>
						<select name="select-a-make" class="tt-select">
							<option value="SELECT A MAKE" disabled selected>SELECT A MAKE</option>
							<option value="KIA">KIA</option>
							<option value="CHEVROLET">CHEVROLET</option>
							<option value="VOLKSWAGEN">VOLKSWAGEN</option>
							<option value="AUDI">AUDI</option>
							<option value="NISSAN">NISSAN</option>
							<option value="LEXUS">LEXUS</option>
							<option value="SUBARU">SUBARU</option>
							<option value="SUZUKI">SUZUKI</option>
						</select>
						<select name="select-a-model" class="tt-select">
							<option value="SELECT A MODEL" disabled selected>SELECT A MODEL</option>
							<option value="SEDAN">SEDAN</option>
							<option value="HATCHBACK">HATCHBACK</option>
							<option value="SPORT motors">SPORT motors</option>
							<option value="SUV">SUV</option>
							<option value="Pickups">PICKUPS</option>
							<option value="CONVERTIBLE">CONVERTIBLE</option>
							<option value="COUPE">COUPE</option>
							<option value="MINIVAN">MINIVAN</option>
						</select>
						<select  name="select-a-mileage" class="tt-select">
							<option value="PRICE" disabled selected>MILEAGE</option>
							<option value="10000 miles">10000 miles</option>
							<option value="50000 miles">50000 miles</option>
							<option value="100000 miles">100000 miles</option>
						</select>
					</div>
					<div class="tt-row-radio">
						<div class="tt-title">Exterior Condition*</div>
						<div>
							<label class="radio">
								<input id="radio11" checked="" type="radio" name="radio1" value="CLEAN">
								<span class="outer"><span class="inner"></span></span>CLEAN
							</label>
						</div>
						<div>
							<label class="radio">
								<input id="radio12" type="radio" name="radio1" value="AVERAG">
								<span class="outer"><span class="inner"></span></span>AVERAG
							</label>
						</div>
						<div>
							<label class="radio">
								<input id="radio13" type="radio" name="radio1" value="ROUGH">
								<span class="outer"><span class="inner"></span></span>ROUGH
							</label>
						</div>
					</div>
					<div class="tt-row-radio">
						<div class="tt-title">Interior Condition*</div>
						<div>
							<label class="radio">
								<input id="radio21" checked="" type="radio" name="radio2" value="CLEAN">
								<span class="outer"><span class="inner"></span></span>CLEAN
							</label>
						</div>
						<div>
							<label class="radio">
								<input id="radio22" type="radio" name="radio2" value="AVERAG">
								<span class="outer"><span class="inner"></span></span>AVERAG
							</label>
						</div>
						<div>
							<label class="radio">
								<input id="radio23" type="radio" name="radio2" value="ROUGH">
								<span class="outer"><span class="inner"></span></span>ROUGH
							</label>
						</div>
					</div>
					<div class="tt-row-radio">
						<div class="tt-title">Been in Accident?*</div>
						<div>
							<label class="radio">
								<input id="radio31" checked="" type="radio" name="radio3"  value="NO">
								<span class="outer"><span class="inner"></span></span>NO
							</label>
						</div>
						<div>
							<label class="radio">
								<input id="radio32" type="radio" name="radio3"  value="YES">
								<span class="outer"><span class="inner"></span></span>YES
							</label>
						</div>
					</div>
					<h6 class="tt-title">Upload your motor Photos</h6>
					<div class="input-group tt-input-file">
		                <label class="input-group-btn">
		                    <span class="tt-btn-icon">
		                        choose file... <input name="upload" type="file" style="display: none;" multiple accept="image/*">
		                    </span>
		                </label>
		                <input type="text" readonly>
		            </div>
					<ul class="list-form-column">
						<li>
							<div class="checkbox-group">
								<input type="checkbox" id="checkBox11" name="checkbox" checked>
								<label for="checkBox11">
								<span class="check"></span>
								<span class="box"></span>
								I AGREE TO RECEIVE EMAILS FROM motor LEADER
								</label>
							</div>
						</li>
					</ul>
					<button type="submit" class="btn">MAKE AN OFFER</button>
					<div class="tt-modal-message">Form sent successfully</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- compareSlide -->
<div id="compareSlide" class="layout-slide">
	<div class="slide-content">
		<div class="slide-title">
			<h6 class="title">Compare Vehicles</h6>
				<a class="btn-close-slide icon-close"></a>
			</div>
			<div class="tt-wrapper-col">
				<div class="col-value">
				<ul>
					<li>Price:</li>
					<li>Make</li>
					<li>Model</li>
					<li>MILEAGE:</li>
					<li>FUEL TYPE:</li>
					<li>YEAR:</li>
					<li>TRANSMission:</li>
					<li>Drive Type:</li>
					<li>Color:</li>
					<li>Int. Color:</li>
					<li>VIN:</li>
					<li>Engine:</li>
					<li>Stock number:</li>
					<li>Features &amp; Options</li>
				</ul>
			</div>
			<div class="col-item">
				<a href="#" class="item-close"><i class="icon-close"></i></a>
				<div class="img-obj"><img src="<?= base_url('assets/'); ?>images/product_02/product_02_img_02.jpg" alt=""></div>
				<ul>
					<li class="value-item value-select">$99,625</li>
					<li class="value-item">Lehus</li>
					<li class="value-item">LX 570</li>
					<li class="value-item">0 miles</li>
					<li class="value-item">Gas</li>
					<li class="value-item">2018</li>
					<li class="value-item">Automatic</li>
					<li class="value-item">Front Wheel Drive</li>
					<li class="value-item">Jet Black</li>
					<li class="value-item">Cabernet Premium Leather</li>
					<li class="value-item">JTJHY7AX6H4250229</li>
					<li class="value-item">V6 EcoBoost TT</li>
					<li class="value-item">252832</li>
					<li class="value-item value-multy">
						2-Stage Unlocking Doors,
						ABS: 4-Wheel,Active Head
						Restraints: Dual Front,
						Air Conditioning, Air
						Filtration, Airbag
						Deactivation: Occupant
						Sensing Passenger,
						Ambient Lighting, Antenna
						Type: Diversity, Anti-Theft
						System:2-Stage Unlocking Doors,
						ABS: 4-Wheel,Active Head
						2-Stage Unlocking Doors,
						ABS: 4-Wheel,Active Head
					</li>
				</ul>
			</div>
			<div class="col-item">
				<a href="#" class="item-close"><i class="icon-close"></i></a>
				<div class="img-obj"><img src="<?= base_url('assets/'); ?>images/product_02/product_02_img_03.jpg" alt=""></div>
				<ul>
					<li class="value-item value-select">$48,430</li>
					<li class="value-item">Volve</li>
					<li class="value-item">XC60</li>
					<li class="value-item">0 miles</li>
					<li class="value-item">Gas</li>
					<li class="value-item">2018</li>
					<li class="value-item">Automatic</li>
					<li class="value-item">Front Wheel Drive</li>
					<li class="value-item">Jet Black</li>
					<li class="value-item">Cabernet Premium Leather</li>
					<li class="value-item">JTJHY7AX6H4250229</li>
					<li class="value-item">V6 EcoBoost TT</li>
					<li class="value-item">215838</li>
					<li class="value-item value-multy">
						2-Stage Unlocking Doors,
						ABS: 4-Wheel,Active Head
						Restraints: Dual Front,
						Air Conditioning, Air
						Filtration, Airbag
						Deactivation: Occupant
						Sensing Passenger,
						Ambient Lighting, Antenna
						Type: Diversity, Anti-Theft
						System:
					</li>
				</ul>
			</div>
			<div class="col-item">
				<a href="#" class="item-close"><i class="icon-close"></i></a>
				<div class="img-obj"><img src="<?= base_url('assets/'); ?>images/product_02/product_02_img_06.jpg" alt=""></div>
				<ul>
					<li class="value-item value-select">$27,850</li>
					<li class="value-item">Nesen</li>
					<li class="value-item">Almera</li>
					<li class="value-item">80,000 miles</li>
					<li class="value-item">Gas</li>
					<li class="value-item">2017</li>
					<li class="value-item">Automatic</li>
					<li class="value-item">Front Wheel Drive</li>
					<li class="value-item">Jet Black</li>
					<li class="value-item">Cabernet Premium Leather</li>
					<li class="value-item">JTJHY7AX6H4250229</li>
					<li class="value-item">V6 EcoBoost TT</li>
					<li class="value-item">112532</li>
					<li class="value-item value-multy">
						2-Stage Unlocking Doors,
						ABS: 4-Wheel,Active Head
						Restraints: Dual Front,
						Air Conditioning, Air
						Filtration, Airbag
						Deactivation: Occupant
						Sensing Passenger,
						Ambient Lighting, Antenna
						Type: Diversity, Anti-Theft
						System:
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<script src="<?= base_url('assets/'); ?>external/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>external/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>external/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url('assets/'); ?>external/slick/slick.min.js"></script>
<script src="<?= base_url('assets/'); ?>external/panelmenu/panelmenu.js"></script>
<script src="<?= base_url('assets/'); ?>external/isotope/imagesloaded.js"></script>
<script src="<?= base_url('assets/'); ?>external/isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/'); ?>external/sumoselect/jquery.sumoselect.min.js"></script>
<script src="<?= base_url('assets/'); ?>external/countdown/jquery.countto.js"></script>
<script src="<?= base_url('assets/'); ?>external/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="<?= base_url('assets/'); ?>js/main.js"></script>
<!-- form validation and sending to mail -->
<script src="<?= base_url('assets/'); ?>external/form/jquery.form.js"></script>
<script src="<?= base_url('assets/'); ?>external/form/jquery.validate.min.js"></script>
<script src="<?= base_url('assets/'); ?>external/form/jquery.form-init.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
	 $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</body>

<!-- Mirrored from websmirno.site/carleader/html/index-moto.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2023 15:41:00 GMT -->
</html>