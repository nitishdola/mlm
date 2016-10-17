@extends('admin.layout')

@section('content')
<div class="row">
    <div class="span12">
        <div class="panel panel-default">
            <div class="panel-heading"><h2>View All Customers</h2></div>
            <div class="panel-body">
            <?php $count = 1; ?>
              <table class="table">
                <thead>
                  <th>#</th>
                  <th>Customer Name</th>
                  <th>F/H Name</th>
                  <th>Mobile Number</th>
                  <th>Date of Joining</th>
                  <th>Sponsored Customers Added</th>
                  <th>Action</th>
                </thead>

                <tbody>
                  @foreach($users as $k=>$v)
                  <tr>
                    <td> {{ (($users->currentPage() - 1 ) * $users->perPage() ) + $count + $k }}  </td>
                    <td> {{ $v->name }} </td>
                    <td> {{ $v->guardian_name }} </td>
                    <td> {{ $v->mobile }} </td>
                    <td> {{ $v->date_of_joining }} </td>
                    <td> {{ count($v->parent) }} </td>
                    <td> Details | Edit </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
@endsection
