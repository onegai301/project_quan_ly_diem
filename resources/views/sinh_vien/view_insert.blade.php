@extends('layer.master')
@section('content')
<form class="form-horizontal" action="{{ route('sinh_vien.process_insert') }}" method="post">
	{{csrf_field()}}
	<div class="form-group">
		Tên Sinh Viên
		<input type="text" name="ten_sinh_vien" class="form-control">
	</div>
	<div class="form-group">
		Tuổi
		<input type="number" name="tuoi" class="form-control">
	</div>
	<div class="form-group">
		Lớp
		<select class="form-control" name="ma_lop">
			@foreach ($array_lop as $lop)
				<option value="{{$lop->ma_lop}}">
					{{$lop->ten_lop}}
				</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<button class="btn btn-success">
			Thêm
		</button>
		<button class="btn btn-danger">
			<a href="{{ URL::previous() }}">
				Quay Lại
			</a>
		</button>
	</div>
</form>
@endsection