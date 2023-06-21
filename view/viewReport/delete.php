<?php
include "DatabaseCon.php";

if (isset($_GET['DeleteFineReport'])) {
  $id = $_GET['DeleteFineReport'];

  $sql = "DELETE FROM calculatefine WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "<script>alert('Record deleted successfully.');</script>";
    echo "<script>window.location.href = 'viewReportFine.php';</script>";
  } else {
    echo "<script>alert('Failed to delete record.');</script>";
    echo "<script>window.location.href = 'viewReportFine.php';</script>";
  }
}
?>