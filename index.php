<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Gyankoba Television</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

    <header>
        Gyankoba Television - Admin Panel
    </header>

    <div class="container">
        <h2>Add a News Post</h2>
        <form id="newsForm">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="content" placeholder="Content" required></textarea>
            <input type="text" name="image" placeholder="Image URL">
            <button type="submit">Post News</button>
        </form>
    </div>

    <script>
        document.getElementById("newsForm").addEventListener("submit", async function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const response = await fetch("add_post.php", {
                method: "POST",
                body: formData
            });
            const result = await response.json();
            alert(result.message);
        });
    </script>

</body>
</html>