<?php
Class User_Model extends CI_Model
{
 function login($email, $password)
 {
   $this -> db -> select('user_id, email, password, full_name');
   $this -> db -> from('users');
   $this -> db -> where('email', $email);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 public function add_user()
 {
  $data=array(
    'full_name'=>$this->input->post('full_name'),
    'email'=>$this->input->post('email'),
    'password'=>md5($this->input->post('password'))
  );
  $this->db->insert('users',$data);

 }

}
?>