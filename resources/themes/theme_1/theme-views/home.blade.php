@extends('theme-views::layouts.app')

@section('content')
    @include('theme-views::layouts.partials._bannersec')
    @include('theme-views::layouts.partials._trendproducts')
    @include('theme-views::layouts.partials._brand_bannersec')
    @include('theme-views::layouts.partials._flash_sale_products')
    @include('theme-views::layouts.partials._featured_products')
@endsection
