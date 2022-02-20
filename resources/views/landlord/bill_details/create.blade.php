@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('Calculate Monthly Rent Of Tenants')</h3>
    {{-- {!! Form::open(['method' => 'POST', 'route' => ['admin.documents.store'], 'files' => true,]) !!} --}}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('Calculate Bill Details')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('property_id', trans('Property_Id').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('property_id', old('property_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    {{-- @if($errors->has('property_id'))
                        <p class="help-block">
                            {{ $errors->first('property_id') }}
                        </p>
                    @endif --}}
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('Tenant_Id').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    {{-- @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif --}}
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('document', trans('global.documents.fields.document').'*', ['class' => 'control-label']) !!}
                    {!! Form::hidden('document', old('document')) !!}
                    {!! Form::file('document', ['class' => 'form-control', 'required' => '']) !!}
                    {!! Form::hidden('document_max_size', 2) !!}
                    <p class="help-block"></p>
                    @if($errors->has('document'))
                        <p class="help-block">
                            {{ $errors->first('document') }}
                        </p>
                    @endif
                </div>
            </div> --}}

            
        </div>
    </div>

    {!! Form::submit(trans('Calculate'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

