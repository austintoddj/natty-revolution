@extends('layouts.public')

@section('content')
    @include('public.partials.sidebar')
    <div class="stage" id="stage">
        @include('public.partials.hero')
        @include('public.partials.featured')
        @include('public.partials.best-of-the-best')
        @include('public.partials.your-show')
        @include('public.partials.contact')
        @include('public.partials.coaching')
        @include('public.partials.footer')
        @include('public.partials.modals.purpose')
        @include('public.partials.modals.athletes')
        @include('public.partials.modals.politics')
    </div>
@endsection
