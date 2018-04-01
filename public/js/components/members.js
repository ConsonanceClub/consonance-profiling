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

function updateProfile() {

    const interests = $('.interest-cbox:checkbox');
    const name = $('#name').val();
    const email = $('#email').val();
    const bio = $('#profile-bio').val();
    const school = $('#school').val();
    const checkedInterests = {};


    for(let i = 0; i < interests.length; i++){
        if(interests[i].checked){
            checkedInterests[interests[i].id] = true;
        }else{
            checkedInterests[interests[i].id] = false;
        }
    }

    $.ajax({
        url:'/update-profile',
        type:'GET',
        data:{interests:checkedInterests, name:name, bio:bio, email:email, school:school},
        success:function (data) {
            const result = JSON.parse(data);
        }
    });
}