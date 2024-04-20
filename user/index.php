<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section class="home">
            <header>
                <a href="#" class="logo">SMS</a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="game.php">Games</a></li>
                    <li><a href="inventory.php">Inventory</a></li>
                    <li><a href="notice.php">Notice</a></li>
                    <li><a href="paticipation.php">Participation</a></li>
                </ul>
            </header>
            <div class="content">
                <div class="textBox">
                    <h2>That's what<br><span>I like</span></h2>
                    <p>
                        "Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful."
                    </p>
                    <a href="game.php">View All Games</a>
                </div>
                <div class="imgBox">
                    <img src="img/a.jpg" alt="" class="sports">
                </div>
            </div>
            <ul class="thumb">
                <li><img src="img/volleyball.png" onclick="imgSlider('img/volleyball.png'); changeColor('#a18c02');"></li>
                <li><img src="img/batminton.png" onclick="imgSlider('img/batminton.png'); changeColor('#20b2AA');"></li>
                <li><img src="img/basket.png" onclick="imgSlider('img/basket.png'); changeColor('#2236b4');"></li>
               
            </ul>
        </section>
    </body>
</html>

<script>
    function imgSlider(someThing){
        document.querySelector('.sports').src = someThing;
    }
    function changeColor(color){
        const sec = document.querySelector('.home');
        sec.style.background = color;
    }
</script>