<div>

    @if( $data )
        <div class="row justify-content-between">

            <h4 class="header-title mb-3">Contactos</h4>

        </div>

        <div class="row">
            @foreach( $contacts as $contact )
                <div class="col-10">
                    <div class="row">

                        <div class="form-group col-4">
                            <label for="contactName">Nombre</label>
                            <input type="text" class="form-control" value="{{ $contact->contactName }}">

                        </div>

                        <div class="form-group col-4">
                            <label for="contactPhone">Telefono</label>
                            <input type="text" class="form-control" value="{{ $contact->contactPhone }}">

                        </div>

                        <div class="form-group col-4">
                            <label for="contactWhatsApp">WhatsApp</label>
                            <input type="text" class="form-control" value="{{ $contact->contactWhatsApp }}">

                        </div>

                    </div>
                </div>

                <div class="form-group col-2">
                    <label>&nbsp;</label>
                    <button type="button" class="btn btn-outline-success btn-rounded waves-effect mt-3">
                        <span><i class="bx bx-fw bx-check-circle bx-xs"></i> Guardado</span>
                    </button>
                </div>
            @endforeach
        </div>


        <div class="row">

            <div class="col-10">
                <form>

                    <div class="row">

                        <div class="form-group col-4">
                            <label for="contactName">Nombre</label>
                            <input wire:model="contactName" id="contactName" type="text" class="form-control">
                            @error('contactName') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group col-4">
                            <label for="contactPhone">Telefono</label>
                            <input wire:model="contactPhone" id="contactPhone" type="text" class="form-control">
                            @error('contactPhone') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group col-4">
                            <label for="contactWhatsApp">WhatsApp</label>
                            <input wire:model="contactWhatsApp" id="contactWhatsApp" type="text" class="form-control">
                            @error('contactWhatsApp') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                    </div>

                </form>
            </div>

            <div class="form-group col-2">
                <label>&nbsp;</label>
                <button type="button" class="btn btn-success btn-rounded waves-effect mt-3" wire:click.prevent="storeContact()" wire:loading.attr="disabled">
                    <span wire:loading.remove wire:target="storeContact"><i class="bx bx-fw bxs-plus-circle bx-xs"></i> Guardar contacto</span>
                    <span wire:loading wire:target="storeContact"><i class='bx bx-fw bx-radio-circle bx-burst'></i> Procesando...</span>
                </button>
            </div>

        </div>

    @endif

</div>
