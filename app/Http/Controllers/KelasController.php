<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class KelasController extends Controller
{ 
    public function getDataKelas(){
        $ambildata= DB::table('kelas')->get();

        if($ambildata){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["User" => "Franklin David Hengkengbala",
                                    "Nim" => "72200407",
                                    "DataKelas" =>$ambildata],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401
        );          
        }
    }

    public function getDataKelasToken(){
        $token = Str::random(60);
        $hash_token = hash('sha256', $token);
        //$print_r($token);
        $ambildata= DB::table('kelas')->get();

        if($ambildata){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["User" => "Franklin David Hengkengbala",
                                    "Nim" => "72200407",
                                    "DataKelas" =>$ambildata],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401
        );          
        }
    }

    public function getDataKelasById($idkelas){
        $ambildata= DB::table('kelas')
        ->where('id_kelas', $idkelas)
        ->get();

        if($ambildata){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json($ambildata,200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401
        );     
        }
    }

    public function getDataGuru()
    {
        $guru = DB::table('guru')->get();

        if($guru){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["succes" => true,
                                    "message" => "Berhasil",
                                    "DataGuru" =>$guru],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401);           
        }
    }

    public function getDataGuruToken()
    {
        $token = Str::random(60);
        $hash_token = hash('sha256', $token);
        $guru = DB::table('guru')->get();

        if($guru){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["succes" => true,
                                    "message" => "Berhasil",
                                    "DataGuru" =>$guru],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401);           
        }
    }

    public function insertDataGuru(Request $request)
    {
        DB::table('guru')->insert([
            'rfid' => $request->rfid,
            'nip' => $request->nip,
            'nama_guru' => $request->nama_guru,
            'alamat' => $request->alamat,
            'status_guru' => $request->status_guru,
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }
    
    public function updateDataGuru(Request $request){
        DB::table('guru')->where('id_guru', $request->input('id_guru'))->update([
            'rfid' => $request->input('rfid'),
            'nip' => $request->input('rfid'),
            'nama_guru' => $request->input('nama_guru'),
            'alamat' => $request->input('alamat'),
            'status_guru' => $request->input('status_guru'),
            
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function deleteDataGuru(Request $request){
        DB::table('guru')->where('id_guru', $request->input('id_guru'))->delete([
            'rfid' => $request->input('rfid'),
            'nip' => $request->input('rfid'),
            'nama_guru' => $request->input('nama_guru'),
            'alamat' => $request->input('alamat'),
            'status_guru' => $request->input('status_guru'),
            
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function deleteDataGurubyId($id){
        DB::table('guru')->where('id_guru', $id)->delete();
        
        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function getDataJadwalGuru()
    {
        $jadwalguru = DB::table('jadwal')->get();

        if($jadwalguru){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["succes" => true,
                                    "message" => "Berhasil",
                                    "DataGuru" =>$jadwalguru],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401);           
        }
    }

    public function getDataJadwalGuruToken()
    {
        $token = Str::random(60);
        $hash_token = hash('sha256', $token);
        $jadwalguru = DB::table('jadwal')->get();

        if($jadwalguru){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["succes" => true,
                                    "message" => "Berhasil",
                                    "DataGuru" =>$jadwalguru],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401);           
        }
    }

    public function insertDataJadwalGuru(Request $request)
    {
        DB::table('jadwal')->insert([
            'hari' => $request->hari,
            'jammulai' => $request->jammulai,
            'jamselesai' => $request->jamselesai,
            'kodemk' => $request->kodemk,
            'grup' => $request->grup,
            'nik' => $request->nik,
            'ruang' => $request->ruang,
            
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function updateJadwalDataGuru(Request $request){
        DB::table('guru')->where('jadwalid', $request->input('jadwalid'))->update([
            'hari' => $request->input('hari'),
            'jammulai' => $request->input('jammulai'),
            'jamselesai' => $request->input('jamselesai'),
            'kodemk' => $request->input('kodemk'),
            'grup' => $request->input('grup'),
            'nik' => $request->input('nik'),
            'ruang' => $request->input('ruang'),
            
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function deleteDataJadwalGurubyId($id){
        DB::table('jadwal')->where('jadwalid', $id)->delete();
        
        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function getDataPresensiHarian()
    {
        $presensi = DB::table('presensi_harian')->get();

        if($presensi){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["succes" => true,
                                    "message" => "Berhasil",
                                    "DataGuru" =>$presensi],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401);           
        }
    }

    public function getDataPresensiHarianToken()
    {
        $token = Str::random(60);
        $hash_token = hash('sha256', $token);
        $presensi = DB::table('presensi_harian')->get();

        if($presensi){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["succes" => true,
                                    "message" => "Berhasil",
                                    "DataGuru" =>$presensi],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401);           
        }
    }

    public function insertDataPresensiHarian(Request $request)
    {
        DB::table('presensi_harian')->insert([
            'tahun_akademik' => $request->tahun_akademik,
            'semester' => $request->semester,
            'tanggal' => $request->tanggal,
            'hari' => $request->hari,
            'id_guru' => $request->id_guru,
            'jam_masuk' => $request->jam_masuk,
            'jam_pulang' => $request->jam_pulang,
            'metode' => $request->metode,
            'keterangan' => $request->keterangan,
            
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function updateDataPresensiHarian(Request $request){
        DB::table('presensi_harian')->where('id_presensi_harian', $request->input('id_presensi_harian'))->update([
            'tahun_akademik' => $request->input('tahun_akademik'),
            'semester' => $request->input('semester'),
            'tanggal' => $request->input('tanggal'),
            'hari' => $request->input('hari'),
            'id_guru' => $request->input('id_guru'),
            'jam_masuk' => $request->input('jam_masuk'),
            'jam_pulang' => $request->input('jam_pulang'),
            'metode' => $request->input('metode'),
            'keterangan' => $request->input('keterangan'),
            
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function deleteDataPresensiHarianbyId($id){
        DB::table('id_presensi_harian')->where('id_presensi_harian', $id)->delete();
        
        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function getDataPresensiMengajar()
    {
        $presensi = DB::table('presensi_mengajar')->get();

        if($presensi){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["succes" => true,
                                    "message" => "Berhasil",
                                    "DataGuru" =>$presensi],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401);           
        }
    }

    public function getDataPresensiMengajarToken()
    {
        $token = Str::random(60);
        $hash_token = hash('sha256', $token);
        $presensi = DB::table('presensi_mengajar')->get();

        if($presensi){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["succes" => true,
                                    "message" => "Berhasil",
                                    "DataGuru" =>$presensi],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401);           
        }
    }

    public function insertDataPresensiMengajar(Request $request)
    {
        DB::table('presensi_mengajar')->insert([
            'id_jadwal_guru' => $request->id_jadwal_guru,
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'metode' => $request->metode,
            'keterangan' => $request->keterangan,
            
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function updateDataPresensiMengajar(Request $request){
        DB::table('presensi_mengajar')->where('id_presensi_mengajar', $request->input('id_presensi_mengajar'))->update([
            'id_jadwal_guru' => $request->input('id_jadwal_guru'),
            'tanggal' => $request->input('tanggal'),
            'jam_mulai' => $request->input('jam_mulai'),
            'jam_selesai' => $request->input('jam_selesai'),
            'metode' => $request->input('metode'),
            'keterangan' => $request->input('keterangan'),
            
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function deleteDataPresensiMengajarbyId($id){
        DB::table('id_presensi_mengajar')->where('id_presensi_mengajar', $id)->delete();
        
        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }
    
    #####################
    public function getDataMapel()
    {
        $mapel = DB::table('mapel')->get();

        if($mapel){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["succes" => true,
                                    "message" => "Berhasil",
                                    "DataGuru" =>$presensi],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401);           
        }
    }

    public function getDataPresensiMapelToken()
    {
        $token = Str::random(60);
        $hash_token = hash('sha256', $token);
        $mapel = DB::table('presensi_mengajar')->get();

        if($mapel){
            // return response()->json(["Result"=>
            //         ["ResultCode"=>1,
            //         "ResultMessage"=>"Success Login" ],
            //         "DataUser"=>$ambildata],200
            //         ;)
            return response()->json(["succes" => true,
                                    "message" => "Berhasil",
                                    "DataGuru" =>$mapel],200);
        }else{
            return response()->json(["Result"=>
                ["ResultCode"=>0,
                "ResultMessage"=>"User atau Password salah"]],401);           
        }
    }

    public function insertDataMapel(Request $request)
    {
        DB::table('presensi_mengajar')->insert([
            'id_mapel' => $request->id_mapel,
            'nama_mapel' => $request->nama_mapel,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function updateDataMapel(Request $request){
        DB::table('mapel')->where('id_mapel', $request->input('id_mapel'))->update([
            'nama_mapel' => $request->input('nama_mapel'),
            'deskripsi' => $request->input('deskripsi'),
            
        ]);

        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }

    public function deleteDataMapelbyId($id){
        DB::table('mapel')->where('id_mapel', $id)->delete();
        
        return response()->json(
            ["Result"=>
            ["ResultCode"=> 0,
             "ResultMessage"=>"Sukses"
             ]
        ], 200
    );
    }
}