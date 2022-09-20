<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'confirm.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback-sys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <style>
        @font-face {
            font-family: "San Francisco";
            font-weight: 400;
            src: url("https://raw.githubusercontent.com/sahibjotsaggu/San-Francisco-Pro-Fonts/master/SF-Pro-Display-Semibold.otf")
        }

        body {

            font-family: "San Francisco" !important;
            font-size: .875rem;
        }

        .main-question {
            border: 0px;
            padding: 0px;
            outline: none;
        }

        .main-question:focus {
            border-bottom: 2px solid #ccc;
            font-size: .999rem;

        }

        .slider-title:focus {
            border-bottom: 2px solid #ccc !important;
            font-size: .999rem;

        }

        ul {
            width: 100%;
            display: table;
            table-layout: fixed;
            /* optional, for equal spacing */
            border-collapse: collapse;
        }

        li {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }
    </style>
    <script type="text/javascript">
        function addOption(id) {
            var optioncount = document.getElementById("optioncount" + id).value;
            optioncount++;
            document.getElementById("optioncount" + id).value = optioncount;
            $.get("./genform.php", {
                'id': id,
                'optioncount': optioncount,
                'type': "option"
            }, function(data) {
                console.log(data);
                $(".options" + id).append(data);
            })

        }

        function addSlider(id) {
            var optioncount = document.getElementById("slidercount" + id).value;
            optioncount++;
            document.getElementById("slidercount" + id).value = optioncount;
            $.get("./genform.php", {
                'id': id,
                'optioncount': optioncount,
                'type': "slider"
            }, function(data) {
                console.log(data);
                $(".sliders" + id).append(data);
            })

        }
    </script>
</head>

<body style="background-color: #f2f2f2">
    <div class="container my-5">
        <div class="middle" style="align-items: center; text-align:center;">
            <img src="./assets/img/logo.png" alt="" style="width: 100px">
        </div>

        <form action="./create_form.php" method="post">
            <!-- checkbox for personal details -->

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom  ">
                <div class="row">
                    <div class="col-md-12 my-1">
                        <h3 class="h2">
                            <input type="text" name="form-title" id="form-title" style="background-color: transparent; outline:none; border:0px" placeholder="Course Name (Course Code)">
                        </h3>
                    </div>
                    <div class="col-md-12">
                        <h6 class="h6">
                            <div class="blockquote-footer">Teacher Name</div>
                        </h6>
                    </div>
                </div>


                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-md btn-dark ">Export</button>
                    </div>
                    <button type="button" class="btn btn-md btn-outline dropdown-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" aria-hidden="true">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        This week
                    </button>
                </div>

            </div>
            <div class="card " style="background-color: transparent; border:1px solid black">
                <div class="card-body">
                    <div class="row">

                        <textarea name="instructions" id="textarea instructions" class="instructions" style="background-color: transparent; color: #515151;; border:0px; outline:none" placeholder="Important: Please fill in the details of the student who is taking the course.
                        - Please fill in the details of the student who is taking the course."></textarea>


                    </div>
                </div>
            </div>
            <div class="form-group my-1">
                <input class="form-check-input" type="checkbox" name="personalcheck" id="personalcheck" checked>
                <label class="form-check-label" for="defaultCheck1">
                    Personal details
                </label>
            </div>

            <div class="card" id="personal">
                <div class="card-body">
                    <div class="row">

                        <div class="col-6">
                            <div class="form-group">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First name">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email">Email ID</label>
                                <input type="email" class="form-control" id="email" placeholder="idk@cwit.com">
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last name">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="enroll">Enrollment number</label>
                                <input type="number" class="form-control" id="Enrollment Number" placeholder="194033">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div id="allquestions">

            </div>
            <br>


            <div class="row" style="justify-content: center">
                <div class="col-md-2">
                    <button style="width:100%" type="button" class="btn btn-dark" id="shortans">
                        Add Short Answer Question</button>
                </div>
                <div class="col-md-2"><button class="btn btn-dark" type="button" style="width:100%" id="longans">
                        Add Long Answer Question</button></div>
                <div class="col-md-2"><button class="btn btn-dark" type="button" style="width:100%" id="mcqans">
                        Add Multi Choice Question</button></div>

                <div class="col-md-2"><button class="btn btn-dark" type="button" style="width:100%" id="sliderans">
                        Add Slider Rating Question</button></div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-dark" style="height: 100%" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Bulk Questions
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Bulk Questions</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">

                                        <div class="col-6">
                                            <div class="form-group">
                                                Select Question Type
                                                <select name="formtype" class="form-control custom-select" id="formtype">
                                                    <option value="None">Select Question Type</option>
                                                    <option value="shortans">Short Answer</option>
                                                    <option value="longans">Long Answer</option>
                                                    <option value="mcqans">Multi Choice </option>
                                                    <option value="sliderans">Slider Rating </option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="quantity">Enter quantity of questions.</label>
                                                <input type="number" name="quantity" class="form-control" id="quantity">
                                            </div>
                                        </div>

                                        <div class="col-md-12 my-1">
                                            <div class="form-group">
                                                <label for="questions">(Optional) Enter questions separated by comma.</label>
                                                <textarea name="questions" class="form-control" id="questions"></textarea>
                                            </div>
                                        </div>
                                        

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button id="addform" type="button"class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <input type="submit" class="btn  btn-dark" value="Save Form">
            <button class="btn btn-light border">Discard</button>

        </form>


    </div>
    <script>
        var textarea = document.getElementById("textarea");
        var heightLimit = 200;

        textarea.oninput = function() {
            textarea.style.height = "";
            textarea.style.height = Math.min(textarea.scrollHeight, heightLimit) + "px";
        };
    </script>
    <script>
        var index = 0;
        $(document).ready(function() {
            $("#shortans").click(function() {
                index++;
                $.get("./genform.php", {
                    'id': index,
                    'type': "shortans"
                }, function(data) {
                    $("#allquestions").append(data);
                })

            });
            $("#longans").click(function() {
                index++;
                $.get("./genform.php", {
                    'id': index,
                    'type': "longans"
                }, function(data) {
                    $("#allquestions").append(data);
                })

            });
            $("#mcqans").click(function() {
                index++;
                $.get("./genform.php", {
                    'id': index,
                    'type': "mcqans"
                }, function(data) {
                    $("#allquestions").append(data);
                })

            });
            $("#sliderans").click(function() {
                index++;
                $.get("./genform.php", {
                    'id': index,
                    'type': "sliderans"
                }, function(data) {
                    $("#allquestions").append(data);
                })

            });
            $("#addform").click(function() {
                var formtype = $("#formtype").val();
                var quantity = $("#quantity").val();
                var questions = $("#questions").val();
                for (let i = 0; i < quantity; i++) {
                    index++;
                    $.get("./genform.php", {
                        'id': index,
                        'type': formtype,
                        'questions': questions
                    }, function(data) {
                        $("#allquestions").append(data);
                    })
                }


            });
        });
    </script>
    <script>
        document.getElementById("personalcheck").addEventListener("click", function() {
            if (this.checked) {
                document.getElementById("personal").style.display = "block";
            } else {
                document.getElementById("personal").style.display = "none";
            }
        });
    </script>
</body>

</html>