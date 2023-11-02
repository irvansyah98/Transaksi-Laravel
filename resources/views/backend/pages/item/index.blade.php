@extends('backend.master')

@section('title')
    Data Barang Masuk
@endsection

@section('content')
<div class="section-header">
  <h1>Data Barang Masuk</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="">Dashboard</a></div>
    <div class="breadcrumb-item">Barang Masuk</div>
  </div>
</div>

<div class="section-body">

  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
          <div class="card-header">
            <h4>Barang Masuk</h4>
          </div>
          <div class="card-body">
            <a href="{{ url('backend/item/create') }}" class="btn btn-primary">Create</a>
            <br><br>
              <table class="table table-striped table-md" id="table">
                <thead>
                  <tr>
                    {{-- <th class="text-center" width="32px">
                      ID
                    </th> --}}
                    <th>Create Date</th>
                    <th>CARP Code</th>
                    <th>Category</th>
                    <th>Initiator</th>
                    <th>Initiator Div</th>
                    <th>Initiator Branch</th>
                    <th>Recipient</th>
                    <th>Recipient Div</th>
                    <th>Recipient Branch</th>
                    <th>Verified By</th>
                    <th>Due Date</th>
                    <th>Effectiveness</th>
                    <th>Status Date</th>
                    <th>Stage</th>
                    <th>Status</th>
                    @if(Auth::user()->role == 'admin')
                    <th width="200px">Aksi</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                    <?php $index = 1; ?>
                        @foreach($data as $item)
                        <tr>
                            {{-- <td>{{ $item->id }}</td> --}}
                            <td>{{ $item->create_date }}</td>
                            <td>{{ $item->carp_code }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->initiator }}</td>
                            <td>{{ $item->initiator_div }}</td>
                            <td>{{ $item->initiator_branch }}</td>
                            <td>{{ $item->recipient }}</td>
                            <td>{{ $item->recipient_div }}</td>
                            <td>{{ $item->recipient_branch }}</td>
                            <td>{{ $item->verified_by }}</td>
                            <td>{{ $item->due_date }}</td>
                            <td>{{ $item->effectiveness }}</td>
                            <td>{{ $item->status_date }}</td>
                            <td>{{ $item->stage }}</td>
                            <td>{{ $item->status }}</td>
                            @if(Auth::user()->role == 'admin')
                            <td width="153">
                                <form action="{{ route('item.destroy', ['item' => $item->id]) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE"/>
                                      <a href="{{ route('item.edit', ['item' => $item->id]) }}" class="btn btn-info">Ubah</a>
                                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        <?php $index++; ?>
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
    });
});
</script>
@endsection