<?php
// session_name('session_1');
// session_start();

session_name('test');
session_start();
$_SESSION['name'] = "Ali";
$_SESSION['id'] = "123456789";
$_SESSION['workout'] = true;
$_SESSION['workin'] = false;
$_SESSION['turnaround'] = 453.324;
$_SESSION['turnaround2'] = 66;

// $_SESSION['var1'] = "Muhammad Ali";
// $_SESSION['var2'] = "Asad";
// $_SESSION['var5'] = "Sulman";

// echo "<h1>" . $_SESSION['var1'] . "</h1>";
// echo "<h1>" . $_SESSION['var2'] . "</h1>";
// echo "<h1>" . $_SESSION['var5'] . "</h1>";


// session_write_close();

// session_name('session_2');
// session_start();

// $_SESSION['var3'] = "jfjf123bbf";
// $_SESSION['var4'] = "j11bbf123bbf";

// echo "<h1>" . $_SESSION['var3'] . "</h1>";
// echo "<h1>" . $_SESSION['var4'] . "</h1>";
?>