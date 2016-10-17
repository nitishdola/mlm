@extends('admin.layout')

@section('content')
<div class="row">
    <div class="span12">
        <div class="panel panel-default">
            <div class="panel-heading"><h2>Edit Customer</h2></div>
            <div class="panel-body">
              {!! Form::model($user, array('route' => ['admin.user.update', $user->id], 'id' => 'admin.user.update', 'class' => 'form-horizontal row-border')) !!}
              @include('admin.users._form')

                {!! Form::label('', '', array('class' => 'span4 control-label')) !!}
  			        {!! Form:: submit('Update', ['class' => 'btn btn-success']) !!}
              {!!form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection
