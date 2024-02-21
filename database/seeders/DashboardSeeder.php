<?php

namespace Database\Seeders;

use App\Models\Dashboard\Dashboard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dashboard::create([
            'title'=>'Acompanhamento Campo de Estágio',
            'link_mobile'=>'https://app.powerbi.com/view?r=eyJrIjoiOTAxNDg4NDItNmYzMy00NDY1LTllZmYtNTRmY2Q4YmYyNTM4IiwidCI6ImJmZTdkZjI2LTgxM2UtNGU3Yy1iOGQxLThmZTdjOWIzZjlmZiJ9',
            'link_desktop'=>'https://app.powerbi.com/view?r=eyJrIjoiY2I4YTRhN2MtMjU0MC00ZDg4LTg2ODAtMDQ1ZGU4NjVhY2JkIiwidCI6ImJmZTdkZjI2LTgxM2UtNGU3Yy1iOGQxLThmZTdjOWIzZjlmZiJ9',
            'financial_block_id'=>1,
        ]);

        Dashboard::create([
            'title'=>'Atendimentos UPAs',
            'link_desktop'=>'https://app.powerbi.com/view?r=eyJrIjoiMzg1YjAzM2ItYTZiOS00N2YzLWI2NmMtOTk5ZDU1MWYwMzQ3IiwidCI6ImJmZTdkZjI2LTgxM2UtNGU3Yy1iOGQxLThmZTdjOWIzZjlmZiJ9',
            'financial_block_id'=>2,
        ]);
    }
}
