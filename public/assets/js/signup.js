$(document).ready(function(){

    $('#employer-form-submit').on('click',function(){
       var employer = {};
        $(this).addClass('disabled');
        employer.first_name = $('#employer_first_name').val();
        employer.last_name = $('#employer_last_name').val();
        employer.email = $('#employer_email').val();
        employer.gender = $('#employer_gender option:selected').val();
        employer.organisation_id = $('#employer_organisation_id option:selected').val();
        employer.cell_phone = $('#employer_cell_phone').val();
        employer.phone_number = $('#employer_phone_number').val();
        employer.password = $('#employer_password').val();
        $('.employer-loader').removeClass('hidden');


        $.post('/employer-register',employer,function(response){
            console.log(response);
            $('.employer-loader').addClass('hidden');
            if(response.status == 'fail') {
                $('.empl-message').removeClass('hidden').addClass('fadeIn error').html(response.message);
            } else {
                $('.empl-message').removeClass('hidden').addClass('fadeIn').html(
                    "Thanks for Registering. Please check your email for further instruction."
                );

            }
        });
        //console.log(employer);
        return false;
    });



    $('#alumni-form-submit').on('click',function(){
        var alumni = {};
        alumni.first_name = $('#alumni_first_name').val();
        alumni.last_name = $('#alumni_last_name').val();
        alumni.email = $('#alumni_email').val();
        alumni.gender = $('#alumni_gender option:selected').val();
        alumni.organisation = $('#alumni_organisation').val();
        alumni.cell_phone = $('#alumni_cell_phone').val();
        alumni.phone_number = $('#alumni_phone_number').val();
        alumni.password = $('#alumni_password').val();
        alumni.employment_status = $('#alumni_employment_status').val();
        $('.alumni-loader').removeClass('hidden');
        console.log(alumni);
        $.post('/alumni-register',alumni,function(response){
            console.log(response);
            $('.alumni-loader').addClass('hidden');
            if(response.status == 'fail') {
                $('.empl-message').removeClass('hidden').addClass('fadeIn error').html(response.message);
            } else {
                $('.empl-message').removeClass('hidden').addClass('fadeIn').html(
                    "Thanks for Registering. Please check your email for further instruction."
                );
            }
        });
        //console.log(alumni);
        return false;
    });



    $('#myModal').on('hidden.bs.modal', function (event) {
        $('input').val('');
        $('textarea').val('');
        $('#student-form-submit-button').removeClass('btn-default').removeClass('fa fa-check btn-success');
    });


    $('#myModal').on('shown.bs.modal', function (event) {

        $('#wizardform').bootstrapWizard('show',0);

        /**
         * handle form submit for student.
         */
        $('#student-form-submit-button').on('click',function(e) {


            if($(this).hasClass('btn-success') || $(this).hasClass('btn-disabled')) {
                return;
            }


            var student = {};
            student.token = $('_token').val();

            student.first_name = $('#student_first_name').val();
            student.last_name = $('#student_last_name').val();
            student.gender = $('#student_gender option:selected').text();
            student.email = $('#student_email').val();
            student.cell_phone = $('#student_cell_phone').val();
            student.phone_number = $('#student_telephone').val();

            student.student_id = $('#student_studentid').val();
            student.current_cgpa = $('#student_cgpa').val();
            student.credits_completed = $('#student_credits_completed').val();
            student.department_id = $('#student_department option:selected').val();
            student.major = $('#student_major option:selected').val();
            student.minor = $('#student_minor option:selected').val();
            student.semester = $('#student_semester option:selected').val();


            student.present_address = $('#student_present_address').val();
            student.present_city = $('#student_present_city').val();
            student.present_postal_code = $('#student_postal_code').val();
            student.permanent_address = $('#student_permanent_address').val();
            student.permanent_city = $('#student_permanent_city').val();
            student.permanent_postal_code = $('#student_permanent_postal_code').val();
            student.web_url = $('#student_web_url').val();

            student.gurdian_name = $('#student_gurdian_name').val();
            student.gurdian_relation = $('#student_gurdian_relation').val();
            student.gurdian_work_institute = $('#student_gurdian_work_institute').val();
            student.gurdian_designation = $('#student_gurdian_design').val();
            student.gurdian_contact = $('#student_gurdian_contact').val();
            student.gurdian_email = $('#student_gurdian_email').val();

            student.password = $('#student_password').val();

            student.bio = $('#student_bio').val();
            student.employment_status = $('#student_employment_status option:selected').val();

            $(this).html('Submitting...');
            var that = $(this);
            $(this).addClass('disabled');
            $.post('/student-register',student, function(response){
                console.log(response);
                if(response.status == 'success') {
                    $('#form-success-message').removeClass('hidden').addClass('animated fadeIn');
                    that.removeClass('disabled').removeClass('btn-default').addClass('fa fa-check btn-success').html('Success');
                } else {

                }
            });


        });
    });

});




