@extends('paper.layouts.paper')

@section('title', '- DataTable')

@section('navbar', 'DataTable')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h4 class="title">DataTables.net</h4>
      <p class="category">A powerful jQuery plugin handcrafted by our friends from <a href="https://datatables.net/" target="_blank">dataTables.net</a>. It is a highly flexible tool, based upon the foundations of progressive enhancement and will add advanced interaction controls to any HTML table. Please check out the <a href="https://datatables.net/manual/index" target="_blank">full documentation.</a></p>

      <br>

      <div class="card">
        <div class="card-content">
          <div class="toolbar">
            <!--Here you can write extra buttons/actions for the toolbar-->
          </div>
          <div class="fresh-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th class="disabled-sorting">Actions</th>
              </tr>
              </thead>
              <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Actions</th>
              </tr>
              </tfoot>
              <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>
                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                </td>
              </tr>
              </tbody>
            </table>
          </div>


        </div>
      </div><!--  end card  -->
    </div> <!-- end col-md-12 -->
  </div>
@endsection


@push('scripts')
<!--  Plugin for DataTables.net  -->
<script src="{{ asset('paper/assets/js/jquery.datatables.js') }}"></script>
@endpush

@push('functions')
<script type="text/javascript">
  $(document).ready(function() {

    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }
    });


    var table = $('#datatables').DataTable();
    // Edit record
    table.on( 'click', '.edit', function () {
      $tr = $(this).closest('tr');

      var data = table.row($tr).data();
      alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
    } );

    // Delete a record
    table.on( 'click', '.remove', function (e) {
      $tr = $(this).closest('tr');
      table.row($tr).remove().draw();
      e.preventDefault();
    } );

    //Like record
    table.on( 'click', '.like', function () {
      alert('You clicked on Like button');
    });

  });
</script>
@endpush