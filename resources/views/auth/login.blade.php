@extends('layouts.app')

@section('content')


        <div id="layoutAuthentication" class="bg-info">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <form method="post" action="{{ url('login') }}">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">{{ __('Email') }}</label>
                                                <input name="email" class="form-control py-4" value="{{ old('email') }}" required autocomplete="email" autofocus id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">{{ __('Password') }}</label>
                                                <input name="password" class="form-control py-4" required id="password" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox" />
                                                    <label class="custom-control-label" for="remember">{{ __('Remember me') }}</label>
                                                </div>
                                            </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="#"></a>
                                                <Button class="btn btn-info" name="login">Login</Button>
                                            </div>
                                        </form>
<br>
   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>  
    </div>
   @endif



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <br>
        </div>
        @endsection

