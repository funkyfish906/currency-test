@extends('layout')

@section('content')

    <div class="col-sm-8 mx-auto">
        <p>
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
            wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
            you probably haven't heard of them accusamus labore sustainable VHS.
        </p>
        <p>
            <a href="https://testing.e-id.cards/oauth/user?response_type=code&client_id={{env('client_id')}}&redirect_uri={{url('auth')}}&client_secret={{env('client_secret')}}&scope=firstname,surname,email,phone,pwhash,viber,skype,wechat,trust_level,otp,totp_secret"
               class="btn btn-primary btn-lg"> Вход »</a>
        </p>
    </div>
@endsection