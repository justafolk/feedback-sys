<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback-sys</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
    </style>
</head>

<body style="background-color: #f2f2f2">
    <div class="container my-5">
        <div class="middle" style="align-items: center; text-align:center;">
            <img src="./assets/img/logo.png" alt="" style="width: 100px">
        </div>

        <form action="">
            <!-- checkbox for personal details -->

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom  ">
                <h3 class="h2">Network Administration (R18CP5405)</h3>

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
            <div class="card my-3">
                <div class="card-body">
                    <div class="row">

                        <div class="col-6">
                            <div class="form-group">
                                Select Question Type
                                <select name="formtype" class="form-control custom-select" id="formtype">
                                    <option value="None">Select Question Type</option>
                                    <option value="shortAnswer">Short Answer</option>
                                    <option value="longAnswer">Long Answer</option>
                                    <option value="multichoice">Multi Choice </option>
                                    <option value="checkbox">Check Box</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="quantity">Enter quantity of questions.</label>
                                <input type="number" name="quantity" class="form-control" id="quantity">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="questions">(Optional) Enter questions separated by comma.</label>
                                <textarea name="questions" class="form-control" id="questions"></textarea>
                            </div>
                        </div>
                        <div class="col-md-2 my-2">

                            <button id="addform" type="button" class="btn btn-md btn-dark">Add Questions</button>
                        </div>

                    </div>
                </div>
            </div>
            <div id="allquestions">

            </div>
            <input type="submit" value="">

        </form>


    </div>

    <script>
        var index = 1;
        $(document).ready(function() {
            $("#addform").click(function() {
                index++;
                $.get("./genform.php", {
                    'id': index,
                    'type': "question"
                }, function(data) {
                    $("#allquestions").append(data);
                })

            });
        });

        function addoption(id) {
            var optioncount = document.getElementById("optioncount" + id).value;
            optioncount++;
            document.getElementById("optioncount" + id).value = optioncount;
            $.get("./genform.php", {
                'id': optioncount,
                'type': "option"
            }, function(data) {
                $("#question" + id).append(data);
            })

        }
    </script>
    <script>
        // if personal details is checked, show the form
        document.getElementById("personalcheck").addEventListener("click", function() {
            if (this.checked) {
                document.getElementById("personal").style.display = "block";
            } else {
                document.getElementById("personal").style.display = "none";
            }
        });

        // if add questions is clicked, add the form card
    </script>
</body>

</html>