<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            body {
                color: #566787;
                background: #f5f5f5;
                font-family: 'Roboto', sans-serif;
            }
            .table-responsive {
                margin: 30px 0;
            }
            .table-wrapper {
                min-width: 1000px;
                background: #fff;
                padding: 20px;
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .table-title {
                padding-bottom: 10px;
                margin: 0 0 10px;
                min-width: 100%;
            }
            .table-title h2 {
                margin: 8px 0 0;
                font-size: 22px;
            }
            .search-box {
                position: relative;
                float: right;
            }
            .search-box input {
                height: 34px;
                border-radius: 20px;
                padding-left: 35px;
                border-color: #ddd;
                box-shadow: none;
            }
            .search-box input:focus {
                border-color: #3FBAE4;
            }
            .search-box i {
                color: #a0a5b1;
                position: absolute;
                font-size: 19px;
                top: 8px;
                left: 10px;
            }
            table.table tr th, table.table tr td {
                border-color: #e9e9e9;
            }
            table.table-striped tbody tr:nth-of-type(odd) {
                background-color: #fcfcfc;
            }
            table.table-striped.table-hover tbody tr:hover {
                background: #f5f5f5;
            }
            table.table th i {
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }
            table.table td:last-child {
                width: 130px;
            }
            table.table td a {
                color: #a0a5b1;
                display: inline-block;
                margin: 0 5px;
            }
            table.table td a.view {
                color: #03A9F4;
            }
            table.table td a.edit {
                color: #FFC107;
            }
            table.table td a.delete {
                color: #E34724;
            }
            table.table td i {
                font-size: 19px;
            }
            .pagination {
                float: right;
                margin: 0 0 5px;
            }
            .pagination li a {
                border: none;
                font-size: 95%;
                width: 30px;
                height: 30px;
                color: #999;
                margin: 0 2px;
                line-height: 30px;
                border-radius: 30px !important;
                text-align: center;
                padding: 0;
            }
            .pagination li a:hover {
                color: #666;
            }
            .pagination li.active a {
                background: #03A9F4;
            }
            .pagination li.active a:hover {
                background: #0397d6;
            }
            .pagination li.disabled i {
                color: #ccc;
            }
            .pagination li i {
                font-size: 16px;
                padding-top: 6px
            }
            .hint-text {
                float: left;
                margin-top: 6px;
                font-size: 95%;
            }
        </style>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <div class="container-xl">
                    <div class="table-responsive">

                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8"><h2>Customer <b>Details</b></h2></div>
                                    <div class="col-sm-4"><div class="search-box">
                                            <i class="material-icons">&#xE8B6;</i>
                                            <input type="text" class="form-control" id="search" placeholder="Search&hellip;">
                                        </div>
                                        <select class="form_select"  id="search_field" aria-label="Default select example">
                                            <option selected>In what field do you want to search</option>
                                            <option value="id">id</option>
                                            <option value="title">title</option>
                                            <option value="Author">Author</option>
                                            <option value="co_author">Co_Author</option>
                                            <option value="description">Description</option>
                                            <option value="publications_date">Publications_date</option>
                                        </select>


                                        <div class="search-box">
                                            <a href="#" class="create-modal btn btn-success btn-sm">Add Book</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="books" class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th><button id="sort_id">id</button></th>
                                    <th><button id="sort_title">Title</button></th>
                                    <th><button id="sort_author">Author</button></th>
                                    <th>Co-author</th>
                                    <th><button id="sort_description">Description </button></th>
                                    <th><button id="sort_publication_date">publications_date</button></th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

{{--                                @foreach($BookList as $book)--}}

{{--                                @endforeach--}}

                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="modal fade" id="post-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">add new book</h4>
                </div>
                <div class="modal-body">
                    <form name="userForm" class="form-horizontal">
                        <input type="hidden" name="post_id" id="post_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2">title</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                <span id="titleError" class="alert-message"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">Description</label>
                            <div class="col-sm-12">
                        <textarea class="form-control" id="description" name="description" placeholder="Enter description" rows="4" cols="50">
                        </textarea>
                                <span id="descriptionError" class="alert-message"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="createPost()">Save</button>
                </div>
            </div>
        </div>
        </div>
        {{--Form create --}}
        <div id="create" class="modal fade" role="dialog">
           <h5>Add new book</h5>
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                        &times;
                        </button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="form" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group row add">
                                <label type="text" class="form-control" for="title">Title:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control title" id="title" name="title" placeholder="Your Title here" required>
                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>

                            </div>
                            <div class="form-group row add">
                                <label type="text" class="form-control" for="author">Author:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="author" name="author" placeholder="Author here" required>
                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>


                            </div>
                            <div class="form-group row add">
                                <label type="text" class="form-control" for="title">Co-Author:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="co_author" name="co_author" placeholder="Co-Author here" required>
                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>

                            </div>
                            <div class="form-group row add">
                                <label type="text" class="form-control" for="description">Description:</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control description" id="description" name="description" placeholder="Description here" required>
                                    </textarea>
                                    <p class="error text-center alert alert-danger hidden"></p>
                                        </div>

                            </div>

                            <div class="form-group row add">
                                <label type="text" class="form-control" for="publications_date">publications date:</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="publications_date" name="publications_date"  required>

                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-dark" type="submit" id="add" name="button">
                            <span class="glyphicon glyphicon-plus"></span>Save Book
                        </button>
                        <button class="btn btn-dark" type="submit"  name="button">
                            <span class="glyphicon glyphicon-plus" data-dismiss="modal"></span>Close
                        </button>

                    </div>
                    <ul class="errList" id="errList">
                    </ul>
                </div>
            </div>
        </div>
        {{--form update--}}
        <div id="update" class="modal fade" role="dialog">
            <h5>Update information about book</h5>
            <ul id="errList"></ul>
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="form" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group row add">
                                <label type="text" class="form-control" for="title">id:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="update_id" name="title">
                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>

                            </div>
                            <div class="form-group row add">
                                <label type="text" class="form-control" for="title">Title:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control update_title" id="update_title" name="title" placeholder="Your Title here" required>
                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>

                            </div>
                            <div class="form-group row add">
                                <label type="text" class="form-control" for="author">Author:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control update_author" id="update_author" name="author" placeholder="Author here" required>
                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>


                            </div>
                            <div class="form-group row add">
                                <label type="text" class="form-control" for="title">Co-Author:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control update_co_author" id="update_co_author" name="co_author" placeholder="Co-Author here" required>
                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>

                            </div>
                            <div class="form-group row add">
                                <label type="text" class="form-control update_description" for="update_description">Description:</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control update_description" id="update_description" name="description" placeholder="Description here" required>
                                    </textarea>
                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>

                            </div>

                            <div class="form-group row add">
                                <label type="text" class="form-control " for="publications_date">publications date:</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control update_publications_date" id="update_publications_date" name="publications_date"  required>

                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-dark" type="submit" id="update_book" name="button">
                            <span class="glyphicon glyphicon-plus"></span>Save Book
                        </button>
                        <button class="btn btn-dark" type="submit" id="add" name="button">
                            <span class="glyphicon glyphicon-plus"></span>Close
                        </button>

                    </div>
                    <ul class="errList" id="errList">
                    </ul>
                </div>
            </div>
        </div>
{{--        delete--}}
        <div id="delete" class="modal fade" role="dialog">
            <h5>Update information about book</h5>
            <ul id="errList"></ul>
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">

                            <div class="form-group row add">
                                <input type="text" id="delID">
                                <h5>Are you sure?</h5>
                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>
                        <button type="button" class="btn btn-primary" data-bs-dissmiss="modal">no!</button>
                        <button type="button" class="btn btn-danger delete_book" >Oh yeah</button>
                    </div>
                </div>
            </div>
        </div>
{{--crud--}}
    <script type="text/javascript">
//index

 let order = "id";

function fetch(order) {
        $(document).ready(function () {
           let a =order

            $.ajax({
                type: "GET",
                url: "/BookList/"+a,
                dataType: "json",
                success: function (response) {
                    // console.log(response.BookList)
                    $('tbody').html("");
                    $.each(response.BookList, function (key, item) {
                        $('tbody').append('          <tr>\
                        <td>' + item.id + '</td>\
                        <td>' + item.title + '</td>\
                        <td>' + item.author + '</td>\
                        <td>' + item.co_author + '</td>\
                         <td>' + item.description + '</td>\
                        <td>' + item.publications_date + '</td>\
                        <td><button  value="' + item.id + '" data-id="k"  class="edit"><i class="material-icons">&#xE254;</i></button>\
                            <button value="' + item.id + '" data-id="k" class="delete" ><i class="material-icons">&#xE872;</i></button> \
                            </td>\
                    </tr>');
                    })

                }

            });

        });
    }
            fetch(order);

//edit
        $(document).on('click','.edit', function (e){
            e.preventDefault();
            var book_id = $(this).val();
           // console.log(book_id);
            $('#update').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit/"+book_id,
                success: function (response){

                if(response.status===404){
                    $('#success_message').html("");
                    $('#success_message').addClass('alert alert-danger');
                    $('#success_message').text(response.message);
                    }
                    else{
                    $("#update_id").val(response.book.id);
                    $("#update_title").val(response.book.title);
                    $("#update_author").val(response.book.author);
                    $("#update_co_author").val(response.book.co_author);
                    $("#update_description").val(response.book.description);
                    $("#update_publications_date").val(response.book.publications_date);
                    fetch();
                }

                }


        })
        });
//create
        $(document).on('click', '.create-modal', function () {
            $('#create').modal('show');
            $('.form-horizontal').show();
            $('.modal-title').text('Add Book');
        })

        $(document).ready(function () {


            $(document).on('click', '#add', function (e) {
                e.preventDefault();


                var data = {
                    'title': $('.title').val().trim(),
                    'author': $('#author').val().trim(),
                    'co_author': $('#co_author').val().trim(),
                    'description': $('.description').val().trim(),
                    'publications_date': $('#publications_date').val().trim()
                }

                // console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/add",
                    data: data,
                    datatype: "json",
                    success: function (response) {
                        //console.log(response.errors);
                        if (response.status === 400) {
                            $(`.errList`).html("")
                            $('.errList').addClass('alert alert-danger');
                            $.each(response.errno, function (key, err_values) {
                                $('.errList').append('<li>' + err_values + '</li>');
                            });
                        } else {
                            $('#success_message').text(response.message)
                            fetch();
                        }
                    }
                })
            })

            //
            //     $(document).on('click', '#add', function (e) {
            //         e.preventDefault();
            //         // console.log("hello");
            //
            //         var data = {
            //             'title': $('#update_title').val().trim(),
            //             'author': $('#update_author').val().trim(),
            //             'co_author': $('#update_co_author').val().trim(),
            //             'description': $('#update_description').val().trim(),
            //             'publications_date': $('#update_spublications_date').val().trim()
            //         }
            //         // console.log(data);
            //         $.ajaxSetup({
            //             headers: {
            //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //             }
            //         });
            //         $.ajax({
            //             type: "POST",
            //             url: "/edit/{id}",
            //             data: data,
            //             datatype: "json",
            //             success: function (response) {
            //                 //console.log(response.errors);
            //                 if (response.status === 400) {
            //                     $(`.errList`).html("")
            //                     $('.errList').addClass('alert alert-danger');
            //                     $.each(response.errno, function (key, err_values) {
            //                         $('.errList').append('<li>' + err_values + '</li>');
            //                     });
            //                 } else {
            //                     $('#success_message').text(response.message)
            //                     fetch();
            //                 }
            //
            //
            //             }
            //
            //         })
            //     })
            // })

            //update
            $(document).on('click', '#update_book', function (e) {
                var book_id = $('#update_id').val();
                var data = {
                    'title': $('.update_title').val().trim(),
                    'author': $('.update_author').val().trim(),
                    'co_author': $('#update_co_author').val().trim(),
                    'description': $('#update_description').val().trim(),
                    'publications_date': $('#update_publications_date').val().trim()
                }
                // console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "PUT",
                    url: "/update/" + book_id,
                    data: data,
                    datatype: "json",
                    success: function (response) {
                        //console.log(response.errors);
                        if (response.status === 400) {
                            $(`.errList`).html("")
                            $('.errList').addClass('alert alert-danger');
                            $.each(response.errno, function (key, err_values) {
                                $('.errList').append('<li>' + err_values + '</li>');
                            });
                        } else {
                            $('#success_message').text(response.message)
                        }
                    }
                })
            })
//delete
            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                var bookID = $(this).val();
                $('#delID').val(bookID);
                $('#delete').modal('show')
            })
            $(document).on('click', '.delete_book', function (e) {
                e.preventDefault();
                var bookID = $('#delID').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })

                $.ajax({
                    type: "DELETE",
                    url: "/delete/" + bookID,
                    success: function (response) {
                        alert('deleted')
                        $('#delete').modal('hide');
                        fetch('id')
                    }

                })
            })
        })




    </script>
{{--sort--}}
    <script type="text/javascript">
        $(document).on('click', '#sort_id', function () {
            let order = 'id'
            fetch(order)
        })
        $(document).on('click', '#sort_title', function () {
            let order = 'title'
            fetch(order)
        })
        $(document).on('click', '#sort_author', function () {
            let order = 'author'
            fetch(order)
        })
        $(document).on('click', '#sort_desciption', function () {
            let order = 'description'
            fetch(order)
        })
        $(document).on('click', '#sort_publication_date', function () {
            let order = 'publications_date'
            fetch(order)


        })

    </script>
{{--search--}}
    <script type="text/javascript">
            var column = $('#search_field').find(":selected").text();
function search(c) {
    $(document).on('keyup', "#search", function () {
        var SearchObj = $(this).val();


        $.ajax({
            method: 'POST',
            url: '/search',
            dataType: 'json',
            data: {
                '_token': '{{csrf_token()}}',
                SearchObj: SearchObj,
                c: c

            },
            success: function (response) {
                console.log(response)

                $('tbody').html("");
                $.each(response, function (key, item) {
                    $('tbody').append('          <tr>\
                        <td>' + item.id + '</td>\
                        <td>' + item.title + '</td>\
                        <td>' + item.author + '</td>\
                        <td>' + item.co_author + '</td>\
                         <td>' + item.description + '</td>\
                        <td>' + item.publications_date + '</td>\
                        <td><button  value="' + item.id + '" data-id="k"  class="edit"><i class="material-icons">&#xE254;</i></button>\
                            <button value="' + item.id + '" data-id="k" class="delete" ><i class="material-icons">&#xE872;</i></button> \
                            </td>\
                //     </tr>');
                })
            }

        })
    })
}
search(column);
    </script>

    </body>

</html>
