<?php
Class Feed_Model extends CI_Model
{
 function submit($goal, $need)
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

 

}
?>