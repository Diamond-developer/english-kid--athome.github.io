<?php
if (isset($_GET['directional'])) { $directional=$_GET['directional'];
}else{ 
  $directional="";
    }

  switch ($directional) {
    case "lession2-day8":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 02 - People
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession2-day9":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 02 - People
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession2-day10":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 02 - People
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession2-day11":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 02 - People
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession2-day12":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 02 - People
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession2-day13":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 02 - People
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession2-day14":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 02 - People
        </h3>
      </div>
      <div class='panel-body'>";
      break;
    
    default:
      echo "<div class='panel panel-warning autocollapse'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 02 - People
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  }

      //Day 1
      if ($directional=="lession2-day8") { 
        echo "<a href='index.php?directional=lession2-day8'>
          <div class='alert alert-info' role='alert'>
          Ngày 08 - Nghe ngấm</div>
        </a>"; 
      } else { 
        echo "<a href='index.php?directional=lession2-day8'>
          <div class='alert alert-danger' role='alert'>
            Ngày 08 - Nghe ngấm</div>
        </a>";
      } 
      //Day 2
      if ($directional=="lession2-day9") {
        echo "<a href='index.php?directional=lession2-day9'>
          <div class='alert alert-info' role='alert'>Ngày 09 - Nói đuổi</div>
        </a>";
      } else {
          echo "<a href='index.php?directional=lession2-day9'>
          <div class='alert alert-danger' role='alert'>Ngày 09 - Nói đuổi</div>
        </a>";
      }
      //Day 3
      if ($directional=="lession2-day10") {
        echo "<a href='index.php?directional=lession2-day10'>
        <div class='alert alert-info' role='alert'>Ngày 10 - Phản xạ đa chiều - Jack’s Family Portrait</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession2-day10'>
          <div class='alert alert-danger' role='alert'>Ngày 10 - Phản xạ đa chiều - Jack’s Family Portrait</div>
        </a>";
      }
      //Day 4
      if ($directional=="lession2-day11") {
        echo "<a href='index.php?directional=lession2-day11'>
        <div class='alert alert-info' role='alert'>Ngày 11 - Phản xạ đa chiều - A High School Reunion</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession2-day11'>
          <div class='alert alert-danger' role='alert'>Ngày 11 - Phản xạ đa chiều - A High School Reunion</div>
        </a>";
      }
      //Day 5
      if ($directional=="lession2-day12") {
        echo "<a href='index.php?directional=lession2-day12'>
        <div class='alert alert-info' role='alert'>Ngày 12 - Phản xạ đa chiều - Just in Time for the Company Trip</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession2-day12'>
          <div class='alert alert-danger' role='alert'>Ngày 12 - Phản xạ đa chiều - Just in Time for the Company Trip</div>
        </a>";
      }
      //Day 6
      if ($directional=="lession2-day13") {
        echo "<a href='index.php?directional=lession2-day13'>
        <div class='alert alert-info' role='alert'>Ngày 13 - Thử thách</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession2-day13'>
          <div class='alert alert-danger' role='alert'>Ngày 13 - Thử thách</div>
        </a>";
      }
      //Day 7
      if ($directional=="lession2-day14") {
        echo "<a href='index.php?directional=lession2-day14'>
        <div class='alert alert-info' role='alert'>Assessment - Lesson 01</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession2-day14'>
          <div class='alert alert-danger' role='alert'>Assessment - Lesson 01</div>
        </a>";
      }
?>