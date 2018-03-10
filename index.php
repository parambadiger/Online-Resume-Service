<head>
    <link rel="icon" href="logo.ico" type="image/x-icon">
    <title>Online Resume Service</title>
</head>
    <div id="particles-js">
    <?php
        require 'header1.php';
    ?>
        <div class="btext">
            <h1 id="welcome">HI.., WELCOME TO MY WEBSITE</h1>
            <div class="buttons" id="welcome2">
                <div>
                    <p>click below button build your resume</p>
                    <a id="modal1" class="btn">Build Resume</a>
                    <div id="splitbtn">
                        <a id="modal1" href="cspdf.php" class="btn">Computer Science</a>
                        <a id="modal1" href="degreepdf.php" class="btn">Any Degree</a>
                    </div>
                </div>
                <div>
                    <p>click below button build your shareable link</p>
                    <a id="modal2" class="btn">Build Link</a>
                    <div id="splitbtn1">
                        <a id="modal1" href="cslink.php" class="btn">Computer Science</a>
                        <a id="modal1" href="degreelink.php" class="btn">Any Degree</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js', 'js/particles.json')

        $(document).ready(function(){
            $('#welcome2').addClass('active');
            $('#welcome').addClass('active');
            $('#modal1').click(function(){
                $('#splitbtn a').toggleClass('active');
            })
            $('#modal2').click(function(){
                $('#splitbtn1 a').toggleClass('active');
            })
        });
    </script>
    <script src="js/main.js"></script>