@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('Add Tenant Details')</h3>
    {{-- {!! Form::open(['method' => 'POST', 'route' => ['admin.notes.store']]) !!} --}}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('Add New Tenants')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('Property Id', trans('Property_Id').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    {{-- {!! Form::select('Property_Id', $properties, old('Property_Id'), ['class' => 'form-control select2', 'required' => '']) !!} --}}
                    {{-- <p class="help-block"></p> --}}
                    {{-- @if($errors->has('Property_Id'))
                        <p class="help-block">
                            {{ $errors->first('Property_Id') }}
                        </p>
                    @endif --}}
                </div>
            </div>


            <div class="panel-body">
                <div class="row">
                    <div>
                        {!! Form::label('Property Name', trans('Tenant_Id').'*', ['class' => 'control-label']) !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                        {{-- {!! Form::select('property_id', $properties, old('property_id'), ['class' => 'form-control select2', 'required' => '']) !!} --}}
                        {{-- <p class="help-block"></p>
                        @if($errors->has('property_id'))
                            <p class="help-block">
                                {{ $errors->first('property_id') }}
                            </p>
                        @endif --}}
                    </div>
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div>
                        {!! Form::label('Room Id', trans('Property_Name').'*', ['class' => 'control-label']) !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                        {{-- {!! Form::select('property_id', $properties, old('property_id'), ['class' => 'form-control select2', 'required' => '']) !!} --}}
                        <p class="help-block"></p>
                        {{-- @if($errors->has('property_id'))
                            <p class="help-block">
                                {{ $errors->first('property_id') }}
                            </p>
                        @endif --}}
                    </div>
                </div>
            </div>

                <div class="panel-body">
                    <div class="row">
                        <div>
                            {!! Form::label('Monthly Rent', trans('Tenant_Name').'*', ['class' => 'control-label']) !!}
                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                            {{-- {!! Form::select('property_id', $properties, old('property_id'), ['class' => 'form-control select2', 'required' => '']) !!} --}}
                            {{-- <p class="help-block"></p>
                            @if($errors->has('property_id'))
                                <p class="help-block">
                                    {{ $errors->first('property_id') }}
                                </p>
                            @endif --}}
                        </div>
                    </div>
                </div>


            {{-- <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('note_text', trans('global.notes.fields.note-text').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('note_text', old('note_text'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('note_text'))
                        <p class="help-block">
                            {{ $errors->first('note_text') }}
                        </p>
                    @endif
                </div>
            </div> --}}
            
        </div>
    </div>
</div>
    <div class="panel-body">
        <div class="row">
            {!! Form::submit(trans('Save'), ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>    
@stop

