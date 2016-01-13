<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WasteLine</title>

    <!-- Material Design fonts -->
    <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->

    <!-- Bootstrap CSS -->
    <link href="<?=asset_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=asset_url('css/jquery-ui.min.css')?>" rel="stylesheet">
    <link href="<?=asset_url('css/jquery-ui.structure.min.css')?>" rel="stylesheet">
    <link href="<?=asset_url('css/jquery-ui.theme.min.css')?>" rel="stylesheet">

    <!-- Material Design for Bootstrap -->
    <link href="<?=asset_url('css/roboto.min.css')?>" rel="stylesheet">
    <link href="<?=asset_url('/css/material-fullpalette.css')?>" rel="stylesheet">
    <link href="<?=asset_url('/css/ripples.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=asset_url('css/nav.css')?>" rel="stylesheet">
    <link href="<?=asset_url('css/simple-sidebar.css')?>" rel="stylesheet">

    <link href="<?=asset_url('css/linearicons.css')?>" rel="stylesheet">
    <link href="<?=asset_url('css/wl-custom.css')?>" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#wasteline"><span class="lnr lnr-trash"></span></a>
                </li>
                <li>
                    <a href="#home"><span class="lnr lnr-home"></span></a>
                </li>
                <li>
                    <a href="/wasteline/template/map"><span class="lnr lnr-map"></span></a>
                </li>
                <li>
                    <a href="#articles-guidelines"><span class="lnr lnr-book"></span></a>
                </li>
                <li>
                    <a href="#user"><span class="lnr lnr-user"></span></a>
                </li>
                <li class="wl-btn-logout">
                    <a href="#logout"><span class="lnr lnr-power-switch"></span></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->



        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid wl-full-height">
                <div class="row wl-full-height">

                    <!-- top -->
                    <div class="wl-top-nav col-xs-12 col-sm-12">

                        <div class="wl-top-grp col-sm-4">
                                <span class="wl-c-green-1">Wasteline</span>
                                <span class="wl-c-gray-1">&nbsp;|&nbsp;</span>
                                <span class="wl-c-black-1">Information</span>
                        </div>
                        <div class="wl-top-grp col-sm-4">
                            <span class="lnr lnr-calendar-full wl-c-green-1"></span>
                            <span class="wl-c-green-2 wl-date">--/--/--</span>
                            <span class="wl-c-green-3">&nbsp;|&nbsp;</span>
                            <span class="wl-c-green-1 wl-time">--:--</span>
                        </div>
                        <div class="wl-top-grp col-sm-4 no-padding">
                            <div class="col-sm-10 padding-top-15">
                                <div class="col-sm-12 no-padding">
                                    <span class="wl-c-green-4">Hi, <span class="wl-c-green-5">John Doe</span></span>
                                </div>
                                <div class="col-sm-12 no-padding">

                                <div class="form-group">
                                    <div class="togglebutton">
                                      <label style="text-align:left;">
                                        <input type="checkbox" id="menu-toggle" checked="">
                                        <div class="btn-group">
                                          <a href="#" data-target="#" class="btn btn-default btn-raised dropdown-toggle" data-toggle="dropdown">
                                              <span class="lnr lnr-funnel"></span>
                                              <span>Filter&nbsp;</span>
                                              <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0)">filter 1</a></li>
                                            <li><a href="javascript:void(0)">filter 2</a></li>
                                            <li><a href="javascript:void(0)">filter 3</a></li>
                                          </ul>
                                        </div>
                                      </label>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="col-sm-2 no-padding">
                                <div class="wl-btn-post unselectable">+</div>
                            </div>
                        </div>

                    </div>
                    <!-- end top -->

                    <!-- main content -->
                    <div class="wl-main-content wl-full-height col-sm-12">


                        <!-- post form -->
                        <div id="wl-side-content">

                        </div>
                    </div>
                    <!-- end main content -->

                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=asset_url('js/jquery-2.1.4.min.js')?>"></script>
    <script src="<?=asset_url('js/jquery-ui.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=asset_url('js/bootstrap.min.js')?>"></script>


    <!-- Material Design for Bootstrap -->
    <script src="<?=asset_url('js/material.js')?>"></script>
    <script src="<?=asset_url('js/ripples.min.js')?>"></script>
    <script>
      $.material.init();
    </script>

    <!-- Dropdown.js
    <script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
    <script>
      $("#dropdown-menu select").dropdown();
    </script> -->

    <!-- Menu Toggle Script -->
    <script>
    $(document).ready(function(){
        $("#menu-toggle").change(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        function run_date_time(){
            var d = new Date();
            $('.wl-date').text((d.getMonth()+1)+'/'+d.getDate()+'/'+d.getFullYear().toString().substr(2,2));
            $('.wl-time').text(d.getHours()+':'+d.getMinutes());
            setTimeout(function(){run_date_time()}, 1000);
        }
        run_date_time();
        $(".wl-btn-post").click(function(){
            if($("#wl-side-content").is(":visible"))
                $("#wl-side-content").hide("slide", { direction: "right" }, 200);
            else
                $("#wl-side-content").show("slide", { direction: "right" }, 400);
        });
    });
    </script>

</body>

</html>
