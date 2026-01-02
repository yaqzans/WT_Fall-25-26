<?php
include "../db.php";

$uid = 1;   // temp user
$error = "";
$success = "";
$user_res = mysqli_query($conn, "SELECT * FROM users WHERE id = $uid");
$user = mysqli_fetch_assoc($user_res);
$profile_res = mysqli_query($conn, "SELECT * FROM profiles WHERE user_id = $uid");
$profile = mysqli_fetch_assoc($profile_res);
$camp_res = mysqli_query($conn, "SELECT * FROM campaigns WHERE user_id = $uid");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="profilegui.css">
<title>User Profile</title>
</head>
<body>
<header> 
<button id = "btn">← Back </button>
<h2>NeedSurveyResponses</h2>
<button id = "logout">Logout</button>
</header>
<main>
<section>
<div id= "box">
    <h3>My Profile</h3>
    <p>
    User ID: <b id="uid"><?php echo $uid; ?></b>
    <span style="margin-left: 15px;">
    Credits: <b><?php echo $profile["credits"]; ?></b>
    </span>
    </p>
    Email:<br>
    <input type="text" name="email" value="<?php echo $user["email"]; ?>">
    <button id ="btncol">Update Profile</button>
    <button style="background:red; color:white; cursor:pointer">Delete Account</button>
</div>

<div id= "box">
    <h3>Change Password</h3>
    New Password:<br>
    <input type="password"><br><br>
    Confirm Password:<br>
    <input type="password"><br><br>
    <button id ="btncol">Change Password</button>
</div>

<div id = "box"> 
<h3>My Surveys</h3>
<?php
while ($row = mysqli_fetch_assoc($camp_res))
{
    echo '<div id="surveyItem">';
    echo '<b>' . $row["title"] . '</b><br>';
    echo '<span id="meta">Responses: ' . $row["responses_served"] . ' / ' . $row["responses_needed"] . '</span>';
    echo '</div>';
}

if (mysqli_num_rows($camp_res) == 0)
{
    echo '<span id="meta">No surveys created</span>';
}
?>
</section>
<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>
