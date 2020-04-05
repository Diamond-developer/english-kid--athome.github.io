<?php
if (isset($_GET['directional'])) { $directional=$_GET['directional'];
}else{ 
  $directional="";
    }

  switch ($directional) {
    case "lession4-day22":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 04 - Renting And Shopping
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession4-day23":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 04 - Renting And Shopping
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession4-day24":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 04 - Renting And Shopping
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession4-day25":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 04 - Renting And Shopping
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession4-day26":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 04 - Renting And Shopping
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession4-day27":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 04 - Renting And Shopping
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession4-day28":
      echo "<div class='panel panel-danger'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 04 - Renting And Shopping
        </h3>
      </div>
      <div class='panel-body'>";
      break;
    
    default:
      echo "<div class='panel panel-danger autocollapse'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 04 - Renting And Shopping
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  }

      //Day 22
      if ($directional=="lession4-day22") { 
        echo "<a href='index.php?directional=lession4-day22'>
          <div class='alert alert-info' role='alert'>
          Ngày 22 - Nghe ngấm</div>
        </a>"; 
      } else { 
        echo "<a href='index.php?directional=lession4-day22'>
          <div class='alert alert-danger' role='alert'>
            Ngày 22 - Nghe ngấm</div>
        </a>";
      } 
      //Day 23
      if ($directional=="lession4-day23") {
        echo "<a href='index.php?directional=lession4-day23'>
          <div class='alert alert-info' role='alert'>Ngày 23 - Nói đuổi</div>
        </a>";
      } else {
          echo "<a href='index.php?directional=lession4-day23'>
          <div class='alert alert-danger' role='alert'>Ngày 23 - Nói đuổi</div>
        </a>";
      }
      //Day 24
      if ($directional=="lession4-day24") {
        echo "<a href='index.php?directional=lession4-day24'>
        <div class='alert alert-info' role='alert'>Ngày 24 - Phản xạ đa chiều - Apartment Hunting</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession4-day24'>
          <div class='alert alert-danger' role='alert'>Ngày 24 - Phản xạ đa chiều - Apartment Hunting</div>
        </a>";
      }
      //Day 25
      if ($directional=="lession4-day25") {
        echo "<a href='index.php?directional=lession4-day25'>
        <div class='alert alert-info' role='alert'>Ngày 25 - Phản xạ đa chiều - The Super Shopper</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession4-day25'>
          <div class='alert alert-danger' role='alert'>Ngày 25 - Phản xạ đa chiều - The Super Shopper</div>
        </a>";
      }
      //Day 26
      if ($directional=="lession4-day26") {
        echo "<a href='index.php?directional=lession4-day26'>
        <div class='alert alert-info' role='alert'>Ngày 26 - Phản xạ đa chiều - What's Your Style?</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession4-day26'>
          <div class='alert alert-danger' role='alert'>Ngày 26 - Phản xạ đa chiều - What's Your Style?</div>
        </a>";
      }
      //Day 27
      if ($directional=="lession4-day27") {
        echo "<a href='index.php?directional=lession4-day27'>
        <div class='alert alert-info' role='alert'>Ngày 27 - Thử thách</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession4-day27'>
          <div class='alert alert-danger' role='alert'>Ngày 27 - Thử thách</div>
        </a>";
      }
      //Day 28
      if ($directional=="lession4-day28") {
        echo "<a href='index.php?directional=lession4-day28'>
        <div class='alert alert-info' role='alert'>Assessment - Lesson 04</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession4-day28'>
          <div class='alert alert-danger' role='alert'>Assessment - Lesson 04</div>
        </a>";
      }
?>