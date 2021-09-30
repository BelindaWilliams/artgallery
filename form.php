<form action="newart.php" method="POST">

    <div class="text-fields">
        <p>
            <label for="artist">Artist*:</label>
            <input type="text" name="artist" id="artist" maxlength="255" required>
        </p>

        <p>
            <label for="title">Title*:</label>
            <input type="text" name="title" id="title" maxlength="255" required>
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
        <p>*Required</p>
    </div>

    <div class="form-buttons">
        <input type="reset" value="Refresh">

        <input type="submit">
    </div>

</form>