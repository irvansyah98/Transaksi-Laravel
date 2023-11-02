<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan 
            @if($type == 'barang_masuk')
                Barang Masuk
            @elseif($type == 'barang_keluar')
                Barang Keluar
            @elseif($type == 'barang_habis')
                Barang Habis
            @elseif($type == 'barang_stok')
                Barang Stok
            @endif
        </h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>NO</th>
				<th>TANGGAL</th>
				<th>NAMA BARANG</th>
				<th>JUMLAH</th>
				<th>SATUAN</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($data as $p)
			<tr>
				<td>{{ $p->id }}</td>
				<td>{{ date('d-m-Y', strtotime($p->created_at)) }}</td>
				<td>{{$p->title}}</td>
				<td>{{$p->amount}}</td>
				<td>{{$p->unit_name}}</td
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>