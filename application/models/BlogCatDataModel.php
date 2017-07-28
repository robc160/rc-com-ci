<?php
	class BlogCatDataModel extends CI_Model {

		public function getCategories(){
			$this->db->select('category');
			$this->db->from('categories');
			$query = $this->db->get();

			return $query->result();
		}
	}