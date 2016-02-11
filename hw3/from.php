<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HW3</title>
</head>
<body >
<form  id ="main" name="contact_form" >
  <link rel="stylesheet" type="text/css" href="from.css">
  <h4> <img src="pdf.png" height="41" width="42" /> Please fill out this from before downloading.</h4>
  <br>
  <div class="solidline"></div>
  <table cellspacing="10">
    <tr>
      <td> FirstName:* </td>
      <td><input type="text" name="firstName" placeholder="Enter FirstName" required></td>
      <td> Company:*</td>
      <td><input type="text" name="company" required></td>
    </tr>
    <tr>
      <td> LastName:*</td>
      <td><input type="text" name="lastName" placeholder="Enter LastName" required></td>
      <td> Website:*</td>
      <td><input name="website" id="website" type="url" placeholder="http://www.w3schools.com/" required></td>
    </tr>
    <tr>
      <td> Email:* </td>
      <td><input name="email" id="email" type="email" placeholder="xyz@gmail.com" autocomplete="off" required></td>
      <td> Position:</td>
      <td><select name="position" id="position">
          </font>
          <option value="" selected="selected">-- Select One</option>
          <option name="Software Engineering">Software Engineering</option>
          <option name="Graphics Designer">Graphics Designer</option>
          <option name="full stack developer">full stack developer</option>
          <option name="Web developer">Web developer</option>
          <option name="internship">internship</option>
          <option name="networking">networking</option>
        </select></td>
    </tr>
    <tr>
      <td> Password: </td>
      <td><input type="text" name="password"></td>
      <td> Phone:*</td>
      <td><input type="text" name="phone" placeholder="Please enter In Number" required></td>
    </tr>
    <tr>
      <td colspan = 4> *Setting a password will allow you to log back in and see our see our documents any time.</font></td>
    </tr>
  </table>
  <br>
  <div class="solidline"></div>
  <br>
  
  PRIMARY service or product of interest: *<br>
  <br>
  <select name="primary" id="primary" required>
    <option value="" selected="selected">-- Select One</option>
    <option name="Personal">Personal</option>
    <option name="Business">Business</option>
    <option name="Health">Health</option>
    <option name="Science">Science</option>
    <option name="Education">Education</option>
    <option name="Finance">Finance</option>
    <option name="Consumer">Consumer</option>
  </select>
  <br>
  <br>
  <br>
  OTHER services or product of interest: <br>
  <br>
  <input type="checkbox" name="other1" id="other1" value="Online Strategy">
  Online Strategy <br>
  <br>
  <input type="checkbox" name="other2" id="other2" value="Web Design and Devlopment">
  Web Design and Devlopment <br>
  <br>
  <input type="checkbox" name="other3" id="other3" value="Socail Networking and Online Community">
  Socail Networking and Online Community <br>
  <br>
  <input type="checkbox" name="other4" id="other4" value="Intergrated Online Campaigns">
  Intergrated Online Campaigns <br>
  <br>
  <input type="checkbox" name="other5" id="other5" value="Email Marketing Services (Strategy, Design, Devlopment)">
  E-mail Marketing Services (Strategy, Design, Devlopment) <br>
  <br>
  <input type="checkbox" name="other6" id="other6" value="Email Marketing Software">
  E-mail Marketing Software
  </div>
  </font><br>
  <br>
  <div class="solidline"></div>
  <br>
  <br>
  When are you looking to implement a solution? *<br>
  <br>
  <label>
  <select name="time" id="time" required>
    <option value="" selected="selected">-- Select One</option>
    <option name="today">Today</option>
    <option name="tomorrow">Tomorrow</option>
    <option name="this week">This Week</option>
    <option name="this month">This Month</option>
    <option name="this year">This Year</option>
    <option name="never">Never</option>
  </select>
  </label>
  </font> <br>
  <br>
  <div class="solidline"></div>
  <br>
  <div> YES! Subscribe to the weekly news letter from our website <br>
    <br>
    <input type="checkbox" name="subscribe" id="subscribe" class="chkbx">
    Receive feature and best practice articles on e-mail marketing,interactive design and online strategy. <br>
  </div>
  <div> <br>
    <input id="button" type="submit" value="save" name="save" onclick="return addUser()" />
    <br>
  </div>
  <br>
  <br>
  </div>
  <pre>

</pre>
</form>
<script>
var db = openDatabase('mydb', '1.0', 'Test DB', 2 * 1024 * 1024);

db.transaction(function (tx) {
   t.executeSql("CREATE TABLE IF NOT EXISTS users (firtname Text,lastname Text,email Text,Web Text,Company Text,password Text,Phone Text,position Text,position1 Text,position2 Text)");
    });



function adduser(){
    var myform = document.getElementById("contact_form");
    if(myform.checkValidity()){
        if (mydb) {
            var firstname_t = document.getElementById("Fname").value;
            var lastname_t = document.getElementById("Lname").value;
            var email_t = document.getElementById("Email").value;
            var web_t = document.getElementById("Web").value;
            var company_t = document.getElementById("Comp").value;
            var password_t = document.getElementById("password").value;
            var phone_t = document.getElementById("Teldata").value;
            var position_t = document.getElementById("position").value;
            var position1_t = document.getElementById("position1").value;
            var otherservices = "";
            var x = document.getElementsByName("checkbox");
            var i;
            for(i=0;i<x.length;i++){
                if(x[i].checked){
                    otherservices += x[i].value + ",";
                }
            }
            otherservices = otherservices.replace(/,(?=[^,]*$)/, '');
         var month = document.getElementById("position2").value;
         var received = document.getElementById("subscribe").checked ? "Yes" : "No";

         mydb.transaction(function (t) {
             t.executeSl("INSERT INTO users (firtname,lastname,email,Web,Company,password,Phone,position,position1,position2) Values(?,?,?,?,?,?,?,?,?,?,?,?)"),
             [firstname_t,lastname_t,email_t,web_t,company_t,password_t,phone_t,position_t,position1_t,]
             alert("Save successfully.");
             window.location.href = 'index.html';

         });

        }else{
        alert("db not found,your browser does not support SQl");
        }
    }
}
</script>
</body>
</html>
