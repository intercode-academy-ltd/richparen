<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Posts | WikiBlogger</title>
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/bs-stepper/css/bs-stepper.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/dropzone/min/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/codemirror/codemirror.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/codemirror/theme/monokai.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/simplemde/simplemde.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <button class="btn btn-primary"><a href="{{route('news.index')}}" style="color: white;">News Index</a></button>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add posts</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Add posts</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                @include('admin.layouts._message')
                                <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="category_id">Under Category</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            @php echo  $categories_dropdown @endphp
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="news_title" class="form-control" id="title" placeholder="Enter title">
                                    </div>

                                    <div class="form-group">
                                        <label for="subcat">Sub category</label>
                                        <input type="text" name="subcat" class="form-control" id="subcat" placeholder="Enter Sub category">
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image:</label>
                                        <input type="file" name="image" class="form-control-file" id="image">
                                    </div>

                                    <div class="form-group">
                                        <textarea name="news_content" id="summernote"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="lesson">Type Lesson</label>
                                        <select name="lesson" id="lesson" class="form-control">
                                            <option value="0">Choose</option>
                                            <option value="lesson_java">Java</option>
                                            <option value="lesson_cplusplus">C++</option>
                                            <option value="lesson_database">Database</option>
                                            <option value="lesson_gamedev">Game Dev</option>
                                            <option value="lesson_english">English</option>
                                            <option value="lesson_russian">Russian</option>
                                            <option value="lesson_math">Math</option>
                                        </select>
                                    </div>
                                    <p><span style="color: red">lesson_java,</span>
                                        <span style="color: green">lesson_cplusplus,</span>
                                        <span style="color: black">lesson_database,</span>
                                        <span style="color: deeppink">lesson_gamedev,</span>
                                        <span style="color: saddlebrown">lesson_english,</span>
                                        <span style="color: darkgoldenrod">lesson_russian,</span>
                                        <span style="color: blue">lesson_math</span>
                                    </p>

                                    <div class="form-group">
                                        <label for="project">Type Project</label>
                                        <select name="project" id="project" class="form-control">
                                            <option value="0">Choose</option>
                                            <option value="project_java">Java</option>
                                            <option value="project_cplusplus">C++</option>
                                            <option value="project_database">Database</option>
                                            <option value="project_gamedev">Game Dev</option>
                                            <option value="project_english">English</option>
                                            <option value="project_russian">Russian</option>
                                            <option value="project_math">Math</option>
                                        </select>
                                    </div>
                                    <p><span style="color: red">project_java,</span>
                                        <span style="color: green">project_cplusplus,</span>
                                        <span style="color: black">project_database,</span>
                                        <span style="color: deeppink">project_gamedev,</span>
                                        <span style="color: saddlebrown">project_english,</span>
                                        <span style="color: darkgoldenrod">project_russian,</span>
                                        <span style="color: blue">project_math</span>
                                    </p>

                                    <div class="form-group">
                                        <label for="post">Post</label>
                                        <input type="text" name="post" class="form-control" id="post" placeholder="post or no">
                                    </div>
                                    <p><span style="font-style: italic;">BOOK:</span>
                                        <span style="color: black">success_book,</span>
                                        <span style="color: deeppink">english_book,</span>
                                        <span style="color: saddlebrown">java_book,</span>
                                        <span style="color: saddlebrown">cplusplus_book,</span>
                                        <span style="color: darkgoldenrod">database_book,</span>
                                        <span style="color: blue">gamedev_book</span>
                                        <span style="color: red">russian_book,</span>
                                        <span style="color: green">math_book,</span>
                                        <span style="color: black">hacking_book,</span>
                                        <span style="color: deeppink">informatics_book,</span>
                                        <span style="color: saddlebrown">business_book,</span>
                                        <span style="color: darkgoldenrod">algorithm_book,</span>
                                        <span style="color: blue">currency_book</span>
                                    </p>

                                    <div class="form-group">
                                        <label for="file">File</label>
                                        <input type="file" class="form-control" id="file" name="file_name" multiple>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check" data-children-count="1">
                                                <input class="form-check-input" type="checkbox" value="1" name="status" id="status" checked>
                                                <label class="form-check-label" for="invalidCheck">
                                                    Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('admin.layouts.footer')
</div>

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('admin/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<script src="{{asset('admin/plugins/dropzone/min/dropzone.min.js')}}"></script>
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

        //Date and time picker
        $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

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
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
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

        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
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
        file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
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

<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
</body>
</html>
