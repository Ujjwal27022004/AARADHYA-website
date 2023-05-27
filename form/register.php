<?php

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

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

    $od = "ADY" . rand(10000, 99999999);

    //Open-Mic Condition
    // No. Of Team Members: 1
    if ($event == "open_mic") {

        $open = "INSERT INTO `open_mic`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $mic = mysqli_query($conn, $open);
    }


    //AI-ML Workshop Condition
    // No. Of Team Members: 1
    if ($event == "ai_ml") {

        $ai = "INSERT INTO `ai-ml-workshop`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $ml = mysqli_query($conn, $ai);
    }


    //Workflow Workshop Condition
    // No. Of Team Members: 1
    if ($event == "Workflow") {

        $work = "INSERT INTO `workflow`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $flow = mysqli_query($conn, $work);
    }


    //Virtual Placement Condition
    // No. Of Team Members: 1
    if ($event == "virtual_placement") {

        $virtual = "INSERT INTO `virtual_placement`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $placement = mysqli_query($conn, $virtual);
    }


    //Stargaze Condition
    // No. Of Team Members: 1
    if ($event == "stargaze") {

        $star = "INSERT INTO `stargaze`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $gaze = mysqli_query($conn, $star);
    }


    //IC-Engine Condition
    // No. Of Team Members: 1
    if ($event == "ic_engine") {

        $ic = "INSERT INTO `ic-engine`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `ORDERID`) VALUES ('$fname','$lname','$email','$phone','$college','$od')";
        $engine = mysqli_query($conn, $ic);
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
    }


    //Vaad Vivaad Condition
    // No. Of Team Members: 1
    if ($event == "vaad_vivaad_single") {

        $category = $_POST['category'];

        $vaad = "INSERT INTO `vaad_vivaad`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `ORDER_ID`) VALUES ('$fname','$lname','$email','$phone','$college','$category','$od')";
        $vivaad = mysqli_query($conn, $vaad);
    }
    // No. Of Team Members: 2
    if ($event == "vaad_vivaad_double") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];

        $category = $_POST['category'];

        $vaad = "INSERT INTO `vaad_vivaad`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `MEMBER_NAME`, `MEMBER_EMAIL`, `MEMBER_PHONE`, `ORDER_ID`) VALUES ('$fname','$lname','$email','$phone','$college','$category','$member_name1','$email_member1','$phone_no_member1','$od')";
        $vivaad = mysqli_query($conn, $vaad);
    }


    //TOTAL STATION Condition
    // No. Of Team Members: 1
    if ($event == "total_station_single") {

        $category = $_POST['category'];

        $total = "INSERT INTO `total_station`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `ORDER_ID`) VALUES ('$fname','$lname','$email','$phone','$college','$category','$od')";
        $station = mysqli_query($conn, $total);
    }
    // No. Of Team Members: 2
    if ($event == "total_station_double") {

        $member_name1 = $_POST['member_name1'];
        $email_member1 = $_POST['email_1'];
        $phone_no_member1 = $_POST['phone_no_1'];

        $category = $_POST['category'];

        $total = "INSERT INTO `total_station`(`FNAME`, `LNAME`, `EMAIL`, `PHONE`, `COLLEGE`, `NO_OF_MEMBERS`, `MEMBER_NAME`, `MEMBER_EMAIL`, `MEMBER_PHONE`, `ORDER_ID`) VALUES ('$fname','$lname','$email','$phone','$college','$category','$member_name1','$email_member1','$phone_no_member1','$od')";
        $station = mysqli_query($conn, $total);
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
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Adhyaaya</title>
</head>

<body>
    <center>
        <br><br>
        <h1>Proceed for Payment </h1>
        <br><br>

        <form method="post" action="pgRedirect.php" class="container">
            <table border="1" style="text-align: center;" class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Label</th>
                        <th scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td><label>ORDER_ID</label></td>
                        <td><?php echo $od; ?>
                            <input type="hidden" name="ORDER_ID" value="<?php echo $od; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td><label>Name</label></td>
                        <td><?php echo $_POST['fname'] . " " . $_POST['lname']; ?></td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td><label>Event</label></td>
                        <td><?php if ($event) {

                                echo $_POST['event'];
                            } else {
                                echo $_POST['game'];
                            }

                            ?></td>
                    </tr>
                    <tr>
                        <td scope="row">4</td>
                        <td><label>Website</label></td>
                        <td>
                            <?php echo "adhyaaya.org"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">5</td>
                        <td><label>Total Amount</label></td>
                        <td>
                            <?php
                            if ($event == "open_mic") {
                                $ta = 100;
                            }
                            if ($event == "ai_ml") {
                                $ta = 500;
                            }
                            if ($event == "Workflow") {
                                $ta = 400;
                            }
                            if ($event == "virtual_placement") {
                                $ta = 100;
                            }
                            if ($event == "stargaze") {
                                $ta = 300;
                            }
                            if ($event == "ic_engine") {
                                $ta = 500;
                            }
                            if ($event == "explique'o_code") {
                                if($no_of_team_members == '1'){
                                    $ta = 300;
                                }else if($no_of_team_members == '2'){
                                    $ta = 600;
                                }else if($no_of_team_members == '3'){
                                    $ta=900;
                                }else if($no_of_team_members == '4'){
                                    $ta=1000;
                                }else{
                                    $ta=1200;
                                }
                            }
                            if ($event == "food_o_holic") {
                                $ta = 200;
                            }
                            if ($event == "ravic") {
                                $ta = 200;
                            }
                            if ($event == "robo_soccer") {
                                $ta = 200;
                            }
                            if ($event == "born_psychos") {
                                $ta = 250;
                            }
                            if ($event == "avishkar") {
                                $ta = 250;
                            }
                            if ($event == "bridge_o_craft") {
                                $ta = 300;
                            }
                            if ($event == "cric_bash") {
                                $ta = 300;
                            }
                            if ($event == "vaad_vivaad_single") {
                                $ta = 80;
                            }
                            if ($event == "vaad_vivaad_double") {
                                $ta = 100;
                            }
                            if ($event == "total_station_single") {
                                $ta = 200;
                            }
                            if ($event == "total_station_double") {
                                $ta = 350;
                            }
                            if ($game == "fifa") {
                                if ($category_fifa == "solo") {
                                    $ta = 80;
                                }
                                if ($category_fifa == "duo") {
                                    $ta = 150;
                                }
                            }
                            if ($game == "pubg") {
                                if ($category_pubg == "solo") {
                                    $ta = 60;
                                }
                                if ($category_pubg == "squad") {
                                    $ta = 160;
                                }
                                if ($category_pubg == "custom") {
                                    $ta = 200;
                                }
                            }
                            if ($game == "csgo") {
                                $ta = 250;
                            }
                            // //session_set_cookie_params(3600);
                            // //ini_set('session.gc_maxlifetime', 3600);
                            // //session_start();
                            // $_SESSION['firstname'] = $_POST['fname'];
                            // $_SESSION['lastname'] = $_POST['lname'];
                            // $_SESSION['E-mail'] = $_POST['email'];
                            // $_SESSION['Phone'] = $_POST['phone'];
                            // $_SESSION['College'] = $_POST['college'];
                            // $_SESSION['E-mail'] = $_POST['email'];
                            // $_SESSION['Event'] = $_POST['event'];
                            // $_SESSION['Category'] = $_POST['category'];
                            // $_SESSION['No_Of_Team_Members'] = $_POST['no_of_team_members'];
                            // $_SESSION['Game'] = $_POST['game'];
                            // $_SESSION['Member_Name_1'] = $_POST['member_name1'];
                            // $_SESSION['E-mail_1'] = $_POST['email_1'];
                            // $_SESSION['Phone_No_1'] = $_POST['phone_no_1'];
                            // $_SESSION['Member_Name_2'] = $_POST['member_name2'];
                            // $_SESSION['E-mail_2'] = $_POST['email_2'];
                            // $_SESSION['Phone_No_2'] = $_POST['phone_no_2'];
                            // $_SESSION['Member_Name_3'] = $_POST['member_name3'];
                            // $_SESSION['E-mail_3'] = $_POST['email_3'];
                            // $_SESSION['Phone_No_3'] = $_POST['phone_no_3'];
                            // $_SESSION['Member_Name_4'] = $_POST['member_name4'];
                            // $_SESSION['E-mail_4'] = $_POST['email_4'];
                            // $_SESSION['Phone_No_4'] = $_POST['phone_no_4'];
                            // $_SESSION['Member_Name_5'] = $_POST['member_name5'];
                            // $_SESSION['E-mail_5'] = $_POST['email_5'];
                            // $_SESSION['Phone_No_5'] = $_POST['phone_no_5'];



                            ?>
                            <input type="text" name="TXN_AMOUNT" class="border-0 text-center" value="<?php echo $ta; ?>" readonly>
                            <input type="hidden" name="CUST_ID" value="cust1">
                            <input type="hidden" name="INDUSTRY_TYPE_ID" value="retail">
                            <input type="hidden" name="CHANNEL_ID" value="WEB">
                        </td>
                    </tr>
                    <tr class="border-0">
                        <td colspan="3">
                            <button value="Book Now!" type="submit" onclick="" type="button" class="btn btn-lg btn-danger mx-auto">Pay Now!</button>
                        </td>
                    </tr>
                            <!-- <input value="CheckOut" type="submit"	onclick=""></td> -->
                </tbody>
            </table>
        </form>
    </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
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
