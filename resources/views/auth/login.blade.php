<x-loginLayout>

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

    <form action="{{route('login.post')}}" method="POST">

        @csrf
        <div>
            Username<input type="text" name="username" id="txt_username" required autofocus> <br><br>
            Password<input type="password" name="password" id="txt_password" required> <br><br>
            
            <button type="submit" id="btn_login">Login</button>

            <a href="/register">Register</a>
        </div>

    </form>
 
</x-loginLayout>