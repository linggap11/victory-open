<?php

namespace App\Controllers;
use App\Models\Clubs;
use App\Models\Categories;

class Home extends BaseController
{
    protected $clubModel = "";
    protected $categoryModel = "";

    public function __construct()
    {
        $this->clubModel = new Clubs();
        $this->categoryModel = new Categories();
    }

    public function index()
    {   
        $tim = $this->clubModel->showClub();
        $cat = $this->categoryModel->get();
        $kyorugiClass = $this->categoryModel->showClassKyorugi();
        $poomsaeIndividuClass = $this->categoryModel->showClassPoomsaeIndividu();
        $poomsaePairClass = $this->categoryModel->showClassPoomsaePair();
        $poomsaeGroupClass = $this->categoryModel->showClassPoomsaeGroup();
        // $this->categoryModel->saveClass(array("category_id" => 1, "class_id" => 1, "person" => 1));
        $data = [
            'tim' => $tim,
            'cat' => $cat,
            'kyorugiClass' => $kyorugiClass,
            'poomsaeIndividuClass' => $poomsaeIndividuClass,
            'poomsaePairClass' => $poomsaePairClass,
            'poomsaeGroupClass' => $poomsaeGroupClass,
        ];

        return view('welcome', $data);
    }

    public function getClass() {
        $person = $this->request->getVar('person');
        $cat = $this->request->getVar('cat');
        if ($cat == "kyorugi") {
            $class = $this->categoryModel->showClassKyorugi();            
        } else {
            if ($person == "pair") {
                $class = $this->categoryModel->showClassPoomsaePair();
            } else if ($person == "group") {
                $class = $this->categoryModel->showClassPoomsaeGroup();
            } else {
                $class = $this->categoryModel->showClassPoomsaeIndividu();
            } 
        }
        echo json_encode($class->getResultObject());
        
    }

}
