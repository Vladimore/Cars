@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                @include('car.index')
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>
@endsection
