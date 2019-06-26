@extends('layer.master')
@section('content')
<h1>
	Day la tat ca sinh_vien
</h1>
<table class="table table-striped">
	<caption>
		<a href="{{ route('sinh_vien.view_insert') }}">
			<button class="btn btn-success">
				Thêm Sinh Viên
			</button>
		</a>
	</caption>
	<tr>
		<th>Tên</th>
		<th>Tuổi</th>
		<th>Lớp</th>
		<th></th>
	</tr>
	@foreach ($array as $sinh_vien)
		<tr>
			<td>{{$sinh_vien->ten_sinh_vien}}</td>
			<td>{{$sinh_vien->tuoi}}</td>
			<td>{{$sinh_vien->ten_lop}}</td>
			<td>
				<a href="{{ route('sinh_vien.view_update', ['ma_sinh_vien' => $sinh_vien->ma_sinh_vien]) }}">
					<button class="btn btn-warning btn-simple btn-icon ">
	                    <i class="fa fa-edit"></i>
	                </button>
                </a>
				<a href="{{ route('sinh_vien.delete', ['ma_sinh_vien' => $sinh_vien->ma_sinh_vien]) }}" onclick="return confirm('Chắc chứ?')">
					<button class="btn btn-danger btn-simple btn-icon ">
	                    <i class="fa fa-times"></i>
	                </button>
                </a>
			</td>
		</tr>
	@endforeach
</table>
@endsection