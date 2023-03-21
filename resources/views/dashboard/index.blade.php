@extends('layout.app')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    @foreach ($datas as $data)
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="card-style-3 mb-30 rounded-4">
            <div class="card-content" style="display: flex; flex-direction: column; gap: 10px;">
                <h6 class="fw-semibold">Total {{ucwords($data)}}</h6>
                <h1 class="fw-bold text-secondary">100</h1>
                <p class="text-secondary" style="font-size: 0.8rem;">{{ucwords($data)}} Masyarakat</p>
            </div>
        </div>
        <!-- end card-->
    </div>
    @endforeach
</div>
@endsection
