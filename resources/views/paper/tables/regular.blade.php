@extends('paper.layouts.paper')

@section('title', '- Regular Table')

@section('navbar', 'Regular Table')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Striped Table</h4>
          <p class="category">Here is a subtitle for this table</p>
        </div>
        <div class="card-content table-responsive table-full-width">
          <table class="table table-striped">
            <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Country</th>
            <th>City</th>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Dakota Rice</td>
              <td>$36,738</td>
              <td>Niger</td>
              <td>Oud-Turnhout</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Minerva Hooper</td>
              <td>$23,789</td>
              <td>Curaçao</td>
              <td>Sinaai-Waas</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Sage Rodriguez</td>
              <td>$56,142</td>
              <td>Netherlands</td>
              <td>Baileux</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Philip Chaney</td>
              <td>$38,735</td>
              <td>Korea, South</td>
              <td>Overland Park</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Doris Greene</td>
              <td>$63,542</td>
              <td>Malawi</td>
              <td>Feldkirchen in Kärnten</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Mason Porter</td>
              <td>$78,615</td>
              <td>Chile</td>
              <td>Gloucester</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header">
          <h4 class="card-title">Table on Plain Background</h4>
          <p class="category">Here is a subtitle for this table</p>
        </div>
        <div class="card-content table-responsive table-full-width">
          <table class="table table-hover">
            <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Country</th>
            <th>City</th>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Dakota Rice</td>
              <td>$36,738</td>
              <td>Niger</td>
              <td>Oud-Turnhout</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Minerva Hooper</td>
              <td>$23,789</td>
              <td>Curaçao</td>
              <td>Sinaai-Waas</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Sage Rodriguez</td>
              <td>$56,142</td>
              <td>Netherlands</td>
              <td>Baileux</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Philip Chaney</td>
              <td>$38,735</td>
              <td>Korea, South</td>
              <td>Overland Park</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Doris Greene</td>
              <td>$63,542</td>
              <td>Malawi</td>
              <td>Feldkirchen in Kärnten</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Mason Porter</td>
              <td>$78,615</td>
              <td>Chile</td>
              <td>Gloucester</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Regular Table with Colors</h4>
          <p class="category">Here is a subtitle for this table</p>
        </div>
        <div class="card-content table-responsive table-full-width">
          <table class="table table-hover">
            <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Country</th>
            <th>City</th>
            </thead>
            <tbody>
            <tr class="success">
              <td>1</td>
              <td>Dakota Rice (Success)</td>
              <td>$36,738</td>
              <td>Niger</td>
              <td>Oud-Turnhout</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Minerva Hooper</td>
              <td>$23,789</td>
              <td>Curaçao</td>
              <td>Sinaai-Waas</td>
            </tr>
            <tr class="info">
              <td>3</td>
              <td>Sage Rodriguez (Info)</td>
              <td>$56,142</td>
              <td>Netherlands</td>
              <td>Baileux</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Philip Chaney</td>
              <td>$38,735</td>
              <td>Korea, South</td>
              <td>Overland Park</td>
            </tr>
            <tr class="danger">
              <td>5</td>
              <td>Doris Greene (Danger)</td>
              <td>$63,542</td>
              <td>Malawi</td>
              <td>Feldkirchen in Kärnten</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Mason Porter</td>
              <td>$78,615</td>
              <td>Chile</td>
              <td>Gloucester</td>
            </tr>
            <tr class="warning">
              <td>7</td>
              <td>Mike Chaney (Warning)</td>
              <td>$38,735</td>
              <td>Romania</td>
              <td>Bucharest</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection