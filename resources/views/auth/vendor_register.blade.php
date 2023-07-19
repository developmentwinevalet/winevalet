@extends('layouts.winevalet')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Become A Vendor</h2></div>
                    @include('layouts.menu')
                    <div class="card-body">
                        <form method="POST" action="{{ route('save-vendor') }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
