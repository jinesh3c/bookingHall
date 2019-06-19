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
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Select Hall') }}</label>

                            <div class="col-md-6">
                                <select name="hall_id" id="hall_id" class="form-control">
                                    <option value="{{null}}">select a hall</option>
                                    @foreach($halls as $hall)
                                    <option value="{{$hall->id}}">{{$hall->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

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
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</script>
<script>
        $(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $("#postForm").click(function(){
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/ajaxBook',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN, 
                        user_id:$("#user_id").val(),
                        hall_id:$("#hall_id").val(),
                        start_date:$("#start_date").val(),
                        end_date:$("#end_date").val(),
                    },
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        console.log(data.status)
                        if(data.status=='success'){
                            $("#message").html("<p class='alert alert-success'>You booked a Hall Successfully</p>"); 
                            alert('your booking set successfully')
                        }else{
                            $("#message").html("<p class='alert alert-danger'>Hall is not Available</p>");
                            alert('Hall is not Availabile')
                        }
                    }
                }); 
            });
       });
    </script>
@endsection
