<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $table      = 'providers';

    protected $primaryKey = 'idProvider';

    public function createNewItem( $items )
    {

        $result = null;

        $item = new self;

        $item->providerName    = $items->providerName;
        $item->providerSurname = $items->providerSurname;
        $item->providerCompany = $items->providerCompany;
        $item->providerAddress = $items->providerAddress;
        $item->providerPhone   = $items->providerPhone;
        $item->providerEmail   = $items->providerEmail;

        $item->providerCreatedBy   = 'root-name';

        if( $item->save() ) {

            $result = $item->idProvider;

        }

        return $result;

    }

}
