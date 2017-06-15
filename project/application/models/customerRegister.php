<?PHP
	class customerRegister extends CI_Model{
		public function insertIt($firstname,$lastname,$address,$contact,$email,$Username,$Password){
			$customerData=array(
				"firstname"=>$firstname,
				"lastname"=>$lastname,
				"address"=>$address,
				"contactno"=>$contact,
				"email"=>$email,
				"username"=>$Username,
				"password"=>$Password,
			);
			return $this->db->insert('register',$customerData);
		}
		
		public function checkLogin($Username,$Password){
			$query=$this->db->where(['username'=>$username,'password'=>$password])
								->get('register');
		if($query->num_rows()){
			return $query->row()->customerid;
		} else {
			return FALSE;
		}
		}
	}
?>