<div class="control-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! Form::label('full_name*', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::text('name', null, ['class' => 'span5 form-control required', 'id' => 'name', 'placeholder' => 'Full Name', 'autocomplete' => 'off', 'required' => 'true']) !!}
  </div>
  {!! $errors->first('name', '<span class="help-inline">:message</span>') !!}
</div>


<div class="control-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! Form::label('date_of_joining*', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::text('date_of_joining', null, ['class' => 'datepicker span3 form-control required', 'id' => 'date_of_joining', 'placeholder' => 'Date of Joining', 'autocomplete' => 'off', 'required' => 'true']) !!}
  </div>
  {!! $errors->first('date_of_joining', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('mobile') ? 'has-error' : ''}}">
  {!! Form::label('mobile_number*', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::number('mobile', null, ['class' => 'span5 form-control required', 'id' => 'mobile', 'placeholder' => 'Mobile Number', 'autocomplete' => 'off', 'required' => 'true']) !!}
  </div>
  {!! $errors->first('mobile', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('email') ? 'has-error' : ''}}">
  {!! Form::label('email_id', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::email('email', null, ['class' => 'span5 form-control required', 'id' => 'email', 'placeholder' => 'Email ID', 'autocomplete' => 'off']) !!}
  </div>
  {!! $errors->first('email', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('address') ? 'has-error' : ''}}">
  {!! Form::label('address*', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::textarea('address', null, ['class' => 'span5 form-control required', 'id' => 'address', 'placeholder' => 'Address', 'autocomplete' => 'off',  'required' => 'true', 'rows' => 3]) !!}
  </div>
  {!! $errors->first('address', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('placed_under') ? 'has-error' : ''}}">
  {!! Form::label('placed_under', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::select('placed_under', $users, null, ['class' => 'span5 select2 required', 'id' => 'placed_under', 'placeholder' => 'Select Parent Customer',]) !!}
  </div>
  {!! $errors->first('placed_under', '<span class="help-inline">:message</span>') !!}
</div>
