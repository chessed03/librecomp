<?php

namespace App\Http\Livewire\Components;

use App\Models\Provider;
use Livewire\Component;

class ProviderCreate extends Component
{
    public $form = false;

    public $data = null;

    public $providerName, $providerSurname, $providerCompany, $providerAddress, $providerPhone, $providerEmail;

    public function render()
    {
        return view('livewire.components.provider-create');
    }

    public function storeProvider()
    {
        $this->validate([
            'providerName'    => 'required',
            'providerSurname' => 'required',
            'providerCompany' => 'required',
            'providerAddress' => 'required',
            'providerPhone'   => 'required',
            'providerEmail'   => 'required'
        ]);

        $items = (object)[
            'providerName'    => $this->providerName,
            'providerSurname' => $this->providerSurname,
            'providerCompany' => $this->providerCompany,
            'providerAddress' => $this->providerAddress,
            'providerPhone'   => $this->providerPhone,
            'providerEmail'   => $this->providerEmail
        ];



        $this->data = Provider::createNewItem( $items );

        if( $this->data ) {

            $this->form = true;

            $this->emit('data', $this->data);

        }

    }

}
