@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">

                    <div class="col-sm-12">
                        <form method="POST" action="{{route('postemail')}}">
                            @csrf


                            <div class="form-group row">
                                <label for="email" class="">email</label>


                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="type your email " >

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>pls fill you email</strong>
                                    </span>
                                    @enderror

                            </div>

                            <div class="form-group row">
                                <label for="password" class="">subject</label>


                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" placeholder="subject" >

                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>field can not be empty</strong>
                                    </span>
                                    @enderror

                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="">message</label>


                                   <textarea  rows="5" cols="150" name="message" class="form-control @error('message') is-invalid @enderror" placeholder="type your message"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                        <strong>message field is empty</strong>
                            </span>
                                @enderror
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
