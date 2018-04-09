

<div>
        <nav id="myNavbar" class="navbar navbar-inverse navbar-fixed-top" style="padding-top:0px;" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbardiv">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="#">Brand</a>-->
                    <div class="navbar-header" style="padding-left: 40px; padding-top: 0%; padding-bottom: 0%;">
                        <a href="/#/" title="Go To Home Page"><label style="color:white;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:xx-large">GNS Portal</label></a>
                    </div>
                </div>

                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbardiv">
                    <ul class="nav navbar-nav" style="padding-top:0%;float:right">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle">Employee <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                        <li><a href="/#/showemployees">List</a></li>
                                        <li><a href="/#/myskills">My Skills</a></li>
                                        <li><a href="/#/medicalinsuracedetail">Medical Insurace Detail</a></li>
                                                                    </ul>
                            </li>
                        
                            <li class="dropdown">

                                <a class="dropdown-toggle" data-toggle="dropdown">Misc <span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                        <li class="dropdown-submenu">
                                            <a>Project</a>
                                            <ul class="dropdown-menu">
                                                    <li><a href="/#/showprojects">List</a></li>
                                                                                            </ul>
                                        </li>
                                    
                                        <li class="dropdown-submenu">
                                            <a>Policy</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="/#/leavepolicy">Leave Policy</a></li>
                                                <li><a href="/#/travelpolicy">Travel Policy</a></li>
                                                <!--SD_06152017 -- Remove Appraisal Policy-->
                                                <!--<li><a href="/#/appraisalpolicy">Appraisal Policy</a></li>-->
                                                <!--SD_04192017 -- Added Insurance Policy-->
                                                <li><a href="/#/insurancepolicy">Insurance Policy</a></li>
                                            </ul>
                                        </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Timesheet <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                                                            <li><a href="/#/timesheetview">Timesheet View</a></li>
                                                                    </ul>
                            </li>
                        
                            <li class="dropdown">

                                <a data-toggle="dropdown" class="dropdown-toggle">Leave Management <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a>Apply </a>
                                            <ul class="dropdown-menu">
                                                    <li><a href="/#/leave">Leave</a> </li>
                                                                                                    <li><a href="/#/compoff">Comp Off Request</a> </li>
                                                                                                    <li><a href="/#/workfromhome">Work From Home</a> </li>
                                                <!--SD_10132017 -- Apply NightShift-->
                                                    <li><a href="/#/nightshift">Night Shift</a> </li>
                                            </ul>
                                        </li>
                                    <li class="dropdown-submenu">
                                        <a>View</a>
                                        <ul class="dropdown-menu">
                                                <li><a href="/#/myleaves">My Leaves</a> </li>
                                                                                            <li><a href="/#/mycompoffs">My Comp Off Requests</a> </li>
                                                                                            <li><a href="/#/myworkfromhomes">Work From Home Details</a> </li>
                                            <!--SD_10132017 -- My Night Shifts-->
                                                <li><a href="/#/mynightshifts">Night Shift Details</a> </li>
                                                                                            <li><a href="/#/pendingapprovals">Pending Approvals</a> </li>
                                                                                    </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a>Calendar</a>
                                        <ul class="dropdown-menu">
                                                <li><a href="/#/myleavecalendar">My Leave Calendar</a> </li>
                                                                                            <li><a href="/#/teamleavecalendar">My Team Leave Calendar</a> </li>
                                            <li><a href="/#/gnsholidaycalendar">GNS Holiday Calendar</a> </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        
                        

                        
                                <li class="dropdown ">
                                    
                                    <a class="dropdown-toggle" data-toggle="dropdown" style="color:white;"><i class="fa fa-user"></i> Pramod Pal <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                            <li>
                                                <a href="/#/myprofile"><i class="fa fa-fw fa-user"></i> My Profile</a>
                                            </li>
                                        <li>
                                            <a href="/#/changepassword"><i class="glyphicon glyphicon-lock"></i> Change Password</a>

                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>login/logOff"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>


                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>

        </div>