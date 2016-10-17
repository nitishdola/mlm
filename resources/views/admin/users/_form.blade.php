<div class="control-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! Form::label('full_name*', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::text('name', null, ['class' => 'span5 form-control required', 'id' => 'name', 'placeholder' => 'Full Name', 'autocomplete' => 'off', 'required' => 'true']) !!}
  </div>
  {!! $errors->first('name', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('date_of_birth') ? 'has-error' : ''}}">
  {!! Form::label('date_of_birth*', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::text('date_of_birth', null, ['class' => 'datepicker span3 form-control required', 'id' => 'date_of_birth', 'placeholder' => 'Date of Birth', 'autocomplete' => 'off', 'required' => 'true']) !!}
  </div>
  {!! $errors->first('date_of_birth', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('date_of_joining') ? 'has-error' : ''}}">
  {!! Form::label('date_of_joining*', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::text('date_of_joining', null, ['class' => 'datepicker span3 form-control required', 'id' => 'date_of_joining', 'placeholder' => 'Date of Joining', 'autocomplete' => 'off', 'required' => 'true']) !!}
  </div>
  {!! $errors->first('date_of_joining', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('guardian_name') ? 'has-error' : ''}}">
  {!! Form::label('guardian_name', 'F/H Name', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::text('guardian_name', null, ['class' => 'span5 form-control required', 'id' => 'guardian_name', 'placeholder' => 'Father\'s Name or Husband Name', 'autocomplete' => 'off']) !!}
  </div>
  {!! $errors->first('guardian_name', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('village') ? 'has-error' : ''}}">
  {!! Form::label('village', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::text('village', null, ['class' => 'span5 form-control required', 'id' => 'village', 'placeholder' => 'Village', 'autocomplete' => 'off']) !!}
  </div>
  {!! $errors->first('village', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('post_office') ? 'has-error' : ''}}">
  {!! Form::label('post_office', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::text('post_office', null, ['class' => 'span5 form-control required', 'id' => 'post_office', 'placeholder' => 'Post Office', 'autocomplete' => 'off']) !!}
  </div>
  {!! $errors->first('post_office', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('district_id') ? 'has-error' : ''}}">
  {!! Form::label('district_id', 'District', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::select('district_id', $districts, null, ['class' => 'span5 select2 required', 'id' => 'district_id', 'placeholder' => 'Select District',]) !!}
  </div>
  {!! $errors->first('district_id', '<span class="help-inline">:message</span>') !!}
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
  {!! Form::label('address', '', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::textarea('address', null, ['class' => 'span5 form-control required', 'id' => 'address', 'placeholder' => 'Address', 'autocomplete' => 'off', 'rows' => 3]) !!}
  </div>
  {!! $errors->first('address', '<span class="help-inline">:message</span>') !!}
</div>


<div class="control-group {{ $errors->has('nominee') ? 'has-error' : ''}}">
  {!! Form::label('nominee', 'F/H Name', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::text('nominee', null, ['class' => 'span5 form-control required', 'id' => 'nominee', 'placeholder' => 'Nominee', 'autocomplete' => 'off']) !!}
  </div>
  {!! $errors->first('nominee', '<span class="help-inline">:message</span>') !!}
</div>

<div class="control-group {{ $errors->has('placed_under') ? 'has-error' : ''}}">
  {!! Form::label('placed_under', 'Sponsor Name', array('class' => 'span3 control-label')) !!}
  <div class="span9">
    {!! Form::select('placed_under', $users, null, ['class' => 'span5 select2 required', 'id' => 'placed_under', 'placeholder' => 'Select Sponsor',]) !!}
  </div>
  {!! $errors->first('placed_under', '<span class="help-inline">:message</span>') !!}
</div>
