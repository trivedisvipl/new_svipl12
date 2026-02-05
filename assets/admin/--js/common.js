// When the browser is ready...
$(function() {
    //start code jQuery Form Validation code

    /* author: dhaval
     * Description: url validaion*/
    jQuery.validator.addMethod("url", function (value, element) {
        return this.optional(element) || /^((https?|s?ftp):\/\/)?(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
    }, "Please enter a valid URL.");
    /* end code dhaval*/

    jQuery.validator.addMethod("urlsuffix", function (value, element) {
        //return this.optional(element) || /(([\w]+:)?\/\/)?(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,63}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?/i.test(value);
        var indexNumber = value.lastIndexOf(".");
        var str = value.substring(indexNumber);
        var len = str.length;
        if(len > 2)
           return true;
    }, "Please enter a valid URL.");

    /* Description: greateThan previous date*/
    jQuery.validator.addMethod("greaterThan",
            function (value, element, params) {
                if (!/Invalid|NaN/.test(new Date(value))) {
                    return new Date(value) >= new Date($(params).val());
                }
                return isNaN(value) && isNaN($(params).val())
                        || (Number(value) > Number($(params).val()));
            }, 'Must be greater than {0}.');
    //end code

    /* Description: greateThan {0} amount*/
    $.validator.addMethod('minAmount', function (value, el, param) {
        return value > param;
    }, 'Must be greater than {0}.');
    //end code

    /* Description: lessThan {0} filesize*/
    $.validator.addMethod("filsize", function (value, element, param) {
        if (typeof element.files[0] != "undefined") {
            var size = element.files[0].size;
            return (size / 1024) < param;
        } else {
            return true;
        }
    }, "Maximum allowed filesize {0} KB");
    //end code

    /* author: dhaval
     * Description: html tag validaion*/
    $.validator.addMethod("nohtml", function (value, element) {
        var reg = /<(.|\n)*?>/g;
        return !reg.test(value);
    }, "Do not allow HTML TAGS");
    /* end code dhaval*/

    //reset form remove highlight
    $.validator.prototype.resetForm = function () {
        if ($.fn.resetForm) {
            $(this.currentForm).resetForm();
        }
        this.submitted = {};
        this.lastElement = null;
        this.prepareForm();
        this.hideErrors();
        var elements = this.elements().removeData("previousValue").removeAttr("aria-invalid");
        if (this.settings.removehighlight) {
            for (var i = 0; elements[i]; i++) {
                this.settings.removehighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
            }
        }
    }
    //end code


    // For login form validation
    $("#login-form").validate({
        // Specify the validation rules
        rules: {
            username: {
                required: true
            },
            password: {
                required: true
            }
        },
        // Specify the validation error messages
        messages: {
            username: "Please enter your username",
            password: {
                required: "Please enter a password",
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    //For password form Validation
    $("#password-form").validate({
        // Specify the validation rules
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    //For forget password form Validation
    $("#reset-password-form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                nowhitespace: true,
                minlength: 6
            },
            password_confirmation: {
                required: true,
                equalTo: '#password'
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    //For Password change form Validation
    $("#change-password-form").validate({
        // Specify the validation rules
        rules: {
            old_password: {
                required: true
            },
            password: {
                required: true,
                nowhitespace: true,
                minlength: 5
            },
            password_confirmation: {
                required: true,
                equalTo: '#password'
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    //For Profile Validation
    $("#profile-form").validate({
        // Specify the validation rules
        rules: {
            email: {
                required: true,
                email: true
            },
            firstname: {
                required: true
            },
            lastname: {
                required: true
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    //For Setting form Validation
    $("#setting-forms").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            site_title: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone_1: {
                required: true
            },
            phone_2: {
                required: true
            },
            address: {
                required: true
            },
            map: {
                required: true
            },
            facebook: {
                url: true
            },
            instagram: {
                url: true
            },
            twitter: {
                url: true
            },
            youtube: {
                url: true
            },
            linkedin:{
                url: true
            }
        },
        // Specify the validation error messages
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    //For Brand Validation
    $("#brand-form").validate({
        // Specify the validation rules
        ignore: [],
        rules: {
            title: {
                required: true,
            },

            description: {
                required: function()
                {
                    return CKEDITOR.instances.description.updateElement();
                },
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {

            if (element.parent('.input-group').length ) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            }else{
                error.insertAfter(element);
            }
        }
    });




    // For Product form Validation.
    $("#products-form").validate({
        // Specify the validation rules
        ignore: [],
        rules: {
            brand_id: {
                required: true,
            },
            title:{
                required: true,
            },
            description: {
                required: function()
                {
                    return CKEDITOR.instances.description.updateElement();
                },
            },
            ingredients: {
                required: function()
                {
                    return CKEDITOR.instances.ingredients.updateElement();
                },
            },
            benefits: {
                required: function()
                {
                    return CKEDITOR.instances.benefits.updateElement();
                },
            },
            features: {
                required: function()
                {
                    return CKEDITOR.instances.features.updateElement();
                },
            },
            how_to_use: {
                required: function()
                {
                    return CKEDITOR.instances.how_to_use.updateElement();
                },
            },
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {

            if (element.parent('.input-group').length ) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            }else{
                error.insertAfter(element);
            }
        }
    });




    //For slider form Validation
    $("#slider-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            name: {
                required: true
            },

        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    //For popular tag form Validation
    $("#category-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            title: {
                required: true
            },

        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    //for blog form validation
    $("#blog-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            title: {
                required: true
            },
            blogs_category_id:{
                required: true
            },
            description: {
                required: function(){
                    return CKEDITOR.instances.description.updateElement();
                },
            },
            posted_by: {
                required: true
            },
            date:{
                required: true
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            } else {
                error.insertAfter(element);
            }
        }
    });

    //For promise-form validation
    $("#promise-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            description_1: {
                required: true
            },
            description_2: {
                required: true
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    //For welcome-form validation
    $("#welcome-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            description_1: {
                required: true
            },
            description_2: {
                required: true
            },
            image_1: {
                required: true,
                url: true
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    // For distribute-form validation
    $("#distribute-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            description_1: {
                required: true
            },
            description_2: {
                required: true
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    // For career-form validation
    $("#career-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            title: {
                required: true
            },
            description: {
                required: function(){
                    return CKEDITOR.instances.description.updateElement();
                },
            },
            location: {
                required: true,
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            } else {
                error.insertAfter(element);
            }
        }
    });

    // For rating form validation
    $("#review-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            name: {
                required: true
            },
            description: {
                required: function(){
                    return CKEDITOR.instances.description.updateElement();
                },
            },
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            } else if(element[0].type == 'radio') {
                error.insertAfter($(element).parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    // For metadata form validation
    $("#metadata-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            title: {
                required: true
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            } else if(element[0].type == 'radio') {
                error.insertAfter($(element).parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    $("#aboutspure-form").validate({
        // Specify the validation rules
        ignore: [],
        rules: {

            description_1: {
                required: function()
                {
                    return CKEDITOR.instances.description_1.updateElement();
                },
            },
            description_2: {
                required: function()
                {
                    return CKEDITOR.instances.description_2.updateElement();
                },
            }

        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {

            if (element.parent('.input-group').length ) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            }else{
                error.insertAfter(element);
            }
        }
    });

    $("#mission-vision-form").validate({
        // Specify the validation rules
        ignore: [],
        rules: {

            description_1: {
                required: function()
                {
                    return CKEDITOR.instances.description_1.updateElement();
                },
            },
            description_2: {
                required: function()
                {
                    return CKEDITOR.instances.description_2.updateElement();
                },
            }

        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {

            if (element.parent('.input-group').length ) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            }else{
                error.insertAfter(element);
            }
        }
    });

    $("#our-management-form").validate({
        // Specify the validation rules
        ignore: [],
        rules: {

            description_1: {
                required: function()
                {
                    return CKEDITOR.instances.description_1.updateElement();
                },
            },
            description_2: {
                required: function()
                {
                    return CKEDITOR.instances.description_2.updateElement();
                },
            }

        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {

            if (element.parent('.input-group').length ) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            }else{
                error.insertAfter(element);
            }
        }
    });

    $("#career-contain-form").validate({
        // Specify the validation rules
        ignore: [],
        rules: {
            description_1: {
                required: true
            },
            description_2: {
                required: function()
                {
                    return CKEDITOR.instances.description_2.updateElement();
                },
            },
            description_3: {
                required: function()
                {
                    return CKEDITOR.instances.description_3.updateElement();
                },
            }

        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {

            if (element.parent('.input-group').length ) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            }else{
                error.insertAfter(element);
            }
        }
    });

    $("#certification-form").validate({
        // Specify the validation rules
        ignore: [],
        rules: {

            name: {
                required: true
            }

        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {

            if (element.parent('.input-group').length ) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            }else{
                error.insertAfter(element);
            }
        }
    });

    // For privacypolicy-form validation
    $("#privacypolicy-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            description_1: {
                required: function(){
                    return CKEDITOR.instances.description_1.updateElement();
                },
            },
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            } else if(element[0].type == 'radio') {
                error.insertAfter($(element).parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    $("#disclaimer-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            description_1: {
                required: function(){
                    return CKEDITOR.instances.description_1.updateElement();
                },
            },
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            } else if(element[0].type == 'radio') {
                error.insertAfter($(element).parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    $("#terms-conditions-form").validate({
        ignore: [],
        // Specify the validation rules
        rules: {
            description_1: {
                required: function(){
                    return CKEDITOR.instances.description_1.updateElement();
                },
            },
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function (element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        removehighlight: function(element) {
            $(element).removeClass('is-valid').removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if(element[0].type == 'textarea') {
                error.insertAfter($(element).next());
            } else if(element[0].type == 'radio') {
                error.insertAfter($(element).parent());
            } else {
                error.insertAfter(element);
            }
        }
    });


});



// Develop By Sahil
// For customize ck editor
var basicEditer = {
    // Define the toolbar groups as it is a more accessible solution.
    toolbarGroups: [{
        "name": "basicstyles",
        "groups": ["basicstyles"]
      },
      {
        "name": "styles",
        "groups": ["styles"]
      },
      {
        "name": "Underline",
        "groups": ["Underline"]
      }
    ],
    // Remove the redundant buttons from toolbar groups defined above.
    removeButtons: 'Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,links,paragraph,document,insert,styles,about'
};


