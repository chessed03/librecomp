<div>

    <div class="row justify-content-between">

        <h4 class="header-title mb-3">Proveedor</h4>

        @if( !$form )
            <button type="button" class="btn btn-success btn-rounded waves-effect" wire:click.prevent="storeProvider()" wire:loading.attr="disabled">
                <span wire:loading.remove wire:target="storeProvider"><i class="bx bx-fw bxs-plus-circle bx-xs"></i> Guardar proveedor</span>
                <span wire:loading wire:target="storeProvider"><i class='bx bx-fw bx-radio-circle bx-burst'></i> Procesando...</span>
            </button>
        @else
            <button type="button" class="btn btn-outline-success btn-rounded waves-effect">
                <span><i class="bx bx-fw bx-check-circle bx-xs"></i> Guardado</span>
            </button>
        @endif

    </div>

    <form>

        <div class="row">
            <div class="form-group col-3">
                <label for="providerName">Nombre</label>
                <input wire:model="providerName" id="providerName" type="text" class="form-control">
                @error('providerName') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-3">
                <label for="providerSurname">Apellidos</label>
                <input wire:model="providerSurname" id="providerSurname" type="text" class="form-control">
                @error('providerSurname') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-6">
                <label for="providerCompany">Empresa</label>
                <input wire:model="providerCompany" id="providerCompany" type="text" class="form-control">
                @error('providerCompany') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-4">
                <label for="providerAddress">Dirección</label>
                <input wire:model="providerAddress" id="providerAddress" type="text" class="form-control">
                @error('providerAddress') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-4">
                <label for="providerPhone">Telefono</label>
                <input wire:model="providerPhone" id="providerPhone" type="text" class="form-control">
                @error('providerPhone') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-4">
                <label for="providerEmail">Correo</label>
                <input wire:model="providerEmail" id="providerEmail" type="text" class="form-control">
                @error('providerEmail') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

    </form>

</div>
