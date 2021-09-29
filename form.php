
<form action="newart.php" method="POST">

    <div class="text-fields">
        <p>
            <label for="artist">Artist*:</label>
            <input type="text" name="artist" id="artist" minlength="1" maxlength="255" aria-required="true">
        </p>

        <p>
            <label for="title">Title*:</label>
            <input type="text" name="title" id="title" minlength="1" maxlength="255" aria-required="true">
        </p>

        <p>
            <label for="medium">Medium:</label>
            <input type="text" name="medium" id="medium" maxlength="255">
        </p>

        <p>
            <label for="size">Size:</label>
            <input type="text" name="size" id="size" maxlength="255">
        </p>

        <p>
            <label for="image">Image File Name:</label>
            <input type="text" name="image" id="image" maxlength="255">
        </p>
    </div>

    <div class="required-text">
        <p>*Required<strong><abbr title="required" aria-label="*"></abbr></strong></p>
    </div>

    <div class="form-buttons">
        <input class="refresh" type="reset" value="Refresh">

        <input class="save" type="submit" value="Save and Return">
    </div>

</form>