@extends('layer.master')
@section('content')
<form class="form-horizontal" action="{{ route('mon.process_update', ['id' => $mon->ma_mon]) }}" method="post">
	{{csrf_field()}}
	<input type="hidden" name="ma_mon" value="{{$mon->ma_mon}}">
	<div class="form-group">
		Tên Môn
		<input type="text" name="ten_mon" class="form-control" value="{{$mon->ten_mon}}">
	</div>
	<div class="form-group">
		Giờ học
		<input type="number" name="gio_hoc" class="form-control" value="{{$mon->gio_hoc}}">
	</div>
	<div class="form-group">
		Kiểu thi
		<select class="form-control" name="ma_kieu_thi">
			@foreach ($array_kieu_thi as $kieu_thi)
				<option value="{{$kieu_thi->ma_kieu_thi}}"
				@if ($mon->ma_kieu_thi == $kieu_thi->ma_kieu_thi)
					selected 
				@endif
				>
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
			Sửa
		</button>
	</div>
</form>
@endsection