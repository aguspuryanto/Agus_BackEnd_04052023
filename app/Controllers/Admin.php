<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Nasabah;
use App\Models\Transaksi;
use App\Models\UserModel;

class Admin extends BaseController
{
    public $session;
    
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
        //cek role dari session
        if($this->session->get('role') != 1){
            return redirect()->to('/user');
        }
        
        return view('admin/index');
    }

    public function transaksi() {
        // echo json_encode($this->session);
        $data['titles'] = 'Transaksi';

        $getTransaksi = new Transaksi();
        $data['transaksiList'] = $getTransaksi->findAll();

        // calculate poin
        // $totalPoint = $this->getPoint($data);
        // $data['totalPoint'] = $totalPoint;

        return view('admin/transaksi', $data); //, ['cache' => false]
    }

    public function poin() {
        // echo json_encode($this->session);
        $data['titles'] = 'Poin';

        $getNasabah = new Nasabah();
        $data['nasabahList'] = $getNasabah->findAll();
        
        // $getTransaksi = new Transaksi();
        // $data['transaksiList'] = $getTransaksi->findAll();

        // // calculate poin
        $totalPoint = $this->getPoint();
        $data['totalPoint'] = $totalPoint;

        return view('admin/poin', $data); //, ['cache' => false]
    }

    public function report() {
        $data['titles'] = 'Report';

        $getTransaksi = new Transaksi();
        $data['transaksiList'] = $getTransaksi->findAll();

        return view('admin/report', $data); //, ['cache' => false]
    }

    public function getPoint($data="") {
        
        // if(is_array($data)) {
        $getTransaksi = new Transaksi();
        $data = $getTransaksi->findAll();
        // }

        $poinPulsa = [];
        if($data) {
            foreach($data as $list) {
                if($list['Description']=='Beli Pulsa') {
                    if($list['Amount'] >= 0 && $list['Amount'] <= 10000) {
                        array_push($poinPulsa, ($list['Amount']/1000)*0);
                    }

                    if($list['Amount'] >= 10001 && $list['Amount'] <= 30000) {
                        array_push($poinPulsa, ($list['Amount']/1000)*1);
                    }

                    if($list['Amount'] > 30000) {
                        array_push($poinPulsa, ($list['Amount']/1000)*2);
                    }
                }

                if($list['Description']=='Bayar Listrik') {
                    if($list['Amount'] >= 0 && $list['Amount'] <= 50000) {
                        array_push($poinPulsa, ($list['Amount']/2000)*0);
                    }

                    if($list['Amount'] >= 50001 && $list['Amount'] <= 100000) {
                        array_push($poinPulsa, ($list['Amount']/2000)*1);
                    }

                    if($list['Amount'] > 100000) {
                        array_push($poinPulsa, ($list['Amount']/2000)*2);
                    }
                }
            }
        }

        // echo json_encode($poinPulsa);
        $totalPoint  = array_reduce($poinPulsa, function ($previous, $current) {
            return $previous + $current;
        });
        // echo $totalPoint;
        
        // $nasabah = new Nasabah();
        foreach($data as $list) {
            $nasabah = new Nasabah();
            $nasabah->update($list['AccountId'], ['TotalPoint' => $totalPoint]);
            // $nasabah->where('AccountId', $list['AccountId'])->set(['TotalPoint' => $totalPoint])->update();
        }

        return $totalPoint;
    }
}
