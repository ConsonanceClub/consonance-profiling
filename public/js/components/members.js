'use strict';

function loadMembers() {
    $(document).ready(function () {
        $('#members').DataTable({

            'ajax':'/getMembers',
            'columns':[
                {"data":"first_name"},
                {"data":"last_name"},
                {"data":"email"},
                {"data":"state"},
                {"data":"school.name"},
                {'data':'skills'},
                {"data":"medium_username"},
                {"data":"slack_username"},
                {"data":"twitter_username"},
                {"data":"github_username"},
            ]
        });
        $('#members_length').css('padding-left','10px');
        $('#members_filter').css('padding-right', '10px');
    })
}
loadMembers();