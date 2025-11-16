<!DOCTYPE html>
<html>
<head>
    <title>LT 2</title>
</head>
<body>
<center>
<h1>Student Registration Demo</h1> <br>
Full Name: <br>
<input type="text" id="fname"><br><br>
Email: <br>
<input type="text" id="email"><br><br>
Password: <br>
<input type="password" id="pass"><br><br>
Confirm Password: <br>
<input type="password" id="cpass"><br><br>
<button onclick="validate()">Submit</button>

<p id = result> </p>
<br><br><br>
<h1>Course Selection Demo</h1> <br>
Please select your courses: <br>
<select>
    <option value="CSE101" id = 1>Slot - 1</option>
    <option value="CSE102" id = 2>Slot - 2</option>
    <option value="CSE103" id = 3>Slot - 3</option>
    <option value="CSE104" id = 4>Slot - 4</option>
    <option value="CSE105" id = 5>Slot - 5</option>
</select>
<input type="text" id="courseEdit" placeholder="Enter new course name">
<input type="text" id="courseIDEdit" placeholder="Enter course ID to edit">
<input type="text" id="courseRemoveID" placeholder="Enter course ID to remove">
<button onclick="EditCourse()">Add</button>
<button onclick="RemoveCourse()">Remove</button>
<br><br><br>
</center>
<script>
function validate(){
    let fname = document.getElementById("fname").value;
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    let cpass = document.getElementById("cpass").value;

    if(fname === "" || email === "" || pass === "" || cpass === ""){
        alert("All fields are required.");
        return false;
    }

    var flag = 0;
    for(let i=0; i<email.length; i++){
        let char = email.charAt(i);
        if(char == '@'){
            flag = 1;
        }
    }
    if (flag == 0){
        alert("Invalid email format.");
        return false;
    }

    if(pass !== cpass){
        alert("Passwords do not match.");
        return false;
    }

    document.getElementById("result").innerHTML =  `<b>Registration Complete!</b><br> Name: ${fname}<br> Email: ${email}<br>`
    return true;
}
function EditCourse(){
    let courseName = document.getElementById("courseEdit").value;
    if(courseName === "" || courseIDEdit.value === ""){
        alert("Please enter a course name to edit.");
        return false;
    }
    document.getElementById(document.getElementById("courseIDEdit").value).innerHTML = courseName;
    return true;
}
function RemoveCourse(){
    let courseID = document.getElementById("courseRemoveID").value;
    if(courseID === ""){
        alert("Please enter a course ID to remove.");
        return false;
    }
    document.getElementById(document.getElementById("courseRemoveID").value).innerHTML = `Slot - ${courseID} (Removed)`;
    return true;
}
</script>
</body>
</html>