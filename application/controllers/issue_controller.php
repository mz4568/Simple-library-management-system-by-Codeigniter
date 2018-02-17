
<?php defined('BASEPATH') OR exit('No direct script access allowed');
   
class issue_controller  extends CI_Controller{
     public function __construct() {
        parent::__construct();
        $this->load->model('book_model');
        $this->load->model('department_model');
        $this->load->model('issue_model');
    }
    public function issue_book()
        {
          $data['book_list_info']=$this->book_model->book_list_info();
          $data['dep_list_info']=$this->department_model->department_list_info();
          $this->load->view('eu/bookIssue',$data); 
        }
       
    public function getAllBook($mz)
        {
         $getAllBooks= $this->issue_model->getBook($mz); 
         $output=null;
         $output .='<option value="0"> Selecet One </option>';
         foreach($getAllBooks as $book){
           $output .= '<option value= "'. $book->book_id .'">'.$book->book_name .'</option>';
          
         }
          echo $output;
        }
        public function show_issued_book()
        {
          $data=array();
          $data['issuedBook_list_info']=$this->issue_model->bookIssued_list_info();
          $this->load->view('eu/IssuedBookList',$data); 
        }
        public function getAllName($zm)
        {
         $getAllNames= $this->issue_model->getName($zm); 
         $output=null;
         //$output .='<option value="0"> Selecet One </option>';
         foreach($getAllNames as $names){
           $output .= '<option value= "'.$names->id .'">'.$names->student_name .'</option>';
          
         }
          echo $output;
        }
}
