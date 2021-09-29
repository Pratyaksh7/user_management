<?php
	
	class Address_model extends CI_Model {

		public function get_address($user_id) {
			$q = $this->db->select()
					->distinct()
					->from('addresses')
					->where('uid',$user_id)
					->get();

			return $q->result();
		}

		public function insert_address($post, $user_id) {
			$address = array();

			for($i = 1; $i < $post['total_count']; $i++) {
				if(isset($post['vstreet_' . $i]) && !empty($post['vstreet_' . $i])) {
					// echo $i;
					$address[$i]['uid'] = $user_id;
					$address[$i]['vstreet'] = $post['vstreet_' . $i];
					$address[$i]['vcity'] = $post['vcity_' . $i];
					$address[$i]['vstate'] = $post['vstate_' . $i];
					$address[$i]['vzip'] = $post['vzip_' . $i];
				} else {
					$post['total_count']++;
					continue;
				}
			}
			$address = array_values($address);	
			return $this->db->insert_batch('addresses',$address);
		}
	}
?>