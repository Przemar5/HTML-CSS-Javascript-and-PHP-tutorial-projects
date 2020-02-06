<!DOCTYPE html>
<html>
<body>

<h1>fopen()</h1>
<h1>fread()</h1>
<h1>fclose()</h1>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>

<table class="w3-table-all notranslate">
  <tbody><tr>
    <th style="width:10%">Modes</th>
    <th style="width:90%">Description</th>
  </tr>
  <tr>
    <td>r</td>
    <td><strong>Open a file for read only</strong>. File pointer starts at the beginning of the file</td>
  </tr>
    <tr>
    <td>w</td>
    <td><strong>Open a file for write only</strong>. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file</td>
    </tr>
  <tr>
    <td>a</td>
    <td><strong>Open a file for write only</strong>. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist</td>
    </tr>
  <tr>
    <td>x</td>
    <td><strong>Creates a new file for write only</strong>. Returns FALSE and an error if file already exists</td>
    </tr>
  <tr>
    <td>r+</td>
    <td><strong>Open a file for read/write</strong>. File pointer starts at the beginning of the file</td>
  </tr>
  <tr>
    <td>w+</td>
    <td><strong>Open a file for read/write</strong>. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file</td>
  </tr>
  <tr>
    <td>a+</td>
    <td><strong>Open a file for read/write</strong>. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist</td>
  </tr>
  <tr>
    <td>x+</td>
    <td><strong>Creates a new file for read/write</strong>. Returns FALSE and an error if file already exists</td>
  </tr>
</tbody></table>


<br><br>

<h1>fgets()</h1>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

<br><br>

<h1>feof()</h1>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<br><br>

<h1>fgetc()</h1>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>

</body>
</html>