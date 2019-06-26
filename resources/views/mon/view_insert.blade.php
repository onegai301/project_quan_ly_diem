@extends('layer.master')
@section('content')
<form class="form-horizontal" action="{{ route('mon.process_insert') }}" method="post">
	{{csrf_field()}}
	<div class="form-group">
		Tên Môn
		<input type="text" name="ten_mon" class="form-control">
	</div>
	<div class="form-group">
		Giờ học
		<input type="number" name="gio_hoc" class="form-control">
	</div>
	<div class="form-group">
		Kiểu thi
		<select class="form-control" name="ma_kieu_thi">
			@foreach ($array_kieu_thi as $kieu_thi)
				<option value="{{$kieu_thi->ma_kieu_thi}}">
					{{$kieu_thi->ten_kieu_thi}}
				</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<button class="btn btn-danger">
			<a href="{{ URL::previous() }}">
				Quay Lại
			</a>
		</button>
		<button class="btn btn-success">
			Thêm
		</button>
		
	</div>
</form>
@endsection