<?php
class homeisolation
{
    public function index() 
    {
        $homeisolationmodellist = homeisolationModels::getAll();
        require_once('views/homeisolation/indexhomeisolation.php');
    }

    public function newhomeisolation()
    {
        $homeisolationmodellist1 = homeisolationModels::getAll();
        $hospitalmodellist2 = hospitalModels::getAll();
        $doctormodellist3 = doctorModels::getAll();
        $patienmodellist4 = patienModels::getAll();
        $atkmodellist5 = atkModels::getAll();
        require_once('views/homeisolation/newhomeisolation.php');
    }

    public function addhomeisolation()
    {
        $patien_id = $_GET['patien_id'];
        $address_Home = $_GET['address_Home'];
        $color_name = $_GET['color_name'];
        $id_atk = $_GET['id_atk'];
        $doctor_id = $_GET['doctor_id'];
        $hospital_id = $_GET['hospital_id'];
        homeisolationModels::Add($patien_id,$address_Home,$color_name,$id_atk,$doctor_id,$hospital_id);
        homeisolation::index();
     }

     public function search()
     {
         $key = $_GET['key'];
         $homeisolationmodellist = homeisolationModels::search($key);
         require_once('views/homeisolation/indexhomisolation.php');
     }


     public function updateforms()
     {
         $ht = $_GET['patien_id'];
         $homeisolationmodels = homeisolationModels::get($ht);
         $hospitalmodellist = hospitalModels::getAll();
         $patienmodellist = patienModels::getAll();
         $doctormodellist = doctorModels::getAll();
         require_once('views/homeisolation/updateform.php');
     }

     public function update()
     {
        $patien_id = $_GET['patien_id'];
        $address_Home = $_GET['address_Home'];
        $color_name = $_GET['color_name'];
        $id_atk = $_GET['id_atk'];
        $doctor_id = $_GET['doctor_id'];
        $hospital_id = $_GET['hospital_id'];
        $patienid = $_GET['patienid'];
        homeisolationModels::update($patien_id,$address_Home,$color_name,$id_atk,$doctor_id,$hospital_id,$patienid);
        homeisolation::index();
     }

     public function deleteconfirm()
     {
        $patien_id = $_GET['patien_id'];
        $homeisolaationmodels =  homeisolationModels::get($patien_id);
        require_once('./views/homeisolation/deleteconfirm.php');
     }

     public function delete()
     {
         $patienid = $_GET['patienid'];
         homeisolationModels::delete($patienid);
         homeisolation::index();
     }
}?>