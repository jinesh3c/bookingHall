$(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $("#location").keyup(function() {
                var location = $("#location").val()
                console.log(location)
                $.ajax({
                    url: '/ajaxHall',
                    data:{
                        _token: CSRF_TOKEN,
                        keyword: $('#location').val()
                    },
                    dataType: 'JSON',
                    success:function(data){
                        var halls = data.msg;
                        $('#halls').html('');
                        console.log(data.msg)
                        $.each(halls, function(index, value){
                            $('#halls').append($('<option>',{value:value.id}).text(value.name));
                        });
                    }
                })
            });
            $("#postForm").click(function(){
                $.ajax({
                    /* the route pointing to the post function */
                    url: '/ajaxBook',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN, 
                        user_id:$("#user_id").val(),
                        hall:$("#halls").val(),
                        start_date:$("#start_date").val(),
                        end_date:$("#end_date").val(),
                    },
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        console.log(data.status)
                        if(data.status=='success'){
                            $("#message").html("<p class='alert alert-success'>your booking has been confirmed</p>"); 
                            // alert('your booking set successfully')
                        }else{
                            $("#message").html("<p class='alert alert-danger'>Hall is not available for booking</p>");
                            // alert('Hall is not Availabile')
                        }
                    },
                    error: function(error) {
                        console.log(error.responseJSON.errors)
                        $.each(error.responseJSON.errors, function(index, value){
                            $(`.error_${index}`).append('<strong class="errors">'+value+'</strong>')
                        })
                    }
                }); 
            });
       });