@extends('layouts.app')
@section('content')
  <!--Middle Part Start-->
  <div class="col-sm-9" id="content">
    <h1 class="title">ثبت نام حساب کاربری</h1>
    <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="{{route('login')}}">صفحه لاگین</a> مراجعه کنید.</p>
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
      @csrf
      <fieldset id="account">
        <legend>اطلاعات شخصی شما</legend>
        <div style="display: none;" class="form-group required">
          <label class="col-sm-2 control-label">گروه مشتری</label>
          <div class="col-sm-10">
            <div class="radio">
              <label>
                <input type="radio" checked="checked" value="1" name="customer_group_id">
                پیشفرض</label>
            </div>
          </div>
        </div>
        <div class="form-group required">
          <label for="input-firstname" class="col-sm-2 control-label">نام</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="input-firstname" placeholder="نام" value="{{ old('name') }}" name="name" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>

        <div class="form-group required">
          <label for="input-email" class="col-sm-2 control-label">آدرس ایمیل</label>
          <div class="col-sm-10">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="input-email" placeholder="آدرس ایمیل" value="{{ old('email') }}" name="email" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
      </fieldset>

      <fieldset>
        <legend>رمز عبور شما</legend>
        <div class="form-group required">
          <label for="input-password" class="col-sm-2 control-label">رمز عبور</label>
          <div class="col-sm-10">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="input-password" placeholder="رمز عبور" value="" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-group required">
          <label for="input-confirm" class="col-sm-2 control-label">تکرار رمز عبور</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="input-confirm" placeholder="تکرار رمز عبور" value="" name="password_confirmation" password_confirmation>
          </div>
        </div>
      </fieldset>

      <div class="buttons">
        <div class="pull-right">
          <input type="checkbox" value="1" name="agree">
          &nbsp;<a class="agree" href="#">
            <b>
              من سیاست حریم خصوصی را خوانده‌ام و با آن موافق هستم
            </a> &nbsp;
          <input type="submit" class="btn btn-primary" value="ادامه">
        </div>
      </div>
    </form>
  </div>
@endsection
