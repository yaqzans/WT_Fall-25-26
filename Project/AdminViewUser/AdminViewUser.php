<?php
include "../db.php";
if (!isset($_GET['id'])) {
    die("User not found"); 
}
$uid = $_GET['id'];
$user_res = mysqli_query($conn, "SELECT * FROM users WHERE id = $uid"); //This is for general info
$user = mysqli_fetch_assoc($user_res);
$profile_res = mysqli_query($conn, "SELECT * FROM profiles WHERE user_id = $uid"); //This is for profile info
$profile = mysqli_fetch_assoc($profile_res);
$camp_res = mysqli_query($conn, "SELECT * FROM campaigns WHERE user_id = $uid"); //This is for survey history
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="AdminViewUser.css">
<title>Admin Views User Profile</title>
</head>

<body>
<header> 
<a href="../AdminSearchUser/adminsearchuser.php"> 
<button id="btn">← Back</button> 
</a>
<h2>NeedSurveyResponses</h2>
</header>

<main>
<section>

<div id="box">
<h3>User Profile</h3>

<p><b>User ID:</b> <span id="id"><?php echo $user['id']; ?></span></p>
<p><b>Email:</b> <?php echo $user['email']; ?></p>
<p><b>Current Credits:</b> <span id="credits"><b><?php echo $profile['credits']; ?></b></span></p>

<button id="btncol">Add Credits</button>
<button id="btncol">Remove Credits</button>
<button style="background:red; color:white; cursor:pointer;">Delete User</button>
</div>

<div id="box">
<h3>Survey History</h3>
<?php
while ($row = mysqli_fetch_assoc($camp_res)) 
{
    echo '<div id="surveyItem">';
    echo '<b>' . $row['title'] . '</b><br>';
    echo '<span id="meta">Status: ' . $row['status'] . '</span><br>';
    echo '<span id="meta">Responses: ' . $row['responses_served'] . ' / ' . $row['responses_needed'] . '</span>';
    echo '</div>';
}
if (mysqli_num_rows($camp_res) == 0) 
{
    echo '<span id="meta">No surveys created</span>';
}
?>
</div>

</section>
</main>

<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>
