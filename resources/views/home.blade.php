@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Book A Hall') }}</div>
                <div class="card-body">
                        <div id="message" style={color="red"}></div>
                        <input type="text" name="user_id" value="{{Auth::user()->id}}" id="user_id" hidden>
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('type location') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hall" class="col-md-4 col-form-label text-md-right">{{ __('Select Hall') }}</label>

                            <div class="col-md-6">
                                <select id="halls" class="form-control" name="hall_id"></select>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="hall" class="col-md-4 col-form-label text-md-right">{{ __('Select Hall') }}</label>

                            <div class="col-md-6">
                                <select name="hall_id" id="hall_id" class="form-control">
                                    <option value="{{null}}">select a hall</option>
                                    @foreach($halls as $hall)
                                    <option value="{{$hall->id}}">{{$hall->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="start_date" class="col-md-4 col-form-label text-md-right">{{ __('From') }}</label>

                            <div class="col-md-6">
                                <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}" required autocomplete="start_date">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="end_date" class="col-md-4 col-form-label text-md-right">{{ __('To') }}</label>

                            <div class="col-md-6">
                                <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date') }}" required autocomplete="end_date">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="postForm" class="btn btn-primary">
                                    {{ __('Check Availability') }}
                                </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
<script src={{asset('js/jquery.min.js')}}></script>
<script src={{asset('js/main.js')}}></script>
@endsection
