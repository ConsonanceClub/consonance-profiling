<?php
/**
 *
 * Description
 *
 * @package        Consonance
 * @category       View
 * @author         Mayowa
 * @date           10th of December, that year.
 *
 */
?>
<html>

<head>
    @include('Elements.headContent')
</head>

<body>
{{--bring in the nav bar--}}
@include('Elements.navigation')


<div class="container-fluid">
    <div class="row">
        <table id="members" class="display" cellspacing="0" width="100%" style="padding-left: 10px; padding-right: 10px">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>State</th>
                <th>School</th>
                <th>Skills</th>
                <th>Medium Username</th>
                <th>Slack Username</th>
                <th>Twitter Username</th>
                <th>Github Username</th>
            </tr>
            </thead>
        </table>
    </div>

</div>

{{--call on footer--}}
@include('Elements.footer')
</body>
</html>
