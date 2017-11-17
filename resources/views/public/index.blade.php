@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Contact Us</div>

                    <div class="card-body">
                        @include('public.partials.success')
                        @include('public.forms.contact')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection