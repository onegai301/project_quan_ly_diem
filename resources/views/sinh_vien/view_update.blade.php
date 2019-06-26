@extends('layer.master')
@section('content')
<form class="form-horizontal" action="{{ route('sinh_vien.process_update') }}" method="post">
	{{csrf_field()}}
	<input type="hidden" name="ma_sinh_vien" value="{{$sinh_vien->ma_sinh_vien}}">
	<div class="form-group">
		Tên Sinh Viên
		<input type="text" name="ten_sinh_vien" class="form-control" value="{{$sinh_vien->ten_sinh_vien}}">
	</div>
	<div class="form-group">
		Tuổi
		<input type="number" name="tuoi" class="form-control" value="{{$sinh_vien->tuoi}}">
	</div>
	<div class="form-group">
		Lớp
		<select class="form-control" name="ma_lop">
			@foreach ($array_lop as $lop)
				<option value="{{$lop->ma_lop}}"
				@if ($sinh_vien->ma_lop == $lop->ma_lop)
					selected 
				@endif
				>
					{{$lop->ten_lop}}
				</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<button class="btn btn-success">
			Sửa
		</button>
		<button class="btn btn-danger">
			<a href="{{ URL::previous() }}">
				Quay Lại
			</a>
		</button>
	</div>
</form>
@endsection