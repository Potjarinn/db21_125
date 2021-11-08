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
        $colormodellist6 = colorModels::getAll();
        require_once('views/homeisolation/newhomeisolation.php');
    }

    public function addhomeisolation()
    {
        $patient_id = $_GET['patient_id'];
        $address_Home = $_GET['address_Home'];
        $county_Home = $_GET['county_Home'];
        $province_Home = $_GET['province_Home'];
        $doctor_id = $_GET['doctor_id'];
        $hospital_id = $_GET['hospital_id'];
        homeisolationModels::Add($patient_id,$address_Home,$county_Home,$province_Home,$doctor_id,$hospital_id);
        homeisolation::index();
     }

     public function search()
     {
         $key = $_GET['key'];
         $homeisolationmodellist = homeisolationModels::search($key);
         require_once('views/homeisolation/indexhomeisolation.php');
     }


     public function updateforms()
     {
         $ht = $_GET['patient_id'];
         $homeisolationmodels = homeisolationModels::get($ht);
         $hospitalmodellist = hospitalModels::getAll();
         $patienmodellist = patienModels::getAll();
         $doctormodellist = doctorModels::getAll();
         $atkmodellist = atkModels::getAll();
         $colormodellist = colorModels::getAll();

         require_once('views/homeisolation/updateform.php');
     }

     public function update()
     {
        $patient_id = $_GET['patient_id'];
        $address_Home = $_GET['address_Home'];
        $county_Home = $_GET['county_Home'];
        $province_Home = $_GET['province_Home'];
        $doctor_id = $_GET['doctor_id'];
        $hospital_id = $_GET['hospital_id'];
        $patientid = $_GET['patientid'];
        echo $address_Home;
        homeisolationModels::update($patient_id,$address_Home,$county_Home,$province_Home,$doctor_id,$hospital_id,$patientid);
        homeisolation::index();
     }

     public function deleteconfirm()
     {
        $patient_id = $_GET['patient_id'];
        $homeisolationmodels =  homeisolationModels::get($patient_id);
        require_once('./views/homeisolation/deleteconfirm.php');
     }

     public function delete()
     {
         $patientid = $_GET['patientid'];
         homeisolationModels::delete($patientid);
         homeisolation::index();
     }
}?>