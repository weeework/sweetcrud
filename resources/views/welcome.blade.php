<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon_1.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Chart C3 -->
    <link href="{{ url('/') }}/assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

    <!-- DataTables -->
    <link href="{{ url('/') }}/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <!-- DatePicker -->
    <link href="{{ url('/') }}/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{{ url('/') }}/assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <link href="{{ url('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link href="{{ url('/') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="{{ url('/') }}/assets/js/modernizr.min.js"></script>

</head>


<body>


<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <a href="index.html" class="logo">
                    <span>Ub<i class="md md-album"></i>ld</span>
                </a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}" class="nav-link waves-effect waves-light nav-user">Login</a></li>
                        <li><a href="{{ route('register') }}" class="nav-link waves-effect waves-light nav-user">Register</a></li>
                    @else
                        <li class="navbar-c-items">
                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

        </div>
    </div>
</header>
<!-- End Navigation Bar-->


<div class="wrapper">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group pull-right m-t-15">
                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <h4 class="page-title">Dashboard</h4>
                <p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="card-box waves-effect waves-light">
                    <div class="bar-widget">
                        <div class="table-box">
                            <div class="table-detail">
                                <div class="iconbox bg-purple">
                                    <i class="icon-layers"></i>
                                </div>
                            </div>

                            <div class="table-detail">
                                <h4 class="m-t-0 m-b-5"><b>Partnership</b></h4>
                                <h5 class="text-muted m-b-0 m-t-0">Partner Splash, Promo, Banner</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card-box">
                    <div class="bar-widget">
                        <div class="table-box">
                            <div class="table-detail">
                                <div class="iconbox bg-inverse">
                                    <i class="icon-layers"></i>
                                </div>
                            </div>


                            <div class="table-detail">
                                <h4 class="m-t-0 m-b-5"><b>Customer</b></h4>
                                <h5 class="text-muted m-b-0 m-t-0">Customer, Orders</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card-box">
                    <div class="bar-widget">
                        <div class="table-box">
                            <div class="table-detail">
                                <div class="iconbox bg-warning">
                                    <i class="icon-layers"></i>
                                </div>
                            </div>

                            <div class="table-detail">
                                <h4 class="m-t-0 m-b-5"><b>Data Master</b></h4>
                                <h5 class="text-muted m-b-0 m-t-0">Users, Jobs, Architects, Gallery</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card-box">
                    <div class="bar-widget">
                        <div class="table-box">
                            <div class="table-detail">
                                <div class="iconbox bg-purple">
                                    <i class="icon-layers"></i>
                                </div>
                            </div>

                            <div class="table-detail">
                                <h4 class="m-t-0 m-b-5"><b>Settings</b></h4>
                                <h5 class="text-muted m-b-0 m-t-0">Cities, Company</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row Menu-->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b>Chart by Category</b></h4>

                    <div id="combine-chart"></div>
                </div>
            </div>



            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b>Chart by Status</b></h4>

                    <div id="combine-chart-2"></div>
                </div>
            </div>
        </div>
        <!-- End row C3-2-->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Default Example</b></h4>
                    <p class="text-muted font-13 m-b-30">
                        DataTables has most features enabled by default, so all you need to do to use it with
                        your own tables is to call the construction function: <code>$().DataTable();</code>.
                    </p>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>$327,900</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td>$205,500</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td>$103,600</td>
                        </tr>
                        <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td>$90,560</td>
                        </tr>
                        <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td>$342,000</td>
                        </tr>
                        <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td>$470,600</td>
                        </tr>
                        <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td>$313,500</td>
                        </tr>
                        <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>2010/03/17</td>
                            <td>$385,750</td>
                        </tr>
                        <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td>2012/11/27</td>
                            <td>$198,500</td>
                        </tr>
                        <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td>2010/06/09</td>
                            <td>$725,000</td>
                        </tr>
                        <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td>2009/04/10</td>
                            <td>$237,500</td>
                        </tr>
                        <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td>$132,000</td>
                        </tr>
                        <tr>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>35</td>
                            <td>2012/09/26</td>
                            <td>$217,500</td>
                        </tr>
                        <tr>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td>30</td>
                            <td>2011/09/03</td>
                            <td>$345,000</td>
                        </tr>
                        <tr>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td>2009/06/25</td>
                            <td>$675,000</td>
                        </tr>
                        <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                        </tr>
                        <tr>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Sidney</td>
                            <td>23</td>
                            <td>2010/09/20</td>
                            <td>$85,600</td>
                        </tr>
                        <tr>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td>$1,200,000</td>
                        </tr>
                        <tr>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Edinburgh</td>
                            <td>42</td>
                            <td>2010/12/22</td>
                            <td>$92,575</td>
                        </tr>
                        <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Singapore</td>
                            <td>28</td>
                            <td>2010/11/14</td>
                            <td>$357,650</td>
                        </tr>
                        <tr>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2011/06/07</td>
                            <td>$206,850</td>
                        </tr>
                        <tr>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>San Francisco</td>
                            <td>48</td>
                            <td>2010/03/11</td>
                            <td>$850,000</td>
                        </tr>
                        <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>20</td>
                            <td>2011/08/14</td>
                            <td>$163,000</td>
                        </tr>
                        <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sidney</td>
                            <td>37</td>
                            <td>2011/06/02</td>
                            <td>$95,400</td>
                        </tr>
                        <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                            <td>2009/10/22</td>
                            <td>$114,500</td>
                        </tr>
                        <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>London</td>
                            <td>27</td>
                            <td>2011/05/07</td>
                            <td>$145,000</td>
                        </tr>
                        <tr>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>San Francisco</td>
                            <td>22</td>
                            <td>2008/10/26</td>
                            <td>$235,500</td>
                        </tr>
                        <tr>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>Edinburgh</td>
                            <td>46</td>
                            <td>2011/03/09</td>
                            <td>$324,050</td>
                        </tr>
                        <tr>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/12/09</td>
                            <td>$85,675</td>
                        </tr>
                        <tr>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>San Francisco</td>
                            <td>51</td>
                            <td>2008/12/16</td>
                            <td>$164,500</td>
                        </tr>
                        <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>San Francisco</td>
                            <td>41</td>
                            <td>2010/02/12</td>
                            <td>$109,850</td>
                        </tr>
                        <tr>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>San Francisco</td>
                            <td>62</td>
                            <td>2009/02/14</td>
                            <td>$452,500</td>
                        </tr>
                        <tr>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>37</td>
                            <td>2008/12/11</td>
                            <td>$136,200</td>
                        </tr>
                        <tr>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td>New York</td>
                            <td>65</td>
                            <td>2008/09/26</td>
                            <td>$645,750</td>
                        </tr>
                        <tr>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2011/02/03</td>
                            <td>$234,500</td>
                        </tr>
                        <tr>
                            <td>Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>38</td>
                            <td>2011/05/03</td>
                            <td>$163,500</td>
                        </tr>
                        <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td>Tokyo</td>
                            <td>37</td>
                            <td>2009/08/19</td>
                            <td>$139,575</td>
                        </tr>
                        <tr>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2013/08/11</td>
                            <td>$98,540</td>
                        </tr>
                        <tr>
                            <td>Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/07/07</td>
                            <td>$87,500</td>
                        </tr>
                        <tr>
                            <td>Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2012/04/09</td>
                            <td>$138,575</td>
                        </tr>
                        <tr>
                            <td>Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>63</td>
                            <td>2010/01/04</td>
                            <td>$125,250</td>
                        </tr>
                        <tr>
                            <td>Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>56</td>
                            <td>2012/06/01</td>
                            <td>$115,000</td>
                        </tr>
                        <tr>
                            <td>Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>43</td>
                            <td>2013/02/01</td>
                            <td>$75,650</td>
                        </tr>
                        <tr>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>46</td>
                            <td>2011/12/06</td>
                            <td>$145,600</td>
                        </tr>
                        <tr>
                            <td>Hermione Butler</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2011/03/21</td>
                            <td>$356,250</td>
                        </tr>
                        <tr>
                            <td>Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td>London</td>
                            <td>21</td>
                            <td>2009/02/27</td>
                            <td>$103,500</td>
                        </tr>
                        <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2010/07/14</td>
                            <td>$86,500</td>
                        </tr>
                        <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>
                            <td>2008/11/13</td>
                            <td>$183,000</td>
                        </tr>
                        <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>29</td>
                            <td>2011/06/27</td>
                            <td>$183,000</td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End row Datatable -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-10">
                            <h4 class="m-t-0 header-title"><b>Date Picker</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                The datepicker is tied to a standard form input field. Click on the input to open
                                an interactive calendar in a small overlay. Click elsewhere on the page or hit the Esc
                                key to close. If a date is chosen, feedback is shown as the input's value.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8">

                            <div class="p-20">
                                <form action="#" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Default Functionality</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                            </div><!-- input-group -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Auto Close</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                            </div><!-- input-group -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Multiple Date</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple-date">
                                                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                            </div><!-- input-group -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Date Range</label>
                                        <div class="col-sm-8">
                                            <div class="input-daterange input-group" id="date-range">
                                                <input type="text" class="form-control" name="start" />
                                                <span class="input-group-addon bg-custom b-0 text-white">to</span>
                                                <input type="text" class="form-control" name="end" />
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>



                        </div>


                        <div class="col-lg-4">

                            <div class="p-20">

                                <label>Display Inline</label>
                                <div class="input-group">
                                    <div id="datepicker-inline"></div>
                                </div><!-- input-group -->

                            </div>



                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- End row Datepicker -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Sweet-Alert Examples</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        A beautiful replacement for JavaScript's "Alert".
                    </p>

                    <table class="table">
                        <thead>
                        <tr>
                            <th style="min-width:50%;">Alert Type</th>
                            <th>Example</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="middle-align">A basic message</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="sa-basic">Click me</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="middle-align">A title with a text under</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="sa-title">Click me</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="middle-align">A success message!</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="sa-success">Click me</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="middle-align">A warning message, with a function attached to the "Confirm"-button...</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="sa-warning">Click me</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="middle-align">By passing a parameter, you can execute something else for "Cancel".</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="sa-params">Click me</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="middle-align">A message with custom Image Header</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="sa-image">Click me</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="middle-align">A message with auto close timer</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="sa-close">Click me</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="middle-align">Custom HTML description and buttons</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="custom-html-alert">Click me</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="middle-align">A message with custom width, padding and background</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="custom-padding-width-alert">Click me</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="middle-align">Ajax request example</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="ajax-alert">Click me</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="middle-align">Chaining modals (queue) example</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="chaining-alert">Click me</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="middle-align">Dynamic queue example</td>
                            <td>
                                <button type="button" class="btn btn-default waves-effect waves-light btn-sm" id="dynamic-alert">Click me</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End row Sweetalert2 -->

        <!-- Footer -->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        © 2017. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </div>
</div>



<!-- jQuery  -->
<script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ url('/') }}/assets/js/detect.js"></script>
<script src="{{ url('/') }}/assets/js/fastclick.js"></script>

<script src="{{ url('/') }}/assets/js/jquery.slimscroll.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.blockUI.js"></script>
<script src="{{ url('/') }}/assets/js/waves.js"></script>
<script src="{{ url('/') }}/assets/js/wow.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.nicescroll.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.scrollTo.min.js"></script>

<script src="{{ url('/') }}/assets/js/jquery.core.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.app.js"></script>

<!--C3 Chart-->
<script type="text/javascript" src="{{ url('/') }}/assets/plugins/d3/d3.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/assets/plugins/c3/c3.min.js"></script>
<script src="{{ url('/') }}/assets/pages/jquery.chart.js"></script>

<!-- Datatables -->
<script src="{{ url('/') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="{{ url('/') }}/assets/pages/datatables.init.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
    });
</script>

<!-- Datepicker -->
<script src="{{ url('/') }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {

        // Date Picker
        jQuery('#datepicker').datepicker({
            format: "yyyy-mm-dd"
        });
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: "yyyy-mm-dd"
        });
        jQuery('#datepicker-inline').datepicker();
        jQuery('#datepicker-multiple-date').datepicker({
            format: "mm/dd/yyyy",
            clearBtn: true,
            multidate: true,
            multidateSeparator: ","
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });

    });
</script>

<!-- Sweet-Alert 2 -->
<script src="{{ url('/') }}/assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="{{ url('/') }}/assets/pages/jquery.sweet-alert2.init.js"></script>


</body>
</html>
