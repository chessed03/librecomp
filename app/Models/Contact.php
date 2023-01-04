<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    use HasFactory;

    protected $table      = 'contacts';

    protected $primaryKey = 'idContact';

    public function createNewItem( $items )
    {

        $result = null;

        $item = new self;

        $item->idProvider      = $items->idProvider;
        $item->contactName     = $items->contactName;
        $item->contactPhone    = $items->contactPhone;
        $item->contactWhatsApp = $items->contactWhatsApp;

        $item->contactCreatedBy   = 'root-name';

        if( $item->save() ) {

            $result = $item;

        }

        return $result;

    }

    public function getContactsActives( $idProvider )
    {

        $result = null;

        if ( $idProvider ) {

            $query = DB::table('contacts')
                ->whereRaw('contactStatus = 1')
                ->whereRaw('idProvider = "' . $idProvider . '"');

            $result = $query->get();

        }

        return $result;

    }

}
