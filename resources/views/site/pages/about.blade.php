@extends('site.layout.main-layout')

@section('title', 'United Podcast | من نحن')
@section('about_active', 'active')

@section('content')
@php
    $about = App\Models\About::first();
@endphp
@if($about)
<style>
    .about::after {
        width: 80px;
        height: 80px;
        content: '';
        position: absolute;
        border-top: 3px solid;
        top: 0;
        right: 0;
        border-right: 3px solid;
        border-color: #040486;
        border-radius: 0 10px 0 0
    }
    .about::before {
        width: 80px;
        height: 80px;
        content: '';
        position: absolute;
        border-left: 3px solid;
        bottom: 0;
        left: 0;
        border-bottom: 3px solid;
        border-color: #040486;
        border-radius: 0 0 0 10px
    }
    @media (max-width: 575.98px) {
        .about {
            grid-template-columns: 1fr !important;
            padding: 15px !important
        }
        .about p {
            font-size: 14px !important
        }
    } 
</style>
<div class="container" style="margin-top: 2rem; margin-bottom: 5rem">

    <div class="about" style="padding: 1.5rem;width: 100%;margin: auto;position: relative;display: grid;grid-template-columns: 1fr 1fr;gap: 2rem;">
        <img src="{{asset('/assets/img/about.png')}}" alt="" style="width: 100%;border-radius: 10px">
        <div>
            <h1 style="font-weight: 600;color: #0d0d0d;">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-square" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#0d0d0d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 9h.01" />
                    <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z" />
                    <path d="M11 12h1v4h1" />
                </svg>
                {{ $about->title }}</h1>
                <p style="line-height: 25px;margin-bottom: 0;">{{ $about->about }}</p>
            </div>
        </div>
</div>
@endif
@endsection

