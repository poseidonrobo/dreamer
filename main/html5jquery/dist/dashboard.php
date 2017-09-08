<?php
session_start();
require('dbconnect.php');
if (isset($_COOKIE['email']) && $_COOKIE['email'] != '') {
      $_POST['email'] = $_COOKIE['email'];
      $_POST['password'] = $_COOKIE['password'];
    }
    if (empty($_POST)) {
      if (empty($_COOKIE['email']) && empty($_COOKIE['password'])) {
        echo "<h1>NOOOOOO</h1>";
        header('Location: signin.php');
        exit();
      }
    }
require('../require/read_users_session.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Bootstrap Admin Template">
  <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
  <title>Dasha - Bootstrap Admin Template</title>
  <!-- Vendor styles-->
  <!-- Animate.CSS-->
  <link rel="stylesheet" href="vendor/animate.css/animate.css">
  <!-- Bootstrap-->
  <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">
  <!-- Ionicons-->
  <link rel="stylesheet" href="vendor/ionicons/css/ionicons.css">
  <!-- Material Colors-->
  <link rel="stylesheet" href="vendor/material-colors/dist/colors.css">
  <!-- Application styles-->
  <link rel="stylesheet" href="css/app.css">

  <script src="canvasjs/canvasjs.min.js"></script>

  <script type="text/javascript" >
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        title: {
          text: "Study Time"
        },
        data: [{
          type: "column",
          dataPoints: [
          { y: 5, label: "Apple" },
          { y: 3, label: "Mango" },
          { y: 2, label: "Pineapple" },
          { y: 5, label: "Grapes" },
          { y: 7, label: "Lemon" },
          { y: 8, label: "Banana" },
          { y: 4, label: "Watermelon" },
          { y: 3, label: "Coconut" },
          { y: 4, label: "Lychee" },
          { y: 5, label: "Palm" },
          { y: 7, label: "Orange" },
          { y: 1, label: "Muskmelon" },
          { y: 2, label: "Strawberry" },
          { y: 6, label: "Kiwi" },
          { y: 7, label: "Guava" },
          ]
        }]
      }); 
      chart.render();
    }
  </script>
</head>
<body class="theme-default">
  <div class="layout-container">
    <!-- top navbar-->
    <header class="header-container">
      <nav>
        <ul class="hidden-lg-up">
          <li><a class="sidebar-toggler menu-link menu-link-close" href="#"><span><em></em></span></a></li>
        </ul>
        <ul class="hidden-xs-down">
          <li><a class="covermode-toggler menu-link menu-link-close" href="#"><span><em></em></span></a></li>
        </ul>
        <h2 class="header-title"></h2>
        <ul class="float-right">
          <li><a id="header-search" href="#"><em class="ion-ios-search-strong"></em></a></li>
          <li><a id="header-settings" href="#"><em class="ion-more"></em></a></li>
          <li class="dropdown"><a class="dropdown-toggle has-badge" href="#" data-toggle="dropdown"><em class="ion-ios-keypad"></em></a>
            <!-- <div class="dropdown-menu dropdown-menu-right dropdown-scale dropdown-card"> -->
<!-- <div class="p-3">
<div class="d-flex mb-3">
<div class="wd-xs mr-3">
<div class="card bg-gradient-primary border-0">
<div class="card-block text-white text-center">
<div class="mb-1"><em class="ion-stats-bars icon-2x"></em></div><small class="text-bold">カテゴリー</small>
</div>
</div>
</div>
<div class="wd-xs">
<div class="card bg-gradient-info border-0">
<div class="card-block text-white text-center">
<div class="mb-1"><em class="ion-map icon-2x"></em></div><small class="text-bold">応援している夢</small>
</div>
</div>
</div>
</div>
<div class="d-flex">
<div class="wd-xs mr-3">
<div class="card bg-gradient-warning border-0">
<div class="card-block text-white text-center">
<div class="mb-1"><em class="ion-clock icon-2x"></em></div><small class="text-bold">履歴</small>
</div>
</div>
</div>
<div class="wd-xs">
<div class="card bg-gradient-danger border-0">
<div class="card-block text-white text-center">
<div class="mb-1"><em class="ion-plane icon-2x"></em></div><small class="text-bold">Flights</small>
</div>
</div>
</div>
</div>
</div> -->
<!-- </div> -->
</li>
<li class="dropdown"><a class="dropdown-toggle has-badge" href="#" data-toggle="dropdown"><img class="header-user-image" src="img/user/<?php echo $read_users['profile_image_path']; ?>" alt="header-user-image"><!-- <sup class="badge bg-danger">3</sup> --></a>
  <div class="dropdown-menu dropdown-menu-right dropdown-scale">
    <h6 class="dropdown-header">ユーザーメニュー</h6><a class="dropdown-item" href="#"><!-- <span class="float-right badge badge-primary">4</span> --><em class="ion-ios-email-outline icon-lg text-primary"></em>マイページ</a><a class="dropdown-item" href="#"><em class="ion-ios-gear-outline icon-lg text-primary"></em>編集</a>
    <div class="dropdown-divider" role="presentation"></div><a class="dropdown-item" href="user.login.html"><em class="ion-log-out icon-lg text-primary"></em>ログアウト</a>
  </div>
</li>
</ul>
</nav>
</header>
<!-- sidebar-->
<aside class="sidebar-container">
  <div class="brand-header">
    <div class="float-left pt-4 text-muted sidebar-close"><em class="ion-arrow-left-c icon-lg"></em></div><a class="brand-header-logo" href="#">
<!-- Logo Imageimg(src="img/logo.png", alt="logo")
--><span class="brand-header-logo-text">Dreamer</span></a>
</div>
<div class="sidebar-content">
  <div class="sidebar-toolbar">
    <div class="sidebar-toolbar-background"></div>
    <div class="sidebar-toolbar-content text-center"><a href="#"><img class="rounded-circle thumb64" src="img/user/<?php echo $read_users['profile_image_path']; ?>" alt="Profile"></a>
      <div class="mt-3">
        <div class="lead"><?php echo $read_users['user_name']; ?></div>
        <div class="text-thin">北海道</div>
      </div>
    </div>
  </div>
  <nav class="sidebar-nav">
    <ul>
      <li>
        <div class="sidebar-nav-heading">マイページ</div>
      </li>
      <li><a href="dashboard.php"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-speedometer-outline"></em></span><span>進行中の夢</span></a></li>
      <!-- <li><a href="widgets.html"><span class="float-right nav-label"><span class="badge-rounded badge-primary">!</span></span><span class="nav-icon"><em class="ion-ios-box-outline"></em></span><span>達成された夢</span></a></li> -->
<!-- <li>
<div class="sidebar-nav-heading">COMPONENTS</div>
</li> -->
<li><a href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-right"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-settings"></em></span><span>達成された夢</span></a>
  <ul class="sidebar-subnav" id="elements">
    <li><a href="buttons.html"><span class="float-right nav-label"></span><span>No.1</span></a></li>
    <li><a href="bootstrapui.html"><span class="float-right nav-label"></span><span>No.2</span></a></li>
  </ul>
</li>
<li><a href="dashboard.php"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-gear-outline"></em></span><span>編集</span></a></li>

<li>
  <div class="sidebar-nav-heading">閲覧</div>
</li>
<li><a href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-right"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-list-outline"></em></span><span>カテゴリー別</span></a>
  <ul class="sidebar-subnav" id="tables">
    <li><a href="view_c_page.php #1"><span class="float-right nav-label"></span><span>職業</span></a></li>
    <li><a href="view_c_page.php #2"><span class="float-right nav-label"></span><span>人間関係</span></a></li>
    <li><a href="view_c_page.php #3"><span class="float-right nav-label"></span><span>健康</span></a></li>
    <li><a href="view_c_page.php #4"><span class="float-right nav-label"></span><span>勉強</span></a></li>
    <li><a href="view_c_page.php #5"><span class="float-right nav-label"></span><span>お金</span></a></li>
    <li><a href="view_c_page.php #6"><span class="float-right nav-label"></span><span>その他</span></a></li>
  </ul>
</li>
      <li><a href="view_c_n_page.php"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-settings"></em></span><span>応援している夢</span></a></li>
      <li><a href="view_h_page.php"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-speedometer-outline"></em></span><span>履歴</span></a></li>
</ul>
</nav>
</div>
</aside>
<div class="sidebar-layout-obfuscator"></div>
<!-- Main section-->
<main class="main-container">
  <!-- Page content-->
  <section class="section-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <div class="welcome">
            <h1>宣言します！</h1>
            <!-- <div class="col-8 col-offset-3 text-right"> -->
            <span>730日</span>
            <!--  </div> -->


            <!-- <p>Welcome back to your Bootstrap 4 admin template.</p> -->
          </div>
          <div class="my-4">
            <!-- <button class="btn btn-oval btn-primary btn-gradient mr-2">14 Messages</button> -->
            <!-- <button class="btn btn-secondary btn-oval" type="button"><em class="ion-forward text-success mr-2 icon-lg"></em><span>View requests</span></button> -->
          </div>
          <div class="h-scroll">
            <div class="row">

              <div class="col-8 col-xs-12 col-rol-3">
                <div class="cardbox">
                  <div class="cardbox-body">
                    <div class="clearfix mb-3">
                      <!-- <div class="float-right"><small><em class="ml-2 ion-arrow-down-b"></em></small></div> -->
                      <div class="text-center">
                        <h1 style="margin-top: 20px;">グローバルエンジニアになる</h1>
                      </div>
                    </div>
                    <!-- <div class="h3" data-counter="8345">0</div> -->
                    <div class="">
                      <button class="col-xs-2 btn btn-info" type="button">応援！！</button>
                      <a href="#" class="btn btn-xs btn-info">
                        <span class="glyphicon glyphicon-thumbs-up"></span> チャット</a>
                        <span>仕事</span>
                        <p>#エンジニア #英語</p>

                        <!-- <div class="sparkline" id="sparkline2" data-bar-color="#42a5f5"></div> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cardbox col-3" style="margin-bottom: 10px; border: 100px;">
                  <div id="content">
                    <div id="timer">
                      <h2 id="name">StopWatch</h2>
                      <p id="text">
                        <span id="min">0</span>min
                        <span id="sec">00.00</span>sec
                      </p>
                      <input type="button" id="start" value="Start">
                      <input type="button" id="stop" value="Stop" disabled>
                      <input type="button" id="reset" value="Reset" disabled>
                    </div>
                  </div>
                  <button class="col-xs-2 btn btn-info" type="button" style="size: 20px; margin-bottom: 20px; ">送信</button>
                  <!-- <input type="submit" value="確認画面へ" class="btn btn-info"> -->
                </div>
              </div>
              <!-- bar chart -->
              <div class="col-lg-12">
                <div class="cardbox">
                  <div class="cardbox-body">
                    <div id="chartContainer" style="height: 400px; width: 100%;"></div>
                  </div>
                </div>
              </div>
            </section>

            <div class="col-7 col-xs-12" style="margin: 0 auto;">
              <div class="cardbox">
                <!-- START table-responsive -->
                <div class="table-responsive margin-top 5 px">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ステップ１</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="col-xs-2">
                            <h3>留学する</h3>
                          </div><br>
                        </td> 
                      </tr>
                    </tbody>
                  </table>
                  <p style="text-align: right; margin-right: 15px;">
                    <a class="btn btn-primary" id="swal-demo3" href="#">Check!</a>
                  </p>
                </div>
              </div>

              <div class="cardbox">
                <!-- START table-responsive -->
                <div class="table-responsive margin-top 5 px">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ステップ2</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="col-xs-2">
                            <h3>シリコンバレーで働く</h3>
                          </div><br>
                        </td> 
                      </tr>
                    </tbody>
                  </table>
                  <p style="text-align: right; margin-right: 15px;">
                    <a class="btn btn-primary" id="swal-demo3" href="#">Check!</a>
                  </p>
                </div>
              </div>


              <!-- 達成ボタン -->
<!-- <div class="text-center">
<input class="btn btn-pill btn-primary " type="button" value="達成！！" style="width:100px;height:50px"></button>
</div> -->
<a href="#" class="btn btn-block btn-lg bg-gradient-warning">達成</a>
</div>
</div>
</section>
<!-- Page footer-->

</main>
</div>
<!-- Search template-->
<div class="modal modal-top fade modal-search" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="modal-search-form">
          <form action="#">
            <div class="input-group">
              <div class="input-group-btn">
                <button class="btn btn-flat" type="button" data-dismiss="modal"><em class="ion-arrow-left-c icon-lg text-muted"></em></button>
              </div>
              <input class="form-control header-input-search" type="text" placeholder="Search..">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Search template-->
<!-- Settings template-->
<div class="modal-settings modal modal-right fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="mt-0 modal-title"><span>Settings</span></h4>
        <div class="float-right clickable" data-dismiss="modal"><em class="ion-close-round text-soft"></em></div>
      </div>
      <div class="modal-body">
        <p>Dark sidebar</p>
        <div class="d-flex flex-wrap mb-3">
          <div class="setting-color">
            <label class="preview-theme-default">
              <input type="radio" checked name="setting-theme" value="theme-default"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-2">
              <input type="radio" name="setting-theme" value="theme-2"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-3">
              <input type="radio" name="setting-theme" value="theme-3"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-4">
              <input type="radio" name="setting-theme" value="theme-4"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-5">
              <input type="radio" name="setting-theme" value="theme-5"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-6">
              <input type="radio" name="setting-theme" value="theme-6"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
        </div>
        <p>White sidebar</p>
        <div class="d-flex flex-wrap mb-3">
          <div class="setting-color">
            <label class="preview-theme-default">
              <input type="radio" name="setting-theme" value="theme-default-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-2">
              <input type="radio" name="setting-theme" value="theme-2-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-3">
              <input type="radio" name="setting-theme" value="theme-3-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-4">
              <input type="radio" name="setting-theme" value="theme-4-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-5">
              <input type="radio" name="setting-theme" value="theme-5-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-6">
              <input type="radio" name="setting-theme" value="theme-6-w"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
        </div>
        <p>Sidebar Gradients</p>
        <div class="d-flex flex-wrap mb-3">
          <div class="setting-color">
            <label class="preview-theme-gradient-1">
              <input type="radio" name="setting-theme" value="theme-gradient-sidebar-1"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-gradient-2">
              <input type="radio" name="setting-theme" value="theme-gradient-sidebar-2"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-gradient-3">
              <input type="radio" name="setting-theme" value="theme-gradient-sidebar-3"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-gradient-4">
              <input type="radio" name="setting-theme" value="theme-gradient-sidebar-4"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-gradient-5">
              <input type="radio" name="setting-theme" value="theme-gradient-sidebar-5"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-gradient-6">
              <input type="radio" name="setting-theme" value="theme-gradient-sidebar-6"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
        </div>
        <p>Header Gradients</p>
        <div class="d-flex flex-wrap mb-3">
          <div class="setting-color">
            <label class="preview-theme-gradient-1">
              <input type="radio" name="setting-theme" value="theme-gradient-header-1"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-gradient-2">
              <input type="radio" name="setting-theme" value="theme-gradient-header-2"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-gradient-3">
              <input type="radio" name="setting-theme" value="theme-gradient-header-3"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-gradient-4">
              <input type="radio" name="setting-theme" value="theme-gradient-header-4"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-gradient-5">
              <input type="radio" name="setting-theme" value="theme-gradient-header-5"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
          <div class="setting-color">
            <label class="preview-theme-gradient-6">
              <input type="radio" name="setting-theme" value="theme-gradient-header-6"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
        </div>
        <p>Dark content</p>
        <div class="d-flex flex-wrap mb-3">
          <div class="setting-color">
            <label class="preview-theme-dark">
              <input type="radio" name="setting-theme" value="theme-dark"><span class="ion-checkmark-round"></span><span class="square24 b"></span>
            </label>
          </div>
        </div>
        <hr>
        <p>
          <label class="custom-control custom-checkbox">
            <input class="custom-control-input" id="sidebar-cover" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Sidebar Cover</span>
          </label>
        </p>
        <p>
          <label class="custom-control custom-checkbox">
            <input class="custom-control-input" id="sidebar-showtoolbar" type="checkbox" checked><span class="custom-control-indicator"></span><span class="custom-control-description">Sidebar profile</span>
          </label>
        </p>
        <p>
          <label class="custom-control custom-checkbox">
            <input class="custom-control-input" id="fixed-footer" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Fixed Footer</span>
          </label>
        </p>
        <hr>
        <button class="btn btn-secondary" type="button" data-toggle-fullscreen="">Toggle fullscreen</button>
        <hr>
        <p>Change language</p>
        <!-- START Language list-->
        <select class="language-select custom-select form-control">
          <option value="en" selected="">English</option>
          <option value="es">Spanish</option>
          <option value="fr">French</option>
        </select>
        <!-- END Language list-->
        <div class="mt-3" data-localize="translate.EXAMPLE">This is an example text using English as selected language.</div>
      </div>
    </div>
  </div>
</div>
<!-- End Settings template-->
<!-- Modernizr-->
<script src="vendor/modernizr/modernizr.custom.js"></script>
<!-- PaceJS-->
<script src="vendor/pace/pace.min.js"></script>
<!-- jQuery-->
<script src="vendor/jquery/dist/jquery.js"></script>
<!-- Bootstrap-->
<script src="vendor/tether/dist/js/tether.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
<!-- Material Colors-->
<script src="vendor/material-colors/dist/colors.js"></script>
<!-- Screenfull-->
<script src="vendor/screenfull/dist/screenfull.js"></script>
<!-- jQuery Localize-->
<script src="vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
<!-- Google Maps API-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBNs42Rt_CyxAqdbIBK0a5Ut83QiauESPA"></script>
<!-- Google Maps-->
<script src="vendor/gmaps/gmaps.js"></script>
<!-- Flot charts-->
<script src="vendor/flot/jquery.flot.js"></script>
<script src="vendor/flot/jquery.flot.categories.js"></script>
<script src="vendor/flot-spline/js/jquery.flot.spline.js"></script>
<script src="vendor/flot.tooltip/js/jquery.flot.tooltip.js"></script>
<script src="vendor/flot/jquery.flot.resize.js"></script>
<script src="vendor/flot/jquery.flot.pie.js"></script>
<script src="vendor/flot/jquery.flot.time.js"></script>
<script src="vendor/sidebysideimproved/jquery.flot.orderBars.js"></script>
<!-- Sparkline-->
<script src="vendor/sparkline/index.js"></script>
<!-- jQuery Knob charts-->
<script src="vendor/jquery-knob/js/jquery.knob.js"></script>
<!-- Peity charts-->
<script src="vendor/peity/jquery.peity.min.js"></script>
<script>
// $(".peity-bar").peity("bar",{
//   diameter: function() { return this.getAttribute("data-diameter") }
// });
$(document).ready( function(){ 
  $('.Peity.bar').peity('bar', {
    width:900,
    height: 300
  });
});
</script>
<!-- App script-->
<script src="js/app.js"></script>
</body>
</html>