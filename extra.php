<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animation</title>
<style>
    /* Define the keyframes for the animation */
    @keyframes slideInFromLeft {
        0% {
            transform: translateX(-100%);
        }
        100% {
            transform: translateX(0);
        }
    }

    /* Apply the animation to the .box element */
    .box {
        animation: slideInFromLeft 0.5s ease-in-out;
    }

    /* Other styles for your elements */
    .image img {
        max-width: 100%;
        height: auto;
    }

    .content {
        text-align: center;
    }

    .btn {
        background-color: var(--black);
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
        margin-top: 10px;
    }
</style>
</head>
<body>

<div class="box">
    <div class="image">
        <img src="adventure.jpg" alt="">
    </div>
    <div class="content">
        <h3 style="color: var(--black);">adventure & tour</h3>
        <a href="book.php" class="btn">book now</a>
    </div>
</div>

</body>
</html>



