@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header-tapes">
                    what are we any why are we
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="justify-content: center; text-align: center; font-size: 80%;">
                        <p>We are international organization promoting music and videos from new artists all over the world.</p>
                        <p></p>
                        <p>Out aim is to make this platform the go-to way to make someone heard or seen. We are all about new artists.</p>
                        <p></p>
                        <p>Also, we have a gallery of tapes that can be exchanged with other users and download section for free stuff that everyone can use in their craft.</p>
                        <p></p>
                        <h1>HEAR US OUT ©</h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
