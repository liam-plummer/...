@extends('templates.structure')

@section('content')
    @include('components.home.homeBanner')
    @include('components.home.intro')
    @include('components.home.about')
    @include('components.home.testimonials')
    @include('components.home.services')
    @include('components.home.promotion')
    @include('components.universal.contactFooter')
@endsection