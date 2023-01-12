@extends('layouts.app')

@section('content')
  <h1>
    Длинна строки
    @isset($lenght)
      {{ $lenght }}
    @endisset
  </h1>
  <form action="{{ route('lenght') }}" method="post">
    @csrf

    <label for="text">Введите предложение</label>
    <input type="text" name="text" id="text" value="{{ $text ?? '' }}">
    <button type="submit">Подсчитать количество символов</button>
  </form>
@endsection
