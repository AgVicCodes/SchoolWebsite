@extends('layouts.app')

@section('content')
    <main class="form-section">
        <h1 class="header">Register an Account</h1>
        <form method="POST" action="/register">
            @csrf

            <label for="name">Name</label><br>
            <input type="text" name="name" id="name"><br>
            
            <label for="mail">Email</label><br>
            <input type="text" name="mail" id="mail"><br>
            
            <label for="phone">Phone</label><br>
            <input type="text" name="phone" id="phone"><br>
            
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br><br>#<br><br>

            <button type="submit" class="smb">Register</button>
        </form>
    </main>
@endsection



{{-- <x-app>
    <section>
    </section>
</x-app> --}}
