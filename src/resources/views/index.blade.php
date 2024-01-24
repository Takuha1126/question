@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')

<div class="main___title">
    <div class="main__title-item">
        <p class="main__title-about">Todoを作成しました</p>
    </div>
</div>

<div class="todo">
    <form>
    <div class="todo__ttl">
        <div class="todo__create">
            <input type="text" name="todo">
        </div>
        <div class="todo__button">
            <button type="submit">作成</button>
        </div>
    </div>
    </form>
    <div class="test">
        <div class="test__title">
            <p class="test__title-item">Todo</p>
        </div>
        <form>
        <div class="test__item">
            <div class="test__menu">
                <input type="text" name="content" value="test">
            </div>
            <div class="test__button">
                <div class="test__update">
                    <button class="test__update--blue" type="submit">更新</button>
                </div>
                <div class="test_delete">
                    <button class="test__delete--red" type="submit">削除</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection
