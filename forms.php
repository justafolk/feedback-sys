<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback-sys</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body style="background-color: #f2f2f2">
    <div class="container my-5">
        <div class="middle" style="align-items: center; text-align:center;">
            <img src="./logo.png" alt="" style="width: 100px">
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
                <input class="form-check-input" type="checkbox" name="personalcheck"  id="personalcheck" checked>
                <label class="form-check-label" for="defaultCheck1">
                    Personal details
                </label>
            </div>

            <div class="card" id="personal" >
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
                                <label for="questions">Enter quantity of questions.</label>
                                <textarea name="questions" class="form-control" id="questions">
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-2 my-2">

                            <button class="btn btn-md btn-dark">Add Questions</button>
                        </div>

                    </div>
                </div>
            </div>
            <?php
                
            ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">1. Did you find the course to be helpful in all matters?</h5>
                    <!-- 5 radio buttons ranging from 5 to 1 -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            5
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            4
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                        <label class="form-check-label" for="exampleRadios4">
                            2
                        </label></div>  
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                        <label class="form-check-label" for="exampleRadios5">
                            1
                        </label>
                    </div>

                </div>
            </div>
            <?php ?>
        </form>


    </div>
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