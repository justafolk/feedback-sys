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
            <h4 class="h4">Feedback-sys</h4>
        </div>

        <form action="">
            <!-- checkbox for personal details -->

            <hr>
            <div class="form-group my-1">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Personal details
                </label>
            </div>

            <div class="card">
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
        </form>


    </div>
</body>

</html>