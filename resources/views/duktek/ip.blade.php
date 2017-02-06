@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrasi Komputer</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('storeip') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('ip_address') ? ' has-error' : '' }}">
                            <label for="ip_address" class="col-md-4 control-label">IP Address</label>

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
                            <label for="host_name" class="col-md-4 control-label">Host Name</label>

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
                            <label for="mac_address" class="col-md-4 control-label">MAC Address</label>

                            <div class="col-md-6">
                                <input id="mac_address" type="text" class="form-control" name="mac_address" value="{{ $data['macAddress']}}" required autofocus>

                                @if ($errors->has('mac_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mac_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {!! $errors->has('lokasi') ? 'has-error' : '' !!}">
                            {!! Form::label('lokasi', 'Lokasi', ['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('lokasi', [''=>'']+App\Lokasi::pluck('name','name')->all(), null, [ 'class'=>'js-selectize','placeholder' => 'Pilih Lokasi' ]) !!}
                                {!! $errors->first('lokasi', '<p class="help-block">:message</p>') !!}
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
                                <input id="tugas_pengguna" type="text" class="form-control" name="tugas_pengguna" placeholder ="isi data" required autofocus><p>Contoh: Staff, Pemeriksa, Kasi, Kabid, gate PIB, gate BC23, gate ekspor dll</p>

                                @if ($errors->has('tugas_pengguna'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tugas_pengguna') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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