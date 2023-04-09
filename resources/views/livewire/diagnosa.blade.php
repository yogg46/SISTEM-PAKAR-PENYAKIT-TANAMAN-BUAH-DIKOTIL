<div>
    <form>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Mulai Diagnosa Tanaman </h3>
                <button type="button" wire:click.prevent="add({{ $i }})"
                    class="btn rounded-pill btn-alt-success me-1 mb-3">
                    <i class="fa fa-fw fa-plus me-1"></i> Tambah Tanaman
                </button>
                <button type="button" class="btn rounded-pill  btn-alt-success me-1 mb-3" wire:click.prevent="store()">
                    <i class="fa fa-fw fa-rotate me-1"></i> Mulai Diagnosa
                </button>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                {{-- @foreach ($inputs as $key => $value) --}}
                <div class="row push">
                    <div class="col-lg-12 col-xl-12">
                        <div class="mb-1">
                            <label class="form-label">Jenis Tanaman </label>
                            <div class="row space-y-2">
                                <div class="col space-y-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Mangga"
                                            wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                        <label class="form-check-label" for="example-radios-default1">Mangga</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Alpukat"
                                            wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                        <label class="form-check-label" for="example-radios-default2">Alpukat</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Rambutan"
                                            wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                        <label class="form-check-label" for="example-radios-default3">Rambutan</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Nangka"
                                            wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                        <label class="form-check-label" for="example-radios-default3">Nangka</label>
                                    </div>


                                </div>
                                <div class="col space-y-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Durian"
                                            wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                        <label class="form-check-label" for="example-radios-default3">Durian</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Anggur"
                                            wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                        <label class="form-check-label" for="example-radios-default3">Anggur</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Kelengkeng"
                                            wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                        <label class="form-check-label" for="example-radios-default3">Kelengkeng</label>
                                    </div>
                                </div>
                                <div class="col space-y-2">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Jambu Biji"
                                            wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                        <label class="form-check-label" for="example-radios-default3">Jambu Biji</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Jeruk"
                                            wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                        <label class="form-check-label" for="example-radios-default3">Jeruk</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Sawo"
                                            wire:model="jnsTanaman.0" wire:click="showBagian(0)">
                                        <label class="form-check-label" for="example-radios-default3">Sawo</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($showBGN == 'true')
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-1">
                                <label class="form-label">Bagian Tanaman </label>
                                <div class=" row space-y-2">
                                    <div class="col space-y-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Buah"
                                                wire:model="bgnTanaman.0" wire:click="showGejala(0)">
                                            <label class="form-check-label"
                                                for="example-radios-default11">Buah</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Batang"
                                                wire:model="bgnTanaman.0" wire:click="showGejala(0)">
                                            <label class="form-check-label"
                                                for="example-radios-default12">Batang</label>
                                        </div>
                                    </div>
                                    <div class="col space-y-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Akar"
                                                wire:model="bgnTanaman.0" wire:click="showGejala(0)">
                                            <label class="form-check-label"
                                                for="example-radios-default13">Akar</label>
                                        </div>
                                    </div>
                                    <div class="col space-y-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Daun"
                                                wire:model="bgnTanaman.0" wire:click="showGejala(0)">
                                            <label class="form-check-label" for="example-radios-default3">Daun</label>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- <div class="col-lg-12 col-xl-12">
                <div class="mb-4">
                    <label class="form-label">Jamur Tanaman Buah</label>
                    <div class="space-y-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value=""
                                id="example-checkbox-default1" name="example-checkbox-default1">
                            <label class="form-check-label" for="example-checkbox-default1">Option 1</label>
                        </div>
                    </div>
                </div>
            </div> --}}
                @if ($showGJL == 'true')

                    <div class="col-lg-12 col-xl-12">
                        <div class="mb-5">
                            <label class="form-label">Pilih Gejala </label>

                            @php
                                $no = 0;
                            @endphp
                            @foreach ($gejala as $key)
                                <div class="space-y-2">
                                    <div class="col">
                                        @if (isset($jnsTanaman[0]) && isset($bgnTanaman[0]))
                                            @if ($key->Buah == $jnsTanaman[0] && $key->Bagian == $bgnTanaman[0])
                                                <div class="form-check d-flex align-items-center">
                                                    <div>
                                                        <input class="form-check-input"
                                                            name="option{{ $key->id }}" type="checkbox"
                                                            id="option{{ $key->id }}" value="{{ $key->id }}"
                                                            wire:model="gjlTanaman.0.{{ $no++ }}">
                                                    </div>
                                                    <div class="p-1">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-xl-4">
                                                                <img class="img-thumbnail m-2 " width="100px"
                                                                    src="{{ is_null($key->DetailPenyakitToGejala->gambarGejala) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->DetailPenyakitToGejala->gambarGejala) }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-12">
                                                                <label class="form-check-label"
                                                                    for="option{{ $key->id }}">
                                                                    <p>

                                                                        {{ $key->DetailPenyakitToGejala->namaGejala }}
                                                                    </p>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    </div>

                                </div>
                            @endforeach


                        </div>
                    </div>
                @endif
                {{-- @endforeach --}}

                <div class="flex d-flex justify-between justify-content-between">


                </div>

            </div>

        </div>

        @foreach ($inputs as $key => $value)
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Mulai Diagnosa Tanaman </h3>
                    <button type="button" wire:click.prevent="remove({{ $key }})"
                        class="btn rounded-pill btn-alt-danger me-1 mb-3">
                        <i class="fa fa-fw fa-trash me-1"></i> Delete
                    </button>

                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <div class="row push">
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-1">
                                <label class="form-label">Jenis Tanaman </label>
                                <div class="row space-y-2">
                                    <div class="col space-y-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Mangga"
                                                wire:model="jnsTanaman.{{ $value }}"
                                                wire:click="showBagian({{ $value }})">
                                            <label class="form-check-label"
                                                for="example-radios-default1">Mangga</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Alpukat"
                                                wire:model="jnsTanaman.{{ $value }}"
                                                wire:click="showBagian({{ $value }})">
                                            <label class="form-check-label"
                                                for="example-radios-default2">Alpukat</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Rambutan"
                                                wire:model="jnsTanaman.{{ $value }}"
                                                wire:click="showBagian({{ $value }})">
                                            <label class="form-check-label"
                                                for="example-radios-default3">Rambutan</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Nangka"
                                                wire:model="jnsTanaman.{{ $value }}"
                                                wire:click="showBagian({{ $value }})">
                                            <label class="form-check-label"
                                                for="example-radios-default3">Nangka</label>
                                        </div>


                                    </div>
                                    <div class="col space-y-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Durian"
                                                wire:model="jnsTanaman.{{ $value }}"
                                                wire:click="showBagian({{ $value }})">
                                            <label class="form-check-label"
                                                for="example-radios-default3">Durian</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Anggur"
                                                wire:model="jnsTanaman.{{ $value }}"
                                                wire:click="showBagian({{ $value }})">
                                            <label class="form-check-label"
                                                for="example-radios-default3">Anggur</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Kelengkeng"
                                                wire:model="jnsTanaman.{{ $value }}"
                                                wire:click="showBagian({{ $value }})">
                                            <label class="form-check-label"
                                                for="example-radios-default3">Kelengkeng</label>
                                        </div>
                                    </div>
                                    <div class="col space-y-2">

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Jambu Biji"
                                                wire:model="jnsTanaman.{{ $value }}"
                                                wire:click="showBagian({{ $value }})">
                                            <label class="form-check-label" for="example-radios-default3">Jambu
                                                Biji</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Jeruk"
                                                wire:model="jnsTanaman.{{ $value }}"
                                                wire:click="showBagian({{ $value }})">
                                            <label class="form-check-label"
                                                for="example-radios-default3">Jeruk</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Sawo"
                                                wire:model="jnsTanaman.{{ $value }}"
                                                wire:click="showBagian({{ $value }})">
                                            <label class="form-check-label" for="example-radios-default3">Sawo</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($showBGN == 'true')
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="mb-1">
                                    <label class="form-label">Bagian Tanaman </label>
                                    <div class=" row space-y-2">
                                        <div class="col space-y-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Buah"
                                                    wire:model="bgnTanaman.{{ $value }}"
                                                    wire:click="showGejala({{ $value }})">
                                                <label class="form-check-label"
                                                    for="example-radios-default11">Buah</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Batang"
                                                    wire:model="bgnTanaman.{{ $value }}"
                                                    wire:click="showGejala({{ $value }})">
                                                <label class="form-check-label"
                                                    for="example-radios-default12">Batang</label>
                                            </div>
                                        </div>
                                        <div class="col space-y-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Akar"
                                                    wire:model="bgnTanaman.{{ $value }}"
                                                    wire:click="showGejala({{ $value }})">
                                                <label class="form-check-label"
                                                    for="example-radios-default13">Akar</label>
                                            </div>
                                        </div>
                                        <div class="col space-y-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Daun"
                                                    wire:model="bgnTanaman.{{ $value }}"
                                                    wire:click="showGejala({{ $value }})">
                                                <label class="form-check-label"
                                                    for="example-radios-default3">Daun</label>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    @if ($showGJL == 'true')
                        <div class="col-lg-12 col-xl-12">
                            <div class="mb-5">
                                <label class="form-label">Pilih Gejala </label>
                                @php
                                    $no = 0;
                                @endphp
                                 @foreach ($gejala as $key)
                                 <div class="space-y-2">
                                     <div class="col">
                                        @if (isset($jnsTanaman[$value]) && isset($bgnTanaman[$value]))
                                        @if ($key->Buah == $jnsTanaman[$value] && $key->Bagian == $bgnTanaman[$value])
                                                 <div class="form-check d-flex align-items-center">
                                                     <div>
                                                         <input class="form-check-input"
                                                             name="option{{ $key->id }}" type="checkbox"
                                                             id="option{{ $key->id }}" value="{{ $key->id }}"
                                                             wire:model="gjlTanaman.{{ $value }}.{{ $no++ }}">
                                                     </div>
                                                     <div class="p-1">
                                                         <div class="row">
                                                             <div class="col-lg-4 col-xl-4">
                                                                 <img class="img-thumbnail m-2 " width="100px"
                                                                     src="{{ is_null($key->DetailPenyakitToGejala->gambarGejala) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->DetailPenyakitToGejala->gambarGejala) }}"
                                                                     alt="">
                                                             </div>
                                                         </div>
                                                         <div class="row">
                                                             <div class="col-lg-12 col-xl-12">
                                                                 <label class="form-check-label"
                                                                     for="option{{ $key->id }}">
                                                                     <p>

                                                                         {{ $key->DetailPenyakitToGejala->namaGejala }}
                                                                     </p>
                                                                 </label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             @endif
                                         @endif
                                     </div>

                                 </div>
                             @endforeach

                            </div>
                        </div>
                    @endif

                    <div class="flex d-flex justify-between justify-content-between">



                    </div>

                </div>

            </div>
        @endforeach
    </form>

</div>
