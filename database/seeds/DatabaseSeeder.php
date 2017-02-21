<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Authenticatable::unguard();

		// $this->call('UserTableSeeder');
		$this->call('AdminTableSeeder');
    }
}
