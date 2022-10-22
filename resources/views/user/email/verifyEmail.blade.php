<h1>Подтверждение вашей почты</h1>
<p> Привет {{$email}}</p>

<div>Для подтверждения пожалуйста перейдите по ссылке:
    <a href="{{route('auth.email-submit-verification', ['token' => $token, 'email'=>$email])}}">
        {{route('auth.email-submit-verification', ['token' => $token])}}
    </a>
</div>
<p>Если вы не отправлялил данный запрос,пожалуйста проигнорируйте это письмо</p>
