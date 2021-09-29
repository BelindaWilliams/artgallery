
<form action="newart.php" method="POST">

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

    <input type="reset" value="Refresh">

    <input type="submit" value="Save and Return">

</form>