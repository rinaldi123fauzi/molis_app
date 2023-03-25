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
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Sparepart</label>
                                    <input type="text" class="form-control" name="namaSparepart" value="<?= set_value('namaSparepart') ?>">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('namaSparepart'); ?></small>
                                </div>
								<div class="form-group">
                                    <label for="">Category</label>
									<select name="category" id="" class="form-control">
										<option selected disabled>--Pilih--</option>
										<?php foreach ($category as $category):?>
											<?php if (set_value('category') == $category['id']){?>
												<option value="<?= $category['id']; ?>" selected><?= $category['nama_kategori']; ?></option>
											<?php }else{?>
												<option value="<?= $category['id']; ?>"><?= $category['nama_kategori']; ?></option>
											<?php } ?>
										<?php endforeach;?>
									</select>
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('category'); ?></small>
                                </div>
                            </div>
							<div class="col-md-6">
								<div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="number" class="form-control" name="harga" value="<?= set_value('harga') ?>">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('harga'); ?></small>
                                </div>
								<div class="form-group">
                                    <label for="">Dealer</label>
									<?php if ($this->session->userdata('role_id') == 3){?>
										<input type="text" class="form-control" value="<?= $dealer['nama_dealer'] ?>" readonly>
										<input type="hidden" class="form-control" name="dealer" value="<?= $dealer['id'] ?>">
									<?php }else{ ?>
										<select name="dealer" id="" class="form-control">
											<option selected disabled>--Pilih--</option>
											<?php foreach ($dealer as $dealer):?>
												<?php if (set_value('dealer') == $dealer['id']){?>
													<option value="<?= $dealer['id']; ?>"><?= $dealer['nama_dealer']; ?></option>
												<?php }else{ ?>
													<option value="<?= $dealer['id']; ?>"><?= $dealer['nama_dealer']; ?></option>
												<?php } ?>
											<?php endforeach;?>
										</select>
									<?php } ?>
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('dealer'); ?></small>
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
                                    <label for="">Gambar</label>
									<input type="file" name="image" id="image" class="form-control">
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" style="color: transparent;">test</label><br>
									<input type="submit" class="btn btn-info" value="Submit">
								</div>
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