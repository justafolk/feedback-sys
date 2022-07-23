<?php
$id = $_GET["id"];
if ($_GET["type"] == "question") {
?>
    <div class="question<?php echo $id ?>">

        <div class="card my-2">
            <div class="card-body">
                <h5 class="card-title"> <input type="text" value="<?php echo $id ?>. " name="main-question main-question<?php echo $id ?>" class="main-question" id="main-question<?php echo $id ?>"> </h5>
                <!-- 5 radio buttons ranging from 5 to 1 -->
                <input type="hidden" name="optioncount<?php echo $id ?>" id="optioncount<?php echo $id ?>" value="2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="opt-1-<?php echo $id ?>" id="opt-1-<?php echo $id ?>" value="1" checked>
                    <label class="form-check-label" for="opt-1-<?php echo $id ?>">
                        1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="opt-2-<?php echo $id ?>" id="opt-1-<?php echo $id ?>" value="2">
                    <label class="form-check-label" for="opt-2-<?php echo $id ?>">
                        2
                    </label>
                </div>
                <button type="button" class="btn btn-sm btn-dark" name="addoptions" onclick="addoption(<?php echo $id ?>)" id="addoptions">Add Another Option</button>

            </div>
        </div>
    </div>
<?php  } elseif ($_GET["type"] == "option") { ?>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="opt-2-<?php echo $id ?>" id="opt-1-<?php echo $id ?>" value="2">
        <label class="form-check-label" for="opt-2-<?php echo $id ?>">
            2
        </label>
    </div>
    <script>
        $(document).ready(function() {
            $("#addoption<?php echo $id ?>").click(function() {
                var optioncount = document.getElementById("optioncount" + id).value;
                optioncount++;
                document.getElementById("optioncount" + id).value = optioncount;
                $.get("./genform.php", {
                    'id': optioncount,
                    'type': "option"
                }, function(data) {
                    $("#question" + id).append(data);
                })
            })
        });
    </script>

<?php } ?>