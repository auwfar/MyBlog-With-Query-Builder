<?php include '_layout/header.php'; ?>
		<section id="content">
			<div class="container">
				<section id="mainbar">
					<?php
						$data_artikel = $artikel->SELECT_ALL();

						foreach ($data_artikel as $key => $value) {
							$tanggal = explode('-', $value['tgl_upload']);
							if ($tanggal[1] == 1) {
								$bulan = 'Januari';
							} elseif ($tanggal[1] == 2) {
								$bulan = 'Februari';
							} elseif ($tanggal[1] == 3) {
								$bulan = 'Maret';
							} elseif ($tanggal[1] == 4) {
								$bulan = 'April';
							} elseif ($tanggal[1] == 5) {
								$bulan = 'Mei';
							} elseif ($tanggal[1] == 6) {
								$bulan = 'Juni';
							} elseif ($tanggal[1] == 7) {
								$bulan = 'Juli';
							} elseif ($tanggal[1] == 8) {
								$bulan = 'Agustus';
							} elseif ($tanggal[1] == 9) {
								$bulan = 'September';
							} elseif ($tanggal[1] == 10) {
								$bulan = 'Oktober';
							} elseif ($tanggal[1] == 11) {
								$bulan = 'November';
							} elseif ($tanggal[1] == 12) {
								$bulan = 'Desember';
							}

							$tanggal_lengkap = $tanggal[2] .' ' .$bulan .' ' .$tanggal[0];
							?>
							<a href="content.php?id=<?php echo $value['id_artikel']; ?>">
								<div class="blog-wrapper">
							        <div class="blog-item">
							            <div class="blog-content" <?php echo "style='background-image: url(assets/img/" .$value['gambar_artikel'] .")'"; ?> >
							            	<div class="blog-wrap-content">
									            <h1 class="blog-title"><?php echo $value['judul_artikel']; ?></h1>
									            <div class="blog-meta"><?php echo $tanggal_lengkap; ?></div>
							                	<?php echo substr($value['isi_artikel'], 0, 200) .'...'; ?>
							            	</div>
											<div class="clearfix"></div>
							            </div>
							        </div>
							    </div>
						    </a>
						    <?php
						}
						?>
				</section>
				<?php include '_layout/sidebar.php'; ?>
			</div>
		</section>
		<div class="clearfix"></div>

<?php include '_layout/footer.php'; ?>
		