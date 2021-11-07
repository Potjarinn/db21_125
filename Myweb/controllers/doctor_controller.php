<?php
class doctor
{
    public function index() 
    {
        $doctormodellist = doctorModels::getAll();
        require_once('views/doctor/indexdoctor.php');
    }

    public function newhospital()
    {
        $doctormodellist2 = doctorModels::getAll();
        require_once('views/doctor/newdoctor.php');
    }

    public function addhospital()
    {
        $hospital_id = $_GET['hospital_id'];
        $name_H = $_GET['name_H'];
        $phone_H = $_GET['phone_H'];
        $address_H = $_GET['address_H'];
        $county_H = $_GET['county_H'];
        $province_H = $_GET['province_H'];
        hospitalModels::Add($hospital_id,$name_H,$phone_H,$address_H,$county_H,$province_H);
        hospital::index();
     }

     public function search()
     {
         $key = $_GET['key'];
         $hospitalmodellist = hospitalModels::search($key);
         require_once('views/hospital/indexhospital.php');
     }


     public function updateforms()
     {
         $ht = $_GET['hospital_id'];
         $hospitalmodels = hospitalModels::get($ht);
        // $hospitalmodellist = hospitalModels::getAll();
         require_once('views/hospital/updateform.php');
     }

     public function update()
     {
        $hospital_id = $_GET['hospital_id'];
        $name_H = $_GET['name_H'];
        $phone_H = $_GET['phone_H'];
        $address_H = $_GET['address_H'];
        $county_H = $_GET['county_H'];
        $province_H = $_GET['province_H'];
        $hospitalid = $_GET['hospitalid'];
        hospitalModels::update($hospital_id,$name_H,$phone_H,$address_H,$county_H,$province_H,$hospitalid);
        hospital::index();
     }

     public function deleteconfirm()
     {
        $hospital_id = $_GET['hospital_id'];
        $hospitalmodels =  hospitalModels::get($hospital_id);
        require_once('./views/hospital/deleteconfirm.php');
     }

     public function delete()
     {
         $hospitalid = $_GET['hospitalid'];
         hospitalModels::delete($hospitalid);
         hospital::index();
     }
}?>