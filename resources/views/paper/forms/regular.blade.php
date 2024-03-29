@extends('paper.layouts.paper')
@section('title', '- Regular Forms')
@section('navbar', 'Regular Forms')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <form method="#" action="#">
          <div class="card-header">
            <h4 class="card-title">
              Stacked Form
            </h4>
          </div>
          <div class="card-content">
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
          </div>
        </form>
      </div> <!-- end card -->
    </div> <!--  end col-md-6  -->
    <div class="col-md-6">
      <div class="card">
        <form class="form-horizontal">
          <div class="card-header">
            <h4 class="card-title">
              Horizontal Form
            </h4>
          </div>
          <div class="card-content">
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
          </div>
          <div class="card-footer">
            <div class="form-group">
              <label class="col-md-3"></label>
              <div class="col-md-9">
                <button type="submit" class="btn btn-fill btn-info">
                  Sign in
                </button>
              </div>
            </div>
          </div>
        </form>
      </div> <!-- end card -->
    </div> <!--  end col-md-6  -->
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form Elements</h4>
        </div>
        <div class="card-content">
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
                  <div class="checkbox">
                    <input id="checkbox1" type="checkbox">
                    <label for="checkbox1">
                      First checkbox
                    </label>
                  </div>

                  <div class="checkbox">
                    <input id="checkbox2" type="checkbox">
                    <label for="checkbox2">
                      Second checkbox
                    </label>
                  </div>

                  <div class="radio">
                    <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                    <label for="radio1">
                      First Radio
                    </label>
                  </div>

                  <div class="radio">
                    <input type="radio" name="radio1" id="radio2" value="option2">
                    <label for="radio2">
                      Second Radio
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Inline checkboxes</label>
                <div class="col-sm-10">
                  <div class="checkbox checkbox-inline">
                    <input id="checkbox50" type="checkbox">
                    <label for="checkbox50">
                      a
                    </label>
                  </div>
                  <div class="checkbox checkbox-inline">
                    <input id="checkbox51" type="checkbox">
                    <label for="checkbox51">
                      b
                    </label>
                  </div>
                  <div class="checkbox checkbox-inline">
                    <input id="checkbox52" type="checkbox">
                    <label for="checkbox52">
                      c
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <legend>Input Variants</legend>

              <div class="form-group">
                <label class="col-sm-2 control-label">Custom Checkboxes &amp; radios</label>
                <div class="col-sm-4 col-sm-offset-1">
                  <div class="checkbox">
                    <input id="checkbox5" type="checkbox">
                    <label for="checkbox5">
                      Unchecked
                    </label>
                  </div>

                  <div class="checkbox">
                    <input id="checkbox6" type="checkbox" checked="">
                    <label for="checkbox6">
                      Checked
                    </label>
                  </div>

                  <div class="checkbox">
                    <input id="checkbox7" type="checkbox" disabled="">
                    <label for="checkbox7">
                      Disabled unchecked
                    </label>
                  </div>

                  <div class="checkbox">
                    <input id="checkbox8" type="checkbox" checked="" disabled="">
                    <label for="checkbox8">
                      Disabled checked
                    </label>
                  </div>
                </div>

                <div class="col-sm-5">
                  <div class="radio">
                    <input type="radio" name="radio10" id="radio20" value="option20">
                    <label for="radio20">
                      Radio is off
                    </label>
                  </div>

                  <div class="radio">
                    <input type="radio" name="radio10" id="radio25" value="option25" checked="">
                    <label for="radio25">
                      Radio is on
                    </label>
                  </div>

                  <div class="radio">
                    <input type="radio" name="radio30" id="radio11" value="option11" disabled="">
                    <label for="radio11">
                      Disabled radio is off
                    </label>
                  </div>

                  <div class="radio">
                    <input type="radio" name="radio30" id="radio12" value="option12" checked="" disabled="">
                    <label for="radio12">
                      Disabled radio is on
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group has-success">
                <label class="col-sm-2 control-label">Input with success</label>
                <div class="col-sm-10">
                  <input type="text" value="Success" class="form-control"/>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group has-error">
                <label class="col-sm-2 control-label">Input with error</label>
                <div class="col-sm-10">
                  <input type="text" value="Error" class="form-control"/>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="form-group column-sizing">
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
            <fieldset>
              <div class="form-group">
                <label class="col-sm-2 control-label">Textarea</label>
                <div class="col-sm-10">
                  <textarea class="form-control" placeholder="Here can be your nice text" rows="3"></textarea>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>  <!-- end card -->
    </div> <!-- end col-md-12 -->
  </div>
@endsection