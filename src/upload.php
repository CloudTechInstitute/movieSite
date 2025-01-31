<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Upload Form</title>
    <script src="backend/js/functions.js" type="text/javascript"></script>
</head>

<body>
    <h2>Upload Video</h2>
    <form id="uploadForm" method="post" enctype="multipart/form-data">
        <label for="fileName">File Name:</label>
        <input type="text" id="fileName" name="fileName" required><br><br>

        <label for="poster">Image Poster:</label>
        <input type="file" id="poster" name="poster" accept="image/*"><br><br>

        <label for="video">Video File:</label>
        <input type="file" id="video" name="video" accept="video/*"><br><br>

        <button type="submit" name="addBtn">Upload</button>
    </form>
    <div id="loader" style="display:none">Loading...</div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const form = document.getElementById("uploadForm");
            form.addEventListener("submit", handleFormSubmit);
        });
    </script>
</body>

</html>