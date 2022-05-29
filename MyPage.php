
<html>
    <body>
   
<form action ="../control/process.php" method="POST">
<table>
  <tr> <td>Number 1: </td> 
  <td><input type="Text" name="num1" placeholder="1,2,3....e.t.c."></td></tr>
  <tr> <td>Number 2: </td> 
  
  <td><input type="Text" name="num2" placeholder="1,2,3....e.t.c."></td></tr>
</table>
<table>
<tr>
  <td><input type="radio" name="sign" value = "+">+</td>
  <td><input type="radio" name="sign" value = "-">-</td>
  <td><input type="radio" name="sign" value = "*">*</td>
  <td><input type="radio" name="sign" value = "/">/</td>
</tr>
</table>
<table>
 <tr> <td> <input type="submit" name="Submit"  value ="Result"></td></tr>
</table>
</form>
</body>
    </html>