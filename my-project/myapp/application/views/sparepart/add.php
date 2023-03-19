<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><?= $judul; ?></li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent-04">
		<div class="container">
			<div class="tt-block-title tt-sub-pages">
				<h1 class="tt-title"><?= $judul; ?></h1>
			</div>
			<div class="row">
				<div class="col-md-12">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Dealer</label>
                                    <input type="text" class="form-control" name="namaDealer">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('namaDealer'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="" style="color: transparent;">test</label><br>
                                <input type="submit" class="btn btn-info" value="Submit">
                            </div>
                        </div>
                    </form>
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