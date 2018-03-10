<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/demo_main.css">
    <script src="js/demo_main.js"></script>

</head>
<body>
    <?php
        $fname=$_GET['fname'];
        $lname=$_GET['lname'];
        $con = @mysql_connect("localhost", "root", "") or die("Failed to connect to MySql.");
        mysql_select_db("resume", $con) or die("Failed to connect to database");

        $sql="SELECT * FROM resume_form WHERE fname='$fname' and lname='$lname'";
        $result = mysql_query($sql) or die(mysql_error());
        while ($row = mysql_fetch_array($result))
        {
    ?>
    <section>
        <aside>
            <ul id="menu">
                <li>
                    <img src="img/<?php echo $row['photo'];?>" class="img-circle img-thumbnail">
                    <p><?php 
                    if($row['gender'] == 'Male'){
                        echo 'Mr.'.$row['fname'];
                    }else{
                        echo 'Miss.'.$row['fname'];
                    }?></p>
                </li>
                <li><a data-value="#home" onclick="handleNavigation(event)"  >Home</a></li>
                <li><a data-value="#skills" onclick="handleNavigation(event)" >Skills</a></li>
                <li><a data-value="#academics" onclick="handleNavigation(event)" >Academics</a></li>
                <li><a data-value="#project" onclick="handleNavigation(event)" >Academic projects</a></li>
                <li><a data-value="#about" onclick="handleNavigation(event)" >About</a></li>
            </ul>
            <ul id="sicon">
                <li><a href="<?php echo $row['facebook'];?>"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $row['linkedin'];?>"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $row['googleplus'];?>"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo $row['twitter'];?>"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
                <br><br><li><a href='resumedownload.php?<?php echo 'fname='.$fname.'&lname='.$lname.'' ?>' target="_BLANK"><i class="fa fa-download"></i> Download Resume</a></li>
            </ul>
        </aside>
        <main>
            <div id="home" class="active">
                <table>
                    <thead>
                        <tr><th>OBJECTIVEES</th></tr>
                    </thead>
                    <tbody>
                        <tr><td><?php echo $row['objective'];?></td></tr>
                    </tbody>
                </table>

                <table>
                    <thead>
                        <tr><th>PERSONAL DETAILS</th><th>&nbsp;</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>FULL NAME</td><td><?php echo $row['fname']; echo ' '; echo $row['lname'];?></td></tr>
                        <tr><td>DATE OF BIRTH</td><td><?php echo $row['bday'];?></td></tr>
                        <tr><td>MARITAL STATUS</td><td><?php echo $row['marital'];?></td></tr>
                        <tr><td>GENDER</td><td><?php echo $row['gender'];?></td></tr>
                        <tr><td>LANGUAGE KNOWN</td><td><?php echo $row['languages'];?></td></tr>
                        <tr><td>CONTACT NO</td><td><a href="tel:+918792631798"><?php echo $row['pnum'];?></a></td></tr>
                        <tr><td>GMAIL ID</td><td><a href="mailto:<?php echo $row['photo'];?>"><?php echo $row['gid'];?></a></td></tr>
                        <tr><td>PERMANENT ADDRESS</td><td><?php echo $row['paddress'];?></a></td></tr>
                        <tr><td>CURRENT ADDRESS</td><td><?php echo $row['caddress'];?></td></tr>
                    </tbody>
                </table>
            </div>


            <div id="skills">
                <table>
                    <thead>
                        <tr><th>SUMMURY OF SKILLS</th></tr>
                    </thead>
                    <tbody>
                        <tr><td><ul>
                        <?php 
                            $summury=explode('&& ', $row['summury']);
                            $summury=array_filter($summury);
                            foreach($summury as $s ) {
                                echo '<li>'.$s.'</li>';
                            }
                        ?>
                        </ul></td></tr>
                    </tbody>
                </table>

                <table>
                    <thead>
                        <tr><th>TECHNICAL SKILLS</th><th>&nbsp;</th></tr>
                    </thead>
                    <tbody>
                    <tr><td><ul>
                        <?php 
                            $skill=explode('&& ', $row['skill']);
                            $skill=array_filter($skill);
                            foreach($skill as $s ) {
                                echo '<li>'.$s.'</li>';
                            }
                        ?>
                        </ul></td></tr>
                    </tbody>
                </table>
            </div>

            <div id="academics">
                <?php
                    $course=explode('&& ', $row['course']);
                    $university=explode('&& ', $row['university']);
                    $result=explode('&& ', $row['result']);
                    $passout=explode('&& ', $row['passout']);
                ?>
                <table>
                    <?php $i = 0; ?>
                    <thead>
                        <tr><th>GRADUATION</th><th>&nbsp;</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>COURSE</td><td><?php echo $course[$i]; ?></td></tr>
                        <tr><td>COLLEGE</td><td><?php echo $university[$i]; ?></td>
                        <tr><td>RESULT</td><td><?php echo $result[$i]; ?></td></tr>
                        <tr><td>PASSOUT YEAR</td><td><?php echo $passout[$i]; ?></td></tr>                            
                    </table>
                </table>

                <table>
                    <?php $i++; ?>
                    <thead>
                        <tr><th>PUC</th><th>&nbsp;</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>COURSE</td><td><?php echo $course[$i]; ?></td></tr>
                        <tr><td>COLLEGE</td><td><?php echo $university[$i]; ?></td>
                        <tr><td>RESULT</td><td><?php echo $result[$i]; ?></td></tr>
                        <tr><td>PASSOUT YEAR</td><td><?php echo $passout[$i]; ?></td></tr>                            
                    </tbody>
                </table>

                <table>
                    <?php $i++; ?>
                    <thead>
                        <tr><th>SSLC</th><th>&nbsp;</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>COURSE</td><td><?php echo $course[$i]; ?></td></tr>
                        <tr><td>COLLEGE</td><td><?php echo $university[$i]; ?></td>
                        <tr><td>RESULT</td><td><?php echo $result[$i]; ?></td></tr>
                        <tr><td>PASSOUT YEAR</td><td><?php echo $passout[$i]; ?></td></tr>                            
                    </tbody>
                </table>
            </div>


            <div id="project">
                <table>
                    <thead>
                        <tr><th>PROJECT WORK</th><th>&nbsp;</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>TITLE</td><td><?php echo $row['title'];?></td></tr>
                        <tr><td>TEAM SIZE</td><td><?php echo $row['team'];?></td></tr>
                    </tbody>
                </table>

                <table>
                    <thead>
                        <tr><th>PROJECT DESCRIPTION</th></tr>
                    </thead>
                    <tbody>
                        <tr><td><?php echo $row['desp'];?></td></tr>
                    </tbody>
                </table>
            </div>


            <div id="about">
                <table>
                    <thead>
                        <tr><th>CURRICULAR ACTIVITIES</th></tr>
                    </thead>
                    <tbody>
                        <tr><td><ul>
                        <?php 
                            $activities=explode('&& ', $row['activities']);
                            $activities=array_filter($activities);
                            foreach($activities as $a ) {
                                echo '<li>'.$a.'</li>';
                            }
                        ?>
                        </ul></td></tr>
                    </tbody>              
                </table>

                <table>
                    <thead>
                        <tr><th>STREGTHS</th></tr>
                    </thead>
                    <tbody>
                        <tr><td><ul>
                        <?php 
                            $strength=explode('&& ', $row['strength']);
                            $strength=array_filter($strength);
                            foreach($strength as $s ) {
                                echo '<li>'.$s.'</li>';
                            }
                        ?>
                        </ul></td></tr>
                    </tbody>              
                </table>
            </div>
        </main>
    </section>
    <?php
        }
    ?>
</body>
</html>