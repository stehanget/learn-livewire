@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title font-weight-bold">left side</h5>
                </div>
                <div class="card-body">
                    <livewire:contact-index />
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title font-weight-bold">right side</h5>
                </div>
                <div class="card-body">
                    <livewire:contact-create />
                </div>
            </div>
        </div>
    </div>
</div>

@stack('js')

@endsection