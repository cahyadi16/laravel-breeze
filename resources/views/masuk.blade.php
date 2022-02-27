<form action="/login" method="post">
@csrf
  <input type="email" name="email" id="email"> <br>
  <input type="password" name="password"> <br>
  <button type="submit">Kirim</button>
</form>