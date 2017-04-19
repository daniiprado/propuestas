@extends('paper.layouts.paper')

@section('title', '- Extended Table')

@section('navbar', 'Extended Table')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Table with Links</h4>
          <p class="category">Here is a subtitle for this table</p>
        </div>
        <div class="card-content table-responsive table-full-width">
          <table class="table">
            <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Name</th>
              <th>Job Position</th>
              <th class="text-right">Salary</th>
              <th class="text-right">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">1</td>
              <td>Andrew Mike</td>
              <td>Develop</td>
              <td class="text-right">&euro; 99,225</td>
              <td class="td-actions text-right">
                <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                  <i class="ti-user"></i>
                </a>
                <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                  <i class="ti-pencil-alt"></i>
                </a>
                <a href="#" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                  <i class="ti-close"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>John Doe</td>
              <td>Design</td>
              <td class="text-right">&euro; 89,241</td>
              <td class="td-actions text-right">
                <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                  <i class="ti-user"></i>
                </a>
                <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                  <i class="ti-pencil-alt"></i>
                </a>
                <a href="#" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                  <i class="ti-close"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>Alex Mike</td>
              <td>Design</td>
              <td class="text-right">&euro; 92,144</td>
              <td class="td-actions text-right">
                <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                  <i class="ti-user"></i>
                </a>
                <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                  <i class="ti-pencil-alt"></i>
                </a>
                <a href="#" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                  <i class="ti-close"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>Mike Monday</td>
              <td>Marketing</td>
              <td class="text-right">&euro; 49,990</td>
              <td class="td-actions text-right">
                <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                  <i class="ti-user"></i>
                </a>
                <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                  <i class="ti-pencil-alt"></i>
                </a>
                <a href="#" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                  <i class="ti-close"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td class="text-center">5</td>
              <td>Paul Dickens</td>
              <td>Communication</td>
              <td class="text-right">&euro; 69,201</td>
              <td class="td-actions text-right">
                <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                  <i class="ti-user"></i>
                </a>
                <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                  <i class="ti-pencil-alt"></i>
                </a>
                <a href="#" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                  <i class="ti-close"></i>
                </a>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Table with Switches</h4>
          <p class="category">With some subtitle</p>
        </div>
        <div class="card-content table-full-width">
          <table class="table table-striped">
            <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Name</th>
              <th>Job Position</th>
              <th class="text-right">Salary</th>
              <th class="text-right">Active</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="text-center">1</td>
              <td>Andrew Mike</td>
              <td>Develop</td>
              <td class="text-right">&euro; 99,225</td>
              <td class="text-right">
                <input type="checkbox" class="switch-plain">
              </td>
            </tr>
            <tr>
              <td class="text-center">2</td>
              <td>John Doe</td>
              <td>Design</td>
              <td class="text-right">&euro; 89,241</td>
              <td class="text-right">
                <input type="checkbox" class="switch-plain">
              </td>
            </tr>
            <tr>
              <td class="text-center">3</td>
              <td>Alex Mike</td>
              <td>Design</td>
              <td class="text-right">&euro; 92,144</td>
              <td class="text-right">
                <input type="checkbox" class="switch-plain" checked>
              </td>
            </tr>
            <tr>
              <td class="text-center">4</td>
              <td>Mike Monday</td>
              <td>Marketing</td>
              <td class="text-right">&euro; 49,990</td>
              <td class="text-right">
                <input type="checkbox" class="switch-plain" checked>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Table Big Boy</h4>
          <p class="category">A table for content management</p>
          <br />
        </div>
        <div class="table-responsive">
          <table class="table table-shopping">
            <thead>
            <tr>
              <th class="text-center"></th>
              <th></th>
              <th class="text-right">Price</th>
              <th class="text-right">Quantity</th>
              <th class="text-right">Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>
                <div class="img-container">
                  <img src="{{ asset('paper/assets/img/tables/agenda.png') }}" alt="Agenda">
                </div>
              </td>
              <td class="td-product">
                <strong>Get Shit Done Notebook</strong>
                <p>
                  Most beautiful agenda for the office.</p>
              </td>
              <td class="td-price">
                <small>&euro;</small>49
              </td>
              <td class="td-number td-quantity">
                1
                <div class="btn-group">
                  <button class="btn btn-sm"><i class="ti-minus"></i></button>
                  <button class="btn btn-sm"><i class="ti-plus"></i></button>
                </div>
              </td>
              <td class="td-number">
                <small>&euro;</small>49
              </td>
            </tr>
            <tr>
              <td>
                <div class="img-container">
                  <img src="{{ asset('paper/assets/img/tables/stylus.jpg') }}" alt="Stylus"/>
                </div>
              </td>
              <td class="td-product">
                <strong>Stylus</strong>
                <p>Design is not just what it looks like and feels like. Design is how it works.  </p>
              </td>
              <td class="td-price">
                <small>&euro;</small>499
              </td>
              <td class="td-number td-quantity">
                2
                <div class="btn-group">
                  <button class="btn btn-sm"><i class="ti-minus"></i></button>
                  <button class="btn btn-sm"><i class="ti-plus"></i></button>
                </div>
              </td>
              <td class="td-number">
                <small>&euro;</small>998
              </td>
            </tr>
            <tr>
              <td>
                <div class="img-container">
                  <img src="{{ asset('paper/assets/img/tables/evernote.png') }}" alt="Evernote">
                </div>
              </td>
              <td class="td-product">
                <strong>Evernote iPad Stander</strong>
                <p>A groundbreaking Retina display. All-flash architecture. Fourth-generation Intel processors.</p>
              </td>
              <td class="td-price">
                <small>&euro;</small>799
              </td>
              <td class="td-number td-quantity">
                1
                <div class="btn-group">
                  <button class="btn btn-sm"><i class="ti-minus"></i></button>
                  <button class="btn btn-sm"><i class="ti-plus"></i></button>
                </div>
              </td>
              <td class="td-number">
                <small>&euro;</small>799
              </td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td></td>
              <td class="td-total">
                Total
              </td>
              <td class="td-total">
                <small>&euro;</small>12,999
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div><!--  end card  -->
    </div> <!-- end col-md-12 -->
  </div>
@endsection