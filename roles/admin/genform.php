<?php
$id = $_GET["id"];
session_start();
include 'confirm.php';
if ($_GET["type"] == "sliderans") {
?>
<div class="question<?php echo $id ?>" id="question<?php echo $id ?>">
        <div class="card my-2">
            <div class="card-body">
                <h5 class="card-title"> <input type="text" style="width: 70%;" class="form-control" value="<?php echo $id ?>. " name="main-question main-question<?php echo $id ?>" class="main-question" id="main-question<?php echo $id ?>"> </h5>
                <input type="hidden" name="slidercount<?php echo $id ?>" id="slidercount<?php echo $id ?>" value="1">
                <div class="sliders<?php echo $id ?>">
                    <input type="text" style="border: 0px; outline:none; background-color:transparent" placeholder="Enter Range Question key" name="slider-title slider-title<?php echo $id ?>-1" id="
                        slider-title<?php echo $id ?>-1" class="form-label slider-title">
                    <ul class="justify-content-between d-flex ml-0 pl-0" style="list-style: none">
                        <li class="">Very Bad</li>
                        <li>Bad</li>
                        <li>Neutral </li>
                        <li>Good</li>
                        <li>Excellent</li>
                    </ul>

                    <div class="range">
                        <input type="range" class="form-range" id="slider-<?php echo $id ?>-1" name="slider-<?php echo $id ?>-1" min="1" max="100" />
                    </div>
                </div>
                <button type="button" class="btn btn-primary" name="addoptions<?php echo $id; ?>" onclick="addSlider(<?php echo $id ?>)" id="addoptions<?php echo $id; ?>">Add Another Slider</button>
                <div class="row">
  <div class="col-md-11"></div>
                                        <div class="col-md-1">
                                      <button class="btn btn-danger btn-sm" onclick="delete_ques(<?php echo $id; ?>)">Remove</button>
                                        </div>
</div>
            </div>

        </div>
    </div>

<?php } elseif ($_GET["type"] == "shortans") { ?>
<div class="question<?php echo $id ?>" id="question<?php echo $id ?>">

        <div class="card my-2">
            <div class="card-body">
                <h5 class="card-title"> <input type="text" style="width: 50%;" class="form-control" value="<?php echo $id ?>. " name="main-question main-question<?php echo $id ?>" class="main-question" id="main-question<?php echo $id ?>"> </h5>
                <input type="text" name="shortans<?php echo $id ?>" class="form-control" placeholder="Enter Answer in Short" id="shortans<?php echo $id ?>">
<div class="row">
  <div class="col-md-11"></div>
                                        <div class="col-md-1">
                                      <button class="btn btn-danger btn-sm" onclick="delete_ques(<?php echo $id; ?>)">Remove</button>
                                        </div>
</div>

            </div>

        </div>
    </div>




<?php } elseif ($_GET["type"] == "longans") { ?>
<div class="question<?php echo $id ?>" id="question<?php echo $id ?>">

        <div class="card my-2">
            <div class="card-body">
                <h5 class="card-title"> <input type="text" style="width: 50%;" class="form-control" value="<?php echo $id ?>. " name="main-question longans main-question<?php echo $id ?>" class="main-question" id="main-question<?php echo $id ?>"> </h5>
                <!-- 5 radio buttons ranging from 5 to 1 -->
                <textarea type="text" name="longans<?php echo $id ?>" class="form-control" placeholder="Enter Answer in Long" id="ans<?php echo $id ?>"></textarea>
<div class="row">
  <div class="col-md-11"></div>
                                        <div class="col-md-1">
                                      <button class="btn btn-danger btn-sm" onclick="delete_ques(<?php echo $id; ?>)">Remove</button>
                                        </div>
</div>
            </div>

        </div>
    </div>


<?php } elseif ($_GET["type"] == "mcqans") { ?>
<div class="question<?php echo $id ?>" id="question<?php echo $id ?>">
        <div class="card my-2">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-10">
                        <h5 class="card-title"> <input type="text" style="width: 70%;" class="form-control" value="<?php echo $id ?>. " name="main-question main-question<?php echo $id ?>" class="main-question" id="main-question<?php echo $id ?>"> </h5>

                        <input type="hidden" name="optioncount<?php echo $id ?>" id="optioncount<?php echo $id ?>" value="2">
                        <div class="options<?php echo $id ?>">

                            <div class="form-check">
                                <input class="form-check-input ques-<?php echo $id ?>" type="radio" name="option-<?php echo $id ?>-1" id="option-<?php echo $id ?>-1" value="1" checked>
                                <input type="text" name="option-<?php echo $id ?>-1-text" id="option-<?php echo $id ?>-1-text" style="background-color: transparent; outline:none; border:0px" placeholder="Enter Option Subtext">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input ques-<?php echo $id ?>" type="radio" name="option-<?php echo $id ?>-2" id="option-<?php echo $id ?>-2" value="2">
                                <input type="text" name="option-<?php echo $id ?>-2-text" style="background-color: transparent; outline:none; border:0px" placeholder="Enter Option Subtext" id="option-<?php echo $id ?>-2-text">
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary mt-3" name="addoptions" onclick="addOption(<?php echo $id ?>)" id="addoptions">Add Another Option</button>


                    </div>
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input multi-<?php echo $id ?>" type="checkbox" name="multi-<?php echo $id ?>" id="multi-<?php echo $id ?>">
                            <label for="multi-<?php echo $id ?>">Multiple Selection</label>
                        </div>

                    </div>
                </div>
<div class="row">
  <div class="col-md-11"></div>
                                        <div class="col-md-1">
                                      <button class="btn btn-danger btn-sm" onclick="delete_ques(<?php echo $id; ?>)">Remove</button>
                                        </div>
</div>


                <script>
                    if (!$("multi-<?php echo $id ?>").attr("checked")) {
                        $(".ques-<?php echo $id ?>").change(function() {
                            $('.ques-<?php echo $id ?>').not(this).prop('checked', false);
                        });
                    }
                </script>
            </div>
        </div>
    </div>

<?php  } elseif ($_GET["type"] == "option") {
    $optioncount = $_GET["optioncount"];
?>

    <div class="form-check">
        <input class="form-check-input ques-<?php echo $id ?>" type="radio" name="option-<?php echo $id ?>-<?php echo $optioncount ?>" id="option-<?php echo $id ?>-<?php echo $optioncount ?>" value="<?php echo $optioncount ?>">
        <input type="text" name="option-<?php echo $id ?>-<?php echo $optioncount ?>-text" id="option-<?php echo $id ?>-<?php echo $optioncount ?>-text" style="background-color: transparent; outline:none; border:0px" placeholder="Enter Option Subtext">
<div class="row">
  <div class="col-md-11"></div>
                                        <div class="col-md-1">
                                      <button class="btn btn-danger btn-sm" onclick="delete_ques(<?php echo $id; ?>)">Remove</button>
                                        </div>
</div>
    </div>


<?php } elseif ($_GET["type"] == "slider") {  $optioncount = $_GET["optioncount"]; ?>
    <input type="text" style="border: 0px; outline:none; background-color:transparent" placeholder="Enter Range Question key" name="slider-title slider-title<?php echo $id ?>-<?php echo $optioncount ?>" id="
                slider-title<?php echo $id ?>-<?php echo $optioncount ?>" class="form-label slider-title">
    <ul>
        <li style="text-align:left; align-items:left;">Very Bad </li>
        <li style="padding-left:4%;text-align:left; align-items:left;">Bad</li>
        <li style="text-align:center; align-items:center;">Neutral </li>
        <li style="text-align:right;padding-right:4%; align-items:right;">Good</li>
        <li style="text-align:right; align-items:right;">Excellent</li>
    </ul>

    <div class="range">
        <input type="range" class="form-range" id="slider-<?php echo $id ?>-<?php echo $optioncount ?>" name="slider-<?php echo $id ?>-<?php echo $optioncount ?>" min="1" max="100" />
    </div>
<div class="row">
  <div class="col-md-11"></div>
                                        <div class="col-md-1">
                                      <button class="btn btn-danger btn-sm" onclick="delete_ques(<?php echo $id; ?>)">Remove</button>
                                        </div>
</div>
<?php } ?>
