<?php
if ($_FILES) {
  $targetDir = "uploads/";
  $fileName = basename($_FILES["file"]["name"]);
  $targetFilePath = $targetDir . $fileName;

  if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
    echo json_encode(["status" => "success", "message" => "File uploaded successfully."]);
  } else {
    echo json_encode(["status" => "error", "message" => "File upload failed."]);
  }
}
?>