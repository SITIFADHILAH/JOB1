<html>
<head><title>Volume Balok</title>
<style type="text/css">
body 
background:#cccccc;
}
#header {
 color:white;
 padding:1px;
 margin-bottom:30px; margin-right:
 300px;margin-left:300px;
 background:=webkit-gradient<linear,right top,
 left center,color-stop<0,#cccccc),color-
 stop(0.5,black),color-stop(1,#cccccc));
 }
 #zackcode,#P,#L,#T,#tombol{
 color:white;
 text-algn:center;
 background:-webkit-gradient(linear,right top,
 right bottom,from(gray),to(black));
 </style>
 </head>
 <body>
 <center>
 <div id="header"><h1>Volume Balok</h1></div>
 <from action="Latihan1.php" method="GET">
 <tr>
 <td colspan="2"
 id="SITI FADHILAH"><h2>SITI FADHILAH</h2></td>
 </tr>
 <tr>
 <td id="P">Panjang Balok</td>
 <td><input type="text" name="P"></td>
 </tr>
 <tr>
 <td id="L">Lebar Balok</td>
 <td><input type="text" name="L"></td>
 </tr>
 <tr>
 <td id="T">Tinggi Balok</td>
 <td><input type="text" name="T"></td>
 </tr>
 <tr>
 <td colspan="2"id="tombol"><input
 type="submit"value="submit"><input
 type="reset"value="reset"></td>
 </tr>
 </table>
 </form>
 <?php
 if(isset($_GET["P"]) && isset($_GET["L"]) && isset($_GET["T"]))
 {
 $P=$_GET["P"];
 $L=$_GET["L"];
 $T=$_GET["T"];
 $V=$P*$L*$T;
 echo"Valume balok adalah #V";
 }
 else
 {
 echo"kamu belum isi data";
 }
 ?>
 </center>
 </body>
 </html>