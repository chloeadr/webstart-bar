<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
        <title><?php echo $menu['name'] ?> | Dungeons & Bourbon</title>
    </head>

    <body>
        <div id="intro" class="container-fluid d-flex flex-column justify-content-between align-items-center header p-5" style="background-image: url('img/<?php echo $menu['bg'] ?>');">
            <div class="row w-100">
                <div class="col-3 d-flex justify-content-start p-0">
                    <a href="/?page=home" title="Dungeons & Bourbon">
                        <div class="logo"></div>
                    </a>
                </div>
                <div class="col-9 p-0">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                          <a class="menuItem" href="/?page=home">Home</a>
                        </li>
                        <li class="nav-item ml-5">
                          <a class="menuItem" href="/?page=menuList">Menu</a>
                        </li>
                        <li class="nav-item">
                          <a class="menuItem ml-5" href="/?page=waiter">The team</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <h1>
                    <?php echo $menu['name'] ?>
                </h1>
            </div>
            <div class="row d-flex flex-column justify-content-center align-items-center m-4">
                <p class="baseline mb-3">See what's on this menu</p>
                <img src="img/arrow.svg" />
            </div>
        </div>
        <div class="container-fluid main w-100">
            <div class="row">
                <div class="bruce col-12"></div>
            </div>
            <div class="row p-5 pb-5">
                <div class="col-12 justify-content-center align-items-center">
                    <?php
                    $categories = $menu["alldrinks"];
                      foreach ($categories as $category) { 
                          $drinks = $category["drinks"];
                          echo "<div class=\"row d-flex justify-content-center align-items-center mt-4\">
                            <h3 class=\"subtitle\">".$category["category"]."</h3>
                          </div>";
                          $drinks = $category["drinks"];
                          foreach ($drinks as $drink) {
                            echo "<div class=\"row d-flex justify-content-center align-items-center\">
                                <div class=\"col-6 d-flex justify-content-center\">
                                    <a href=\"?page=drink&drink=".$drink["drink_id"]."\"><h3 class=\"product productLink\">".$drink["drink_name"]."</h3></a>
                                </div>
                                <div class=\"col-6 d-flex justify-content-center\">
                                    <h3 class=\"product\">".$drink["drink_price"]."???</h3>
                                </div>
                            </div>";
                          }   
                      }
                    ?>
                </div>
            </div>
        </div>
        <div class="container-fluid footer p-5">
            <div class="row">
                <div class="col-6 p-4 d-flex flex-column justify-content-between">
                    <h3 class="footerTitle">Dungeons & Bourbon</h3>
                    <p>11 Union Terrace<br />
                        E16 9XP - London<br />
                        070 3991 5102<br />
                        Open every day, 10am-1am</p>
                    <p>For any questions or the organisation of a special event, you can contact us here, on social media, give us a call or come in person! 
                        (We don???t bite, promise)</p>
                </div>
                <div class="col-6 d-flex flex-column justify-content-between align-items-end p-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.1722543528144!2d-0.1250692845058869!3d51.51005571833044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604cbfc1d5b4f%3A0xe72d2d92dc00106d!2sAdelphi%20Theatre!5e0!3m2!1sfr!2sfr!4v1581445878994!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    <p class="fineprint pt-3">
                        Dungeons & Bourbon?? 2020
                    </p>
                </div>
            </div>
        </div>

        <script>
          // Get intro height
          intro = document.getElementById("intro");
          introHeight = window.innerHeight;
          intro.style.height = introHeight + "px";

          // Scroll into view 
          function scroll() {
            let e = document.getElementById("start");
            console.log("hello");
            e.scrollIntoView({
                block: 'start',
                behavior: 'smooth',
                inline: 'start'
            });
          }
        </script>
    </body>

</html>