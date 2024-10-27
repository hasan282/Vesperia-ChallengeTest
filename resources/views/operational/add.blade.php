@extends('layout.admin')

@section('content')
    <div class="card">

        <div class="card-header">
            <h3 class="card-title">{{ $subms['name'] }}</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            @php
                [$month, $quarter, $dateInc, $dateFound, $desc, $rootCause] = $subms['payloads'];
                $monthValue = 1;
            @endphp

            <div class="form-group">
                <p class="text-bold ">{{ $month['label'] }}</p>
                <div class="row" id="{{ $month['id'] }}">
                    @foreach ($month['options'] as $option)
                        <div class="icheck-primary d-inline col-12">
                            <input type="radio" id="{{ $option['id'] }}" name="monthlist" value="{{ $monthValue++ }}">
                            <label for="{{ $option['id'] }}">{{ $option['label'] }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="form-group">
                <p class="text-bold ">{{ $month['label'] }}</p>
                <div class="row" id="{{ $month['id'] }}">
                    @foreach ($month['options'] as $option)
                        <div class="icheck-primary d-inline col-12">
                            <input type="radio" id="{{ $option['id'] }}" name="monthlist" value="{{ $monthValue++ }}">
                            <label for="{{ $option['id'] }}">{{ $option['label'] }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
