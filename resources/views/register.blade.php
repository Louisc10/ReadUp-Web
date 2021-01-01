@extends('layout.main')

@section('title')
    Register Page
@endsection

@section('content')
<div class="photo-bg">
    <div style="background-image: url('{{ asset('assets/wallpaper3.jpg') }}');"></div>
</div>
    <div class="containter m-4">
        <div class="row justify-content-md-center">
            <div class="col-3 user-modal">
                <div class="user-modal-back"></div>
                <div class="user-modal-headings">REGISTER</div>
                <form action="{{ url('/register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputUsername" id="inputUsername" value="{{old('inputUsername')}}" aria-describedby="usenameHelp" placeholder=" ">
                        <label for="inputUsername">Username</label>
                        <div class="form-border">
                            <div></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="inputEmail" id="inputEmail" value="{{old('inputEmail')}}" aria-describedby="emailHelp" placeholder=" ">
                        <label for="inputEmail">Email address</label>
                        <div class="form-border">
                            <div></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword" value="{{old('inputPassword')}}" placeholder=" ">
                        <label for="inputPassword">Password</label>
                        <div class="form-border">
                            <div></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="inputConfirmPassword" id="inputConfirmPassword" value="{{old('inputConfirmPassword')}}" placeholder=" ">
                        <label for="inputConfirmPassword">Confirm Password</label>
                        <div class="form-border">
                            <div></div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: flex-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                @if (count($errors) > 0)
                    <div class="alert alert-danger m-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection