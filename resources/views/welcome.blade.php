@extends('body.body')
<?php //@extends('layout.app') ?>

@section('head-title')
Tienda
@endsection

@section('body-header')
    Todo bien
    <small>Si aparece esto, está correctamente configurado la plantilla que llama a esta</small>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection