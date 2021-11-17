<?php
/**
 *
 */
class Applicant extends L_P_User implements Approvable
{
  private $fname;
  private $uname;
  private $address;
  private $email;
  private $mobile_no;
  private $gender;
  private $bday;
  private $password;
  private $db;


  public function __construct($fname,$uname,$address,$email,$mobile_no,$gender,$bday,$password)
  {
    $this->fname = $fname;
    $this->uname = $uname;
    $this->address = $address;
    $this->email = $email;
    $this->mobile_no = $mobile_no;
    $this->gender = $gender;
    $this->bday = $bday;
    $this->password = $password;
    $db = DB_OP::get_connection();
    add_to_database(); 

  }
  private function add_to_database($value='')
  {
    $db->create_applicant_acc()
  }

  public function reqest_type(){

  }

  public function apply_NIC()
  {
    // code...
  }
  public function select_time_slot()
  {
    // code...
  }

}


 ?>
