@extends('layouts.app')

@section('content')
<h2>Change Password</h2>

<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <label>Current Password</label><br>
    <input type="password" name="current_password"><br><br>

    <label>New Password</label><br>
    <input type="password" name="password"><br><br>

    <label>Confirm Password</label><br>
    <input type="password" name="password_confirmation"><br><br>

    <button type="submit">Update Password</button>
</form>
@endsection
