@extends('layouts.admin')

@section('title','Paramètres')

@section('content')

    <div class="row">
        <div class="col-md-12 mb-4">
            <form action="{{ url('admin/settings') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card mb-4">
                    <div class="card-header border-bottom">
                        <h4 class="mb-0">Informations sur le Site Web</h4>
                    </div>
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Nom du Site Web</label>
                                    <input type="text" name="website_name"
                                           value="{{ $setting->website_name ?? old('website_name') }}"
                                           placeholder="Funda of Web IT"
                                           class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label>URL / Domaine du Site Web</label>
                                    <input type="text" name="website_link"
                                           value="{{ $setting->website_link ?? old('website_link') }}"
                                           placeholder="www.fundaofwebit.com"
                                           class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label>Titre de Copyright</label>
                                    <input type="text" name="copyright" value="{{ $setting->copyright ?? old('copyright') }}" placeholder="Tous droits réservés. 2023" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Chargement du Logo</label>
                                    <input type="file" name="image" class="form-control" />
                                    @if($setting)
                                        @if($setting->image != '')
                                            <img src="{{ asset("$setting->image") }}" class="mt-3 w-25" alt="Logo" />
                                        @endif
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label>Chargement du Favicon</label>
                                    <input type="file" name="favicon" class="form-control" />
                                    @if($setting)
                                        @if($setting->favicon != '')
                                            <img src="{{ asset("$setting->favicon") }}" class="mt-3" style="width: 80px" alt="Logo" />
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header border-bottom">
                        <h4 class="mb-0">Informations de Contact</h4>
                    </div>
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Adresse Email 1</label>
                                <input type="text" name="email1"
                                       value="{{ $setting->email1 ?? old('email1') }}"
                                       placeholder="Email 1"
                                       class="form-control" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Adresse Email 2</label>
                                <input type="text" name="email2"
                                       value="{{ $setting->email2 ?? old('email2') }}"
                                       placeholder="Email 2"
                                       class="form-control" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Téléphone (1)</label>
                                <input type="text" name="phone1"
                                       value="{{ $setting->phone1 ?? old('phone1') }}"
                                       class="form-control" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Téléphone (2)</label>
                                <input type="text" name="phone2" value="{{ $setting->phone2 ?? old('phone2') }}" class="form-control" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>FAX</label>
                                <input type="text" name="fax" value="{{ $setting->fax ?? old('fax') }}" class="form-control" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Numéro WhatsApp</label>
                                <input type="text" name="whatsapp" value="{{ $setting->whatsapp ?? old('whatsapp') }}" class="form-control" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Adresse</label>
                                <textarea name="address" class="form-control mysummernote" rows="3">{{ $setting->address ?? old('address') }}</textarea>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-primary">Enregistrer les Paramètres</button>
                </div>

            </form>
        </div>
    </div>

@endsection
