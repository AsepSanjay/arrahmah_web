<?php

use Illuminate\Database\Seeder;

use App\admin;
use App\RoleAdmin as Role;
use App\jenis_kegiatan;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root = new admin;
        $root->nama = "Asep Sanjaya";
        $root->tempat_lahir = "Jakarta";
        $root->tanggal_lahir = "10 Juni 1999";
        $root->jenis_kelamin = "Laki-laki";
        $root->alamat = "Jalan Buah";
        $root->email = "sanjayaasep77@gmail.com";
        $root->password = bcrypt('ayey332211');
        $root->no_telp = "0896874673278";
        $root->foto_profile = "1.jpg";
        $root->role_id = 1; 
        $root->save();

        $role1 = new Role;
        $role1->id = 1;
        $role1->role_name = "superadmin";
        $role1->save();

        $role2 = new Role;
        $role2->id = 2;
        $role2->role_name = "admin";
        $role2->save(); 

        $event = new jenis_kegiatan;
        $event->id = 1;
        $event->nama_keg = "Pengajian Rutin Jum'at";
        $event->save();

        $event = new jenis_kegiatan;
        $event->id = 2;
        $event->nama_keg = "Pengajian Rutin Ahad";
        $event->save();

        $event = new jenis_kegiatan;
        $event->id = 3;
        $event->nama_keg = "Hari Besar Islam";
        $event->save();

        $event = new jenis_kegiatan;
        $event->id = 4;
        $event->nama_keg = "Lainnya";
        $event->save();

        
        
    }

}