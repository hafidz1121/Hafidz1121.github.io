<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Akun</title>
</head>
<body>
    <p>Halo <b>{{$details['name']}}</b>!</p>
    <p>Berikut ini adalah Data Anda:</p>
    <table>
      <tr>
        <td>Fullname</td>
        <td>:</td>
        <td>{{$details['name']}}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{$details['email']}}</td>
      </tr>
      <tr>
        <td>Tanggal Register</td>
        <td>:</td>
        <td>{{date('d-m-Y H:i:s', strtotime($details['datetime']))}}</td>
      </tr>
    </table>

    <center>
      <h3>Klik link di bawah ini ke browser Anda untuk Verifikasi Akun:</h3>
      <b style="color:blue">{{$details['url']}}</b>
    </center>

  <p>Terima kasih telah melakukan registrasi.</p>
</body>
</html>