@extends('layouts.master')

@section('title')
    Halaman Pendaftaran
@endsection

@section('content')
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>

    <form action="{{ url('/welcome') }}" method="POST">
        @csrf

        <label for="first-name">First name:</label><br>
        <input type="text" id="first-name" name="first_name"><br><br>

        <label for="last-name">Last name:</label><br>
        <input type="text" id="last-name" name="last_name"><br><br>

        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label><br><br>

        <label for="nationality">Nationality:</label><br>
        <select id="nationality" name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="American">American</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label>Language Spoken:</label><br>
        <input type="checkbox" id="bahasa" name="language[]" value="Bahasa Indonesia">
        <label for="bahasa">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="language[]" value="English">
        <label for="english">English</label><br>
        <input type="checkbox" id="other-language" name="language[]" value="Other">
        <label for="other-language">Other</label><br><br>

        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio" rows="9" cols="30"></textarea><br><br>

        <button type="submit">Sign Up</button>
    </form>
@endsection