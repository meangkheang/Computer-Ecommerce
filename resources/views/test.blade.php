
@extends('layouts.layout')
@section('content')
{{ $orders->links('layouts.pagination',['name'=>'rith']) }}
    
@endsection
