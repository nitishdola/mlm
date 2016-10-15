@extends('admin.layout')

@section('content')
<div class="row">
    <div class="span12">
        <div class="panel panel-default">
            <div class="panel-heading"><h2>Add Customer</h2></div>
            <div class="panel-body">
              {!! Form::open(array('route' => 'admin.store.user', 'id' => 'admin.store.user', 'class' => 'form-horizontal row-border')) !!}
                @include('admin.users._form')

                {!! Form::label('', '', array('class' => 'span4 control-label')) !!}
  			        {!! Form:: submit('Add', ['class' => 'btn btn-success']) !!}
              {!!form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection
