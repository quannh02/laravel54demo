@extends('views.master')
@section('title', 'Day la sub trang')
@section('sidebar')
    @parent
    Day la trang sub sidebar
@stop
@section('noidung')
    Day la trang sub
    <?php $hoten = "<b>Nguyen Hong Quan</b>"; ?>
    {{ $hoten }}
    {!! $hoten !!}
    <?php $diem = 7; ?>
    @if ($diem >= 7)
        Hoc sinh gioi
    @elseif ($diem < 7 && $diem >= 5)
        Hoc sinh trung binh
    @else
        Hoc sinh yeu
    @endif

    {{ isset($diem) ? $diem : 'Khong ton tai diem' }}
    {{ $diem or 'Khong ton tai diem' }}
@stop