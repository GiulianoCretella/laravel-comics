@extends('layouts.base', ['headerItems'=>$headerItems] )

@section('pageTitle')
    DcComics - Home
@endsection

@section('mainContent')
<div class="container">
    <div class="jumbo"></div>
    <div class="row">
        <span class="blue-button top">CURRENT SERIES</span>
        @foreach ($comics as $item)
        <div class="col">
            <div class="img-container">
                <img src="{{$item['thumb']}}" alt="{{$item['series']}}">
            </div>
            <h4>{{$item['series']}}</h4>
        </div>
        @endforeach
        <span class="blue-button down">LOAD MORE</span>
    </div>
</div>
    
@endsection