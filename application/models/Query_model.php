<?php
class Query_model extends CI_Model {
public function __construct(){
  $this->load->database() ;

    }




public function enter($data){
    $this->load->helper('url');



          return $this->db->insert('topic',$data);



    }



    public function retrieve($id){
        $this->load->helper('url');

        $this->db->select("id,topic,status");
        $this->db->where('createdby', $id);
          $this->db->from('topic');

          $query = $this->db->get();
            return $query->result();



        }



            public function select($id){
                $this->load->helper('url');

                $this->db->select("id,topic,status");
                $this->db->where('id', $id);
                  $this->db->from('topic');

                  $query = $this->db->get();
                    return $query->result();



                }



}







?>
