@extends('admin.layout')

@section('Styles')
<style>
#mainContainer{
    background:Red;
    min-width:850px;
}
.container{
    text-align:center;
    margin:10px .5%;
    padding:10px .5%;
    background:green;
    float:left;
    overflow:visible;
    position:relative;
}


.member{
    background:#eee;
    position:relative;
    z-index:   1;
    cursor:default;
    border-bottom:solid 1px #000;
}
.member:after{
    display:block;
    position:absolute;
    left:50%;
    width:1px;
    height:20px;
    background:#000;
    content:" ";
    bottom:100%;
}
.member:hover{
 z-index:   2;
}
.member .metaInfo{
    display:none;
    border:solid 1px #000;
    background:#fff;
    position:absolute;
    bottom:100%;
    left:50%;
    padding:5px;
    width:100px;
}
.member:hover .metaInfo{
    display:block;
}
.member .metaInfo img{
  width:50px;
  height:50px;
  display:inline-block;
  padding:5px;
  margin-right:5px;
    vertical-align:top;
  border:solid 1px #aaa;
}
</style>
@stop

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
          <!-- <div class="tree">
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
          </div> -->

          <div id="mainContainer" class="clearfix"></div>
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

@section('Scripts')
<script>
var data = '&id='+{{ $info->id }};
var url = "{{ route('api.getUserInfo')}}";
var members = [];
$(document).ready(function() {

    $.ajax({
      data : data,
      url  : url,
      type : "GET",
      dataType : "json",

      error : function(resp) {
        console.log("Error !");
      },

      success : function(members) {
        console.log(members);
          var testImgSrc = "http://0.gravatar.com/avatar/06005cd2700c136d09e71838645d36ff?s=69&d=wavatar";
          (function heya( parent_id ){
              // This is slow and iterates over each object everytime.
              // Removing each item from the array before re-iterating
              // may be faster for large datasets.
              for(var i = 0; i < members.length; i++){
                  var member = members[i];
                  if(member.parent_id === parent_id){
                      var parent = parent_id ? $("#containerFor" + parent_id) : $("#mainContainer"),
                          id = member.id,
                              metaInfo = "<img src='"+testImgSrc+"'/>";
                      parent.append("<div class='container' id='containerFor" + id + "'><div class='member'>" + id + "<div class='metaInfo'>" + metaInfo + "</div></div></div>");
                      heya(id);
                  }
              }
           }( null ));

          // makes it pretty:
          // recursivley resizes all children to fit within the parent.
          var pretty = function(){
              var self = $(this),
                  children = self.children(".container"),
                  // subtract 4% for margin/padding/borders.
                  width = (100/children.length) - 2;
              children
                  .css("width", width + "%")
                  .each(pretty);
          };
          $("#mainContainer").each(pretty);
      }
    });
 });
// var members = [
//     {id : 1, parent_id:null, amount:200, otherInfo:"blah"},
//     {id : 2, parent_id:1, amount:300, otherInfo:"blah1"},
//     {id : 3, parent_id:1, amount:400, otherInfo:"blah2"},
//     {id : 4, parent_id:3, amount:500, otherInfo:"blah3"},
//     {id : 6, parent_id:1, amount:600, otherInfo:"blah4"},
//     {id : 9, parent_id:4, amount:700, otherInfo:"blah5"},
//     {id : 12, parent_id:2, amount:800, otherInfo:"blah6"},
//     {id : 5, parent_id:2, amount:900, otherInfo:"blah7"},
//     {id : 13, parent_id:2, amount:0, otherInfo:"blah8"},
//     {id : 14, parent_id:2, amount:800, otherInfo:"blah9"},
//     {id : 55, parent_id:2, amount:250, otherInfo:"blah10"},
//     {id : 56, parent_id:3, amount:10, otherInfo:"blah11"},
//     {id : 57, parent_id:3, amount:990, otherInfo:"blah12"},
//     {id : 58, parent_id:3, amount:400, otherInfo:"blah13"},
//     {id : 59, parent_id:6, amount:123, otherInfo:"blah14"},
//     {id : 54, parent_id:6, amount:321, otherInfo:"blah15"},
//     {id : 53, parent_id:56, amount:10000, otherInfo:"blah7"},
//     {id : 52, parent_id:2, amount:47, otherInfo:"blah17"},
//     {id : 51, parent_id:6, amount:534, otherInfo:"blah18"},
//     {id : 50, parent_id:9, amount:55943, otherInfo:"blah19"},
//     {id : 22, parent_id:9, amount:2, otherInfo:"blah27"},
//     {id : 33, parent_id:12, amount:-10, otherInfo:"blah677"}
//
// ];


</script>
@stop
