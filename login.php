<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
        </head>
  <body>
  <center>
      <h1><a href="logtest.php"
      style="text-decoration:none;color:black">로그인</a></h1>
<!-- ======================================================================= -->
<form method="post" action="logtest.php">
<table border="2" width="300px">
  <tbody>
    <tr>
      <th style="height:50px"><label for="user_id">아이디</label></th>
        <td>
          <input id="user_id" type="text" name="user_id" placeholder="User_Name"
          style="height:50px; width:100%">
        </td>
      </tr>
      <tr>
        <th style="height:50px"><label for="password">비밀번호</label></th>
        <td><input id="password" type="password" name="password" placeholder="Password" style="height:50px; width:100%"></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="로그인" style="height:50px; width:100%">
        </td>
      </tr>
      <tr>
        <td colspan="2">
            <input type="button" value="회원가입" onClick="location.href='member_join.php'"
        style="height:50px; width:100%"></td>
      </tr>
  </tbody>
</table>
</form>
<?require_once('page/cao.php');?>
  </center>
  </body>
</html>
