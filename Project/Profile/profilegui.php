<!DOCTYPE html>
<html>
<head>
<title>User Profile</title>
</head>
<body>
<header> 
<button id = "btn">← Back </button>
<h2>NeedSurveyResponses</h2>
</header>
<main>
<section>
<div id = "box">
<h3>My Profile</h3>
<p><b>Name:</b> Student</p>
<p><b>Email:</b> student@gmail.com</p>
<p id="credits">Credits: <b>42</b></p>
</div>

<div id = "box"> 
<h3>My Surveys</h3>
<div id="surveyItem">
<b>Research Topic Selection Poll</b><br>
<span id="meta">Responses: 3 / 10</span>
</div>
<div id="surveyItem">
<b>Learning Habits Survey</b><br>
<span id="meta">Responses: 10 / 10 (Closed)</span>
</div>
</section>
<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f5fb;
}
section{
    max-width: 800px;
    margin: auto;
    padding: 20px;
}
#btn {
    background: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
}
#header {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 30px;
    background: linear-gradient(to right, #7b6cf6, #8f7df7);
    color: white;
}
#box {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
}
#surveyItem {
    background: #f7f7ff;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 10px;
}
#meta {
    color: gray;
    font-size: 13px;
}
footer {
    text-align: center;
    padding: 15px;
    background: white;
    border-top: 1px solid #ddd;
    position: absolute;
    bottom: 0px;
    width: 98.3%;
}
#footer a {
    color: #5b4df5;
    text-decoration: none;
}

</body>
</html>
