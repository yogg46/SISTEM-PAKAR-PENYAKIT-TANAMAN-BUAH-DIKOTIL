<div wire:poll.750ms>
    {{-- @json($pesans) --}}
    <div class="block block-rounded">
        <div class="block-header">
        </div>
        {{-- col-12 col-lg-12 col-md-12  col-xl-12 --}}
        <div class="block-content example" id="messages-container">
            @foreach ($pesans as $key)
                <div class="row mb-3">
                    <div class="col-1 col-md-1 col-lg-1 col-xl-1 ">
                        @if ($key->receiver_id == Auth::user()->idUser)
                            <div class="align-items-center justify-content-between">
                                <img class="img-avatar img-avatar48 "
                                    src="{{ is_null($key->sender->gambar) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->sender->gambar) }}"
                                    alt="">
                            </div>
                        @else
                        @endif
                    </div>
                    <div class="col-md-10 col-xl-10 col-10 col-lg-10">
                        <div class=" d-flex align-items-center justify-content-between">
                            @if ($key->receiver_id == Auth::user()->idUser)
                                <div>
                                    {{ $key->sender->namaPengguna }}
                                </div>
                                <div>
                                    {{ date('l,d-m-Y H:i:s', strtotime($key->created_at)) }}
                                </div>
                            @else
                                <div>
                                    {{ date('l,d-m-Y H:i:s', strtotime($key->created_at)) }}
                                </div>
                                <div>
                                    {{ $key->sender->namaPengguna }}
                                </div>
                            @endif
                        </div>
                        @if ($key->receiver_id == Auth::user()->idUser)
                            <a class="block block-rounded"
                                style="border-radius: 0px 35px 35px 35px; background-color: rgb(220, 218, 218);"
                                href="javascript:void(0)">
                            @else
                                <a class="block block-rounded  "
                                    style="border-radius: 35px 0px 35px 35px; background-color : #11FFBD;"
                                    href="javascript:void(0)">
                        @endif
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <div class="ms-3 text-start">
                                <p class="fw-semibold text-black mb-0">
                                    {{ $key->isi }}
                                </p>
                            </div>
                            <div></div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-1 col-xl-1 col-1 col-lg-1">
                        @if ($key->receiver_id == Auth::user()->idUser)
                        @else
                            <div class="align-items-center justify-content-between">
                                <img class="img-avatar img-avatar48 "
                                    src="{{ is_null($key->sender->gambar) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->sender->gambar) }}"
                                    alt="">
                            </div>
                        @endif
                    </div>
                </div>

                {{-- <div class="row mb-3">
    <div class="col-md-1 col-xl-1 ">
    </div>
    <div class="col-md-10 col-xl-10 ">
        <div class=" d-flex align-items-center justify-content-between">
            <div>
                {{ date('l,d-m-Y H:i:s', strtotime($key->created_at)) }}
            </div>
            <div>
                {{ $key->sender->namaPengguna }}
            </div>
        </div>
        <a class="block block-rounded bg-success" style="border-radius: 35px 0px 35px 35px;"
            href="javascript:void(0)">
            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                <div></div>
                <div class="ms-3 text-start">
                    <p class="fw-semibold text-white mb-0">
                        {{ $key->isi }}
                    </p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-1 col-xl-1 ">
        <div class="align-items-center justify-content-between">
            <img class="img-avatar img-avatar48 " src="/assets/media/avatars/avatar14.jpg" alt="">
        </div>
    </div>
</div> --}}
            @endforeach

        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
            <div class="mb-4">
                <form wire:submit.prevent="kirim">
                    <div class="input-group">
                        <input type="text" class="form-control" wire:model="isi" placeholder="tulis pesan">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-paper-plane me-1 opacity-50"></i> Kirim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
