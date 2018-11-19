@extends('layouts.adheader')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<button >click me</button>
<script>
    $(document).ready(function(){
        $('button').click(function(){

    $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
        type: 'POST',
        url: "{{route('list_nv')}}",
        data: {
            'data' : 'aasf'
        },

        success: function(dt){
             console.log(dt);
        },
        error: function(dt, textStatus, errorThrown){
            console.log(dt);
        }
    });
        })
    });
</script>
@endsection