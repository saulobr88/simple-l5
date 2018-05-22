@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    @foreach($users as $u)
                    <div class="media">
                        <div class="media-body">
                            <h4 class="media-heading">{{ $u->name }}</h4>
                            {{ $u->email }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
