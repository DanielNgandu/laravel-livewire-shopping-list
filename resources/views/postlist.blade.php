@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Shopping List') }}</div>
                <div class="card-body">
                    @livewire('post-datatable')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
