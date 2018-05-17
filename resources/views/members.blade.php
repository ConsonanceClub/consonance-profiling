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
    <link rel="stylesheet" type="text/css" href="../../css/special/css/shortcodes/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="../../css/special/css/plugins-css.css" />

{{--set Title--}}
@section('title', 'Members')
</head>

<body>
{{--bring in the nav bar--}}
@include('Elements.navigation')


<div class="container-fluid" style="margin-bottom: 201px; background-color: white;">
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
            @foreach (\App\User::all() as $key => $value)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="member">
                    <a href="#" data-toggle="modal" data-target="#id-modal-{{$key}}"><img src="{{$value->avatar}}" class="avatar"></a>
                    <div class="text">
                        <div class="name"><a href="#" data-toggle="modal" data-target="#id-modal">{{$value->first_name . ' ' . $value->last_name}}</a></div>
                        <div class="job">{{$value->profession}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @foreach(\App\User::all() as $key => $value)
     <div class="modal fade" id="id-modal-{{$key}}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document" style="width: 450px; max-width: 100%;">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="section-title mb-10">
                    <div class="event-modal-image text-center member" style="float: inherit; width: 100%">
                      <img src="{{$value->avatar}}" class="avatar">
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="modal-body text-left">
                    <label>Name:</label>
                    <h5>{{$value->first_name . ' ' . $value->last_name}}</h5>
                    <label>Profession:</label>
                    <p>{{$value->profession}}</p>
                    <label>Description:</label>
                    <p>{{$value->short_bio}}</p>
                    <label>School:</label>
                    <p>{{$value->school}}</p>
                    <label>Location (Address):</label>
                    <p>{{$value->address}}</p>
                    <label>Joined:</label>
                    <p>{{explode(' ',$value->created_at)[0]}}</p>
                  </div>
                </div>
                <div class="modal-footer">
                    <button class="button gray" type="button" data-dismiss="modal">CLOSE</button>
                </div>
              </div>
            </div>
          </div>
    @endforeach
          
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
