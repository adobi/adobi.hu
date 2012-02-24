<?php
	
	class Users extends Model {

        public function Users() {
            
            parent::Model();
        }

		public function signIn($username, $password) {
			
		    return false;
		    
			$db = $this->db;
			
			$where = array('username'=>$username, 'password'=>$password);
			
			$query = $this->db->select()->from('user')->where($where);
			$user = $query->get()->row_array();
			
			$this->session->set_userdata('CurrentUser', $user);
			//dump($this->session->userdata('current_user')); die;
			return $user;
		}
		
		public function changePassword($newPassword) {
		
		}
		
		public function deleteAccount() {
		
		}		
	}

?>