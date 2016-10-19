<?php namespace models\_model_artikel;

	use _config\Config as Config;

	class Model_Artikel extends Config {
		function __construct() {
			parent::__construct();

			$this->db = new Config();
		}

		public function SELECT_ALL() {
			$this->db->select('*');			
			$this->db->from('tb_artikel');

			$data = $this->db->get();

			return $data;
		}

		public function SELECT_BY_ID($id) {
			$this->db->select('tb_artikel.*, tb_kategori.nama_kategori');
			$this->db->from('tb_artikel, tb_kategori');
			$this->db->where('tb_artikel.id_kategori', 'tb_kategori.id_kategori');
			$this->db->where('tb_artikel.id_artikel', $id);

			$data = $this->db->get();

			return $data[0];
		}

		public function SELECT_NEWS() {
			$this->db->select('*');			
			$this->db->from('tb_artikel');
			$this->db->order('tgl_upload', 'DESC');
			$this->db->order('id_artikel', 'DESC');

			$data = $this->db->get();

			return $data;
		}

		public function SELECT_POPULAR() {
			$this->db->select('*');			
			$this->db->from('tb_artikel');
			$this->db->order('jumlah_view', 'DESC');

			$data = $this->db->get();

			return $data[0];
		}

		public function LIKE($search) {
			$this->db->select('*');
			$this->db->from('tb_artikel');
			$this->db->like('artikel', $search);

			$data = $this->db->get();

			return $data;
		}

		public function INSERT($data) {
			$result = $this->db->insert('tb_artikel', $data);

			return $result;
		}

		public function DELETE($id) {
			$this->db->delete("tb_artikel");
			$this->db->where_delete("id_artikel", $id);

			$result = $this->db->getDelete();

			return $result;
		}

		public function UPDATE($data, $id) {
			$this->db->update("tb_artikel", $data);
			$this->db->where_update("id_artikel", $id);

			$result = $this->db->getUpdate();

			return $result;
		}
	}
?>