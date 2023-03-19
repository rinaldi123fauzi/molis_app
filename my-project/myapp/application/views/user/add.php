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
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('username'); ?></small>
                                </div>
                            </div>
							<div class="col-md-6">
								<div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
                                    <label for="">Role</label>
									<select name="role" id="" class="form-control">
										<option selected disabled>--Pilih--</option>
										<?php foreach ($role as $role):?>
											<?php if (set_value('role') == $role['id']){?>
												<option value="<?= $role['id']; ?>" selected><?= $role['nama_role']; ?></option>
											<?php }else{?>
												<option value="<?= $role['id']; ?>"><?= $role['nama_role']; ?></option>
											<?php } ?>
										<?php endforeach;?>
									</select>
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('role'); ?></small>
                                </div>
								<div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password1" value="<?= set_value('password1') ?>">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('password1'); ?></small>
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
                                    <label for="">Dealer</label>
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
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('dealer'); ?></small>
                                </div>
								<div class="form-group">
                                    <label for="">Retype Password</label>
                                    <input type="password" class="form-control" name="password2" value="<?= set_value('password2') ?>">
                                    <small id="emailHelp" class="form-text text-danger"><?= form_error('password2'); ?></small>
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