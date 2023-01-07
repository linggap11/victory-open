<?php

namespace App\Controllers;
use App\Models\Users;
use App\Models\Clubs;
use App\Models\Categories;
use DateTime;

class Home extends BaseController
{
    protected $userModel = "";
    protected $clubModel = "";
    protected $categoryModel = "";

    public function __construct()
    {
        $this->clubModel = new Clubs();
        $this->categoryModel = new Categories();
        $this->userModel = new Users();
        if (empty(session()->get('user_id'))) {
            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('/admin/dashboard'));
        }
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

    public function dashboard() {
        if (empty(session()->get('user_id'))) {
            return redirect()->to(base_url('/admin'));
        }
        $totalPoomsae = $this->userModel->getTotalPoomsae();
        $totalKyourugi = $this->userModel->getTotalKyourugi();
        $totalClub = $this->clubModel->getTotalClub();       
        $peserta = $this->userModel->getPesertaBaru();
        
        $data = [
            'totalPoomsae' => $totalPoomsae,
            'totalKyourugi' => $totalKyourugi,
            'totalClub' => $totalClub,
            'peserta' => $peserta
        ];
        return view('/admin/dashboard', $data);
    }

    public function poomsae() {
        $poomsaeIndividu = $this->userModel->getDataPoomsaeIndividu();
        $poomsaePair = $this->userModel->getDataPoomsaePair();
        $poomsaeGrup = $this->userModel->getDataPoomsaeGrup();
        
        $data = [
            'poomsaeIndividu' => $poomsaeIndividu,
            'poomsaePair' => $poomsaePair,
            'poomsaeGrup' => $poomsaeGrup,
        ];
        return view('/admin/poomsae', $data);
    }

    public function kyourugi() {
        $kyourugiPutra = $this->userModel->getDataKyourugiPutra();
        $kyourugiPutri = $this->userModel->getDataKyourugiPutri();
        $classPutra = $this->categoryModel->getClassPutra();
        $classPutri = $this->categoryModel->getClassPutri();
        $data = [
            'kyourugiPutra' => $kyourugiPutra,
            'kyourugiPutri' => $kyourugiPutri,
            'classPutra' => $classPutra,
            'classPutri' => $classPutri,
        ];
        return view('/admin/kyourugi', $data);
    }

    public function club() {
        $getClub = $this->clubModel->get();
        
        $data = [
            'clubs' => $getClub,           
        ];
        return view('/admin/club', $data);
    }

    public function invoice() {
        $getInvoice = $this->clubModel->getInvoice();
        
        $data = [
            'invoices' => $getInvoice,           
        ];
        return view('/admin/invoice', $data);
    }

    public function cekUser() {
        if (empty(session()->get('user_id'))) {
            return redirect()->to(base_url('/admin'));
        } else {
            return redirect()->to(base_url('/admin/dashboard'));
        }
    }



    public function test() {
       
        
    }

}
