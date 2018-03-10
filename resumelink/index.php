<?php
require 'header.php';
?>
<head>
    <title>build your resume link</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>BUILD YOUR RESUME LINK</h1>
    <form action="link.php" method="POST" enctype="multipart/form-data">
        <div align="center">
            <p>Click <a href="../examples.php" target="_blank"><strong>HERE</strong></a> to see examples.</p>
        </div>
        <div id="content">
            <div id="form1" class="active">
                <h3>CAREER OBJECTIVES</h3>
                <div id="objectives">
                    <p>Objective<textarea class="form-control"  name="objective" placeholder="Enter Career Objectives" autofocus></textarea></p>
                </div>
                <ul class="pager">
                    <li class="next"><a data-value="#form2" onclick="handleNavigation(event)"  >Next</a></li>
                </ul>
            </div>

            <div id="form2">
                <h3>ACADEMICS</h3>
                <div id="academics">
                    <div id="ug" class="active">
                        <h4>GRADUATION</h4><br>
                        <p>Course<input type="text" class="form-control" required name="course[0]" placeholder="Enter Course"></p>
                        <p>University<input type="text" class="form-control" required name="university[0]" placeholder="Enter University"></p>
                        <p>Result<input type="number" class="form-control" required name="result[0]"  placeholder="Enter Result"></p>
                        <p>Passout Year<input type="number" class="form-control" required name="passout[0]" placeholder="Enter Passout Year"></p>
                        <ul class="pager">
                            <li class="previous"><a data-value="#form1" onclick="handleNavigation(event)"  >Previous</a></li>
                            <li class="next"><a data-value="#puc" onclick="handleNav(event)"  >Next</a></li>
                        </ul>
                    </div>
                    <div id="puc">
                        <h4>PUC</h4><br>
                        <p>Course<input type="text" class="form-control" required name="course[1]" placeholder="Enter Course"></p>
                        <p>University<input type="text" class="form-control" required name="university[1]" placeholder="Enter University"></p>
                        <p>Result<input type="number" class="form-control" required name="result[1]"  placeholder="Enter Result"></p>
                        <p>Passout Year<input type="number" class="form-control" required name="passout[1]" placeholder="Enter Passout Year"></p>
                        <ul class="pager">
                            <li class="previous"><a data-value="#ug" onclick="handleNav(event)"  >Previous</a></li>
                            <li class="next"><a data-value="#sslc" onclick="handleNav(event)"  >Next</a></li>
                        </ul>
                    </div>
                    <div id="sslc">
                        <h4>SSLC</h4><br>
                        <p>Course<input type="text" class="form-control" required name="course[2]" placeholder="Enter Course"></p>
                        <p>University<input type="text" class="form-control" required name="university[2]" placeholder="Enter University"></p>
                        <p>Result<input type="number" class="form-control" required name="result[2]"  placeholder="Enter Result"></p>
                        <p>Passout Year<input type="number" class="form-control" required name="passout[2]" placeholder="Enter Passout Year"></p>
                        <ul class="pager">
                            <li class="previous"><a data-value="#puc" onclick="handleNav(event)"  >Previous</a></li>
                            <li class="next"><a data-value="#form3" onclick="handleNavigation(event)"  >Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="form3">
                <h3>SKILL SUMMURY</h3>
                <div id="skill_summury">
                    <p>Skill Summury<textarea class="form-control"  name="summury[0]" placeholder="Enter Skill Summury"></textarea></p>
                </div>
                <button class="btn btn-info" id="addsummury">Add</button>
                <ul class="pager">
                    <li class="previous"><a data-value="#form2" onclick="handleNavigation(event)"  >Previous</a></li>
                    <li class="next"><a data-value="#form4" onclick="handleNavigation(event)"  >Next</a></li>
                </ul>
            </div>

            <div id="form4">
                <h3>TECHNICAL SKILL</h3>
                <div id="technical_skill">
                    <p>Web Skills<input type="text" class="form-control"  name="skill" placeholder="Ex: HTML, CSS"></p>
                    <p>Web Tools<input type="text" class="form-control"  name="tool" placeholder="Ex: Notepad++, Dream Viewer"></p>
                    <p>Database<input type="text" class="form-control"  name="db" placeholder="Ex: SQL, MySQL"></p>
                    <p>Operating Systems<input type="text" class="form-control"  name="sos" placeholder="Enter Operating Systems"></p>
                </div>
                <ul class="pager">
                    <li class="previous"><a data-value="#form3" onclick="handleNavigation(event)"  >Previous</a></li>
                    <li class="next"><a data-value="#form5" onclick="handleNavigation(event)"  >Next</a></li>
                </ul>
            </div>

            <div id="form5">
                <h3>ACADEMIC PROJECTS</h3>
                <div id="academic_projects">
                    <p>Project Title<input type="text" class="form-control"  name="title" placeholder="Enter Project Title"></p>
                    <p>Server<input type="text" class="form-control"  name="srvr" placeholder="Ex: SQL, MySQL"></p>
                    <p>Operating Systems<input type="text" class="form-control"  name="pos" placeholder="Enter Operating Systems"></p>
                    <p>Team Size<input type="number" class="form-control"  name="team" placeholder="Enter No Of Members"></p>
                    <p>Technologies Used<textarea class="form-control"  name="tech" placeholder="Enter Programing Languages"></textarea></p>
                    <p>Description<textarea class="form-control"  name="desp" placeholder="Enter Project Description"></textarea></p>
                </div>
                <ul class="pager">
                    <li class="previous"><a data-value="#form4" onclick="handleNavigation(event)"  >Previous</a></li>
                    <li class="next"><a data-value="#form6" onclick="handleNavigation(event)"  >Next</a></li>
                </ul>
            </div>

            <div id="form6">
                <h3>CURRICULAR ACTIVITIES</h3>
                <div id="curricular_activities">
                    <p>Activity<textarea class="form-control"  name="activities[0]" placeholder="Enter Activity"></textarea></p>
                </div>
                <button class="btn btn-info" id="addactivities">Add</button>
                <ul class="pager">
                    <li class="previous"><a data-value="#form5" onclick="handleNavigation(event)"  >Previous</a></li>
                    <li class="next"><a data-value="#form7" onclick="handleNavigation(event)"  >Next</a></li>
                </ul>
            </div>

            <div id="form7">
                <h3>STRENGTH</h3>
                <div id="strength">
                    <p>Strength<textarea class="form-control"  name="strength[0]" placeholder="Enter Strength"></textarea></p>
                </div>
                <button class="btn btn-info" id="addstrength">Add</button>
                <ul class="pager">
                    <li class="previous"><a data-value="#form6" onclick="handleNavigation(event)"  >Previous</a></li>
                    <li class="next"><a data-value="#form8" onclick="handleNavigation(event)"  >Next</a></li>
                </ul>
            </div>

            <div id="form8">
                <h3>PERSONAL INFORMATION</h3>
                <div id="personal_info">
                    <p>First Name<input type="text" class="form-control"   name="fname" placeholder="&#xf007; Enter First Name" ></p>
                    <p>Last Name<input type="text" class="form-control"  name="lname" placeholder="&#xf015; Enter Last Name"></p>
                    <p>Date Of Birth<input type="date" class="form-control"  name="bday"></p>
                    <p>Select Gender
                        <select name="gender" class="form-control" id="gdr" >
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </p>
                    <p>Phone Number<input type="number" class="form-control"  name="pnum" placeholder="&#xf095; Enter Phone Number" ></p>
                    <p>Gmail ID<input type="text" class="form-control"  name="gid" placeholder="&#xf0e0; Enter Gmail ID"></p>
                    <p>Current Address<input class="form-control" name="caddress" placeholder="&#xf041; Enter Current Address" type="text"></input></p>
                    <p>Permanent Address<input class="form-control" name="paddress" placeholder="&#xf041; Enter Permanent Address" type="text"></input></p>
                    <p>Known Languages<input type="text"  name="languages" class="form-control" placeholder="&#xf1ab; Ex: Kannada, English"></p>
                    <p>Marital Status<input type="text"  class="form-control" placeholder="Enter Marital Status" name="marital"></p>
                    <p>Photo<input type="file" name="photo"></p>
                </div>    
                <ul class="pager">
                    <li class="previous"><a data-value="#form7" onclick="handleNavigation(event)"  >Previous</a></li>
                    <li class="next"><a data-value="#form9" onclick="handleNavigation(event)"  >Next</a></li>
                </ul>
            </div> 
            
            <div id="form9">
                <h3>DECLARATION</h3>
                <div class="alert alert-info alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Info!</strong> If you don't have an social account please enter <b>#</b>
                </div>
                <div id="declaration">
                <div>
                    <p>Facebook<textarea class="form-control"  name="facebook" placeholder="Enter facebook Link"></textarea></p>
                </div> 
                <div>
                    <p>Linkedin<textarea class="form-control"  name="linkedin" placeholder="Enter Linkedin Link"></textarea></p>
                </div> 
                <div>
                    <p>Twitter<textarea class="form-control"  name="twitter" placeholder="Enter Twitter Link"></textarea></p>
                </div> 
                <div>
                    <p>Googleplus<textarea class="form-control"  name="googleplus" placeholder="Enter Googleplus"></textarea></p>
                </div> 
                <div>
                    <p>Declaration<textarea class="form-control"  name="declaration" placeholder="Enter Declaration"></textarea></p>
                </div>  
                </div>    
                <ul class="pager">
                    <li class="previous"><a data-value="#form8" onclick="handleNavigation(event)"  >Previous</a></li>
                    <li class="next"><a><input type="submit" value="Submit" id="subbtn"></a></li>
                </ul>
            </div>
        </div>
    </form>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>