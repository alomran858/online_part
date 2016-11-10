<?php
class Query extends CI_Controller {
public function __construct(){
    parent::__construct() ;
    /*
    $this->load->model('news_model') ;
    $this->load->helper('url_helper') ;
    */
  $this->load->helper(['form','url']) ;
      $this->load->model('query_model') ;

      }



       public function newquery(){
          $this->load->view('newquery') ;



       }


              public function retrievequeries($id){

                 $this->data['queries'] =     $this->query_model->retrieve($id);
               $this->data['idd'] =$id;
                 $this->load->view('retrieve',$this->data) ;

              }


                            public function select($id,$createdby){

                               $this->data['queries'] =     $this->query_model->select($id);
                             $this->data['idd'] =$createdby;
                               $this->load->view('select',$this->data) ;

                            }



              public function newlist(){
                 $this->load->view('newlist') ;



              }


public function form(){

     $data=$this->input->post();
     $this->load->library('form_validation');
  //   $this->form_validation->set_rules('topic','Topic','required|min_length[2]');



       $data=array(
         'topic'=>$this->input->post('topic'),
          'list'=>$this->input->post('list'),
           'startdate'=>$this->input->post('startdate'),
            'finishdate'=>$this->input->post('finishdate'),
              'createdby'=>$this->input->post('user_id')

       );

        $this->query_model->enter($data);
   $data['msg']='Topic has been added ';

               $this->load->view('panel',$data) ;

}






    }
