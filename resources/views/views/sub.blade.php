@extends('views.master')

@section('title','Sub template')
@section('noidung')
	Day la trang sub
	<br/>
	<?php $hoten = '<strong>Lưu văn Quyết</strong>';  ?>
	{{$hoten}}
	<br/>
	{!!$hoten!!}
	<br/>
<?php
$diem = 7;
 ?>
 @if($diem >=8 )
	 hoc sinh gioi
 @elseif($diem >=6.5)
	 Hoc sinh kha
 @elseif($diem >=5 )
	 hoc sinh trung binh
 @else
	 hoc sinh yeu
 @endif
 {{ $diem or 'Khong ton tai diem'}}
@stop
