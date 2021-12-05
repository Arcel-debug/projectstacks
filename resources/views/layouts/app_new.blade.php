<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <style>
        #findjobs {
            background-image: url('default-images/find-jobs.png');
            background-color: #f3f7fa;
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: auto;
            position: relative;
            height: 700px;
        }
        #categories {
            background-image: url('default-images/circle-left.png'), url('default-images/circle-right.png');
            background-color: #f3f7fa, #f3f7fa;
            background-position: left, right;
            background-repeat: no-repeat, no-repeat;
        }
        .jobs {
            background-color: black;
            position: relative;
            text-align: center;
        }
        .jobseeker-img {
            background-image: url('default-images/jobseeker.png');
            background-color: #f3f7fa;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 600px;
            opacity: .5;
        }
        .hiring-img {
            background-image: url('default-images/hiring.png');
            background-color: #f3f7fa;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 600px;
            opacity: .5;
        }
        .txt-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
    </style>
    <body class="app">
        @include('layouts.header')

        <div class="">
            @yield('content')   
        </div><!--//container-fluid-->
        
        <div class="modal fade" id="show_in_popup_event" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="showInPopUpModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                    
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')

        <script type="text/javascript">
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var container = document.getElementById('show_in_popup_event');
                var modal = new bootstrap.Modal(container);

                // var table_id    =   $('.datatable').attr('id');
                // var table_url   =   $('.datatable').attr('data-url');
    
                // $('#'+table_id).DataTable( {
                //     "order": [0, 'desc'],
                //     "processing": true,
                //     "serverSide": true,
                //     "responsive": true,
                //     "ajax": table_url
                // } );

                $(document.body).off('click', '.show_in_popup');
                $(document.body).on('click', '.show_in_popup', function(event) {
                    var data_keyid  =   $(this).attr('data-keyid');
                    var data_url    =   $(this).attr('data-url');
    
                    $.ajax({
                        beforeSend:function() {
                            $('#show_in_popup_event').find('.modal-body').html('<h1 class="text-center"><i class="fas fa-circle-notch fa-spin"></i></h1>');
                            modal.show();
                        },
                        type: "GET",
                        data: { keyid: data_keyid },
                        url: data_url,
                        success:function(response) {
                            $('#show_in_popup_event').find('.modal-body').html(response);
                            modal.show();
                        }
                    })
                });

                $(document.body).off('click', '.btn_close');
                $(document.body).on('click', '.btn_close', function(event) {
                    var tableid =   $(this).attr('data-tableid');
                    if (tableid) {
                        $('#'+tableid).DataTable().ajax.reload();
                    }
                    
                    modal.hide();
                });

                $(document.body).off('click', '.btn_delete');
                $(document.body).on('click', '.btn_delete', function(event) {
                    var id          =   $(this).attr('data-id');
                    var url         =   $(this).attr('data-url');
                    
                    if (confirm('Are you sure you want to delete this record?')) {
                        $.ajax({
                            type: "POST",
                            data: { id: id },
                            url: url,
                            beforeSubmit() {
                                $('.progress-bar').css('width', '0%');
                                $('.progress-bar').attr('aria-valuenow', '0');
                            },
                            xhr: function() {
                                var xhr = new window.XMLHttpRequest();
                                xhr.upload.addEventListener("progress", function(evt) {
                                    if (evt.lengthComputable) {
                                        var percentComplete = (evt.loaded / evt.total) * 100;
                                        // Place upload progress bar visibility code here
                                        $('.progress-bar').css('width', percentComplete+'%');
                                        $('.progress-bar').attr('aria-valuenow', percentComplete);
                                    }
                                }, false);
                                return xhr;
                            },
                            success:function(response)
                            {
                                $('#delete_row_'+id).parents(':eq(1)').hide();
                                $('#toast').html(response);
                                $('.progress-bar').css('width', '0%');
                                $('.progress-bar').attr('aria-valuenow', '0');
                                show_toast();
                            }
                        });
                    }
                });

                $(document.body).off('click', '.btn_save');
                $(document.body).on('click', '.btn_save', function(event) {
                    var form_serialized =   $(this).closest('form').serializeArray();
                    var form_action     =   $(this).closest('form').attr('action');
                    var self            =   $(this);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        beforeSend:function() {
                            self.find('.icon').removeClass('fas fa-save').addClass('fas fa-circle-notch fa-spin');
                        },
                        type: "POST",
                        data: form_serialized,
                        url: form_action,
                        success:function(response)
                        {
                            $('#toast').html(response);
                            self.find('.icon').removeClass('fas fa-circle-notch fa-spin').addClass('fas fa-save');
                            show_toast();
                        }
                    });
                    return false;
                });

                $(document.body).off('click', 'input[type=checkbox]');
                $(document.body).on('click', 'input[type=checkbox]', function(event) {
                    event.target.checked ? $(this).val('1') : $(this).val('0');
                });
            });

            
            function showInPopupEvent($is_show)
            {
                if ($is_show == '1') {
                    modal.show();
                }
                else
                {
                    modal.hide();
                }
            }

            function show_toast(response)
            {
                var myToast = document.getElementById('toast');//select id of toast
                var bsToast = new bootstrap.Toast(myToast);//inizialize it
                bsToast.show();//show i
            }

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.image-upload-wrap').hide();
                        $('.file-upload-image').attr('src', e.target.result);
                        $('.file-upload-content').show();
                    };
                    reader.readAsDataURL(input.files[0]);
                } else {
                    removeUpload();
                }
            }

            function matchCustom(params, data) {
                // If there are no search terms, return all of the data
                if ($.trim(params.term) === '') {
                    return data;
                }

                // Do not display the item if there is no 'text' property
                if (typeof data.text === 'undefined') {
                    return null;
                }

                // `params.term` should be the term that is used for searching
                // `data.text` is the text that is displayed for the data object
                if (data.text.indexOf(params.term) > -1) {
                    var modifiedData = $.extend({}, data, true);
                    modifiedData.text += ' (matched)';

                    // You can return modified objects from here
                    // This includes matching the `children` how you want in nested data sets
                    return modifiedData;
                }

                // Return `null` if the term should not be displayed
                return null;
            }

        </script>
    </body>
</html>
