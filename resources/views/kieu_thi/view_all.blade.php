@extends('layer.master')
@push('css')
<style type="text/css">
    h1{
        color: red;
    }
</style>
@endpush
@section('content')
<h1>
	Đây là tất cả Kiểu thi
</h1>
<table class="table table-striped">
	<tr>
		<th>Mã Kiểu Thi</th>
		<th>Tên Kiểu Thi</th>
		<th></th>
	</tr>
	@foreach ($array as $kieu_thi)
		<tr>
			<td>{{$kieu_thi->ma_kieu_thi}}</td>
			<td>{{$kieu_thi->ten_kieu_thi}}</td>
		</tr>
	@endforeach
</table>
@endsection