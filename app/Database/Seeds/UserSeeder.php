<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'asidsolihhadin',
                'password' => password_hash('asid1970', PASSWORD_DEFAULT),
            ],
            [
                'username' => 'linaitb',
                'password' => password_hash('linaitb123', PASSWORD_DEFAULT),
            ],
        ];


        $this->db->table('user')->insertBatch($data);
    }
}
