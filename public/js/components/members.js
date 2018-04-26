'use strict';

function updateProfile() {

    const interests = $('.form-control:checkbox');
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

    console.log( name, email, bio, school, profession, address, checkedInterests);

    $.ajax({
        url:'/update-profile',
        type:'GET',
        data:{interests:checkedInterests, name:name, bio:bio, email:email, school:school, profession:profession, address:address},
        success:function (data) {
            const result = JSON.parse(data);
            if(result){
                $('#success').show();
                setTimeout(function () {
                    $('#success').hide();
                }, 5000);
            }
        }
    });
}