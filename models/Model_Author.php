<?php namespace models\_model_author;

	use _config\Config as Config;

	class Model_Author extends Config {
		function __construct() {
			parent::__construct();

			$this->db = new Config();
		}

		public function SELECT_ALL() {
			$this->db->select('*');			
			$this->db->from('tb_author');

			$data = $this->db->get();

			return $data;
		}

		public function SELECT_BY_ID($id) {
			$this->db->select('*');			
			$this->db->from('tb_author');
			$this->db->where('id_author', $id);

			$data = $this->db->get();

			return $data[0];
		}

		public function LIKE($search) {
			$this->db->select('*');
			$this->db->from('tb_author');
			$this->db->like('author', $search);

			$data = $this->db->get();

			return $data;
		}

		public function INSERT($data) {
			$result = $this->db->insert('tb_author', $data);

			return $result;
		}

		public function DELETE($id) {
			$this->db->delete("tb_author");
			$this->db->where_delete("id_author", $id);

			$result = $this->db->getDelete();

			return $result;
		}

		public function UPDATE($data, $id) {
			$this->db->update("tb_author", $data);
			$this->db->where_update("id_author", $id);

			$result = $this->db->getUpdate();

			return $result;
		}
	}
?>