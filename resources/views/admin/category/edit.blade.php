<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Category | WikiBlogger</title>
{{--    @section('title') Edit Category {{ $category->category_name }} - {{ config('app.name', 'Laravel') }} @endsection--}}
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
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
                        <button class="btn btn-primary"><a href="{{route('category.index')}}" style="color: white;">All Category</a></button>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">New category <small>(Politics, Business)</small></h3>
                            </div>
                            @include('admin.layouts._message')
                            <form action="{{ route('category.update', $category->id) }}" method="post">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="category_name">Under Category</label>
                                        <select name="parent_id" id="parent_id" class="form-control">
                                            <option value="0">Main Category</option>
                                            @foreach($categories as $data)
                                                <option value="{{ $data->id }}" @if($data->id == $category->parent_id) selected @endif>{{ $data->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="category_name">Category Name</label>
                                        <input type="text" class="form-control" name="category_name" id="category_name" value="{{ $category->category_name }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="category_name">Category Description</label>
                                        <textarea name="description" id="description" rows="5" class="form-control">
                                                {{ $category->description }}
                                            </textarea>
                                    </div>


                                    <div class="form-group">
                                        <div class="form-check" data-children-count="1">
                                            <input class="form-check-input" type="checkbox" value="1" name="status" id="status" @if($category->status == 1) checked @endif>
                                            <label class="form-check-label" for="invalidCheck">
                                                Mark as Active
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </section>
    </div>
    @include('admin.layouts.footer')
</div>
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<script>
    $(function () {
        $.validator.setDefaults({
            submitHandler: function () {
                alert( "Form successful submitted!" );
            }
        });
        $('#quickForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5
                },
                terms: {
                    required: true
                },
            },
            messages: {
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
</body>
</html>
