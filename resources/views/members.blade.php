<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       View
 * @author         Ashinze Ekene <ashinzekene@gmail.com> {@link http://github.com/ashinzekene}
 * @date           2018-02-22
 *
 */
?>
<html>

<head>
    @include('Elements.headContent')
    <link rel="stylesheet" href="css/members.css">
    <link rel="stylesheet" type="text/css" href="../../css/special/css/shortcode/shortcode.css" />
    <link rel="stylesheet" type="text/css" href="../../css/special/plugins-css.css" />
</head>

<body>
{{--bring in the nav bar--}}
@include('Elements.navigation')


<div class="container-fluid">
    <div class="row">
        <div class="filter">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="#" class="filter-item">Popular</a></li>
                <li role="presentation" ><a href="#" class="filter-item">active</a></li>
                <li role="presentation" ><a href="#" class="filter-item">alphbetical</a></li>
                <li role="presentation" ><a href="#" class="filter-item">groups</a></li>
                <li role="presentation" ><a href="#" class="filter-item">school</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="search-container">
            <!-- <i class="fa fa-search"></i> -->
            <input type="search" placeholder="search for members" class="form-control searchbar text-center">
        </div>
        <div class="row member-list">
            @for ($i = 0;$i < 12; $i++)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="member">
                    <a href="#" data-toggle="modal" data-target="#id-modal"><img src="/images/logo-146x150.png" class="avatar"></a>
                    <div class="text">
                        <div class="name"><a href="#" data-toggle="modal" data-target="#id-modal">John Doe</a></div>
                        <div class="job">Graphic Designer</div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>

     <div class="modal fade" id="id-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="section-title mb-10">
                    <div class="event-modal-image text-center member">
                      <img src="/images/logo-146x150.png" class="avatar">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="modal-body text-left">
                    <label>Name:</label>
                    <h5>John Doe</h5>
                    <label>Job:</label>
                    <p>Graphic Designer</p>
                    <label>Description:</label>
                    <p>I'm a Graphic designer who has a passion for Art and Design</p>
                    <label>School:</label>
                    <p>University of Lagos, Akoka</p>
                    <label>Location (Address):</label>
                    <p>Lagos</p>
                    <label>Joined:</label>
                    <p>31 - 03 - 2018</p>
                  </div>
                </div>
                <div class="modal-footer">
                    <button class="button gray" type="button" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>

          
          <!-- =========== MODAL  END   ===========-->

</div>

{{--call on footer--}}
@include('Elements.footer')

<!--====jquery==== -->
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/plugins-jquery.js"></script>
<script type="text/javascript">var plugin_path = 'js/';</script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
