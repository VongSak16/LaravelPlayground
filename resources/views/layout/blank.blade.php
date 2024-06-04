<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Project</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/bs-stepper/css/bs-stepper.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/dropzone/min/dropzone.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


    <style>
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px #353a3f inset !important;
            -webkit-text-fill-color: white !important;
        }

        input:-moz-autofill,
        input:-moz-autofill:hover,
        input:-moz-autofill:focus,
        input:-moz-autofill:active {
            box-shadow: 0 0 0 30px #353a3f inset !important;
            text-fill-color: white !important;
        }

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

<body class="hold-transition sidebar-mini dark-mode">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
            <!-- Content Header (Page header) -->

            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/dist/js/adminlte.min.js"></script>
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
    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/adminlte/plugins/jszip/jszip.min.js"></script>
    <script src="/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="/adminlte/dist/js/adminlte.min.js?v=3.2.0"></script>
    {{-- <script src="/adminlte/dist/js/demo.js"></script> --}}



    <script type="text/javascript">
        function previewFile() {
            const preview = document.getElementById('imgshow');
            const file = document.querySelector('input[type=file]').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                // convert image file to base64 string
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
    <script>
        $(function() {
            // //Initialize Select2 Elements
            // $('.select2').select2()

            // //Initialize Select2 Elements
            // $('.select2bs4').select2({
            //     theme: 'bootstrap4'
            // })

            // //Datemask dd/mm/yyyy
            // $('#datemask').inputmask('dd/mm/yyyy', {
            //     'placeholder': 'dd/mm/yyyy'
            // })
            // //Datemask2 mm/dd/yyyy
            // $('#datemask2').inputmask('mm/dd/yyyy', {
            //     'placeholder': 'mm/dd/yyyy'
            // })
            // //Money Euro
            // $('[data-mask]').inputmask()

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
            // //Date range as a button
            // $('#daterange-btn').daterangepicker({
            //         ranges: {
            //             'Today': [moment(), moment()],
            //             'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            //             'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            //             'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            //             'This Month': [moment().startOf('month'), moment().endOf('month')],
            //             'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
            //                 'month').endOf('month')]
            //         },
            //         startDate: moment().subtract(29, 'days'),
            //         endDate: moment()
            //     },
            //     function(start, end) {
            //         $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
            //             'MMMM D, YYYY'))
            //     }
            // )

            // //Timepicker
            // $('#timepicker').datetimepicker({
            //     format: 'LT'
            // })

            // //Bootstrap Duallistbox
            // $('.duallistbox').bootstrapDualListbox()

            // //Colorpicker
            // $('.my-colorpicker1').colorpicker()
            // //color picker with addon
            // $('.my-colorpicker2').colorpicker()

            // $('.my-colorpicker2').on('colorpickerChange', function(event) {
            //     $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            // })

            // $("input[data-bootstrap-switch]").each(function() {
            //     $(this).bootstrapSwitch('state', $(this).prop('checked'));
            // })

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
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $('#example3').DataTable();
        });
    </script>

</body>

</html>
