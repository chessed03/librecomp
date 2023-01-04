<?php

namespace App\Http\Livewire\Components;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{

    public $data         = null;

    protected $listeners = ['data'];

    public $contactName, $contactPhone, $contactWhatsApp;

    public function render()
    {

        $contacts = [];

        if ( $this->data ) {

            $contacts = Contact::getContactsActives( $this->data );

        }

        return view('livewire.components.contact-create', [
            'contacts' => $contacts
        ]);

    }

    private function resetInput()
    {

        $this->contactName     = null;
        $this->contactPhone    = null;
        $this->contactWhatsApp = null;

    }

    public function data( $data )
    {
        $this->data = $data;
    }

    public function storeContact()
    {
        $this->validate([
            'contactName'     => 'required',
            'contactPhone'    => 'required',
            'contactWhatsApp' => 'required'
        ]);

        $items = (object)[
            'idProvider'      => $this->data,
            'contactName'     => $this->contactName,
            'contactPhone'    => $this->contactPhone,
            'contactWhatsApp' => $this->contactWhatsApp
        ];

        Contact::createNewItem( $items );

        $this->resetInput();
        $this->hydrate();

    }


}
