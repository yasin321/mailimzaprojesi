@extends('layout')
@section('content')



    @foreach($bloglar as $blog)

    {!!  $blog->blog_icerik !!}
@endforeach

@endsection
