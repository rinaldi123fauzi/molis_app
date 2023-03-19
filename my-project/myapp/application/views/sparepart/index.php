<div class="tt-breadcrumb">
	<div class="container">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li>Master Sparepart</li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent-04">
		<div class="container">
			<div class="tt-block-title tt-sub-pages">
				<h1 class="tt-title">Master Sparepart</h1>
			</div>
            <a href="<?= base_url();?>sparepart/add" class="btn btn-info btn-md mb-3">+Tambah</a>
			<div class="row">
				<div class="col-md-12">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sparepart</th>
                                    <th>Kategori</th>
                                    <th>Dealer</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                ?>
                                <?php foreach ($data as $data): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_sparepart']?></td>
                                        <td><?= $data['nama_kategori']?></td>
                                        <td><?= $data['nama_dealer']?></td>
                                        <td>
                                            <a href="<?= base_url('sparepart/edit/'.$data['sparepartid']);?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="<?= base_url('sparepart/delete/'.$data['sparepartid']);?>" class="btn btn-success btn-sm" onclick="return confirm('Anda yakin ?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>     
                            </tbody>
                        </table>
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