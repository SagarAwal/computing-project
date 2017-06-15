<?php
class Customer extends CI_Controller{
	public function getRegister(){
		$firstname=$this->input->POST("firstname");
		$lastname=$this->input->POST("lastname");
		$address=$this->input->POST("address");
		$contact=$this->input->POST("contactno");
		$email=$this->input->POST("email");
		$Username=$this->input->POST("username");
		$Password=MD5($this->input->POST("password"));

		$this->load->model("customerRegister"); //loading a model
		$customerSave=$this->customerRegister->insertIt($firstname,$lastname,$address,$contact,$email,$Username,$Password);   //calling function
		$this->load->view('login');

		/*if($customerSave){
			$data['msg']='Customer data inserted successfully.';
			redirect(base_url() . 'Welcome/registration',$data);
		}
		else{
			$data['msg2']='Sorry.Try again.';
			redirect(base_url() . 'Welcome/registration',$data);
		}*/
	}
	
	public function Login(){
		$this->load->library('form_validation');
			$this->form_validation->set_rules('user','username',
					'required|trim|min_length[3]|max_length[20]');
					
			$this->form_validation->set_rules('pass','password',
					'required|trim|min_length[5]|max_length[15]');
		if ($this->form_validation->run()){
			$username=$this->input->post('user');
			$password=$this->input->post('pass');
			

			$this->load->model('customerRegister');
			$result=$this->customerRegister->checkLogin($username,$password);
			if ($result){
				if ($result==1){
					/*return redirect('Welcome/adminPannel');*/
					echo "admin panel";
				}else{
					$this->load->library('session');
					$this->session->set_userdata('customerid',$result);
					/*return redirect('user/productDetails');*/
					echo "user panel";
				
				}
			}else{
				echo ("password not match");
			}
			}
			else{
				$this->load->view('login');
			}

			
	}
	
}	


?>