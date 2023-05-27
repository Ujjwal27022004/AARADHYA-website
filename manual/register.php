<?php

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//Connect to server.
//Connect to server.
$conn = mysqli_connect('localhost', 'u405195667_root','adhyaaya@20');
if (!$conn) {
    die("Server Connection Failed" . mysqli_error($conn));
}


//Connect to database.
$db = mysqli_select_db($conn, 'u405195667_adhyaaya');
if (!$db) {
    die("Database Connection Failed" . mysqli_error($db));
}

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $college = $_POST['college'];
    $event  = $_POST['event'];

    $od = $_POST['txn'];

    //Open-Mic Condition
    // No. Of Team Members: 1
    if ($event == "open_mic") {

        $open = "INSERT INTO `open_mic`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $mic = mysqli_query($conn, $open);
        if ($mic) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //AI-ML Workshop Condition
    // No. Of Team Members: 1
    if ($event == "ai_ml") {

        $ai = "INSERT INTO `ai-ml-workshop`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $ml = mysqli_query($conn, $ai);
        if ($ml) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //Workflow Workshop Condition
    // No. Of Team Members: 1
    if ($event == "Workflow") {

        $work = "INSERT INTO `workflow`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $flow = mysqli_query($conn, $work);
        if ($flow) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //Virtual Placement Condition
    // No. Of Team Members: 1
    if ($event == "virtual_placement") {

        $virtual = "INSERT INTO `virtual_placement`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $placement = mysqli_query($conn, $virtual);
        if ($placement) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //Stargaze Condition
    // No. Of Team Members: 1
    if ($event == "stargaze") {

        $star = "INSERT INTO `stargaze`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $gaze = mysqli_query($conn, $star);
        if ($gaze) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //IC-Engine Condition
    // No. Of Team Members: 1
    if ($event == "ic_engine") {

        $ic = "INSERT INTO `ic-engine`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $engine = mysqli_query($conn, $ic);
        if ($engine) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }



    //CODE-A -THON Condition
    // No. Of Team Members: 5
    if ($event == "explique'o_code") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];
        $member_name2 = $_POST['member_name2'];
        $email_member2 = $_POST['email_2'];
        $phone_no_member2 = $_POST['phone_no_2'];
        $member_name3 = $_POST['member_name3'];
        $email_member3 = $_POST['email_3'];
        $phone_no_member3 = $_POST['phone_no_3'];
        $member_name4 = $_POST['member_name4'];
        $email_member4 = $_POST['email_4'];
        $phone_no_member4 = $_POST['phone_no_4'];

        $no_of_team_members = $_POST['no_of_team_members'];

        $code = "INSERT INTO `code-a-thon`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `NAME_MEMBER_1`, `PHONE_MEMBER_1`, `EMAIL_MEMBER_1`, `NAME_MEMBER_2`, `PHONE_MEMBER_2`, `EMAIL_MEMBER_2`, `NAME_MEMBER_3`, `PHONE_MEMBER_3`, `EMAIL_MEMBER_3`, `NAME_MEMBER_4`, `PHONE_MEMBER_4`, `EMAIL_MEMBER_4`, `ORDER_ID`) VALUES('$fname','$lname','$email','$phone','$college','$no_of_team_members','$member_name1','$phone_no_member1','$email_member1','$member_name2','$phone_no_member2','$email_member2','$member_name3','$phone_no_member3','$email_member3','$member_name4','$phone_no_member4','$email_member4','$od')";
        $thon = mysqli_query($conn, $code);
        if ($thon) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //FOOD O HOLIC Condition
    // No. Of Team Members: 4
    if ($event == "food_o_holic") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];
        $member_name2 = $_POST['member_name2'];
        $email_member2 = $_POST['email_2'];
        $phone_no_member2 = $_POST['phone_no_2'];
        $member_name3 = $_POST['member_name3'];
        $email_member3 = $_POST['email_3'];
        $phone_no_member3 = $_POST['phone_no_3'];

        $no_of_team_members = $_POST['no_of_team_members'];

        $food = "INSERT INTO `food_o_holic`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `NAME_MEMBER_1`, `PHONE_MEMBER_1`, `EMAIL_MEMBER_1`, `NAME_MEMBER_2`, `PHONE_MEMBER_2`, `EMAIL_MEMBER_2`, `NAME_MEMBER_3`, `PHONE_MEMBER_3`, `EMAIL_MEMBER_3`, `ORDER_ID`) VALUES('$fname','$lname','$email','$phone','$college','$no_of_team_members','$member_name1','$phone_no_member1','$email_member1','$member_name2','$phone_no_member2','$email_member2','$member_name3','$phone_no_member3','$email_member3','$od')";
        $holic = mysqli_query($conn, $food);
        if ($holic) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //RAVIC Condition
    // No. Of Team Members: 4
    if ($event == "ravic") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];
        $member_name2 = $_POST['member_name2'];
        $email_member2 = $_POST['email_2'];
        $phone_no_member2 = $_POST['phone_no_2'];
        $member_name3 = $_POST['member_name3'];
        $email_member3 = $_POST['email_3'];
        $phone_no_member3 = $_POST['phone_no_3'];

        $no_of_team_members = $_POST['no_of_team_members'];

        $ra = "INSERT INTO `ravic`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `NAME_MEMBER_1`, `PHONE_MEMBER_1`, `EMAIL_MEMBER_1`, `NAME_MEMBER_2`, `PHONE_MEMBER_2`, `EMAIL_MEMBER_2`, `NAME_MEMBER_3`, `PHONE_MEMBER_3`, `EMAIL_MEMBER_3`, `ORDER_ID`) VALUES('$fname','$lname','$email','$phone','$college','$no_of_team_members','$member_name1','$phone_no_member1','$email_member1','$member_name2','$phone_no_member2','$email_member2','$member_name3','$phone_no_member3','$email_member3','$od')";
        $vic = mysqli_query($conn, $ra);
        if ($vic) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //ROBO SOCCER Condition
    // No. Of Team Members: 5
    if ($event == "robo_soccer") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];
        $member_name2 = $_POST['member_name2'];
        $email_member2 = $_POST['email_2'];
        $phone_no_member2 = $_POST['phone_no_2'];
        $member_name3 = $_POST['member_name3'];
        $email_member3 = $_POST['email_3'];
        $phone_no_member3 = $_POST['phone_no_3'];
        $member_name4 = $_POST['member_name4'];
        $email_member4 = $_POST['email_4'];
        $phone_no_member4 = $_POST['phone_no_4'];
        $no_of_team_members = $_POST['no_of_team_members'];

        $robo = "INSERT INTO `robo_soccer`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `NAME_MEMBER_1`, `PHONE_MEMBER_1`, `EMAIL_MEMBER_1`, `NAME_MEMBER_2`, `PHONE_MEMBER_2`, `EMAIL_MEMBER_2`, `NAME_MEMBER_3`, `PHONE_MEMBER_3`, `EMAIL_MEMBER_3`,`NAME_MEMBER_4`, `PHONE_MEMBER_4`, `EMAIL_MEMBER_4`, `ORDER_ID`) VALUES('$fname','$lname','$email','$phone','$college','$no_of_team_members','$member_name1','$phone_no_member1','$email_member1','$member_name2','$phone_no_member2','$email_member2','$member_name3','$phone_no_member3','$email_member3','$member_name4','$phone_no_member4','$email_member4','$od')";
        $soccer = mysqli_query($conn, $robo);
        if ($soccer) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //BORN PSYCHOS Condition
    // No. Of Team Members: 5
    if ($event == "born_psychos") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];
        $member_name2 = $_POST['member_name2'];
        $email_member2 = $_POST['email_2'];
        $phone_no_member2 = $_POST['phone_no_2'];
        $member_name3 = $_POST['member_name3'];
        $email_member3 = $_POST['email_3'];
        $phone_no_member3 = $_POST['phone_no_3'];
        $member_name4 = $_POST['member_name4'];
        $email_member4 = $_POST['email_4'];
        $phone_no_member4 = $_POST['phone_no_4'];

        $no_of_team_members = $_POST['no_of_team_members'];

        $born = "INSERT INTO `born_psychos`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `NAME_MEMBER_1`, `PHONE_MEMBER_1`, `EMAIL_MEMBER_1`, `NAME_MEMBER_2`, `PHONE_MEMBER_2`, `EMAIL_MEMBER_2`, `NAME_MEMBER_3`, `PHONE_MEMBER_3`, `EMAIL_MEMBER_3`, `NAME_MEMBER_4`, `PHONE_MEMBER_4`, `EMAIL_MEMBER_4`, `ORDER_ID`) VALUES('$fname','$lname','$email','$phone','$college','$no_of_team_members','$member_name1','$phone_no_member1','$email_member1','$member_name2','$phone_no_member2','$email_member2','$member_name3','$phone_no_member3','$email_member3','$member_name4','$phone_no_member4','$email_member4','$od')";
        $psychos = mysqli_query($conn, $born);
        if ($psychos) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //AVISHKAR Condition
    // No. Of Team Members: 5
    if ($event == "avishkar") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];
        $member_name2 = $_POST['member_name2'];
        $email_member2 = $_POST['email_2'];
        $phone_no_member2 = $_POST['phone_no_2'];
        $member_name3 = $_POST['member_name3'];
        $email_member3 = $_POST['email_3'];
        $phone_no_member3 = $_POST['phone_no_3'];
        $member_name4 = $_POST['member_name4'];
        $email_member4 = $_POST['email_4'];
        $phone_no_member4 = $_POST['phone_no_4'];

        $no_of_team_members = $_POST['no_of_team_members'];

        $avi = "INSERT INTO `avishkar`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `NAME_MEMBER_1`, `PHONE_MEMBER_1`, `EMAIL_MEMBER_1`, `NAME_MEMBER_2`, `PHONE_MEMBER_2`, `EMAIL_MEMBER_2`, `NAME_MEMBER_3`, `PHONE_MEMBER_3`, `EMAIL_MEMBER_3`, `NAME_MEMBER_4`, `PHONE_MEMBER_4`, `EMAIL_MEMBER_4`, `ORDER_ID`) VALUES('$fname','$lname','$email','$phone','$college','$no_of_team_members','$member_name1','$phone_no_member1','$email_member1','$member_name2','$phone_no_member2','$email_member2','$member_name3','$phone_no_member3','$email_member3','$member_name4','$phone_no_member4','$email_member4','$od')";
        $shkar = mysqli_query($conn, $avi);
        if ($shkar) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //BRIDGE O CRAFT Condition
    // No. Of Team Members: 5
    if ($event == "bridge_o_craft") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];
        $member_name2 = $_POST['member_name2'];
        $email_member2 = $_POST['email_2'];
        $phone_no_member2 = $_POST['phone_no_2'];
        $member_name3 = $_POST['member_name3'];
        $email_member3 = $_POST['email_3'];
        $phone_no_member3 = $_POST['phone_no_3'];
        $member_name4 = $_POST['member_name4'];
        $email_member4 = $_POST['email_4'];
        $phone_no_member4 = $_POST['phone_no_4'];

        $no_of_team_members = $_POST['no_of_team_members'];

        $bridge = "INSERT INTO `bridge_o_craft`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `NAME_MEMBER_1`, `PHONE_MEMBER_1`, `EMAIL_MEMBER_1`, `NAME_MEMBER_2`, `PHONE_MEMBER_2`, `EMAIL_MEMBER_2`, `NAME_MEMBER_3`, `PHONE_MEMBER_3`, `EMAIL_MEMBER_3`, `NAME_MEMBER_4`, `PHONE_MEMBER_4`, `EMAIL_MEMBER_4`, `ORDER_ID`) VALUES('$fname','$lname','$email','$phone','$college','$no_of_team_members','$member_name1','$phone_no_member1','$email_member1','$member_name2','$phone_no_member2','$email_member2','$member_name3','$phone_no_member3','$email_member3','$member_name4','$phone_no_member4','$email_member4','$od')";
        $craft = mysqli_query($conn, $bridge);
        if ($craft) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //CRIC BASH Condition
    // No. Of Team Members: 6
    if ($event == "cric_bash") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];
        $member_name2 = $_POST['member_name2'];
        $email_member2 = $_POST['email_2'];
        $phone_no_member2 = $_POST['phone_no_2'];
        $member_name3 = $_POST['member_name3'];
        $email_member3 = $_POST['email_3'];
        $phone_no_member3 = $_POST['phone_no_3'];
        $member_name4 = $_POST['member_name4'];
        $email_member4 = $_POST['email_4'];
        $phone_no_member4 = $_POST['phone_no_4'];
        $member_name5 = $_POST['member_name5'];
        $email_member5 = $_POST['email_5'];
        $phone_no_member5 = $_POST['phone_no_5'];

        $no_of_team_members = $_POST['no_of_team_members'];

        $cric = "INSERT INTO `cric_bash`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `NAME_MEMBER_1`, `PHONE_MEMBER_1`, `EMAIL_MEMBER_1`, `NAME_MEMBER_2`, `PHONE_MEMBER_2`, `EMAIL_MEMBER_2`, `NAME_MEMBER_3`, `PHONE_MEMBER_3`, `EMAIL_MEMBER_3`, `NAME_MEMBER_4`, `PHONE_MEMBER_4`, `EMAIL_MEMBER_4`, `NAME_MEMBER_5`, `PHONE_MEMBER_5`, `EMAIL_MEMBER_5`, `ORDER_ID`) VALUES('$fname','$lname','$email','$phone','$college','$no_of_team_members','$member_name1','$phone_no_member1','$email_member1','$member_name2','$phone_no_member2','$email_member2','$member_name3','$phone_no_member3','$email_member3','$member_name4','$phone_no_member4','$email_member4','$member_name5','$phone_no_member5','$email_member5','$od')";
        $bash = mysqli_query($conn, $cric);
        if ($bash) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //Vaad Vivaad Condition
    // No. Of Team Members: 1
    if ($event == "vaad_vivaad_single") {

        $category = $_POST['category'];

        $vaad = "INSERT INTO `vaad_vivaad`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `ORDER_ID`) VALUES ('$fname','$lname','$email','$phone','$college','$category','$od')";
        $vivaad = mysqli_query($conn, $vaad);
        if ($vivaad) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
    // No. Of Team Members: 2
    if ($event == "vaad_vivaad_double") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];

        $category = $_POST['category'];

        $vaad = "INSERT INTO `vaad_vivaad`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `MEMBER_NAME`, `MEMBER_EMAIL`, `MEMBER_PHONE`, `ORDER_ID`) VALUES ('$fname','$lname','$email','$phone','$college','$category','$member_name1','$email_member1','$phone_no_member1','$od')";
        $vivaad = mysqli_query($conn, $vaad);
        if ($vivaad) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }


    //TOTAL STATION Condition
    // No. Of Team Members: 1
    if ($event == "total_station_single") {

        $category = $_POST['category'];

        $total = "INSERT INTO `total_station`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `ORDER_ID`) VALUES ('$fname','$lname','$email','$phone','$college','$category','$od')";
        $station = mysqli_query($conn, $total);
        if ($station) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }
    // No. Of Team Members: 2
    if ($event == "total_station_double") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];

        $category = $_POST['category'];

        $total = "INSERT INTO `total_station`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `MEMBER_NAME`, `MEMBER_EMAIL`, `MEMBER_PHONE`, `ORDER_ID`) VALUES ('$fname','$lname','$email','$phone','$college','$category','$member_name1','$email_member1','$phone_no_member1','$od')";
        $station = mysqli_query($conn, $total);
        if ($station) {
            echo "<script>
	                alert('Successfully entered details');
	                window.location.href='https://adhyaaya.org/manual/';
	            </script>";
        } else {
            echo mysqli_error($conn);
        }
    }



    //RESPWAN  Condition
    if (isset($_POST['game'])) {

        $game = $_POST['game'];
        // Respaawn fifa Condition
        // No. of Team Members: 2  
        if ($game == "fifa") {

            $member_name1 = $_POST['member_name1'];
            $email_member1 = $_POST['email_1'];
            $phone_no_member1 = $_POST['phone_no_1'];

            $category_fifa = $_POST['category_fifa'];

            $fi = "INSERT INTO `respawn_fifa`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `MEMBER_NAME`, `MEMBER_EMAIL`, `MEMBER_PHONE`, `ORDER_ID`) VALUES ('$fname','$lname','$email','$phone','$college','$category_fifa','$member_name1','$email_member1','$phone_no_member1','$od')";
            $fa = mysqli_query($conn, $fi);
            if ($fa) {
                echo "<script>
                        alert('Successfully entered details');
                        window.location.href='https://adhyaaya.org/manual/';
                    </script>";
            } else {
                echo mysqli_error($conn);
            }
        }

        // Respaawn pubg Condition
        // No. of Team Members: 4    
        if ($game == "pubg") {

            $member_name1 = $_POST['member_name1'];
            $email_member1 = $_POST['email_1'];
            $phone_no_member1 = $_POST['phone_no_1'];
            $member_name2 = $_POST['member_name2'];
            $email_member2 = $_POST['email_2'];
            $phone_no_member2 = $_POST['phone_no_2'];
            $member_name3 = $_POST['member_name3'];
            $email_member3 = $_POST['email_3'];
            $phone_no_member3 = $_POST['phone_no_3'];

            $category_pubg = $_POST['category_pubg'];

            $pu = "INSERT INTO `respawn_pubg`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `NAME_MEMBER_1`, `PHONE_MEMBER_1`, `EMAIL_MEMBER_1`, `NAME_MEMBER_2`, `PHONE_MEMBER_2`, `EMAIL_MEMBER_2`, `NAME_MEMBER_3`, `PHONE_MEMBER_3`, `EMAIL_MEMBER_3`, `ORDER_ID`) VALUES ('$fname','$lname','$email','$phone','$college','$category_pubg','$member_name1','$phone_no_member1','$email_member1','$member_name2','$phone_no_member2','$email_member2','$member_name3','$phone_no_member3','$email_member3','$od')";
            $bg = mysqli_query($conn, $pu);
            if ($bg) {
                echo "<script>
                        alert('Successfully entered details');
                        window.location.href='https://adhyaaya.org/manual/';
                    </script>";
            } else {
                echo mysqli_error($conn);
            }
        }


        // Respaawn csgo Condition
        // No. of Team Members: 5
        if ($game == "csgo") {

            $member_name1 = $_POST['member_name1'];
            $email_member1 = $_POST['email_1'];
            $phone_no_member1 = $_POST['phone_no_1'];
            $member_name2 = $_POST['member_name2'];
            $email_member2 = $_POST['email_2'];
            $phone_no_member2 = $_POST['phone_no_2'];
            $member_name3 = $_POST['member_name3'];
            $email_member3 = $_POST['email_3'];
            $phone_no_member3 = $_POST['phone_no_3'];
            $member_name4 = $_POST['member_name4'];
            $email_member4 = $_POST['email_4'];
            $phone_no_member4 = $_POST['phone_no_4'];

            $no_of_team_members = $_POST['no_of_team_members'];

            $cs = "INSERT INTO `respawn_csgo`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `NAME_MEMBER_1`, `PHONE_MEMBER_1`, `EMAIL_MEMBER_1`, `NAME_MEMBER_2`, `PHONE_MEMBER_2`, `EMAIL_MEMBER_2`, `NAME_MEMBER_3`, `PHONE_MEMBER_3`, `EMAIL_MEMBER_3`, `NAME_MEMBER_4`, `PHONE_MEMBER_4`, `EMAIL_MEMBER_4`, `ORDER_ID`) VALUES ('$fname','$lname','$email','$phone','$college','$no_of_team_members','$member_name1','$email_member1','$phone_no_member1','$member_name2','$email_member2','$phone_no_member2','$member_name3','$email_member3','$phone_no_member3','$member_name4','$email_member4','$phone_no_member4','$od')";
            $go = mysqli_query($conn, $cs);
            if ($go) {
                echo "<script>
                        alert('Successfully entered details');
                        window.location.href='https://adhyaaya.org/manual/';
                    </script>";
            } else {
                echo mysqli_error($conn);
            }
        }
    }
}
?>

<?php

$mail = $email;
$message = "DETAILS\n";
$message .= "\nFirst name: " . $fname;
$message .= "\nLast name: " . $lname;
$message .= "\nEmail: " . $email;
$message .= "\nCollege: " . $college;
$message .= "\nMobile-number: " . $phone;
$message .= "\nEvent: ";
if (isset($_POST['event'])) {
    $message .= $event;
} else {
    $message .= $game;
}
$message .= "\nPayment Status: " . $od;
$message .= "\nFor any query write us on adhyaaya.gcoen@gmail.com";

// Receive Variable 
// Confirmation page
$user = "$mail";
$usersubject = "Thank You- Adhyaaya20";
$userheaders = "From: info@adhyaaya.org\n";
// Confirmation page WITH SUMMARY 
$usermessage = "Thank you for your time. Your request is successfully submitted.\n\nBELOW A SUMMARY\n\n$message";
mail($user, $usersubject, $usermessage, $userheaders)
?>
