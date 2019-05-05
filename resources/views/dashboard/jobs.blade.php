@extends('layouts.master')

@section('title')
    Jobs
@endsection

@section('navbar')
@include('partials.navbar', ['type' => 1])
@endsection

@section('poster')
@include('dashboard.jobsposter')
@endsection

@section('content')

@endsection



@section('footer')
@include('partials.footer')
@endsection
