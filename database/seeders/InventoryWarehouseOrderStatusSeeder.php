<?php

namespace Database\Seeders;

use App\Models\Inventory\InventoryWarehouseOrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryWarehouseOrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        InventoryWarehouseOrderStatus::create(['title'=>'Aberto', 'filter'=>'aberto' ]);
        InventoryWarehouseOrderStatus::create(['title'=>'Separação', 'filter'=>'separação' ]);
        InventoryWarehouseOrderStatus::create(['title'=>'Em Trânsito', 'filter'=>'em trânsito' ]);
        InventoryWarehouseOrderStatus::create(['title'=>'Recebido', 'filter'=>'Recebido' ]);
        InventoryWarehouseOrderStatus::create(['title'=>'Cancelado', 'filter'=>'Cancelado' ]);
    }
}
