@extends('layouts.app')
@section('body')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-9 main-chart">
              <!--CUSTOM CHART START -->
              <div class="border-head">
                <h3>Visite des utilisateurs</h3>
              </div>
              <div class="custom-bar-chart">
                <ul class="y-axis">
                  <li><span>10.000</span></li>
                  <li><span>8.000</span></li>
                  <li><span>6.000</span></li>
                  <li><span>4.000</span></li>
                  <li><span>2.000</span></li>
                  <li><span>0</span></li>
                </ul>
                <div class="bar">
                  <div class="title">JAN</div>
                  <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                </div>
                <div class="bar ">
                  <div class="title">FEB</div>
                  <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                </div>
                <div class="bar ">
                  <div class="title">MAR</div>
                  <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                </div>
                <div class="bar ">
                  <div class="title">AVR</div>
                  <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                </div>
                <div class="bar">
                  <div class="title">MAI</div>
                  <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                </div>
                <div class="bar ">
                  <div class="title">JUIN</div>
                  <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                </div>
                <div class="bar">
                  <div class="title">JUIL</div>
                  <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                </div>
              </div>
              <!--custom chart end-->
              <div class="row mt">
                <!-- SERVER STATUS PANELS -->
                <div class="col-md-4 col-sm-4 mb">
                  <div class="grey-panel pn donut-chart">
                    <div class="grey-header">
                      <h5>SERVER LOAD</h5>
                    </div>
                    <canvas id="serverstatus01" height="120" width="120"></canvas>
                    <script>
                      let doughnutData = [{
                          value: 70,
                          color: "#FF6B6B"
                        },
                        {
                          value: 30,
                          color: "#fdfdfd"
                        }
                      ];
                      let myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                    </script>
                    <div class="row">
                      <div class="col-sm-6 col-xs-6 goleft">
                        <p>Usage<br/>Increase:</p>
                      </div>
                      <div class="col-sm-6 col-xs-6">
                        <h2>21%</h2>
                      </div>
                    </div>
                  </div>
                  <!-- /grey-panel -->
                </div>
                <!-- /col-md-4-->
                <div class="col-md-4 col-sm-4 mb">
                  <div class="darkblue-panel pn">
                    <div class="darkblue-header">
                      <h5>DROPBOX STATICS</h5>
                    </div>
                    <canvas id="serverstatus02" height="120" width="120"></canvas>
                    <script>
                      let doughnutData = [{
                          value: 60,
                          color: "#1c9ca7"
                        },
                        {
                          value: 40,
                          color: "#f68275"
                        }
                      ];
                      let myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                    </script>
                    <p>April 17, 2014</p>
                    <footer>
                      <div class="pull-left">
                        <h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
                      </div>
                      <div class="pull-right">
                        <h5>60% Used</h5>
                      </div>
                    </footer>
                  </div>
                  <!--  /darkblue panel -->
                </div>
                <!-- /col-md-4 -->
                <div class="col-md-4 col-sm-4 mb">
                  <!-- REVENUE PANEL -->
                  <div class="green-panel pn">
                    <div class="green-header">
                      <h5>REVENUE</h5>
                    </div>
                    <div class="chart mt">
                      <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
                    </div>
                    <p class="mt"><b>$ 17,980</b><br/>Month Income</p>
                  </div>
                </div>
                <!-- /col-md-4 -->
              </div>
              <!-- /row -->
              <div class="row">
                <!-- WEATHER PANEL -->
                <div class="col-md-4 mb">
                  <div class="weather pn">
                    <i class="fa fa-cloud fa-4x"></i>
                    <h2>21º C</h2>
                    <h4>Libreville</h4>
                  </div>
                </div>
                <!-- /col-md-4-->
                <!-- DIRECT MESSAGE PANEL -->
                <div class="col-md-8 mb">
                  <div class="message-p pn">
                    <div class="message-header">
                      <h5>DIRECT MESSAGE</h5>
                    </div>
                    <div class="row">
                      <div class="col-md-3 centered hidden-sm hidden-xs">
                        <img src="{{asset('admin/img/ui-danro.jpg')}}" class="img-circle" width="65" alt="image">
                      </div>
                      <div class="col-md-9">
                        <p>
                          <name>Dan Rogers</name>
                          sent you a message.
                        </p>
                        <p class="small">3 hours ago</p>
                        <p class="message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <form class="form-inline" role="form">
                          <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputText" placeholder="Reply Dan">
                          </div>
                          <button type="submit" class="btn btn-default">Send</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- /Message Panel-->
                </div>
                <!-- /col-md-8  -->
              </div>
              <div class="row">
                <!-- TWITTER PANEL -->
                <div class="col-md-4 mb">
                  <div class="twitter-panel pn">
                    <i class="fa fa-twitter fa-4x"></i>
                    <p>Dashio is here! Take a look and enjoy this new Bootstrap Dashboard theme.</p>
                    <p class="user">@Alvrz_is</p>
                  </div>
                </div>
                <!-- /col-md-4 -->
                <div class="col-md-4 mb">
                  <!-- WHITE PANEL - TOP USER -->
                  <div class="white-panel pn">
                    <div class="white-header">
                      <h5>TOP USER</h5>
                    </div>
                    <p><img src="{{asset('admin/img/ui-zac.jpg')}}" class="img-circle" width="50" alt="image"></p>
                    <p><b>Zac Snider</b></p>
                    <div class="row">
                      <div class="col-md-6">
                        <p class="small mt">MEMBER SINCE</p>
                        <p>2012</p>
                      </div>
                      <div class="col-md-6">
                        <p class="small mt">TOTAL SPEND</p>
                        <p>$ 47,60</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /col-md-4 -->
                <div class="col-md-4 mb">
                  <!-- INSTAGRAM PANEL -->
                  <div class="instagram-panel pn">
                    <i class="fa fa-instagram fa-4x"></i>
                    <p>@THISISYOU<br/> 5 min. ago
                    </p>
                    <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
                  </div>
                </div>
                <!-- /col-md-4 -->
              </div>
              <!-- /row -->
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                  <div class="product-panel-2 pn">
                    <div class="badge badge-hot">HOT</div>
                    <img src="{{asset('admin/img/product.jpg')}}" width="200" alt="">
                    <h5 class="mt">Flat Pack Heritage</h5>
                    <h6>TOTAL SALES: 1388</h6>
                    <button class="btn btn-small btn-theme04">FULL REPORT</button>
                  </div>
                </div>
                <!-- /col-md-4 -->
                <!--  PROFILE 02 PANEL -->
                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                  <div class="content-panel pn">
                    <div id="profile-02">
                      <div class="user">
                        <img src="{{asset('admin/img/friends/fr-06.jpg')}}" class="img-circle" width="80" alt="image">
                        <h4>DJ SHERMAN</h4>
                      </div>
                    </div>
                    <div class="pr2-social centered">
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                  </div>
                  <!-- /panel -->
                </div>
                <!--/ col-md-4 -->
                <div class="col-md-4 col-sm-4 mb">
                  <div class="green-panel pn">
                    <div class="green-header">
                      <h5>DISK SPACE</h5>
                    </div>
                    <canvas id="serverstatus03" height="120" width="120"></canvas>
                    <script>
                      let doughnutData = [{
                          value: 60,
                          color: "#2b2b2b"
                        },
                        {
                          value: 40,
                          color: "#fffffd"
                        }
                      ];
                      let myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
                    </script>
                    <h3>60% USED</h3>
                  </div>
                </div>
                <!-- /col-md-4 -->
              </div>
              <!-- /row -->
            </div>
            <!-- /col-lg-9 END SECTION MIDDLE -->
            <!-- **********************************************************************************************************************************************************
                RIGHT SIDEBAR CONTENT
                *********************************************************************************************************************************************************** -->
            <div class="col-lg-3 ds">
              <!--COMPLETED ACTIONS DONUTS CHART-->
              <div class="donut-main">
                <h4>COMPLETED ACTIONS & PROGRESS</h4>
                <canvas id="newchart" height="130" width="130"></canvas>
                <script>
                  let doughnutData = [{
                      value: 70,
                      color: "#4ECDC4"
                    },
                    {
                      value: 30,
                      color: "#fdfdfd"
                    }
                  ];
                  let myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
                </script>
              </div>
              <!--NEW EARNING STATS -->
              <div class="panel terques-chart">
                <div class="panel-body">
                  <div class="chart">
                    <div class="centered">
                      <span>TODAY EARNINGS</span>
                      <strong>$ 890,00 | 15%</strong>
                    </div>
                    <br>
                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                  </div>
                </div>
              </div>
              <!--new earning end-->
              <!-- RECENT ACTIVITIES SECTION -->
              <h4 class="centered mt">RECENT ACTIVITY</h4>
              <!-- First Activity -->
              <div class="desc">
                <div class="thumb">
                  <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                </div>
                <div class="details">
                  <p>
                    <muted>Just Now</muted>
                    <br/>
                    <a href="#">Paul Rudd</a> purchased an item.<br/>
                  </p>
                </div>
              </div>
              <!-- Second Activity -->
              <div class="desc">
                <div class="thumb">
                  <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                </div>
                <div class="details">
                  <p>
                    <muted>2 Minutes Ago</muted>
                    <br/>
                    <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                  </p>
                </div>
              </div>
              <!-- Third Activity -->
              <div class="desc">
                <div class="thumb">
                  <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                </div>
                <div class="details">
                  <p>
                    <muted>3 Hours Ago</muted>
                    <br/>
                    <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                  </p>
                </div>
              </div>
              <!-- Fourth Activity -->
              <div class="desc">
                <div class="thumb">
                  <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                </div>
                <div class="details">
                  <p>
                    <muted>7 Hours Ago</muted>
                    <br/>
                    <a href="#">Brando Page</a> purchased a year subscription.<br/>
                  </p>
                </div>
              </div>
              <!-- USERS ONLINE SECTION -->
              <h4 class="centered mt">TEAM MEMBERS ONLINE</h4>
              <!-- First Member -->
              <div class="desc">
                <div class="thumb">
                  <img class="img-circle" src="{{asset('admin/img/ui-divya.jpg')}}" width="35px" height="35px"  alt="image">
                </div>
                <div class="details">
                  <p>
                    <a href="#">DIVYA MANIAN</a><br/>
                    <muted>Available</muted>
                  </p>
                </div>
              </div>
              <!-- Second Member -->
              <div class="desc">
                <div class="thumb">
                  <img class="img-circle" src="{{asset('admin/img/ui-sherman.jpg')}}" width="35px" height="35px"  alt="image">
                </div>
                <div class="details">
                  <p>
                    <a href="#">DJ SHERMAN</a><br/>
                    <muted>I am Busy</muted>
                  </p>
                </div>
              </div>
              <!-- Third Member -->
              <div class="desc">
                <div class="thumb">
                  <img class="img-circle" src="{{asset('admin/img/ui-danro.jpg')}}" width="35px" height="35px" alt="image">
                </div>
                <div class="details">
                  <p>
                    <a href="#">DAN ROGERS</a><br/>
                    <muted>Available</muted>
                  </p>
                </div>
              </div>
              <!-- Fourth Member -->
              <div class="desc">
                <div class="thumb">
                  <img class="img-circle" src="{{asset('admin/img/ui-zac.jpg')}}" width="35px" height="35px" alt="image">
                </div>
                <div class="details">
                  <p>
                    <a href="#">Zac Sniders</a><br/>
                    <muted>Available</muted>
                  </p>
                </div>
              </div>
              <!-- CALENDAR-->
              <div id="calendar" class="mb">
                <div class="panel green-panel no-margin">
                  <div class="panel-body">
                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                      <div class="arrow"></div>
                      <h3 class="popover-title" style="disadding: none;"></h3>
                      <div id="date-popover-content" class="popover-content"></div>
                    </div>
                    <div id="my-calendar"></div>
                  </div>
                </div>
              </div>
              <!-- / calendar -->
            </div>
            <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
    </section>
@endsection
