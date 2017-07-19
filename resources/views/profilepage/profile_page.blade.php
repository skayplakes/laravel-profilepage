@extends('../master')

@section('content')


    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">Friends List</div>
        </div>
    </div>

    @foreach($user as $users) 
        <div class="container">
            <img src="{{ $users->avatar }}">
        </div>

        <div id="modal">
            <div class="container">
                    <button id="show-modal" @click="showModal = true">{{ $users->name }}</button>
            </div>
        </div>

        <br>
    @endforeach




@endsection