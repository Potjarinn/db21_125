<?php
class hospital
{
    public function index() 
    {
        $hospitalmodellist = hospitalModels::getAll();
        require_once('./views/hospital/indexhospital.php');
    }

    public function newhospital()
    {
        $hospitalmodellist = hospitalModels::getAll();
        //$pricemodelsList = priceModels::getAll();
        require_once('./views/hospital/newhospital.php');
    }

    public function addhospital()
    {
        $hospital_id = $_GET['hospital_id'];
        $name = $_GET['name'];
        $phone = $_GET['phone'];
        $address = $_GET['address'];
        $county = $_GET['county'];
        $province = $_GET['province'];
        hospitalModels::Add($hospital_id,$name,$phone,$address,$county,$province);

        hospital::index();
     }


     public function updateForms()
     {
         $ht = $_GET['hospital_id'];
         $hospitalmodels = hospitalModels::get($ht);
         $hospitalmodellist = hospitalModels::getAll();
         require_once('views/priceproduct/updateform.php');
     }

     public function update()
     {
        $hospital_id = $_GET['hospital_id'];
        $name = $_GET['name'];
        $phone = $_GET['phone'];
        $address = $_GET['address'];
        $county = $_GET['county'];
        $province = $_GET['province'];
        $hospitalid = $_GET['hospitalid'];
        hospitalModels::update($hospital_id,$name,$phone,$address,$county,$province,$hospitalid);
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