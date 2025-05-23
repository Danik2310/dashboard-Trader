@extends('layouts.app', ['class' => 'register-page', 'page' => __('Register Page'), 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
        <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                    <i class="tim-icons icon-wifi"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Marketing') }}</h3>
                    <p class="description">
                        {{ __('We\'ve created the marketing campaign of the website. It was a very interesting collaboration.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="tim-icons icon-triangle-right-17"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Fully Coded in HTML5') }}</h3>
                    <p class="description">
                        {{ __('We\'ve developed the website with HTML5 and CSS3. The client has access to the code using GitHub.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Built Audience') }}</h3>
                    <p class="description">
                        {{ __('There is also a Fully Customizable CMS Admin Dashboard for this product.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 mr-auto">
            <div class="card card-register card-white">
                <div class="card-header">
                    <img class="card-img" src="{{ asset('black') }}/img/card-primary.png" alt="Card image">
                    <h4 class="card-title">{{ __('Register') }}</h4>
                </div>
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body">
                        <!--Nombre-->
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <!--Apellido-->
                        <div class="input-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Last Name') }}">
                            @include('alerts.feedback', ['field' => 'last_name'])
                        </div>
                        <!--Gender-->
                        <div class="input-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <select id="gender" name="gender" class="form-control">
                                <option value="" disabled selected>Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            @include('alerts.feedback', ['field' => 'gender'])
                        </div>
                        <!--Date of Birth-->
                        <div class="input-group{{ $errors->has('date_birth') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-calendar-60"></i>
                                </div>
                            </div>
                            <input type="text" 
                                name="date_birth" 
                                class="form-control{{ $errors->has('date_birth') ? ' is-invalid' : '' }}" 
                                placeholder="Date of Birth"
                                onfocus="(this.type='date')" 
                                onblur="if(this.value===''){this.type='text'}">
                            @include('alerts.feedback', ['field' => 'date_birth'])
                        </div>
                        <!--Email-->
                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <!--Contraseña-->
                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <!--Confirmar Contraseña-->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}">
                        </div>
                        <!--Checkboxes-->
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                {{ __('I agree to the') }}
                                <a href="#">{{ __('terms and conditions') }}</a>.
                            </label>
                        </div>
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                I accept the processing of personal data according to the <a href="#">{{ __('privacy policy') }}</a>.
                            </label>
                        </div>
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                I acknowledge that my name is correct and matches the government-issued identification.
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ __('Get Started') }}</button>
                    </div>
                </form>
            </div>
        </div>

        <!--Color de Gender Select-->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var gender = document.getElementById('gender');
                function updateColor() {
                    gender.style.color = gender.value === "" ? "#b0b0b0" : "#222a42";
                }
                updateColor();
                gender.addEventListener('change', updateColor);
            });
        </script>
    </div>
@endsection
