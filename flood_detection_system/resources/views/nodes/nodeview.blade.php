@extends('layouts.master')
@section('content')


<!-- Intro Header -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="jumbotron">
                    @if (Auth::guest())

                    @else
                        <a href="/nodes/{{$node->id}}/edit" class="btn btn-default">Edit node</a>
                        {!!Form::open(['action'=>['NodesController@destroy', $node->id], 'method'=>'POST', 'onsubmit'=>"return confirm('Do you really want to delete?');" , 'class'=>'pull-right'])!!}
                            {{Form::hidden('_method' , 'DELETE')}}
                            {{Form::submit('delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('[data-toggle=confirmation]').confirmation({
                rootSelector: '[data-toggle=confirmation]',
                onConfirm: function (event, element) {
                    element.trigger('confirm');
                }
            });


            $(document).on('confirm', function (e) {
                var ele = e.target;
                e.preventDefault();


                $.ajax({
                    url: ele.href,
                    type: 'DELETE',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data['success']) {
                            $("#" + data['tr']).slideUp("slow");
                            alert(data['success']);
                        } else if (data['error']) {
                            alert(data['error']);
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });


                return false;
            });
        });
    </script>
@endsection
