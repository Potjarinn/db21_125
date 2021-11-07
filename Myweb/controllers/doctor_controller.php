<?php
class doctor
{
    public function index() 
    {
        $doctormodellist = doctorModels::getAll();
        require_once('views/doctor/indexdoctor.php');
    }

    public function newdoctor()
    {
        $hospitalmodellist2 = hospitalModels::getAll();
        require_once('views/doctor/newdoctor.php');
    }

    public function adddoctor()
    {
        $doctor_id = $_GET['doctor_id'];
        $name_D = $_GET['name_D'];
        $lastname_D = $_GET['lastname_D'];
        $phone_D = $_GET['phone_D'];
        $hospital_id = $_GET['hospital_id'];
        doctorModels::Add($doctor_id,$name_D,$phone_D,$hospital_id);
        doctor::index();
     }

     public function search()
     {
         $key = $_GET['key'];
         $doctormodellist = doctorModels::search($key);
         require_once('views/doctor/indexdoctor.php');
     }


     public function updateforms()
     {
         $ht = $_GET['doctor_id'];
         $doctormodels = doctorModels::get($ht);
         $hospitalmodellist = hospitalModels::getAll();
         require_once('views/doctor/updateform.php');
     }

     public function update()
     {
        $doctor_id = $_GET['doctor_id'];
        $name_D = $_GET['name_D'];
        $phone_D = $_GET['phone_D'];
        $hospital_id = $_GET['hospital_id'];
        $doctorid = $_GET['doctorid'];
        doctorModels::update($doctor_id,$name_D,$phone_D,$hospital_id,$doctorid);
        doctor::index();
     }

     public function deleteconfirm()
     {
        $doctor_id = $_GET['doctor_id'];
        $doctormodels =  doctorModels::get($doctor_id);
        require_once('./views/doctor/deleteconfirm.php');
     }

     public function delete()
     {
         $doctorid = $_GET['doctorid'];
         doctorModels::delete($doctorid);
         doctor::index();
     }
}?>