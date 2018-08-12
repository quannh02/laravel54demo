@extends('views.master')
@section('title', 'Day la layout trang')
@section('noidung')
    @for ($i = 0; $i <= 10; $i++)
        số thứ tự {{ $i }} </br>
    @endfor

    <?php $i = 0; ?>
    @while ($i <= 10)
        Số thứ tự : {{ $i }} </br>
        <?php $i++ ?>
    @endwhile
    <?php $array = ['com', 'chao', 'pho']; ?>
    @foreach ($array as $item)
        {{ $item }} ,
    @endforeach
@stop