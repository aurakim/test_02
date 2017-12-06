
<html>
  <head>
    <meta charset="utf-8">
    <title>회원가입 페이지</title>
  </head>

  <center>
    <body>
      <div class="asdfdf">

      </div>
<h1>회원가입</h1>

    <form name="join" action="member_Save.php" method="post">
    <table border="2" width="400">
      <tr>
          <th width="120" height="50"><label for="Id">아이디</label></th>
          <td colspan="2"><input id="Id" type="text" name="user_id" value="" placeholder="Id" style="height:50px; width:100%"></td>
      </tr>
      <tr>
          <th width="120" height="50"><label for="Password">비밀번호</label></th>
          <td colspan="2"><input id="Password" type="text" name="password" placeholder="Password" style="height:50px; width:100%"></td>
      </tr>
      <tr>
          <th width="120" height="50"><label for="NickName">닉네임</label></th>
          <td colspan="2"><input id="NickName" type="text" name="nick_name" placeholder="NickName" style="height:50px; width:100%"></td>
      </tr>
      <tr>
          <th width="120" height="50"><label for="Birthday">이름</label></th>
          <td colspan="2"><input id="Birthday" type="text" name="name" placeholder="&#34;통장주&#34; 명과 일치하는 이름" style="height:50px; width:100%"></td>
      </tr>
      <tr>
          <th rowspan="2" width="120"><label for="bank_name">은행</label></th>
          <td><select name="bankname" style="height:50px; width:100%">
              <option value="kukmin">은행을 선택하세요</option>
              <option value="kukmin">국민은행</option>
              <option value="woori">우리은행</option>
              <option value="shinhan">신한은행</option>
              <option value="nonghyub">농협</option></td>
      </tr>
      <tr>
          <td><input id="bankname" type="text" name="accountnumber" placeholder="AccountNumber" style="height:50px; width:100%">
      </tr>
      <tr>
          <td colspan="3"><input type="submit" value="가입하기" style="height:50px; width:100%"></td>
      </tr>
      <tr>
          <td colspan="3"><input type="button" value="로그인 페이지로 이동" onClick="location.href='login.php'"style="height:50px; width:100%"></td>
      </tr>
  </form>
  </table>
  </body>
</center>
</html>
