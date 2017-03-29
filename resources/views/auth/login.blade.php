@extends('layouts.app')
@section('content')
<div class="columns">
    <div class="column is-half is-offset-one-quarter">
        <div class="card ">
          <header class="card-header">
            <p class="card-header-title">
              Login
            </p>
          </header>
          <div class="card-content">
            <!-- Social Login -->
            @include('auth.social-login')
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="content">
                  <div class="field">
                    <div class="control is-horizontal">
                      <div class="control-label">
                        <label class="label">From</label>
                      </div>
                      <div class="control is-fullwidth">
                        <input name="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" value="{{ old('email') }}" required autofocus>
                      </div>
                    </div>
                    @include('components.forms-errors', ['field' => 'email', 'type' => 'horizontal'])
                  </div>

                  <div class="field">
                    <div class="control is-horizontal">
                      <div class="control-label">
                        <label class="label">Password</label>
                      </div>
                      <div class="control is-fullwidth">
                        <input name="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" required>
                      </div>
                    </div>
                    @include('components.forms-errors', ['field' => 'password', 'type' => 'horizontal'])
                  </div>

                  <div class="field">
                    <div class="control is-horizontal">
                        <div class="control-label">
                            <!--spacer-->
                        </div>
                        <div class="control is-horizontal">
                            <label class="checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Remember me
                            </label>
                        </div>
                    </div>
                  </div>

                  <div class="field">
                    <div class="control is-horizontal">
                        <div class="control-label">
                            <!--spacer-->
                        </div>
                        <div class="control is-horizontal">
                            <div class="control is-grouped">
                              <p class="control">
                                <button class="button is-primary">Submit</button>
                              </p>
                              <p class="control is-expanded">
                                <a href="{{ url('/password/reset') }}">
                                    Forgot password
                                </a>
                              </p>
                            </div>
                        </div>
                    </div>
                  </div>



                </div>
            </form>
          </div>
        </div>
    </div>
</div>
@endsection
