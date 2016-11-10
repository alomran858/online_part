<?php
class User extends CI_Controller {
public function __construct(){
    parent::__construct() ;
    /*
    $this->load->model('news_model') ;
    $this->load->helper('url_helper') ;
    */
  $this->load->helper(['form','url']) ;
      $this->load->model('user_model') ;

      }


 public function create(){

   $data=$this->input->post();
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username','Username','required|min_length[4]|is_unique[user.username]');
   $this->form_validation->set_rules('email','Email','required|min_length[4]|is_unique[user.email]');

   if($this->form_validation->run()==FALSE){
     $data['main_content']="register" ;
     $this->load->view("welcome/login",$data);
   }else{
     $data=array(
       'username'=>$this->input->post('username'),
        'email'=>$this->input->post('email'),
         'password'=>$this->input->post('password')

     );
       $this->user_model->register($data);
       $m=array('msg' => "thank you for registering please login to continue");

         $this->load->view('login',$m) ;



   }


 }




public function checkLogin(){
$username = $this->input->post('username');
$password = $this->input->post('password');

 $result = $this->user_model->login($username, $password);
 if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }




       $this->load->view('panel') ;


   }  else
   {
     $m=array('msg' =>  "username or password is not correct please try again ");

       $this->load->view('login',$m) ;
   }


}


public function logout(){
  $this->session->unset_userdata('logged_in');
    session_destroy();

     $this->load->view('login') ;


}


public function panel(){



     $this->load->view('panel') ;


}


}



 ?>
