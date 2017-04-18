@extends('light.layouts.light')

@section('title', '- Regular Forms')
@section('navbar', 'Regular Forms')

@section('content')
  <div class="row">
    <div class="col-md-6">

      <div class="card">
        <div class="header">Stacked Form</div>
        <div class="content">
          <form method="#" action="#">
            <div class="form-group">
              <label>Email address</label>
              <input type="email" placeholder="Enter email" class="form-control">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
              <label class="checkbox">
                <input type="checkbox" data-toggle="checkbox" value="" checked>
                Subscribe to newsletter
              </label>
            </div>


            <button type="submit" class="btn btn-fill btn-info">Submit</button>
          </form>
        </div>
      </div> <!-- end card -->

    </div> <!--  end col-md-6  -->

    <div class="col-md-6">

      <div class="card">
        <div class="header">Horizontal Form</div>
        <div class="content">
          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-md-3 control-label">Email</label>
              <div class="col-md-9">
                <input type="email" placeholder="Email" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Password</label>
              <div class="col-md-9">
                <input type="password" placeholder="Password" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3"></label>
              <div class="col-md-9">
                <label class="checkbox">
                  <input type="checkbox" data-toggle="checkbox" value="">
                  Remember Me
                </label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3"></label>
              <div class="col-md-9">
                <button type="submit" class="btn btn-fill btn-info">Sign in</button>
              </div>
            </div>
          </form>
        </div>
      </div> <!-- end card -->

    </div> <!--  end col-md-6  -->

    <div class="col-md-12">

      <div class="card">
        <div class="header">
          <legend>Form Elements</legend>
        </div>
        <div class="content">
          <form method="get" action="" class="form-horizontal">

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">With help</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                  <span class="help-block">A block of help text that breaks onto a new line.</span>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" name="password" class="form-control">
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Placeholder</label>
                <div class="col-sm-10">
                  <input type="text" placeholder="placeholder" class="form-control">
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Disabled</label>
                <div class="col-sm-10">
                  <input type="text" placeholder="Disabled input here..." disabled="" class="form-control">
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Static control</label>
                <div class="col-sm-10">
                  <p class="form-control-static">hello@creative-tim.com</p>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Checkboxes and radios</label>
                <div class="col-sm-10">
                  <label class="checkbox">
                    <input type="checkbox" data-toggle="checkbox" value="">First Checkbox
                  </label>

                  <label class="checkbox">
                    <input type="checkbox" data-toggle="checkbox" value="">Second Checkbox
                  </label>

                  <label class="radio">
                    <input type="radio" data-toggle="radio" name="optionsRadios" value="option1" checked="">First Radio
                  </label>

                  <label class="radio">
                    <input type="radio" data-toggle="radio" name="optionsRadios" value="option2">Second Radio
                  </label>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Inline checkboxes</label>
                <div class="col-sm-10">
                  <label class="checkbox checkbox-inline">
                    <input type="checkbox" data-toggle="checkbox" value="option1">a
                  </label>

                  <label class="checkbox checkbox-inline">
                    <input type="checkbox" data-toggle="checkbox" value="option2">b
                  </label>

                  <label class="checkbox checkbox-inline">
                    <input type="checkbox" data-toggle="checkbox" value="option3">c
                  </label>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <legend>Input Variants</legend>

              <div class="form-group">
                <label class="col-sm-2 control-label">Custom Checkboxes &amp; radios</label>
                <div class="col-sm-4 col-sm-offset-1">
                  <label class="checkbox">
                    <input type="checkbox" data-toggle="checkbox" value="">
                    Unchecked
                  </label>

                  <label class="checkbox">
                    <input type="checkbox" data-toggle="checkbox" data-toggle="checkbox" value="" checked>
                    Checked
                  </label>

                  <label class="checkbox">
                    <input type="checkbox" data-toggle="checkbox" data-toggle="checkbox" value="" disabled>
                    Disabled unchecked
                  </label>

                  <label class="checkbox">
                    <input type="checkbox" data-toggle="checkbox" data-toggle="checkbox" value="" disabled checked>
                    Disabled checked
                  </label>
                </div>

                <div class="col-sm-5">
                  <label class="radio">
                    <input type="radio" data-toggle="radio" name="optionsRadios2" value="">
                    Radio is off
                  </label>
                  <label class="radio">
                    <input type="radio" data-toggle="radio" name="optionsRadios2"value="" checked>
                    Radio is on
                  </label>

                  <label class="radio">
                    <input type="radio" data-toggle="radio" name="optionsRadiosDisabled2" value="" disabled>
                    Disabled radio is off
                  </label>
                  <label class="radio">
                    <input type="radio" data-toggle="radio" name="optionsRadiosDisabled2" value="" checked disabled>
                    Disabled radio is on
                  </label>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Input with success</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control valid">
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Input with error</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control error">
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Column sizing</label>
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-md-3">
                      <input type="text" placeholder=".col-md-3" class="form-control">
                    </div>

                    <div class="col-md-4">
                      <input type="text" placeholder=".col-md-4" class="form-control">
                    </div>

                    <div class="col-md-5">
                      <input type="text" placeholder=".col-md-5" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Input groups</label>
                <div class="col-sm-3">
                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" placeholder="Username" class="form-control">
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>

        </div>
      </div>  <!-- end card -->

    </div> <!-- end col-md-12 -->
  </div>
@endsection