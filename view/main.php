<div id="formContainer">
    <?php /*if($formErrors != null) { ?>
        <div class="errorBox">
            Neįvesti arba neteisingai įvesti šie laukai:
            <?php
            echo $formErrors;
            ?>
        </div>
    <?php } */?>
    <form action="controller/client_create.php" method="post">
        <fieldset>
            <legend>Client register</legend>
            <div class="form-group">
                <label for="name">Name </label><br><input type="text"  required name="name" id="name" value="<?php if(isset($data2['name'])){echo $data2["name"];}  ?> ">
            </div>
        </fieldset>
        <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
        <p>
            <button  type=submit class="btn2" name="submit" >Submit</button>
        </p>
    </form>
</div>