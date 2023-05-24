@extends('layout.layout')

@section('content')
<div  class="loginpage">
         
    <form method="POST" action="/admin/create_user">
        @csrf
        <div class="inputbox">
            <label for="name" > Name</label>
            <input required type="text" name="name">
        </div>
        <div class="inputbox">
            <label for="name" >NIC</label>
            <input  type="text" name="nic">
        </div>
        <div class="inputbox">
            <label for="name" >Phone Number</label>
            <input  type="text" name="contact">
        </div>
        <div class="inputbox">
            <label for="name" >Password</label>
            <input required type="text" name="password">
        </div>
        <input type="submit" value="Register User">
    </form>
</div>
@endsection