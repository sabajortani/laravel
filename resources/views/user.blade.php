@extends('layouts.main')

@section('title')

    USER PAGE
@endsection

@section('body')
<section class="container">

    <h1>USER PAGE WELCOME</h1>
    <h3>Users</h3>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
            <li>{{ $user->email }}</li>
            <li>{{ $user->password }}</li>
        @endforeach
    </ul>

    <div class="col-6 m-auto">
        <form action="/user/register" method="post">
            @csrf

            <div class="form-group">
                <lable>Name:</lable>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <lable>Email:</lable>
                <input class="form-control" type="email" name="email">
            </div>
            <div class="form-group">
                <lable>Password:</lable>
                <input class="form-control" type="password" name="password">
            </div>

            <button class="form-control btn btn-outline-info" type="submit">SEND</button>
        </form>
    </div>
</section>
@endsection