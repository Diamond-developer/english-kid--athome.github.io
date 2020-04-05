<?php
if (isset($_GET['directional'])) { $directional=$_GET['directional'];
}else{ 
  $directional="";
    }

  switch ($directional) {
    case "lession3-day15":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 03 - Time
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession3-day16":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 03 - Time
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession3-day17":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 03 - Time
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession3-day18":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 03 - Time
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession3-day19":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 03 - Time
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession3-day20":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 03 - Time
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession3-day21":
      echo "<div class='panel panel-info'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 03 - Time
        </h3>
      </div>
      <div class='panel-body'>";
      break;
    
    default:
      echo "<div class='panel panel-info autocollapse'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lession 03 - Time
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  }

      //Day 15
      if ($directional=="lession3-day15") { 
        echo "<a href='index.php?directional=lession3-day15'>
          <div class='alert alert-info' role='alert'>
          Ngày 15 - Nghe ngấm</div>
        </a>"; 
      } else { 
        echo "<a href='index.php?directional=lession3-day15'>
          <div class='alert alert-danger' role='alert'>
            Ngày 15 - Nghe ngấm</div>
        </a>";
      } 
      //Day 16
      if ($directional=="lession3-day16") {
        echo "<a href='index.php?directional=lession3-day16'>
          <div class='alert alert-info' role='alert'>Ngày 16 - Nói đuổi</div>
        </a>";
      } else {
          echo "<a href='index.php?directional=lession3-day16'>
          <div class='alert alert-danger' role='alert'>Ngày 16 - Nói đuổi</div>
        </a>";
      }
      //Day 17
      if ($directional=="lession3-day17") {
        echo "<a href='index.php?directional=lession3-day17'>
        <div class='alert alert-info' role='alert'>Ngày 17 - Phản xạ đa chiều - The Triathlete</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession3-day17'>
          <div class='alert alert-danger' role='alert'>Ngày 17 - Phản xạ đa chiều - The Triathlete</div>
        </a>";
      }
      //Day 18
      if ($directional=="lession3-day18") {
        echo "<a href='index.php?directional=lession3-day18'>
        <div class='alert alert-info' role='alert'>Ngày 18 - Phản xạ đa chiều - Invitation to What?</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession3-day18'>
          <div class='alert alert-danger' role='alert'>Ngày 18 - Phản xạ đa chiều - Invitation to What?</div>
        </a>";
      }
      //Day 19
      if ($directional=="lession3-day19") {
        echo "<a href='index.php?directional=lession3-day19'>
        <div class='alert alert-info' role='alert'>Ngày 19 - Phản xạ đa chiều - Why didn’t you Come to My Party?</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession3-day19'>
          <div class='alert alert-danger' role='alert'>Ngày 19 - Phản xạ đa chiều - Why didn’t you Come to My Party?</div>
        </a>";
      }
      //Day 20
      if ($directional=="lession3-day20") {
        echo "<a href='index.php?directional=lession3-day20'>
        <div class='alert alert-info' role='alert'>Ngày 20 - Thử thách</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession3-day20'>
          <div class='alert alert-danger' role='alert'>Ngày 20 - Thử thách</div>
        </a>";
      }
      //Day 21
      if ($directional=="lession3-day21") {
        echo "<a href='index.php?directional=lession3-day21'>
        <div class='alert alert-info' role='alert'>Assessment - Lesson 03</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession3-day21'>
          <div class='alert alert-danger' role='alert'>Assessment - Lesson 03</div>
        </a>";
      }
?>