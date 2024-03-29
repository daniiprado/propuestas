@extends('paper.layouts.paper')
@section('title', '- Extended Forms')
@section('navbar', 'Extended Forms')

@section('content')
  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col-md-4">
          <h4 class="card-title">Datetime Picker</h4>
          <div class="form-group">
            <input type="text" class="form-control datetimepicker" placeholder="Datetime Picker Here"/>
          </div>
        </div>
        <div class="col-md-4">
          <h4 class="card-title">Date Picker</h4>
          <div class="form-group">
            <input type="text" class="form-control datepicker" placeholder="Date Picker Here"/>
          </div>
        </div>
        <div class="col-md-4">
          <h4 class="card-title">Time Picker</h4>
          <div class="form-group">
            <input type="text" class="form-control timepicker" placeholder="Time Picker Here"/>
          </div>
        </div>
      </div>

      <br/><br/>

      <div class="row">
        <div class="col-md-6">
          <h4 class="card-title">Switches</h4>
          <div class="col-md-4">
            <p class="category">Default</p>

            <input type="checkbox" class="switch" checked>
            <input type="checkbox" class="switch">
          </div>
          <div class="col-md-4">
            <p class="category">Plain</p>
            <input type="checkbox" class="switch-plain" checked>
            <input type="checkbox" class="switch-plain">
          </div>
          <div class="col-md-4">
            <p class="category">With Icons</p>
            <input type="checkbox" class="switch-icon" checked>
            <input type="checkbox" class="switch-icon">
          </div>
        </div>
        <div class="col-md-3">
          <h4 class="card-title">Checkboxes</h4>
          <div class="checkbox">
            <input id="checkbox1" type="checkbox">
            <label for="checkbox1">
              Unchecked
            </label>
          </div>
          <div class="checkbox">
            <input id="checkbox2" type="checkbox" checked="">
            <label for="checkbox2">
              Checked
            </label>
          </div>
          <div class="checkbox">
            <input id="checkbox3" type="checkbox" disabled="">
            <label for="checkbox3">
              Disabled unchecked
            </label>
          </div>
          <div class="checkbox">
            <input id="checkbox4" type="checkbox" checked="" disabled="">
            <label for="checkbox4">
              Disabled checked
            </label>
          </div>
        </div>
        <div class="col-sm-3">
          <h4 class="card-title">Radio</h4>
          <div class="radio">
            <input type="radio" name="radio1" id="radio1" value="option1">
            <label for="radio1">
              Radio is off
            </label>
          </div>

          <div class="radio">
            <input type="radio" name="radio1" id="radio2" value="option2" checked="">
            <label for="radio2">
              Radio is on
            </label>
          </div>

          <div class="radio">
            <input type="radio" name="radio3" id="radio3" value="option1" disabled="">
            <label for="radio3">
              Disabled radio is off
            </label>
          </div>

          <div class="radio">
            <input type="radio" name="radio4" id="radio4" value="option1" checked="" disabled="">
            <label for="radio4">
              Disabled radio is on
            </label>
          </div>
        </div>
      </div>

      <br/><br/>

      <div class="row">
        <div class="col-md-6">
          <h4 class="card-title">Tags</h4>

          <input type="text" value="Minimal, Light, New, Friends" class="tagsinput" data-role="tagsinput" data-color="success"/>

          <!-- You can change data-color="success" with one of our colors primary | warning | info | danger -->
          <br />
          <h4 class="card-title">Progress Bars</h4>
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

          <br />
          <h4 class="card-title">Sliders</h4>
          <div id="sliderRegular" class="slider slider-success"></div>
          <br>
          <div id="sliderDouble" class="slider slider-info"></div>
        </div>
        <div class="col-md-6">
          <h4 class="card-title">Customisable Select</h4>
          <div class="row">
            <div class="col-sm-6">
              <select class="selectpicker" data-style="btn btn-danger btn-block" title="Single Select" data-size="7">
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
            <div class="col-sm-6">
              <select multiple title="Multiple Select" class="selectpicker" data-style="btn-info btn-fill btn-block" data-size="7">
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
            <div class="col-sm-6">
              <br />
              <h4 class="card-title">Dropdown</h4>
              <div class="dropdown">
                <button href="#" class="btn btn-block dropdown-toggle" data-toggle="dropdown">
                  Regular
                  <b class="caret"></b>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6">
              <br />
              <h4 class="card-title">Dropup</h4>
              <div class="dropup">
                <button href="#" class="btn btn-block dropdown-toggle" data-toggle="dropdown">
                  Regular
                  <b class="caret"></b>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br/><br/>
    </div>
  </div>
@endsection

@push('scripts')
<!-- Sliders Plugin -->
<script src="{{asset('paper/assets/js/nouislider.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('paper/assets/js/moment.min.js') }}"></script>
<!--  Select Picker Plugin -->
<script src="{{ asset('paper/assets/js/bootstrap-selectpicker.js') }}"></script>
<!--  Date Time Picker Plugin is included in this js file -->
<script src="{{ asset('paper/assets/js/bootstrap-datetimepicker.js') }}"></script>
@endpush

@push('functions')
<script type="text/javascript">
  $().ready(function(){
    // Init Sliders
    demo.initFormExtendedSliders();
    // Init DatetimePicker
    demo.initFormExtendedDatetimepickers();
  });
</script>
@endpush