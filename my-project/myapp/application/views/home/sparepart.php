<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index-2.html">Home</a></li>
			<li>Our shop</li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent-04">
		<div class="container">
			<div class="tt-block-title tt-sub-pages">
				<h1 class="tt-title">Our Shop</h1>
				<div class="tt-description">Certified Products</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-lg-3 col-xl-3 leftColumn tt-aside" id="aside-js">
					<div class="tt-wrapper-aside">
						<div class="tt-label-aside tt-small">
							<a href="#" class="tt-btn-col-close"><i class="icon-close"></i></a>
							<div class="tt-icon">
								<i class="icon-cart"></i>
							</div>
							<div class="tt-title">
								Online<br>Shopping
							</div>
						</div>
						<div class="tt-aside-box">
							<h3 class="tt-aside-title">Categories</h3>
							<div class="tt-content">
								<ul class="tt-list02">
                                    <?php foreach ($categories as $category):?>
                                        <li><a href="<?= base_url('home/sparepart?kategori='.$category['id']);?>"><?= $category['nama_kategori']; ?></a></li>
                                    <?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-9 col-xl-9">
					<div class="tt-filters-options tt-skinSelect-01">
						<div class="tt-btn-toggle" id="tt-btn-toggle-js">
							<a href="#"></a>
						</div>
						<div class="tt-sort tt-col">
							<form action="" method="GET">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" name="deskripsi_produk" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Search">
                                        </div>
                                    </div>
                                </div>
                            </form>
							<div class="tt-sort-total">
								<strong>79</strong> RESULTS
							</div>
						</div>
						<div class="tt-quantity">
							<a href="#" class="icon-grid active" data-value="icon-listing"></a>
							<a href="#" class="tt-grid-switch icon-listing"></a>
						</div>
					</div>
					<div id="tt-product-listing" class="tt-product-listing row">
                        <?php foreach ($spareparts as $sparepart): ?>
                            <div class="col-6 col-md-4 tt-col-item">
                                <div class="tt-product">
                                    <div class="tt-image-box">
                                        <a href="shop-item.html">
                                        <span class="tt-img"><img src="<?= base_url('uploads/'.$sparepart['image']);?>" data-src="" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <h2 class="tt-title"><a href="shop-item.html"><?= $sparepart['nama_sparepart']; ?></a></h2>
                                        <div class="tt-price">
                                           <?= $sparepart['harga']; ?>
                                        </div>
                                        <a href="#" class="tt-btn-addtocart"><i class="icon-cart"></i>ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
					</div>
					<div class="tt-pagination">
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">8</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent container-indent-03 tt-mobile-hidden">
		<div class="tt-map">
			<a href="#" class="tt-btn-toggle"></a>
			<div class="tt-box-map">
				<div id="googleMapFooter" class="google-map"></div>
			</div>
		</div>
	</div>
</div>