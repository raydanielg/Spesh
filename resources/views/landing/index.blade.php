@extends('layouts.landing')

@section('title', 'SPESH Company Limited — Regional Leader in Logistics')

@section('content')
    @include('landing.partials.navbar')
    @include('landing.partials.hero')
    @include('landing.partials.about')
    @include('landing.partials.services')
    @include('landing.partials.clients')
    @include('landing.partials.certifications')
    @include('landing.partials.contact')
    @include('landing.partials.footer')
@endsection
