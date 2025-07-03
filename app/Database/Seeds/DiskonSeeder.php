<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('diskon');

        $tanggalMulai = strtotime('2025-06-25');
        $createdAt = '2025-06-25 06:01:35';

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'tanggal'    => date('Y-m-d', strtotime("+$i day", $tanggalMulai)),
                'nominal'    => 100000 + ($i % 3) * 100000, // 100000, 200000, 300000 ulang
                'created_at' => $createdAt,
                'updated_at' => null
            ];

            $builder->insert($data);
        }
    }
}
