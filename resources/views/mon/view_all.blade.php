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
	Đây là tất cả các môn
</h1>
<table class="table table-striped">
	<caption>
		<a href="{{ route('mon.view_insert') }}">
			<button class="btn btn-success">
				Thêm Môn
			</button>
		</a>
	</caption>
	<tr>
		<th>Mã Môn</th>
		<th>Tên Môn</th>
		<th>Giờ học</th>
		<th></th>
	</tr>
	@foreach ($array as $mon)
		<tr>
			<td>{{$mon->ma_mon}}</td>
			<td>{{$mon->ten_mon}}</td>
			<td>{{$mon->gio_hoc}}</td>
			<td>
				<a href="{{ route('mon.view_update', ['ma_mon' => $mon->ma_mon]) }}">
					<button class="btn btn-warning btn-simple btn-icon ">
	                    <i class="fa fa-edit"></i>
	                </button>
                </a>
				<a href="{{ route('mon.delete', ['ma_mon' => $mon->ma_mon]) }}" onclick="return confirm('Chắc chứ?')">
					<button class="btn btn-danger btn-simple btn-icon ">
	                    <i class="fa fa-times"></i>
	                </button>
                </a>
			</td>
		</tr>
	@endforeach
</table>
@endsection