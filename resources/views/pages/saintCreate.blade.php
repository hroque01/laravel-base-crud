@extends('layouts.main-layout')

@section('main')
    <h1>CREATE A NEW SAINT</h1>
    <form action="">
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="lastname">Last name</label>
        <input type="text" name="lastname">
        <br>
        <label for="place_of_birth">Place Of Birth</label>
        <input type="text" name="place_of_brith">
        <br>
        <label for="benedition">Benedition</label>
        <input type="text" name="benedition">
        <br>
        <label for="miracles">Miracles</label>
        <input type="text" name="miracles">
        <br>
        <input type="submit" value="Create new saint">
    </form>
@endsection