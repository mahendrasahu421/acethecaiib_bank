@extends('admin.layout.master')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Courses</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add New Courses</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->

                <!-- /.card -->

                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">


                    <!-- /.card-header -->
                    <div class="card">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">
                                <i class="fas fa-book me-2"></i> Add New Course
                            </h4>
                            <a href="{{ asset('admin/courses') }}" class="btn btn-success">
                                <i class="fas fa-list me-1"></i> Course List
                            </a>
                        </div>

                        <form action="/courses/save" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Side -->
                                    <div class="col-md-6">
                                        <!-- Course Title -->
                                        <div class="form-group mb-3">
                                            <label>Course Title <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter Course Title" required>
                                        </div>

                                        <!-- Course Slug -->
                                        <div class="form-group mb-3">
                                            <label>Course Slug (URL Friendly) <small>(optional, will be auto-generated if
                                                    left blank)</small></label>
                                            <input type="text" name="slug" class="form-control"
                                                placeholder="Enter course slug">
                                        </div>

                                        <!-- Course Price -->
                                        <div class="form-group mb-3">
                                            <label>Course Price (₹)</label>
                                            <input type="number" name="price" class="form-control"
                                                placeholder="Enter Price (if any)">
                                        </div>

                                        <!-- Course Thumbnail -->
                                        <div class="form-group mb-3">
                                            <label>Course Thumbnail</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <!-- Course Status -->
                                        <div class="form-group mb-3">
                                            <label>Status</label>
                                            <select class="form-control select2bs4" name="status" style="width: 100%;"
                                                required>
                                                <option value="Active" selected>Active</option>
                                                <option value="Inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Right Side -->
                                    <div class="col-md-6">
                                        <!-- Course Category -->
                                        <div class="form-group mb-3">
                                            <label>Course Category <span class="text-danger">*</span></label>
                                            <select class="form-control select2bs4" name="category_id" required>
                                                <option value="">-- Select Category --</option>
                                                <option value="1">CAIIB Compulsory Papers</option>
                                                <option value="2">CAIIB Elective Papers</option>
                                                <option value="3">JAIIB Modules</option>
                                                <option value="4">Bank Promotion Exams</option>
                                                <option value="5">Financial Awareness</option>
                                                <option value="6">Digital Banking</option>
                                            </select>
                                        </div>

                                        <!-- Applicable Exams -->
                                        <div class="form-group mb-3">
                                            <label>Applicable Exams (Multiple)</label>
                                            <select class="select2bs4" multiple="multiple" name="applicable_exams[]"
                                                data-placeholder="Select Exams" style="width: 100%;">
                                                <option>CAIIB</option>
                                                <option>JAIIB</option>
                                                <option>Bank Promotion</option>
                                                <option>Financial Awareness</option>
                                                <option>Digital Banking</option>
                                            </select>
                                        </div>

                                        <!-- Course Description -->
                                        <div class="form-group mb-3">
                                            <label>Course Description</label>
                                            <textarea class="form-control" name="description" rows="4" placeholder="Write course details..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-end mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-1"></i> Save Course
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>



                    <!-- /.card-body -->

                </div>

            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@push('script')
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
    </script>
@endpush
