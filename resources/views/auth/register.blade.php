<x-loginLayout>
    <h2>Register</h2>

    @if (session()->has("success"))
        <div class="alert alert-success">
            {{session()->get("success")}}
        </div>
    @endif 
    @if (session()->has("error"))
        <div class="alert alert-success">
            {{session()->get("error")}}
        </div>
    @endif

    <form action="{{ route('register.post') }}" method="POST">
        @csrf
        <div>
            Username: <input type="text" name="username" id="txt_username" required><br><br>
            Email: <input type="email" name="email" id="txt_email" required><br><br>
            Password: <input type="password" name="password" id="txt_password" required><br><br>
            Re-type Password: <input type="password" name="password_confirmation" required><br><br>
            <button type="submit">Register</button>
        </div>
    </form>
</x-loginLayout>