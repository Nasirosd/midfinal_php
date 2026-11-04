<!DOCTYPE html>
<html 
  <?php if(isset($rtl_mode) && !empty($rtl_mode)) { echo 'dir="rtl"'; } ?>
>
<head>
  <meta charset="utf-8" />
  <title><?php echo $head_title; ?></title>

  <!-- Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <?php if(isset($rtl_mode) && !empty($rtl_mode)) { ?>
    <link href="css/style-rtl.css" rel="stylesheet">
  <?php } else { ?>
    <link href="css/style.css" rel="stylesheet">
  <?php } ?>

  <?php if(isset($dark_mode) && !empty($dark_mode)) { ?>
    <link href="css/style-dark.css" rel="stylesheet">
  <?php } ?>
  <!-- Stylesheets -->
  <link href="css/flatpickr.min.css" rel="stylesheet">

  <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon">
  <link rel="icon" href="images/favicon.svg" type="image/x-icon">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
