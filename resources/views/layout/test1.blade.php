<html lang="en" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Advanced form elements</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/adminlte/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="/adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet" href="/adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

    <link rel="stylesheet" href="/adminlte/plugins/bs-stepper/css/bs-stepper.min.css">

    <link rel="stylesheet" href="/adminlte/plugins/dropzone/min/dropzone.min.css">

    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">
    <style>
        .vt-augment {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .vt-augment.drawer {
            display: none;
            width: 700px;
            background: white;
            border: 1px solid #e6e6e6;
            text-align: left;
            z-index: 102;
            position: fixed;
            right: 0;
            top: 0;
            height: 100vh;
            box-shadow: -4px 5px 8px -3px rgba(17, 17, 17, .16);
            animation: slideToRight 0.5s 1 forwards;
            transform: translateX(100vw);
        }

        .vt-augment.drawer[opened] {
            display: flex;
            animation: slideFromRight 0.2s 1 forwards;
        }

        .vt-augment>.spinner {
            position: absolute;
            z-index: 199;
            top: calc(50% - 50px);
            left: calc(50% - 50px);
            border: 8px solid rgba(0, 0, 0, 0.2);
            border-left-color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1.2s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes slideFromRight {
            0% {
                transform: translateX(100vw);
            }

            100% {
                transform: translateX(0);
            }
        }

        @keyframes slideToRight {
            100% {
                transform: translateX(100vw);
                display: none;
            }
        }

        @media screen and (max-width: 700px) {
            .vt-augment.drawer {
                width: 100%;
            }
        }
    </style>
</head>

<body class="sidebar-mini" style="height: auto;">
    <div class="wrapper">
        <div class="content-wrapper" style="min-height: 1345.31px;">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Date picker</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Date range:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control float-right" id="reservation">
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more
                                    examples and information about
                                    the plugin.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="sidebar-overlay"></div>
    </div>


    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>

    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>

    <script src="/adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

    <script src="/adminlte/plugins/moment/moment.min.js"></script>
    <script src="/adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>

    <script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="/adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

    <script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="/adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

    <script src="/adminlte/plugins/bs-stepper/js/bs-stepper.min.js"></script>

    <script src="/adminlte/plugins/dropzone/min/dropzone.min.js"></script>

    <script src="/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="/adminlte/dist/js/demo.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })

            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker

            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script><input type="file" multiple="multiple" class="dz-hidden-input" tabindex="-1"
        style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">


    <div class="daterangepicker ltr show-calendar opensright"
        style="top: 1611.16px; left: 1143px; right: auto; display: none;">
        <div class="ranges"></div>
        <div class="drp-calendar left">
            <div class="calendar-table">
                <table class="table-condensed">
                    <thead>
                        <tr>
                            <th class="prev available"><span></span></th>
                            <th colspan="5" class="month">Jun 2024</th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Su</th>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="weekend off ends available" data-title="r0c0">26</td>
                            <td class="off ends available" data-title="r0c1">27</td>
                            <td class="off ends available" data-title="r0c2">28</td>
                            <td class="off ends available" data-title="r0c3">29</td>
                            <td class="off ends available" data-title="r0c4">30</td>
                            <td class="off ends available" data-title="r0c5">31</td>
                            <td class="weekend available" data-title="r0c6">1</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r1c0">2</td>
                            <td class="available" data-title="r1c1">3</td>
                            <td class="available" data-title="r1c2">4</td>
                            <td class="available" data-title="r1c3">5</td>
                            <td class="available" data-title="r1c4">6</td>
                            <td class="available" data-title="r1c5">7</td>
                            <td class="weekend available" data-title="r1c6">8</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r2c0">9</td>
                            <td class="available" data-title="r2c1">10</td>
                            <td class="available" data-title="r2c2">11</td>
                            <td class="available" data-title="r2c3">12</td>
                            <td class="available" data-title="r2c4">13</td>
                            <td class="available" data-title="r2c5">14</td>
                            <td class="weekend available" data-title="r2c6">15</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r3c0">16</td>
                            <td class="today active start-date active end-date available" data-title="r3c1">17</td>
                            <td class="available" data-title="r3c2">18</td>
                            <td class="available" data-title="r3c3">19</td>
                            <td class="available" data-title="r3c4">20</td>
                            <td class="available" data-title="r3c5">21</td>
                            <td class="weekend available" data-title="r3c6">22</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r4c0">23</td>
                            <td class="available" data-title="r4c1">24</td>
                            <td class="available" data-title="r4c2">25</td>
                            <td class="available" data-title="r4c3">26</td>
                            <td class="available" data-title="r4c4">27</td>
                            <td class="available" data-title="r4c5">28</td>
                            <td class="weekend available" data-title="r4c6">29</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r5c0">30</td>
                            <td class="off ends available" data-title="r5c1">1</td>
                            <td class="off ends available" data-title="r5c2">2</td>
                            <td class="off ends available" data-title="r5c3">3</td>
                            <td class="off ends available" data-title="r5c4">4</td>
                            <td class="off ends available" data-title="r5c5">5</td>
                            <td class="weekend off ends available" data-title="r5c6">6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-calendar right">
            <div class="calendar-table">
                <table class="table-condensed">
                    <thead>
                        <tr>
                            <th></th>
                            <th colspan="5" class="month">Jul 2024</th>
                            <th class="next available"><span></span></th>
                        </tr>
                        <tr>
                            <th>Su</th>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="weekend off ends available" data-title="r0c0">30</td>
                            <td class="available" data-title="r0c1">1</td>
                            <td class="available" data-title="r0c2">2</td>
                            <td class="available" data-title="r0c3">3</td>
                            <td class="available" data-title="r0c4">4</td>
                            <td class="available" data-title="r0c5">5</td>
                            <td class="weekend available" data-title="r0c6">6</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r1c0">7</td>
                            <td class="available" data-title="r1c1">8</td>
                            <td class="available" data-title="r1c2">9</td>
                            <td class="available" data-title="r1c3">10</td>
                            <td class="available" data-title="r1c4">11</td>
                            <td class="available" data-title="r1c5">12</td>
                            <td class="weekend available" data-title="r1c6">13</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r2c0">14</td>
                            <td class="available" data-title="r2c1">15</td>
                            <td class="available" data-title="r2c2">16</td>
                            <td class="available" data-title="r2c3">17</td>
                            <td class="available" data-title="r2c4">18</td>
                            <td class="available" data-title="r2c5">19</td>
                            <td class="weekend available" data-title="r2c6">20</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r3c0">21</td>
                            <td class="available" data-title="r3c1">22</td>
                            <td class="available" data-title="r3c2">23</td>
                            <td class="available" data-title="r3c3">24</td>
                            <td class="available" data-title="r3c4">25</td>
                            <td class="available" data-title="r3c5">26</td>
                            <td class="weekend available" data-title="r3c6">27</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r4c0">28</td>
                            <td class="available" data-title="r4c1">29</td>
                            <td class="available" data-title="r4c2">30</td>
                            <td class="available" data-title="r4c3">31</td>
                            <td class="off ends available" data-title="r4c4">1</td>
                            <td class="off ends available" data-title="r4c5">2</td>
                            <td class="weekend off ends available" data-title="r4c6">3</td>
                        </tr>
                        <tr>
                            <td class="weekend off ends available" data-title="r5c0">4</td>
                            <td class="off ends available" data-title="r5c1">5</td>
                            <td class="off ends available" data-title="r5c2">6</td>
                            <td class="off ends available" data-title="r5c3">7</td>
                            <td class="off ends available" data-title="r5c4">8</td>
                            <td class="off ends available" data-title="r5c5">9</td>
                            <td class="weekend off ends available" data-title="r5c6">10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-buttons"><span class="drp-selected">06/17/2024 - 06/17/2024</span><button
                class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button
                class="applyBtn btn btn-sm btn-primary" type="button">Apply</button> </div>
    </div>
    <div class="daterangepicker ltr show-calendar opensright"
        style="top: 1697.16px; left: 1145px; right: auto; display: none;">
        <div class="ranges"></div>
        <div class="drp-calendar left">
            <div class="calendar-table">
                <table class="table-condensed">
                    <thead>
                        <tr>
                            <th class="prev available"><span></span></th>
                            <th colspan="5" class="month">Jun 2024</th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Su</th>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="weekend off ends available" data-title="r0c0">26</td>
                            <td class="off ends available" data-title="r0c1">27</td>
                            <td class="off ends available" data-title="r0c2">28</td>
                            <td class="off ends available" data-title="r0c3">29</td>
                            <td class="off ends available" data-title="r0c4">30</td>
                            <td class="off ends available" data-title="r0c5">31</td>
                            <td class="weekend available" data-title="r0c6">1</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r1c0">2</td>
                            <td class="available" data-title="r1c1">3</td>
                            <td class="available" data-title="r1c2">4</td>
                            <td class="available" data-title="r1c3">5</td>
                            <td class="available" data-title="r1c4">6</td>
                            <td class="available" data-title="r1c5">7</td>
                            <td class="weekend available" data-title="r1c6">8</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r2c0">9</td>
                            <td class="available" data-title="r2c1">10</td>
                            <td class="available" data-title="r2c2">11</td>
                            <td class="available" data-title="r2c3">12</td>
                            <td class="available" data-title="r2c4">13</td>
                            <td class="available" data-title="r2c5">14</td>
                            <td class="weekend available" data-title="r2c6">15</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r3c0">16</td>
                            <td class="today active start-date active end-date available" data-title="r3c1">17</td>
                            <td class="available" data-title="r3c2">18</td>
                            <td class="available" data-title="r3c3">19</td>
                            <td class="available" data-title="r3c4">20</td>
                            <td class="available" data-title="r3c5">21</td>
                            <td class="weekend available" data-title="r3c6">22</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r4c0">23</td>
                            <td class="available" data-title="r4c1">24</td>
                            <td class="available" data-title="r4c2">25</td>
                            <td class="available" data-title="r4c3">26</td>
                            <td class="available" data-title="r4c4">27</td>
                            <td class="available" data-title="r4c5">28</td>
                            <td class="weekend available" data-title="r4c6">29</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r5c0">30</td>
                            <td class="off ends available" data-title="r5c1">1</td>
                            <td class="off ends available" data-title="r5c2">2</td>
                            <td class="off ends available" data-title="r5c3">3</td>
                            <td class="off ends available" data-title="r5c4">4</td>
                            <td class="off ends available" data-title="r5c5">5</td>
                            <td class="weekend off ends available" data-title="r5c6">6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="calendar-time"><select class="hourselect">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12" selected="selected">12</option>
                </select> : <select class="minuteselect">
                    <option value="0" selected="selected">00</option>
                    <option value="30">30</option>
                </select> <select class="ampmselect">
                    <option value="AM" selected="selected">AM</option>
                    <option value="PM">PM</option>
                </select></div>
        </div>
        <div class="drp-calendar right">
            <div class="calendar-table">
                <table class="table-condensed">
                    <thead>
                        <tr>
                            <th></th>
                            <th colspan="5" class="month">Jul 2024</th>
                            <th class="next available"><span></span></th>
                        </tr>
                        <tr>
                            <th>Su</th>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="weekend off ends available" data-title="r0c0">30</td>
                            <td class="available" data-title="r0c1">1</td>
                            <td class="available" data-title="r0c2">2</td>
                            <td class="available" data-title="r0c3">3</td>
                            <td class="available" data-title="r0c4">4</td>
                            <td class="available" data-title="r0c5">5</td>
                            <td class="weekend available" data-title="r0c6">6</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r1c0">7</td>
                            <td class="available" data-title="r1c1">8</td>
                            <td class="available" data-title="r1c2">9</td>
                            <td class="available" data-title="r1c3">10</td>
                            <td class="available" data-title="r1c4">11</td>
                            <td class="available" data-title="r1c5">12</td>
                            <td class="weekend available" data-title="r1c6">13</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r2c0">14</td>
                            <td class="available" data-title="r2c1">15</td>
                            <td class="available" data-title="r2c2">16</td>
                            <td class="available" data-title="r2c3">17</td>
                            <td class="available" data-title="r2c4">18</td>
                            <td class="available" data-title="r2c5">19</td>
                            <td class="weekend available" data-title="r2c6">20</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r3c0">21</td>
                            <td class="available" data-title="r3c1">22</td>
                            <td class="available" data-title="r3c2">23</td>
                            <td class="available" data-title="r3c3">24</td>
                            <td class="available" data-title="r3c4">25</td>
                            <td class="available" data-title="r3c5">26</td>
                            <td class="weekend available" data-title="r3c6">27</td>
                        </tr>
                        <tr>
                            <td class="weekend available" data-title="r4c0">28</td>
                            <td class="available" data-title="r4c1">29</td>
                            <td class="available" data-title="r4c2">30</td>
                            <td class="available" data-title="r4c3">31</td>
                            <td class="off ends available" data-title="r4c4">1</td>
                            <td class="off ends available" data-title="r4c5">2</td>
                            <td class="weekend off ends available" data-title="r4c6">3</td>
                        </tr>
                        <tr>
                            <td class="weekend off ends available" data-title="r5c0">4</td>
                            <td class="off ends available" data-title="r5c1">5</td>
                            <td class="off ends available" data-title="r5c2">6</td>
                            <td class="off ends available" data-title="r5c3">7</td>
                            <td class="off ends available" data-title="r5c4">8</td>
                            <td class="off ends available" data-title="r5c5">9</td>
                            <td class="weekend off ends available" data-title="r5c6">10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="calendar-time"><select class="hourselect">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11" selected="selected">11</option>
                    <option value="12">12</option>
                </select> : <select class="minuteselect">
                    <option value="0">00</option>
                    <option value="30">30</option>
                </select> <select class="ampmselect">
                    <option value="AM">AM</option>
                    <option value="PM" selected="selected">PM</option>
                </select></div>
        </div>
        <div class="drp-buttons"><span class="drp-selected">06/17/2024 12:00 AM - 06/17/2024 11:59 PM</span><button
                class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button
                class="applyBtn btn btn-sm btn-primary" type="button">Apply</button> </div>
    </div>
    <div class="daterangepicker ltr show-ranges opensright">
        <div class="ranges">
            <ul>
                <li data-range-key="Today">Today</li>
                <li data-range-key="Yesterday">Yesterday</li>
                <li data-range-key="Last 7 Days">Last 7 Days</li>
                <li data-range-key="Last 30 Days">Last 30 Days</li>
                <li data-range-key="This Month">This Month</li>
                <li data-range-key="Last Month">Last Month</li>
                <li data-range-key="Custom Range">Custom Range</li>
            </ul>
        </div>
        <div class="drp-calendar left">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-calendar right">
            <div class="calendar-table"></div>
            <div class="calendar-time" style="display: none;"></div>
        </div>
        <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default"
                type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled"
                type="button">Apply</button> </div>
    </div>
    <div>
        <div class="vtResetstyles">
            <div id="vtoverlay" class="vtoverlay vthidden w3-animate-right
        w3-container">
                <div class="vtmain vthidden" id="vtmain">
                    <div class="vtcontactus">
                        <a id="linktest" href="https://www.virustotal.com">
                            <img class="vtlogo-popup" style=" width: 32px;
                height: 32px;"
                                src="chrome-extension://efbjojhplkelaegfbieplglfidafgoka/icons/vt-logo.svg">
                        </a>
                        <a href="https://www.virustotal.com">VT4Browsers
                        </a>
                    </div>
                    <span id="vtclose"><strong>X</strong></span>
                    <div class="vttextpopup vthidden" id="statustext">
                        <div class="vtscanstatus" id="vtscanstatus"></div>
                        <div class="vtprogress vthidden" id="vtprogress"></div>
                        <br id="brfile">
                        <div class="vtscanstatus" id="vtscanfilelink"></div>
                    </div>
                    <div class="vttextpopup vthidden" id="widgettext">
                        <div id="vtwidgetError"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="vt-augment-container" class="vtzindex vt-augment drawer" style="background: rgb(49, 61, 90);">
        </div>
    </div><span class="vttooltiptext vthidden">&nbsp;Click to open VirusTotal report&nbsp;<br>with VT Augment</span>
    <style></style>
</body>

</html>
