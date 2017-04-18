<?php 
date_default_timezone_set('Asia/Manila');
class Loginmodel extends CI_Model {
	        public function getall()
	        {
	        	$query = $this->db->get('thread');
	        	$this->db->order_by("thread_id","desc");$this->				db->select('*');
	        	$this->db->from('thread');
	        	$query=$this->db->get();
				foreach ($query->result() as $row)
				 {			
				return $query->result();
				}	
	        }
			public function login()
			{
			    $slug = url_title($this->input->post('username'), 'dash', TRUE);	    
				/// grab user input
				$username = $this->security->xss_clean($this->input->post('username'));
				$password = $this->security->xss_clean($this->input->post('password'));
				
				// Prep the query
				$this->db->where('username', $username);
				$this->db->where('password', $password);
				
				// Run the query
				$query = $this->db->get('accounts');
				
			    // check if there are any results
			    if($query->num_rows() == 1)
			    {
			    	//create session data
			    	$row = $query->row();
			    	$data = array(
			    			'user_id' => $row->user_id,
			    			'username' => $row->username,
			    			'full_name' => $row->full_name,
			    			'address' => $row->address,
			    			'phone' => $row->phone
			    	
			    	);
			    	$this->session->set_userdata('loginsession',$data);
					if($this->session->loginsession['username']=='admin')
										
					{
						redirect('dashboard/anotherpage');
						
					}
					else
					{
					redirect('dashboard');
					}
								    
			    }
			    
			    // if none display message
			    else {
			    	$this->session->set_flashdata('message', 'The username or password is incorrect.');
			    	redirect('Login');
			    }
		
			}
			
			public function insert()
			{
				$date=date('Y-m-d');
				$time=date('h:i:s');
				$data = array(
						'user_id' => $this->input->post('userid'),
						'message' => $this->input->post('post'),
						'date_time' => $date.' '.$time
				);
				// insert data
				$this->db->insert('thread', $data);
				// display success message
				$this->session->set_flashdata('success', 'true');
				if($this->session->loginsession['username']=='admin')					
					{
					redirect('dashboard/anotherpage');
					}
					else
					{
					redirect('dashboard');
					}

			}
			
			public function delete()
			{
				
				$threadid =$this->input->post('threadid');
			
				$this->db->delete('thread', array('thread_id' => $threadid)); 
			}
			
			
			public function logout()
			{
					$this->session->sess_destroy();
					redirect('login');
			}

		
			
		
		
}
?>