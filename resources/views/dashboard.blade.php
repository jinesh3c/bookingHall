@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bookings') }}</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Booked BY</th>
                            <th>Hall</th>
                            <th>From</th>
                            <th>To</th>
                        </tr>
                        @foreach($bookings as $k=>$book)
                        <tr>
                            <td>{{$k+1}}</td>
                            <td>{{$book->user->name}}</td>
                            <td>{{$book->hall->name}}</td>
                            <td>{{$book->start_date}}</td>
                            <td>{{$book->end_date}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
