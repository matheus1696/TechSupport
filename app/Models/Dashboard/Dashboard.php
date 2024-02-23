<?php

namespace App\Models\Dashboard;

use App\Models\Company\CompanyFinancialBlocksModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;    

    protected $fillable = [
        'title',
        'link_mobile',
        'link_desktop',
        'status',
        'financial_block_id',
    ];

    public function FinancialBlocks(){
        return $this->belongsTo(CompanyFinancialBlocksModel::class,'financial_block_id','id');
    }
}
