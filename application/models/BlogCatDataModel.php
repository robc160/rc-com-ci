<?php
	class BlogCatDataModel extends CI_Model {

		public function getCategories(){
			$this->db->select('category');
			$this->db->from('categories');
			$this->db->where('type', '3');
			$query = $this->db->get();

			return $query->result();
		}
	}