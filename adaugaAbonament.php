
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Oficiu postal</title>
<link rel="STYLESHEET" href="style.css" type="text/css">
</head>
<body bgcolor="FFFFFF">
<div align="center">
<table width="750" border="0" cellpadding="0" cellspacing="0">
 <tr>
  <td colspan="3" width="750" height="200" background="header.jpg" valign="top" style="padding:0 0 0 10">
   <table width="700" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td width="750" colspan="3" class="logo">
    <b>
     Oficiu Postal</b>
    
     </td>
    </tr>
    <tr>
     <td width="330" class="slogan">
    
     </td>
     <td width="400" align="right">
      <table width="400" border="0" cellpadding="0" cellspacing="0">
       <tr>
        <td align="right" height="20">

        </td>
       </tr>
      </table>
     </td>
     <td width="20"></td>
    </tr>
   </table>
  </td>
 </tr>
 <tr>
  <td colspan="3" height="15" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td colspan="3" height="1" bgcolor="CCCCCC"></td>
 </tr>
 <tr>
  <td colspan="3" height="10" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td width="170" bgcolor="FFFFFF" valign="top">
  <span style="font-size:6px"><br></span>
  <div align="center">
   <table width="140" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td><a href="index.html">Acasa</a></td>
    </tr>
    <tr>
     <td>Catre casa</td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="Aboneazate.html">Aboneazate</a></td>
    </tr>
    <tr>
     <td>Permite inregistrarea unei noi persoane</td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="listaRev.php">Lista revistelor</a></td>
    </tr>
    <tr>
     <td>Contine lista cu toate revistele disponibile</td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="CautareStergere.html">Stergere abonamente</a></td>
    </tr>
    <tr>
     <td>Permite cautarea unui abonament in functie de numele abonatului si stergerea acestuia</td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="adaugaAbonament.php">Adauga un abonament nou</a></td>
    </tr>
    <tr>
     <td>Adaugarea unui abonament nou in lista unei persoane inregistrate</td>
    </tr>
	<tr>
     <td><a href="cautareUpdate.html">Modificarea abonamentului</a></td>
    </tr>
    <tr>
     <td>Permite modificarea unui abonament</td>
    </tr>
	<tr>
     <td><a href="cautareAbon.html">Cautarea abonamentului</a></td>
    </tr>
    <tr>
     <td>Permite cautarea abonamentelor unei persoane</td>
    </tr>
   </table>
   <br><span style="font-size:6px"><br></span>
   
  <span style="font-size:6px"><br></span>
  </div>
  </td>
  <td width="1" bgcolor="CCCCCC"></td>
  <td width="579" valign="top">
  <span style="font-size:6px"><br></span>
  <div align="center">
   <table width="549" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td colspan="4" height="1" bgcolor="AAAAAA"></td>
     <td width="5" height="1" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td rowspan="2" colspan="2" width="542" height="27" bgcolor="#597F20" class="class1">&nbsp;&nbsp;</td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" height="4" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0" height="23"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td colspan="2" height="1" bgcolor="AAAAAA"></td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td colspan="2" bgcolor="FFFFFF">
      <table width="542" border="0" cellpadding="17" cellspacing="0">
       <tr>
        <td style="color:999999;line-height:1.6em">
        <div align="justify">
<form action = "adauga1.php" method = "POST">
<?php
$link = mysql_connect("localhost", "root", "");
mysql_select_db('posta', $link);
echo'<select name = "N">';
$q = "SELECT Nume, CNP FROM abonat";
$result = mysql_query($q);
while($row = mysql_fetch_array($result))
	echo'<option value = "'.$row['CNP'].'">'. $row['Nume']. '</option>';
echo'</select><br>';

echo'<select name = "NR">';
$q1 = "SELECT NumeRev, Cod FROM reviste";
$result1 = mysql_query($q1);
while($row1 = mysql_fetch_array($result1))
	echo'<option value = "'.$row1['Cod'].'">'. $row1['NumeRev']. '</option>';
echo'</select><br>';
?>
DATA1:<input type = "textbox" name = "DATA1"><br>
DATA2:<input type = "textbox" name = "DATA2"><br>
<input type = "submit" value = "Aboneazate">
</form>
		</div>
        </td>
       </tr>
      </table>
     </td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td colspan="2" height="1" bgcolor="AAAAAA"></td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0"></td>
    </tr>
    <tr>
     <td width="1" height="5" bgcolor="FFFFFF"></td>
     <td width="4" height="5" bgcolor="FFFFFF"></td>
     <td width="538" height="5" bgcolor="F0F0F0"></td>
     <td width="1" height="5" bgcolor="F0F0F0"></td>
     <td width="5" height="5" bgcolor="F0F0F0"></td>
    </tr>
   </table>
  <span style="font-size:6px"><br></span>
  </div>
  </td>
 </tr>
 <tr>
  <td colspan="3" height="10" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td colspan="3" height="1" bgcolor="CCCCCC"></td>
 </tr>
 <tr>
  <td colspan="3" height="5" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td colspan="3" bgcolor="FFFFFF" align="right">
   
  </td>
 </tr>
</table>
</div>
</body>
</html>