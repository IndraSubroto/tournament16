@extends('layouts.table')
@extends('layouts.nav')
@extends('layouts.side')
@extends('layouts.footer')

@section('title','List Tournament')

@section('content')

{{-- ////////////////////////// --}}
<!-- List Tournament For Admin and Promotor -->
{{-- ////////////////////////// --}}
@cannot('isMember', Model::class) 
<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable for Promotor</h3>
  </div>
  <div class="card-body m-1">
    <table id="example2" class="table table-bordered table-inverse table-hover-inverse mb-0 font-small-2">
      <thead>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Promotor</th>
          <th>Price Pool</th>
          <th>Min - Max Age</th>
          <th>Start - Final Date</th>
          <th>Limit Registration</th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tournaments as $tournament)
        <tr>
          <td scoop="row">{{$loop->iteration}}</td>
          <td>{{$tournament->title}}</td>
          <td>{{$tournament->user->promotor->company}}</td>
          <td>Rp. {{$tournament->minPrice}} - Rp. {{$tournament->maxPrice}}</td>
          <td><center>{{$tournament->minAge}} - {{$tournament->maxAge}}</center></td>
          <td>{{$tournament->dateInitial}} to {{$tournament->dateFinal}}</td>
          <td>{{$tournament->dateRegisLimit}}</td>
          <td>
            Kec. {{$tournament->district->name}}, <br> Kab. {{$tournament->district->city->name}}, <br> Prov. {{$tournament->district->city->province->name}}
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Promotor</th>
          <th>Price Pool</th>
          <th>Min - Max Age</th>
          <th>Start - Final Date</th>
          <th>Limit Registration</th>
          <th>Address</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endcannot
{{-- ////////////////////////// --}}
<!-- List Tournament For Member -->
{{-- ////////////////////////// --}}
@can('isMember', Model::class)
  
<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable for Member</h3>
  </div>
  
  <div class="card-body m-1">
    <table id="example2" class="table table-bordered table-inverse table-hover-inverse mb-0 font-small-3">
      <thead>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Promotor</th>
          <th>Price Pool</th>
          <th>Start - Final Date</th>
          <th>Paid</th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($teams as $team)
        <tr>
          <td scoop="row">{{$loop->iteration}}</td>
          <td>{{$team->tournament->title}}</td>
          <td> {{$team->team_name}}
            {{-- {{$promotor->name}} --}}
          </td>
          <td>Rp. {{$team->tournament->minPrice}} - Rp. {{$team->tournament->maxPrice}}</td>
          <td>{{$team->tournament->dateInitial}} to {{$team->tournament->dateFinal}}</td>
          <td>
            <a href="{{ url('payment') }}" class="btn btn-danger">Pay Now</a>
          </td>
          <td>Kec. {{$team->tournament->district->name}}, <br> Kab. {{$team->tournament->district->city->name}}, <br> Prov. {{$team->tournament->district->city->province->name}}</td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Promotor</th>
          <th>Price Pool</th>
          <th>Start - Final Date</th>
          <th>Paid</th>
          <th>Address</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endcan
@endsection

@section('linkscript')
<!-- BEGIN ROBUST JS-->
<script src="{{ url('/') }}/robust/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="{{ url('/') }}/robust/app-assets/js/core/app.js" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->

<!-- DataTables -->
<script src="{{ url('/') }}/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ url('/') }}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
$(function () {
    $('#example2').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": true,
    });
});
</script>
@endsection
