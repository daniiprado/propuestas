@extends('light.layouts.light')

@section('title', '- Extended Form')
@section('navbar', 'Extended Form')

@section('content')
  <div class="card">
    <div class="content">

      <div class="row">
        <div class="col-md-4">
          <h4 class="title">Datetime Picker</h4>
          <div class="form-group">
            <input type="text" class="form-control datetimepicker" placeholder="Datetime Picker Here"/>
          </div>
        </div>
        <div class="col-md-4">
          <h4 class="title">Date Picker</h4>
          <div class="form-group">
            <input type="text" class="form-control datepicker" placeholder="Date Picker Here"/>
          </div>
        </div>
        <div class="col-md-4">
          <h4 class="title">Time Picker</h4>
          <div class="form-group">
            <input type="text" class="form-control timepicker" placeholder="Time Picker Here"/>
          </div>
        </div>
      </div>

      <br /><br />

      <div class="row">
        <div class="col-md-6">
          <legend>Switches</legend>

          <div class="col-md-4">
            <p class="category">Default</p>
            <input type="checkbox" checked data-toggle="switch"/>
            <input type="checkbox" data-toggle="switch" />

          </div>

          <div class="col-md-4">
            <p class="category">Plain</p>
            <div class="switch"
                 data-on-label=""
                 data-off-label="">
              <input type="checkbox" checked/>
            </div>
            <div class="switch"
                 data-on-label=""
                 data-off-label="">
              <input type="checkbox"/>
            </div>
          </div>

          <div class="col-md-4">
            <p class="category">With Icons</p>
            <div class="switch"
                 data-on-label="<i class='fa fa-check'></i>"
                 data-off-label="<i class='fa fa-times'></i>">
              <input type="checkbox" checked/>
            </div>
            <div class="switch"
                 data-on-label="<i class='fa fa-check'></i>"
                 data-off-label="<i class='fa fa-times'></i>">
              <input type="checkbox"/>
            </div>
          </div>
        </div>

      </div>

      <br /><br />

      <div class="row">
        <div class="col-md-6">
          <legend>Tags</legend>

          <!-- You can change "tag-azure" with with "tag-blue", "tag-green", "tag-orange","tag-red" and you can also add "tag-fill" for having filled tags -->

          Regular: <input name="tagsinput" class="tagsinput tag-azure" value="Minimal, Light, New, Friends" />
          Filled: <input name="tagsinput" class="tagsinput tag-azure tag-fill" value="Design & UI, Inspiration, Business, Lifestyle" />
        </div>

        <div class="col-md-6">
          <legend>Customisable Select</legend>
          <div class="row">
            <div class="col-md-6">
              <select name="cities" class="selectpicker" data-title="Single Select" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                <option value="id">Bahasa Indonesia</option>
                <option value="ms">Bahasa Melayu</option>
                <option value="ca">Català</option>
                <option value="da">Dansk</option>
                <option value="de">Deutsch</option>
                <option value="en">English</option>
                <option value="es">Español</option>
                <option value="el">Eλληνικά</option>
                <option value="fr">Français</option>
                <option value="it">Italiano</option>
                <option value="hu">Magyar</option>
                <option value="nl">Nederlands</option>
                <option value="no">Norsk</option>
                <option value="pl">Polski</option>
                <option value="pt">Português</option>
                <option value="fi">Suomi</option>
                <option value="sv">Svenska</option>
                <option value="tr">Türkçe</option>
                <option value="is">Íslenska</option>
                <option value="cs">Čeština</option>
                <option value="ru">Русский</option>
                <option value="th">ภาษาไทย</option>
                <option value="zh">中文 (简体)</option>
                <option value="zh-TW">中文 (繁體)</option>
                <option value="ja">日本語</option>
                <option value="ko">한국어</option>
              </select>
            </div>
            <div class="col-md-6">
              <select multiple data-title="Multiple Select" name="currency" class="selectpicker" data-style="btn-info btn-fill btn-block" data-menu-style="dropdown-blue">
                <option value="ARS">ARS</option>
                <option value="AUD">AUD</option>
                <option value="BRL">BRL</option>
                <option value="CAD">CAD</option>
                <option value="CHF">CHF</option>
                <option value="CNY">CNY</option>
                <option value="CZK">CZK</option>
                <option value="DKK">DKK</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
                <option value="HKD">HKD</option>
                <option value="HUF">HUF</option>
                <option value="IDR">IDR</option>
                <option value="ILS">ILS</option>
                <option value="INR">INR</option>
                <option value="JPY">JPY</option>
                <option value="KRW">KRW</option>
                <option value="MYR">MYR</option>
                <option value="MXN">MXN</option>
                <option value="NOK">NOK</option>
                <option value="NZD">NZD</option>
                <option value="PHP">PHP</option>
                <option value="PLN">PLN</option>
                <option value="RUB">RUB</option>
                <option value="SEK">SEK</option>
                <option value="SGD">SGD</option>
                <option value="TWD">TWD</option>
                <option value="USD">USD</option>
                <option value="VND">VND</option>
                <option value="ZAR">ZAR</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <br /><br />

      <div class="row">
        <div class="col-md-6">
          <legend>Progress Bars</legend>

          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar progress-bar-success" style="width: 35%">
              <span class="sr-only">35% Complete (success)</span>
            </div>
            <div class="progress-bar progress-bar-warning" style="width: 20%">
              <span class="sr-only">20% Complete (warning)</span>
            </div>
            <div class="progress-bar progress-bar-danger" style="width: 10%">
              <span class="sr-only">10% Complete (danger)</span>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <legend>Sliders</legend>

          <div id="slider-default" class="slider-info"></div>
          <br>
          <div id="slider-range" class="slider-success"></div>
        </div>

      </div>

    </div>
  </div>
@endsection

@push('scripts')
<!--  Select Picker Plugin -->
<script src="{{ asset('light/assets/js/bootstrap-selectpicker.js') }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('light/assets/js/moment.min.js') }}"></script>
<!--  Date Time Picker Plugin is included in this js file -->
<script src="{{ asset('light/assets/js/bootstrap-datetimepicker.js') }}"></script>
@endpush

@push('functions')
  <script type="text/javascript">
    $().ready(function(){
      demo.initFormExtendedSliders();
      demo.initFormExtendedDatetimepickers();
    });  </script>
@endpush