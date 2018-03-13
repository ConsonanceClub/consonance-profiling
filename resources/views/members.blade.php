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
                    <img src="/images/logo-146x150.png" class="avatar">
                    <div class="text">
                        <div class="name">John Doe</div>
                        <div class="job">Graphic Designer</div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>

</div>

{{--call on footer--}}
@include('Elements.footer')
</body>
</html>
