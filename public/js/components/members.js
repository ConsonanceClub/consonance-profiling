'use strict';

function updateProfile() {

    const interests = $('.interest-cbox:checkbox');
    const name = $('#name').val();
    const email = $('#email').val();
    const bio = $('#profile-bio').val();
    const school = $('#school').val();
    const profession = $('#profession').val();
    const address = $('#address').val();
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
        data:{interests:checkedInterests, name:name, bio:bio, email:email, school:school, profession:profession, address:address},
        success:function (data) {
            const result = JSON.parse(data);
        }
    });
}