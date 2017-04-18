@extends('material.layouts.pages')

@section('title', '- Lock')

@section('page-class', 'lock-page')
@section('page-color', 'black')
@section('page-image', asset('material/assets/img/lock.jpg'))
@section('class-lock', 'active')


@section('content')
  <div class="content">
    <form method="#" action="#">
      <div class="card card-profile card-hidden">
        <div class="card-avatar">
          <a href="javascript:;">
            <img class="avatar" src="{{ $user['picture'] }}" alt="Avatar">
          </a>
        </div>
        <div class="card-content">
          <h4 class="card-title">{{ $user['name'] }}</h4>
          <div class="form-group label-floating">
            <label class="control-label">Enter Password</label>
            <input type="password" class="form-control">
          </div>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-rose btn-round">Unlock</button>
        </div>
      </div>
    </form>
  </div>
@endsection