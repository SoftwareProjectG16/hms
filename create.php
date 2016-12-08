<!DOCTYPE html >

<html>

<head>
<meta name="description" content="this is a registeration form form our website " charset="utf-8"/>
  <title>Signup</title>

</head>

<body>

<form action="insert.php" method="post">
<fieldset>
<legend>User Data</legend>
<table>

           <tr>
<td><label>name</label></td>
<td><input type="text" name="username" /></td>
</tr>

           <tr>
<td><label>Password</label></td>
<td><input type="password" name="pass" /></td>
</tr>

           <tr>
<td><label>E-mail</label></td>
<td><input type="text" name="usermail" /></td>
</tr>
<tr>
<td><label>Date Of Birth</label></td>
<td>
<select name="date">
<optgroup label="Date">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</optgroup>
</select>
<select name="month">
<optgroup label="month">
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
 <input type="text" name="year0fbirth"  value="Enter the year of birth"/>
</td>
</tr>
<tr>
<td><label>Gender</label></td>
<td>
<input type="radio" name="Gender" value="male" />male
<input type="radio" name="Gender" value="female" />female
</td>
</tr>
<td><label>Your phone number</label></td>
<td><input type="text" name="patientphone" />   </td>
<tr>
<td><label>your cv</label>

</td>
 <td><textarea rows="20" cols="50" name="patientCV"></textarea></td>
</tr>
<tr >
<td ><p id="assure"><input type="submit" value"send"/> <input type="reset" /></p></td>

</tr>

</table>
       </fieldset>
  </form>


</body>

</html>
