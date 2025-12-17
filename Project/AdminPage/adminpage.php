<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
</head>

<body>
<header> 
<button id="btn">← Back</button>
<h2>NeedSurveyResponses</h2>
</header>

<section>
<div id="row">
    <div id="box">
        <h3>Userbase</h3>
        <p>Total Users: 128</p>
        <button id="btncol">See More</button>
    </div>
    <div id="box">
        <h3>Campaigns</h3>
        <p>Total Campaigns: 42</p>
        <button id="btncol">See More</button>
    </div>
</div>
<div id="box">
    <h3>Make Announcement</h3>
    Announcement Message:<br>
    <textarea rows="4" style="width:98%;"></textarea><br><br>
    <button id="btncol">Post Announcement</button>
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

header {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 30px;
    background: #7b6cf6;
    color: white;
}

#btn {
    background: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
}

section {
    max-width: 800px;
    margin: auto;
    padding: 20px;
}

#row {
    display: flex;
    gap: 20px;
}

#row #box {
    width: 50%;
}

#box {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
}

textarea {
    padding: 6px;
    font-family: Arial;
}

#btncol {
    background: #7b6cf6;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    cursor: pointer;
}

footer {
    text-align: center;
    padding: 10px;
    background: white;
    border-top: 1px solid #ddd;
    position: fixed;
    bottom: 0px;
    width: 99%;
    font-size: 12px;
}

footer a {
    color: #5b4df5;
}
</style>

</body>
</html>
