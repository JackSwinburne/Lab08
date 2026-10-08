<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

$pageTitle = "Welcome";
include "header.inc";
?>
<main>
  <h2>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h2>
  <p>Your token is: <?php echo htmlspecialchars($_SESSION["token"]); ?></p>
</main>
<?php include "footer.inc"; ?>