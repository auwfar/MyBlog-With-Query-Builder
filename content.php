<?php include '_layout/header.php'; ?>

		<section id="content">
			<div class="container">
				<section id="mainbar">
					<?php
						$data_artikel_ID = $artikel->SELECT_BY_ID($_GET['id']);

						$tanggal = explode('-', $data_artikel_ID['tgl_upload']);
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


						//Tambah View
						$jumlah_view = $data_artikel_ID['jumlah_view'] + 1;
						$data_update['jumlah_view'] = $jumlah_view;
						$artikel->UPDATE($data_update, $_GET['id']);

					?>
					<div class="article-wrapper">
						<div class="article-title">
							<h2><?php echo $data_artikel_ID['judul_artikel']; ?></h2>
						</div>
						<div class="article-meta">
							<?php echo $tanggal_lengkap; ?> <span><?php echo $data_artikel_ID['nama_kategori']; ?></span><span>DIlihat <?php echo $jumlah_view; ?> x</span>
						</div>
						<div class="article-content">
							<img <?php echo 'src="assets/img/' .$data_artikel_ID['gambar_artikel'] .'"'; ?>>
							<p>
								<?php echo $data_artikel_ID['isi_artikel']; ?>
							</p>
						</div>
					</div>
					<div class="comments-wrapper">
						<?php
							$data_komentar = $komentar->SELECT_BY_ID($_GET['id']);
							$hitung_komentar = $komentar->COUNT_SELECT_BY_ID($_GET['id']);
							$jumlah_komentar = $hitung_komentar['jumlah_komentar'];
						?>

						<h3 class="comments-title">
							Comments <span><?php echo $jumlah_komentar; ?></span>
						</h3>
						<div class="comments-contents">
							<?php
								if ($jumlah_komentar != 0) {
									foreach ($data_komentar as $value) {
										?>
										<div class="comments-views">
											<div class="comments-name">
												<span><?php echo $value['nama']; ?></span>
											</div>
											<div class="comments-contents-user">
												<?php echo $value['isi_komentar']; ?>
											</div>
										</div>
										<?php	
									}
								}
							?>
							<div class="comments-form">
								<h3 class="comments-form-title">
									Add Your Comments
								</h3>
								<div class="comments-form-contents">
									<form action="process/add_comment.php" method="POST">
										<div class="comments-form-left">
											<table>
												<tr>
													<td>Komentar</td>
												</tr>
												<tr>
													<td>
														<textarea name="komentar" rows="10" required="required"></textarea>
													</td>
												</tr>
											</table>
										</div>
										<div class="comments-form-right">
											<table>
												<tr>
													<td>Nama</td>
												</tr>
												<tr>
													<td style="vertical-align: top;">
														<input type="text" name="nama" required="required">
														<input type="hidden" name="id_artikel" <?php echo 'value="' .$_GET['id'] .'"'; ?>>
													</td>
												</tr>
												<tr>
													<td>
														<input type="submit" name="submit" value="Submit">
													</td>
												</tr>
											</table>
										</div>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php include '_layout/sidebar.php'; ?>
			</div>
		</section>
		<div class="clearfix"></div>

<?php include '_layout/footer.php'; ?>