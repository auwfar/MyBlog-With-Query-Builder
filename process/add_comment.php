<?php
	include '../assets/config.php';
	include '../models/Model_Komentar.php';

	use models\_model_komentar\Model_Komentar as KOmentar;

	$komentar = new Komentar;

	if (isset($_POST)) {
		$POST = $_POST;

		$data['id_artikel'] = $POST['id_artikel'];
		$data['isi_komentar'] = $POST['komentar'];
		$data['nama'] = $POST['nama'];

		$result = $komentar->INSERT($data);

		if ($result) {
			echo '<script type="text/javascript">alert("Komentar berhasil diposting");location.href = "../content.php?id=' .$POST['id_artikel'] .'";</script>';
		}
	}
?>