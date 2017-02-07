@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Registrasi/Update Data Komputer</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('storeip') }}">
                        {{ csrf_field() }}
                        <h4>Data Komputer</h4>
                        <br>
                        <div class="form-group{{ $errors->has('ip_address') ? ' has-error' : '' }}">
                            <label for="ip_address" class="col-md-4 control-label">IP Address*</label>

                            <div class="col-md-6">
                                <input id="ip_address" type="text" class="form-control" name="ip_address" value="{{ $data['ip']}}" required autofocus>

                                @if ($errors->has('ip_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ip_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('host_name') ? ' has-error' : '' }}">
                            <label for="host_name" class="col-md-4 control-label">Host Name*</label>

                            <div class="col-md-6">
                                <input id="host_name" type="text" class="form-control" name="host_name" value="{{ $data['hostName']}}" required autofocus>

                                @if ($errors->has('host_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('host_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mac_address') ? ' has-error' : '' }}">
                            <label for="mac_address" class="col-md-4 control-label">MAC Address*</label>

                            <div class="col-md-6">
                                <input id="mac_address" type="text" class="form-control" name="mac_address" value="{{ $data['macAddress']}}" required autofocus>

                                @if ($errors->has('mac_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mac_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('operating_system') ? ' has-error' : '' }}">
                            <label for="operating_system" class="col-md-4 control-label">Operating System*</label>

                            <div class="col-md-6">
                                <input id="operating_system" type="text" class="form-control" name="operating_system" value="{{ $data['operatingSystem']}}" required autofocus>

                                @if ($errors->has('operating_system'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('operating_system') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" name="user_agent" value="{{$data['userAgentData']}}">

                        <div class="form-group {!! $errors->has('lokasi') ? 'has-error' : '' !!}">
                            {!! Form::label('lokasi', 'Lokasi', ['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('lokasi', [''=>'']+App\Lokasi::pluck('name','name')->all(), null, [ 'class'=>'js-selectize','placeholder' => 'Pilih lokasi komputer' ]) !!}
                                <p>*jika tidak ada di list bisa langsung tambahkan</p>
                                {!! $errors->first('lokasi', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {!! $errors->has('bidang') ? 'has-error' : '' !!}">
                            {!! Form::label('bidang', 'Bidang', ['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('bidang', [''=>'']+App\Bidang::pluck('name','name')->all(), null, [ 'class'=>'js-selectize','placeholder' => 'Pilih seksi' ]) !!}
                                {!! $errors->first('bidang', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {!! $errors->has('seksi') ? 'has-error' : '' !!}">
                            {!! Form::label('seksi', 'Seksi', ['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('seksi', [''=>'']+App\Seksi::pluck('name','name')->all(), null, [ 'class'=>'js-selectize','placeholder' => 'Pilih seksi' ]) !!}
                                {!! $errors->first('seksi', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tugas_pengguna') ? ' has-error' : '' }}">
                            <label for="tugas_pengguna" class="col-md-4 control-label">Tugas Pengguna Komputer</label>

                            <div class="col-md-6">
                                <input id="tugas_pengguna" type="text" class="form-control" name="tugas_pengguna" placeholder ="isi data" required autofocus>
                                <p>Contoh: Staff, Pemeriksa, Kasi, Kabid, gate PIB, gate BC23, gate ekspor, dll</p>
                                <p>* data awal</p>

                                @if ($errors->has('tugas_pengguna'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tugas_pengguna') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <h4>Standard Software terinstall :</h4>
                        <br>
                        <div class="form-group">
                            <label for="" class="col-md-2 control-label"></label>
                            <div class="col-md-8">
                                <input id="softwear" type="text" class="form-control" name="softwear[]" value="Microsoft Office 2010/2013/20016" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="softwear" class="col-md-2 control-label"></label>
                            <div class="col-md-8">
                                <input id="softwear" type="text" class="form-control" name="softwear[]" value="Mozilla Firefox" autofocus>
                            </div>
                        </div>
                        <hr>
                        <h4>Usulan / Update Penambahan Software :</h4>
                        <br>
                        <div id="items">
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <input id="softwear" type="text" class="form-control" name="softwear[]" value="" placeholder="Misalnya antivirus berserta namanya" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <button type="button" class="btn btn-default pull-right" id="add">tambah</button>
                        </div>
                        <br>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Register/ Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection