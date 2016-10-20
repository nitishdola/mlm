@extends('admin.layout')

@section('content')
<div class="row">
    <div class="span12">
      <div class="widget">
        <div class="widget-header">
            <i class="icon-bar-chart"></i>
            <h3>Customer Information</h3>
        </div>
        <div class="widget-content">
          <div class="span6">
            <div class="span2">Full Name</div>
            <div class="span2"> {{ $info->name }}</div>

            <div class="span2">Date of Birth</div>
            <div class="span2"> {{ $info->date_of_birth }}</div>

            <div class="span2">Date of Joining</div>
            <div class="span2"> {{ $info->date_of_joining }}</div>

            <div class="span2">F/H Name</div>
            <div class="span2"> @if($info->guardian_name != '') {{ $info->guardian_name }} @else -- @endif</div>

            <div class="span2">Village</div>
            <div class="span2"> @if($info->village != '')  {{ $info->village }} @else -- @endif</div>

            <div class="span2">Sponsor Name</div>
            <div class="span2"> @if($info->parent['name'] != '') {{ $info->parent['name'] }} @else -- @endif</div>
          </div>

          <div class="span5">
            <div class="span2">Post Office</div>
            <div class="span2"> @if($info->post_office != '') {{ $info->post_office }} @else -- @endif</div>

            <div class="span2">District</div>
            <div class="span2"> @if($info->district['name'] != '') {{ $info->district['name'] }} @else -- @endif</div>

            <div class="span2">Mobile</div>
            <div class="span2"> {{ $info->mobile }}</div>

            <div class="span2">Email</div>
            <div class="span2"> @if($info->email != '') {{ $info->email }} @else -- @endif</div>


            <div class="span2">Address</div>
            <div class="span2"> @if($info->address != '') {{ $info->address }} @else -- @endif</div>


            <div class="span2">Nominee</div>
            <div class="span2">@if($info->nominee != '') {{ $info->nominee }} @else -- @endif</div>

          </div>

        </div>
        <br>
        <div class="widget-header">
            <i class="icon-bar-chart"></i>
            <h3>Sponsors Added</h3>
        </div>
        <div class="widget-content">
          @if(count($childs))
          <!-- <div class="tree">
            <ul>
              <li>
                <a href="#">Child</a>
                <ul>
                  <li><a href="#">Grand Child</a></li>
                  <li>
                    <a href="#">Grand Child</a>
                    <ul>
                      <li>
                        <a href="#">Great Grand Child</a>
                      </li>
                      <li>
                        <a href="#">Great Grand Child</a>
                      </li>
                      <li>
                        <a href="#">Great Grand Child</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Grand Child</a></li>
                </ul>
              </li>
            </ul> {{ $info->name }}
          </div> -->
          <div class="tree">
            <ul>
              <li>
                <a href="#">{{ $info->name }}</a>
                <ul>
                  <li><a href="#">Grand Child</a></li>
                  <li>
                    <a href="#">Grand Child</a>
                    <ul>
                      <li>
                        <a href="#">Great Grand Child</a>
                      </li>
                      <li>
                        <a href="#">Great Grand Child</a>
                      </li>
                      <li>
                        <a href="#">Great Grand Child</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Grand Child</a></li>
                </ul>
              </li>
            </ul> 
          </div>
          <table class="table">
            <thead>
              <th>#</th>
              <th>Customer Name</th>
              <th>F/H Name</th>
              <th>Mobile Number</th>
              <th>Date of Joining</th>
              <th>Action</th>
            </thead>

            <tbody>
              @foreach($childs as $k=>$v)
              <tr>
                <td> {{ $k+1 }}  </td>
                <td> {{ $v->name }} </td>
                <td> {{ $v->guardian_name }} </td>
                <td> {{ $v->mobile }} </td>
                <td> {{ $v->date_of_joining }} </td>
                <td> <a href="{{ route('admin.user.info', $v->id) }}">Details</a> </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
          <div class="alert alert-danger">
            <strong>{{ $info->name }} have not added any sponsors !</strong>
          </div>
          @endif
        </div>
      </div>

      <div class="span12">
        <a href="{{ route('admin.user.index')}}" class="btn btn-success"><i class="icon-large icon-step-backward
"></i></i> Back</a>
      </div>
    </div>
  </div>
</div>
@endsection
