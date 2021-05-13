@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">

                    <div class="col-sm-12">
                        <form method="POST" action="">
                            @csrf


                            <div class="form-group row">
                                <label for="email" class="">email</label>


                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                    @enderror

                            </div>

                            <div class="form-group row">
                                <label for="password" class="">subject</label>


                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                                    @enderror

                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="">message</label>


                                   <textarea class="form-control" rows=""></textarea>
                                </div>


                            <div class="form-group row mb-0">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">send</button>
                                </div>
                            </div>
                        </form>

            </div>
        </div>
    </div>
@endsection
