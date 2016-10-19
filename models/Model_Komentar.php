<?php namespace models\_model_komentar;

	use _config\Config as Config;

	class Model_Komentar extends Config {
		function __construct() {
			parent::__construct();

			$this->db = new Config();
		}

		public function SELECT_ALL() {
			$this->db->select('*');			
			$this->db->from('tb_komentar');

			$data = $this->db->get();

			return $data;
		}

		public function SELECT_BY_ID($id) {
			$this->db->select('*');			
			$this->db->from('tb_komentar');
			$this->db->where('id_artikel', $id);

			$data = $this->db->get();

			return $data;
		}

		public function COUNT_SELECT_BY_ID($id) {
			$this->db->select('COUNT(*) as jumlah_komentar');			
			$this->db->from('tb_komentar');
			$this->db->where('id_komentar', $id);

			$data = $this->db->get();

			return $data[0];
		}

		public function LIKE($search) {
			$this->db->select('*');
			$this->db->from('tb_komentar');
			$this->db->like('komentar', $search);

			$data = $this->db->get();

			return $data;
		}

		public function INSERT($data) {
			$result = $this->db->insert('tb_komentar', $data);

			return $result;
		}

		public function DELETE($id) {
			$this->db->delete("tb_komentar");
			$this->db->where_delete("id_komentar", $id);

			$result = $this->db->getDelete();

			return $result;
		}

		public function UPDATE($data, $id) {
			$this->db->update("tb_komentar", $data);
			$this->db->where_update("id_komentar", $id);

			$result = $this->db->getUpdate();

			return $result;
		}
	}
?>