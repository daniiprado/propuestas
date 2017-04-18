@extends('paper.layouts.paper')

@section('title', '- Validation Form')

@section('navbar')
  @include('paper.components.navbar', ['title' => 'Validation Form'])
@endsection

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <form id="registerFormValidation" action="#" method="" novalidate="">
          <div class="card-header">
            <h4 class="card-title">
              Register Form
            </h4>
          </div>
          <div class="card-content">
            <div class="form-group">
              <label class="control-label">
                Email Address <star>*</star>
              </label>
              <input class="form-control"
                     name="email"
                     type="text"
                     required="true"
                     email="true"
                     autocomplete="off"
              />
            </div>
            <div class="form-group">
              <label class="control-label">Password <star>*</star></label>
              <input class="form-control"
                     name="password"
                     id="registerPassword"
                     type="password"
                     required="true"
              />
            </div>
            <div class="form-group">
              <label class="control-label">Confirm Password <star>*</star></label>
              <input class="form-control"
                     name="password_confirmation"
                     id="registerPasswordConfirmation"
                     type="password"
                     required="true"
                     equalTo="#registerPassword"
              />
            </div>
            <div class="category"><star>*</star> Required fields</div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-info btn-fill pull-right">Register</button>
            <div class="form-group pull-left">
              <label class="checkbox">
                <input type="checkbox" data-toggle="checkbox" value="subscribe">
                Subscribe to newsletter
              </label>
            </div>
            <div class="clearfix"></div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <form id="loginFormValidation" action="#" method="" novalidate="">
          <div class="card-header text-center">
            <h4 class="card-title">
              Login Form
            </h4>
          </div>
          <div class="card-content">
            <div class="form-group">
              <label class="control-label">Email Address <star>*</star></label>
              <input class="form-control"
                     name="email"
                     type="text"
                     email="true"
                     required="true"
              />
            </div>
            <div class="form-group">
              <label class="control-label">Password <star>*</star></label>
              <input class="form-control"
                     name="password"
                     id="registerPassword"
                     type="password"
                     required="true"
              />
            </div>
            <div class="category"><star>*</star> Required fields</div>
          </div>
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-info btn-fill btn-wd">Register</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <form id="allInputsFormValidation" class="form-horizontal" action="#" method="post" novalidate="">
          <div class="card-content">
            <h4 class="card-title">Type Validation</h4>
            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">
                  Required Text
                </label>
                <div class="col-sm-6">
                  <input class="form-control"
                         type="text"
                         name="required"
                         required="required"
                  />
                </div>
                <div class="col-sm-4"><code>required</code></div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">
                  Email
                </label>
                <div class="col-sm-6">
                  <input class="form-control"
                         type="text"
                         name="email"
                         email="true"
                  />
                </div>
                <div class="col-sm-4"><code>email="true"</code></div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">
                  Number
                </label>
                <div class="col-sm-6">
                  <input class="form-control"
                         type="text"
                         name="number"
                         number="true"
                  />
                </div>
                <div class="col-sm-4"><code>number="true"</code></div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">
                  Url
                </label>
                <div class="col-sm-6">
                  <input class="form-control"
                         type="text"
                         name="url"
                         url="true.html"
                  />
                </div>
                <div class="col-sm-4"><code>url="true"</code></div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group column-sizing">
                <label class="col-sm-2 control-label">
                  Equal to
                </label>
                <div class="col-sm-3">
                  <input class="form-control"
                         id="idSource"
                         type="text"
                         placeholder="#idSource"
                  />
                </div>
                <div class="col-sm-3">
                  <input class="form-control"
                         id="idDestination"
                         type="text"
                         placeholder="#idDestination"
                         equalTo="#idSource"
                  />
                </div>
                <div class="col-sm-4"><code>equalTo="#idSource"</code>
                </div>
              </div>
            </fieldset>

            <h4 class="card-title">Range validation</h4>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">
                  Min Length
                </label>
                <div class="col-sm-6">
                  <input class="form-control"
                         type="text"
                         name="min_length"
                         minLength="5"
                  />
                </div>
                <div class="col-sm-4"><code>minLength="5"</code></div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">
                  Max Length
                </label>
                <div class="col-sm-6">
                  <input class="form-control"
                         type="text"
                         name="max_length"
                         maxLength="5"
                  />
                </div>
                <div class="col-sm-4"><code>maxLength="5"</code></div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Range</label>
                <div class="col-sm-6">
                  <input class="form-control"
                         type="text"
                         name="range"
                         range="[6,10]"
                  />
                </div>
                <div class="col-sm-4"><code>range="[6,10]"</code></div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">
                  Min Value
                </label>
                <div class="col-sm-6">
                  <input class="form-control"
                         type="text"
                         name="min"
                         min="6"
                  />
                </div>
                <div class="col-sm-4"><code>min="6"</code></div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">
                  Max Value
                </label>
                <div class="col-sm-6">
                  <input class="form-control"
                         type="text"
                         name="max"
                         max="6"
                  />
                </div>
                <div class="col-sm-4"><code>max="6"</code></div>
              </div>
            </fieldset>
          </div>
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-info btn-fill">Validate Inputs</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<!--  Forms Validations Plugin -->
<script src="{{asset('paper/assets/js/jquery.validate.min.js')}}"></script>
@endpush

@push('functions')
<script type="text/javascript">
  $().ready(function(){
    $('#registerFormValidation').validate();
    $('#loginFormValidation').validate();
    $('#allInputsFormValidation').validate();
  });
</script>
@endpush