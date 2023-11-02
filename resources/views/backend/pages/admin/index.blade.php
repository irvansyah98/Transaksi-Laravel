@extends('backend.master')

@section('title')
    Data Admin
@endsection

@section('content')
<div class="section-header">
  <h1>Data Admin</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="">Dashboard</a></div>
    <div class="breadcrumb-item">Admin</div>
  </div>
</div>

<div class="section-body">

  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
          <div class="card-header">
            <h4>Admin</h4>
          </div>
          <div class="card-body">
            {{-- <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah</a> --}}
            <br><br>
            <table id="table" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Role</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
                @foreach($data as $item)
                  <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->role }}</td>
                    <td>
                      <form action="{{ url('/backend/admin/'.$item->id) }}" method="post">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE">
                          <a href="{{ url('/backend/admin/'.$item->id.'/edit') }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                          @if($item->id != 1)
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Hapus</button>
                          @endif
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
@parent
<script type="text/javascript">
$(document).ready(function(){
    $('#table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>
@endsection