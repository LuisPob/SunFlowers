@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Profile'])
<!-- <div class="card shadow-lg mx-4 card-profile-bottom"> -->
<div class="container-fluid py-y">
    <div class=" pb-0">
        <h6>Información general</h6>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form role="form" method="POST" action="{{ route('general-info.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Perfil empresa</p>
                            <button type="submit" class="btn btn-primary btn-sm ms-auto text-dark">Guardar</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informacion de la empresa</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group d-none">
                                    {!! html()->label('ID', 'id') !!}
                                    {!! html()->text('id', 1)->class('form-control' . ($errors->has('id') ? ' is-invalid' : ''))->placeholder('ID') !!}
                                    {!! $errors->first('id', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="form-group">
                                    {!! html()->label('Nombre de empresa', 'company_name') !!}
                                    {!! html()->text('company_name', old('company_name', $company->company_name))->class('form-control' . ($errors->has('company_name') ? ' is-invalid' : ''))->placeholder('Nombre de empresa') !!}
                                    {!! $errors->first('company_name', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! html()->label('Correo electronico', 'email') !!}
                                    {!! html()->email('email', old('email', $company->email))->class('form-control' . ($errors->has('email') ? ' is-invalid' : ''))->placeholder('Correo electronico') !!}
                                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! html()->label('Número de teléfono', 'phone') !!}
                                    {!! html()->number('phone', old('phone', $company->phone))->class('form-control' . ($errors->has('phone') ? ' is-invalid' : ''))->placeholder('Número telefono') !!}
                                    {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">INFORMACIÓN UBICACIÓN</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! html()->label('Región', 'region_id') !!}
                                    {!! html()->select('region_id', $regions, old('region_id', $company->region_id))->class('form-control' . ($errors->has('region_id') ? ' is-invalid' : ''))->placeholder('Seleccione la región') !!}
                                    {!! $errors->first('region_id', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! html()->label('Provincia', 'province_id') !!}
                                    {!! html()->select('province_id', $provinces, old('province_id', $company->province_id))->class('form-control' . ($errors->has('province') ? ' is-invalid' : ''))->placeholder('Seleccione la provincia') !!}
                                    {!! $errors->first('province', '<div class="invalid-feedback">:message</div>') !!}

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! html()->label('Comuna', 'commune_id') !!}
                                    {!! html()->select('commune_id', $communes, old('commune_id', $company->commune_id))->class('form-control' . ($errors->has('commune_id') ? ' is-invalid' : ''))->placeholder('Seleccione la comuna') !!}
                                    {!! $errors->first('commune_id', '<div class="invalid-feedback">:message</div>') !!}

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! html()->label('Dirección', 'address') !!}
                                    {!! html()->text('address', old('address', $company->address))->class('form-control' . ($errors->has('address') ? ' is-invalid' : ''))->placeholder('Dirección') !!}
                                    {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">IDENTIDAD CORPORATIVA</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! html()->label('Logo', 'logo') !!}
                                    {!! html()->file('logo')->class('form-control' . ($errors->has('logo') ? ' is-invalid' : ''))->accept('image/*') !!}
                                    {!! $errors->first('logo', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! html()->label('Color Primario', 'color_primary') !!}
                                    {!! html()->input('color', 'color_primary', old('color_primary', $company->color_primary))->class('form-control' . ($errors->has('color_primary') ? ' is-invalid' : '')) !!}
                                    {!! $errors->first('color_primary', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! html()->label('Color Secundario', 'color_secondary') !!}
                                    {!! html()->input('color', 'color_secondary', old('color_secondary', $company->color_secondary))->class('form-control' . ($errors->has('color_secondary') ? ' is-invalid' : '')) !!}
                                    {!! $errors->first('color_secondary', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="region_id"]').on('change', function() {
                var regionId = $(this).val();
                if (regionId) {
                    $.ajax({
                        url: '/provinces/' + regionId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('select[name="province_id"]').empty();
                            $('select[name="province_id"]').append('<option value="">Seleccione la provincia</option>');
                            $.each(data, function(key, value) {
                                $('select[name="province_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="province_id"]').empty();
                }
            });

            $('select[name="province_id"]').on('change', function() {
                var provinceId = $(this).val();
                if (provinceId) {
                    $.ajax({
                        url: '/communes/' + provinceId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('select[name="commune_id"]').empty();
                            $('select[name="commune_id"]').append('<option value="">Seleccione la comuna</option>');
                            $.each(data, function(key, value) {
                                $('select[name="commune_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="commune_id"]').empty();
                }
            });
        });
    </script>

    @include('layouts.footers.auth.footer')
    <!-- </div> -->
    @endsection