@extends('layout.main')

@section('title')
    Login Page
@endsection

@section('content')
<div class="photo-bg">
    <div style="background-image: url('{{ asset('assets/wallpaper1.jpg') }}');"></div>
</div>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>
    <div class="containter m-4">
        <div class="row justify-content-md-center">
            <div class="col-3 user-modal">
                <div class="user-modal-back"></div>
                <div class="user-modal-headings">LOGIN</div>
                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputEmail" id="inputEmail" aria-describedby="emailHelp" placeholder=" ">
                        <label for="inputEmail">Email address</label>
                        <div class="form-border">
                            <div></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder=" ">
                        <label for="inputPassword">Password</label>
                        <div class="form-border">
                            <div></div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="checkRememberMe" id="checkRememberMe">
                        <label class="form-check-label" for="checkRememberMe">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
                @if (count($errors) > 0)
                    <div class="alert alert-danger m-2">
                        <ul>
                            <li>{{$errors->first()}}</li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection