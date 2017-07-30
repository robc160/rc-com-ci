<?php
	class BlogDataModel extends CI_Model {

		public function getPostCount(){
			$this->db->count_all_results('posts');
			$this->db->from('posts');
			$this->db->where('published', '1');
			$query = $this->db->count_all_results();

			return $query;
		}

		public function getPosts($limit, $start){

			$this->db->select('id, title, date, author, body, video');
			$this->db->from('posts');
			$this->db->where('published', '1');
			$this->db->limit($limit, $start);
			$query = $this->db->get();

			return $query->result();
		}

		public function getRequestedPost($post_id){

			$this->db->select('title, date, author, body, cover_image');
			$this->db->from('posts');
			$this->db->where('id', $post_id);
			$query = $this->db->get();

			return $query->result();
		}


	}