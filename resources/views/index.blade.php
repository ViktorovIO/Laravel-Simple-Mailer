@extends('layouts.app')

@section('content')
    <div class="callback">
        <form class="callback-form" method="post" action="send-feedback" style="padding-top: 50px; padding-bottom: 50px;">
            <div class="container">
                <div class="row">
                    <h3>Свяжитесь с нами</h3>
                </div>
                <div class="row">
                    <input type="text" name="name" class="callback-form__name" placeholder="Ваше имя:" required>
                </div>
                <div class="row">
                    <input type="email" name="email" class="callback-form__email" placeholder="Ваш Email:" required>
                </div>
                <div class="row">
                    <textarea name="msg" class="callback-form__message" cols="40" placeholder="Текст сообщения:" required></textarea>
                </div>
                <div class="row">
                    <input type="submit" class="callback-form__submit btn btn-outline-success" value="Отправить">
                    @csrf
                </div>
            </div>

        </form>
    </div>
@endsection
