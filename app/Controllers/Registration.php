<?php

namespace App\Controllers;

use App\Models\Categories;
use App\Models\Users;
use App\Models\Clubs;
use PHPMailer\PHPMailer\PHPMailer;

class Registration extends BaseController
{   
    protected $userModel = "";
    protected $clubModel = "";
    protected $categoryModel = "";   

    public function __construct()
    {
        $this->userModel = new Users();
        $this->clubModel = new Clubs();
        $this->categoryModel = new Categories();
    }

    public function index()
    {
        
        return view('welcome_message');
    }

    public function simpanTim() {
        $post = $this->request->getVar();       
        $message  = "<p>Hai ".$post['tim'].",</p>";
        $message .= "<p>Terima kasih telah mendaftar, data tim-mu sudah masuk ke dalam sistem. Nantikan informasi selanjutnya dari kami yah.</p>";   
        $message .= "<p>Berkas-berkas persyaratan dapat di-unduh di web kami di <a href='https://victory-open.victorytaekwondo.id/' target='_blank'>victory-open.victorytaekwondo.id</a></p>";     
        $message .= "<html><body>";
        $message .= '<div style="margin: 0 100px 0 100px">';         
        $message .= '</div>';
        $message .= '<div style="text-align: -webkit-center; margin-top: 10px">';       
        $message .= '</div>';
        
        $message .= "</body></html>";
        // end body

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->IsHTML(true);
        $mail->Host = 'mail.victorytaekwondo.id';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        
        $mail->Username = 'victoryopen2023@victorytaekwondo.id';
        $mail->Password = 'victoryopen2023';
        $mail->setFrom('victoryopen2023@victorytaekwondo.id', 'Victory Open 2023');
        $mail->addReplyTo($post['email'], $post['tim']);
        $mail->addAddress($post['email'], $post['tim']);
        $mail->Subject = 'Registrasi Tim';
        $mail->Body = $message;
        if ($mail->send()) {
            $status = "1";
            $this->clubModel->save([
                'nama_club' => $post['tim'],
                'email' => $post['email'],
                'manager' => $post['manager'],
                'coach' => $post['coach'],
                'wa' => $post['wa'],
                'jumlah_atlet' => $post['jumlah_atlet']
            ]);
        } else {
            $status = "0";
        }        
        echo json_encode([
            'status' => $status,
            'email' => $post['email']
        ]);  
    }

    public function simpanPeserta() {
        $post = $this->request->getVar();
        $file = $this->request->getFiles();  
        print_r($post);         
        date_default_timezone_set('UTC');
        $kyorugi = 0;
        $poomsaeIndividu = 0;
        $poomsaePair = 0;
        $poomsaeGroup = 0;
        $total = 0;
        $adult = ['6', '7', '13', '14', '20', '21', '27', '28'];
        for ($i = 0; $i < count($post['id']); $i++) {
            if ($post['category'][$i] == "kyorugi") {
                if (in_array($post['kelas'][$i], $adult)) {
                    $foto = time(). $file['foto'][$i]->getName();
                    $geup = time(). $file['geup'][$i]->getName();
                    $file['foto'][$i]->move('foto', $foto); 
                    $file['geup'][$i]->move('geup', $geup); 
                    $berat = str_replace(',', '.', trim($post['berat_badan'][$i]));
                    $this->userModel->save([
                        'nama_lengkap' => $post['nama'][$i],
                        'jk' => $post['jenis_kelamin'][$i],
                        'tanggal_lahir' => $post['tgl_lahir'][$i],
                        'photo' => $foto,     
                        'berat_badan' => $berat,                       
                        'geup' => $geup,
                        'club_id' => $post['tim']             
                    ]);
                    $userId = $this->userModel->getInsertID();
                } else {
                    $foto = time(). $file['foto'][$i]->getName();
                    $akte = time(). $file['akte'][$i]->getName();
                    $geup = time(). $file['geup'][$i]->getName();
                    $file['foto'][$i]->move('foto', $foto); 
                    $file['akte'][$i]->move('akte', $akte); 
                    $file['geup'][$i]->move('geup', $geup); 
                    $berat = str_replace(',', '.', trim($post['berat_badan'][$i]));
                    $this->userModel->save([
                        'nama_lengkap' => $post['nama'][$i],
                        'jk' => $post['jenis_kelamin'][$i],
                        'tanggal_lahir' => $post['tgl_lahir'][$i],
                        'photo' => $foto,     
                        'berat_badan' => $berat,   
                        'akte' => $akte,
                        'geup' => $geup,
                        'club_id' => $post['tim']             
                    ]);
                    $userId = $this->userModel->getInsertID();
                }

                $kyorugi = $kyorugi + 1;
                $data = [
                    'category_id' => $post['kelas'][$i],
                    'class_id' => '0',
                    'person' => $post['category'][$i],
                    'user_1' => $userId,
                ];

                $this->categoryModel->saveClass($data);
            } else {
                echo ($i);
                if ($post['person'][$i] == 'individual') {
                    if (in_array($post['kelas'][$i], $adult)) {
                        $foto = time(). $file['foto'][$i]->getName();
                        $geup = time(). $file['geup'][$i]->getName();
                        $file['foto'][$i]->move('foto', $foto); 
                        $file['geup'][$i]->move('geup', $geup);                 
                        $this->userModel->save([
                            'nama_lengkap' => $post['nama'][$i],
                            'jk' => $post['jenis_kelamin'][$i],
                            'tanggal_lahir' => $post['tgl_lahir'][$i],
                            'photo' => $foto,        
                            'geup' => $geup,
                            'club_id' => $post['tim']             
                        ]);
                        $userId = $this->userModel->getInsertID();
                    } else {
                        $foto = time(). $file['foto'][$i]->getName();
                        $akte = time(). $file['akte'][$i]->getName();
                        $geup = time(). $file['geup'][$i]->getName();
                        $file['foto'][$i]->move('foto', $foto); 
                        $file['akte'][$i]->move('akte', $akte); 
                        $file['geup'][$i]->move('geup', $geup);                 
                        $this->userModel->save([
                            'nama_lengkap' => $post['nama'][$i],
                            'jk' => $post['jenis_kelamin'][$i],
                            'tanggal_lahir' => $post['tgl_lahir'][$i],
                            'photo' => $foto,        
                            'akte' => $akte,
                            'geup' => $geup,
                            'club_id' => $post['tim']             
                        ]);
                        $userId = $this->userModel->getInsertID();
                    }
                    
                    $data = [
                        'category_id' => $post['kelas'][$i],
                        'class_id' => '0',
                        'person' => $post['person'][$i],
                        'user_1' => $userId,
                    ];
    
                    $this->categoryModel->saveClass($data);
                    $poomsaeIndividu = $poomsaeIndividu + 1;
                } elseif ($post['person'][$i] == 'pair') {
                    $userId = array();
                    if (in_array($post['kelas'][$i], $adult)) {
                        for ($j = 0; $j < 2; $j++) {
                            $foto = time(). $file['foto_pair'][$j]->getName();
                            $geup = time(). $file['geup_pair'][$j]->getName();
                            $file['foto_pair'][$j]->move('foto', $foto); 
                            $file['geup_pair'][$j]->move('geup', $geup);      
                            $this->userModel->save([
                                'nama_lengkap' => $post['nama_pair'][$j],
                                'jk' => $post['jenis_kelamin_pair'][$j],
                                'tanggal_lahir' => $post['tgl_lahir_pair'][$j],
                                'photo' => $foto,        
                                'geup' => $geup,
                                'club_id' => $post['tim']             
                            ]);
                            $userId[$j] = $this->userModel->getInsertID();                    
                        }
                    } else {
                        for ($j = 0; $j < 2; $j++) {
                            $foto = time(). $file['foto_pair'][$j]->getName();
                            $akte = time(). $file['akte_pair'][$j]->getName();
                            $geup = time(). $file['geup_pair'][$j]->getName();
                            $file['foto_pair'][$j]->move('foto', $foto); 
                            $file['akte_pair'][$j]->move('akte', $akte); 
                            $file['geup_pair'][$j]->move('geup', $geup);      
                            $this->userModel->save([
                                'nama_lengkap' => $post['nama_pair'][$j],
                                'jk' => $post['jenis_kelamin_pair'][$j],
                                'tanggal_lahir' => $post['tgl_lahir_pair'][$j],
                                'photo' => $foto,        
                                'akte' => $akte,
                                'geup' => $geup,
                                'club_id' => $post['tim']             
                            ]);
                            $userId[$j] = $this->userModel->getInsertID();                    
                        }
                    }
                    
                    
                    $data = [
                        'category_id' => $post['kelas'][$i],
                        'class_id' => '0',
                        'person' => $post['person'][$i],
                        'user_1' => $userId[0],
                        'user_2' => $userId[1],
                    ];
                    $this->categoryModel->saveClass($data);
                    $poomsaePair = $poomsaePair + 1;
                } else {
                    $userId = array();
                    if (in_array($post['kelas'][$i], $adult)) {
                        for ($j = 0; $j < 3; $j++) {
                            $foto = time(). $file['foto_group'][$j]->getName();
                            $geup = time(). $file['geup_group'][$j]->getName();
                            $file['foto_group'][$j]->move('foto', $foto); 
                            $file['geup_group'][$j]->move('geup', $geup);                  
                            $this->userModel->save([
                                'nama_lengkap' => $post['nama_group'][$j],
                                'jk' => $post['jenis_kelamin_group'][$j],
                                'tanggal_lahir' => $post['tgl_lahir_group'][$j],
                                'photo' => $foto,        
                                'geup' => $geup, 
                                'club_id' => $post['tim']             
                            ]);
                            $userId[$j] = $this->userModel->getInsertID();                    
                        }
                    } else {
                        for ($j = 0; $j < 3; $j++) {
                            $foto = time(). $file['foto_group'][$j]->getName();
                            $akte = time(). $file['akte_group'][$j]->getName();
                            $geup = time(). $file['geup_group'][$j]->getName();
                            $file['foto_group'][$j]->move('foto', $foto); 
                            $file['akte_group'][$j]->move('akte', $akte); 
                            $file['geup_group'][$j]->move('geup', $geup);                  
                            $this->userModel->save([
                                'nama_lengkap' => $post['nama_group'][$j],
                                'jk' => $post['jenis_kelamin_group'][$j],
                                'tanggal_lahir' => $post['tgl_lahir_group'][$j],
                                'photo' => $foto,        
                                'akte' => $akte,
                                'geup' => $geup, 
                                'club_id' => $post['tim']             
                            ]);
                            $userId[$j] = $this->userModel->getInsertID();                    
                        }
                    }
                    
                    $data = [
                        'category_id' => $post['kelas'][$i],
                        'class_id' => '0',
                        'person' => $post['person'][$i],
                        'user_1' => $userId[0],
                        'user_2' => $userId[1],
                        'user_3' => $userId[2]
                    ];
                    $this->categoryModel->saveClass($data);
                    $poomsaeGroup = $poomsaeGroup + 1;
                }
            }
        }
        $total = ($kyorugi * 350000) + ($poomsaeIndividu * 350000) + ($poomsaePair * 500000) + ($poomsaeGroup * 600000);
        $getTim = $this->clubModel->find($post['tim']);        
        $numbers = rand(1000, 9999);        
        $invoice = 'VO23-'.$numbers.'-'.$getTim['id'];    
        $this->categoryModel->saveInvoice($invoice, $getTim['id'], $total);    
        $message = "<html>";
        $message .= "<body>";
        $message .= "<p>Hai ".$getTim['nama_club'].",</p>";
        $message .= "<p>Terima kasih telah mendaftarkan atlet anda, datanya sudah masuk ke dalam sistem. Nantikan informasi selanjutnya dari kami yah.</p>";   
        $message .= "<p>Berkas-berkas persyaratan dapat di-unduh dan di-upload di web kami di <a href='https://victory-open.victorytaekwondo.id/' target='_blank'>victory-open.victorytaekwondo.id</a></p>";     
        $message .= "<html><body>";
        $message .= '<div style="margin: 0 100px 0 100px">';         
        $message .= '</div>';
        $message .= '<div style="text-align: -webkit-center; margin-top: 10px">';       
        $message .= '</div>';
        $message .= '<div style="background:#e0e0e0;padding:30px"><div style="box-shadow:5px 10px #888;position:relative;margin:0 auto;width:700px;background:#fff;border:1px solid;padding:10px">';
        $message .= '<div style="border-bottom:1px solid #eee;padding:20px 30px 0 30px;min-height:120px"><div style="float:left;height:60px;width:60px"><img src="https://victory-open.victorytaekwondo.id/assets/images/victory-open-small.png" style="width:150px"></div><div style="display:block;float:left;margin-left:20px"></div><div style="float:right"><h3 style="margin:0">INVOICE #'.$invoice.'</h3><small>Issued: '.date('M d, Y').'<br>Payment Due: Jan 31, 2023</small></div></div>';
        $message .= '<div style="border-bottom:1px solid #eee;padding:0 30px 30px 30px;min-height:220px"><div>';
        $message .= '<table style="width:100%;border-collapse:collapse"><thead><tr><th style="width:50%;text-align:center;font-size:12px;padding:5px;background:#eee">Kategori</th><th style="width:20%;text-align:center;font-size:12px;padding:5px;background:#eee">Jumlah</th><th style="width:30%;text-align:center;font-size:12px;padding:5px;background:#eee">Sub-total</th></tr></thead>';
        $message .= '<tbody>';
        if ($kyorugi > 0) {
            $message .= '<tr><td style="font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Kyorugi</td><td style="text-align:center;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">'.$kyorugi.'</td><td style="text-align:left;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Rp '.number_format(($kyorugi * 350000), 0).'</td></tr>';
        } 
        if ($poomsaeIndividu > 0) {
            $message .= '<tr><td style="font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Poomsae Individual</td><td style="text-align:center;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">'.$poomsaeIndividu.'</td><td style="text-align:left;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Rp '.number_format(($poomsaeIndividu * 350000), 0).'</td></tr>';            
        } 
        if ($poomsaePair > 0) {
            $message .= '<tr><td style="font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Poomsae Pair</td><td style="text-align:center;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">'.$poomsaePair.'</td><td style="text-align:left;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Rp '.number_format(($poomsaePair * 500000), 0).'</td></tr>';            
        } 
        if ($poomsaeGroup > 0) {
            $message .= '<tr><td style="font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Poomsae Group</td><td style="text-align:center;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">'.$poomsaeGroup.'</td><td style="text-align:left;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Rp '.number_format(($poomsaeGroup * 600000), 0).'</td></tr>';            
        } 
        $message .= '<tr><th style="text-align:center;font-size:12px;padding:5px;background:#eee"></th><th style="text-align:center;font-size:12px;padding:5px;background:#eee">Total</th><th style="text-align:left;font-size:12px;padding:5px;background:#eee">Rp '.number_format($total, 0).'</th></tr>';
        $message .= '</tbody>';
        $message .= '</table></div>';
        $message .= '<div style="margin-top:20px"><small style="text-justify">* Untuk konfirmasi pembayaran dapat hubungi 082216107484 (Azzahra) via WA dengan melampirkan bukti/slip pembayaran.</small></div>';
        $message .= '</div>';
        $message .= '</div></div>';
        
        $message .= "</body></html>";
        // end body
       
        
        echo ($message);
        // $mail = new PHPMailer;
        // $mail->isSMTP();
        // $mail->IsHTML(true);
        // $mail->Host = 'mail.victorytaekwondo.id';
        // $mail->Port = 587;
        // $mail->SMTPAuth = true;
        
        // $mail->Username = 'victoryopen2023@victorytaekwondo.id';
        // $mail->Password = 'victoryopen2023';
        // $mail->setFrom('victoryopen2023@victorytaekwondo.id', 'Victory Open 2023');
        // $mail->addReplyTo($getTim['email'], $getTim['nama_club']);
        // $mail->addAddress($getTim['email'], $getTim['nama_club']);
        // $mail->Subject = 'Registrasi Atlet';
        // $mail->Body = $message;
        // $mail->send();
        // return redirect()->route('/')->with('success', 'terima kasih');
    }

    public function submitPeserta() {
        $post = $this->request->getVar();
        print_r($post); 
        
        $kyorugi = $post['kyorugi'];
        $poomsaeIndividu = $post['individu'];
        $poomsaePair = $post['pair'];
        $poomsaeGroup = $post['group'];
        $total = ($kyorugi * 350000) + ($poomsaeIndividu * 350000) + ($poomsaePair * 500000) + ($poomsaeGroup * 600000);
        $getTim = $this->clubModel->find($post['tim']);        
        $numbers = rand(1000, 9999);        
        $invoice = 'VO23-'.$numbers.'-'.$getTim['id'];    
        $this->categoryModel->saveInvoice($invoice, $getTim['id'], $total);    
        $message = "<html>";
        $message .= "<body>";
        $message .= "<p>Hai ".$getTim['nama_club'].",</p>";
        $message .= "<p>Terima kasih telah mendaftarkan atlet anda, datanya sudah masuk ke dalam sistem. Nantikan informasi selanjutnya dari kami yah.</p>";   
        $message .= "<p>Berkas-berkas persyaratan dapat di-unduh dan di-upload di web kami di <a href='https://victory-open.victorytaekwondo.id/' target='_blank'>victory-open.victorytaekwondo.id</a></p>";     
        $message .= "<html><body>";
        $message .= '<div style="margin: 0 100px 0 100px">';         
        $message .= '</div>';
        $message .= '<div style="text-align: -webkit-center; margin-top: 10px">';       
        $message .= '</div>';
        $message .= '<div style="background:#e0e0e0;padding:30px"><div style="box-shadow:5px 10px #888;position:relative;margin:0 auto;width:700px;background:#fff;border:1px solid;padding:10px">';
        $message .= '<div style="border-bottom:1px solid #eee;padding:20px 30px 0 30px;min-height:120px"><div style="float:left;height:60px;width:60px"><img src="https://victory-open.victorytaekwondo.id/assets/images/victory-open-small.png" style="width:150px"></div><div style="display:block;float:left;margin-left:20px"></div><div style="float:right"><h3 style="margin:0">INVOICE #'.$invoice.'</h3><small>Issued: '.date('M d, Y').'<br>Payment Due: Jan 31, 2023</small></div></div>';
        $message .= '<div style="border-bottom:1px solid #eee;padding:0 30px 30px 30px;min-height:220px"><div>';
        $message .= '<table style="width:100%;border-collapse:collapse"><thead><tr><th style="width:50%;text-align:center;font-size:12px;padding:5px;background:#eee">Kategori</th><th style="width:20%;text-align:center;font-size:12px;padding:5px;background:#eee">Jumlah</th><th style="width:30%;text-align:center;font-size:12px;padding:5px;background:#eee">Sub-total</th></tr></thead>';
        $message .= '<tbody>';
        if ($kyorugi > 0) {
            $message .= '<tr><td style="font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Kyorugi</td><td style="text-align:center;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">'.$kyorugi.'</td><td style="text-align:left;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Rp '.number_format(($kyorugi * 350000), 0).'</td></tr>';
        } 
        if ($poomsaeIndividu > 0) {
            $message .= '<tr><td style="font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Poomsae Individual</td><td style="text-align:center;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">'.$poomsaeIndividu.'</td><td style="text-align:left;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Rp '.number_format(($poomsaeIndividu * 350000), 0).'</td></tr>';            
        } 
        if ($poomsaePair > 0) {
            $message .= '<tr><td style="font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Poomsae Pair</td><td style="text-align:center;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">'.$poomsaePair.'</td><td style="text-align:left;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Rp '.number_format(($poomsaePair * 500000), 0).'</td></tr>';            
        } 
        if ($poomsaeGroup > 0) {
            $message .= '<tr><td style="font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Poomsae Group</td><td style="text-align:center;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">'.$poomsaeGroup.'</td><td style="text-align:left;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Rp '.number_format(($poomsaeGroup * 600000), 0).'</td></tr>';            
        } 
        $message .= '<tr><th style="text-align:center;font-size:12px;padding:5px;background:#eee"></th><th style="text-align:center;font-size:12px;padding:5px;background:#eee">Total</th><th style="text-align:left;font-size:12px;padding:5px;background:#eee">Rp '.number_format($total, 0).'</th></tr>';
        $message .= '</tbody>';
        $message .= '</table></div>';
        $message .= '<div style="margin-top:20px"><small style="text-justify">* Untuk konfirmasi pembayaran dapat hubungi 082216107484 (Azzahra) via WA dengan melampirkan bukti/slip pembayaran.</small></div>';
        $message .= '</div>';
        $message .= '</div></div>';
        
        $message .= "</body></html>";
        // end body
        
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->IsHTML(true);
        $mail->Host = 'mail.victorytaekwondo.id';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        
        $mail->Username = 'victoryopen2023@victorytaekwondo.id';
        $mail->Password = 'victoryopen2023';
        $mail->setFrom('victoryopen2023@victorytaekwondo.id', 'Victory Open 2023');
        $mail->addReplyTo($getTim['email'], $getTim['nama_club']);
        $mail->addAddress($getTim['email'], $getTim['nama_club']);
        $mail->Subject = 'Registrasi Atlet';
        $mail->Body = $message;
        $mail->send();
    }

    public function testmail() {
        $message = "<html>";
        $message .= "<body>";
        $message .= "<p>Hai ,</p>";
        $message .= "<p>Terima kasih telah mendaftarkan atlet anda, datanya sudah masuk ke dalam sistem. Nantikan informasi selanjutnya dari kami yah.</p>";   
        $message .= "<p>Berkas-berkas persyaratan dapat di-unduh dab di-upload di web kami di <a href='https://victory-open.victorytaekwondo.id/' target='_blank'>victory-open.victorytaekwondo.id</a></p>";     
        $message .= "<html><body>";
        $message .= '<div style="margin: 0 100px 0 100px">';         
        $message .= '</div>';
        $message .= '<div style="text-align: -webkit-center; margin-top: 10px">';       
        $message .= '</div>';
        $message .= '<div style="background:#e0e0e0;padding:30px"><div style="box-shadow:5px 10px #888;position:relative;margin:0 auto;width:700px;background:#fff;border:1px solid;padding:10px">';
        $message .= '<div style="border-bottom:1px solid #eee;padding:20px 30px 0 30px;min-height:120px"><div style="float:left;height:60px;width:60px"><img src="https://victory-open.victorytaekwondo.id/assets/images/victory-open-small.png" style="width:150px"></div><div style="display:block;float:left;margin-left:20px"></div><div style="float:right"><h2 style="margin:0">INVOICE #1069</h2><small>Issued: May 27, 2015<br>Payment Due: Jan 31, 2023</small></div></div>';
        $message .= '<div style="border-bottom:1px solid #eee;padding:0 30px 30px 30px;min-height:220px"><div>';
        $message .= '<table style="width:100%;border-collapse:collapse"><thead><tr><th style="width:50%;text-align:center;font-size:12px;padding:5px;background:#eee">Kategori</th><th style="width:20%;text-align:center;font-size:12px;padding:5px;background:#eee">Jumlah</th><th style="width:30%;text-align:center;font-size:12px;padding:5px;background:#eee">Sub-total</th></tr></thead>';
        $message .= '<tbody>';
        for ($i = 0; $i < count($post['id']); $i++) {
            $message .= '<tr><td style="font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">1</td><td style="text-align:center;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">1</td><td style="text-align:left;font-size:12px;padding:5px 0 5px 5px;border:1px solid #eee">Rp 213213</td></tr>';
        }
        $message .= '<tr><th style="text-align:center;font-size:12px;padding:5px;background:#eee"></th><th style="text-align:center;font-size:12px;padding:5px;background:#eee">Total</th><th style="text-align:left;font-size:12px;padding:5px;background:#eee">Rp 1231231</th></tr>';
        $message .= '</tbody>';
        $message .= '</table></div>';
        $message .= '<div style="margin-top:20px"><small><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.</small></div>';
        $message .= '</div>';
        $message .= '</div></div>';
        
        $message .= "</body></html>";
        // end body
        echo ($message);
        // $mail = new PHPMailer;
        // $mail->isSMTP();
        // $mail->SMTPDebug = 2;
        // $mail->IsHTML(true);
        // $mail->Host = 'mail.victorytaekwondo.id';
        // $mail->Port = 587;
        // $mail->SMTPAuth = true;
        
        // $mail->Username = 'victoryopen2023@victorytaekwondo.id';
        // $mail->Password = 'victoryopen2023';
        // $mail->setFrom('victoryopen2023@victorytaekwondo.id', 'Victory Open 2023');        
        // $mail->addReplyTo("pangestur11@gmail.com", "wlwkkwk");
        // $mail->addAddress("pangestur11@gmail.com", "wlwkkwk");
        // $mail->Subject = 'Registrasi Atlet';
        // $mail->Body = $message;
        // $mail->send();
    }

}
