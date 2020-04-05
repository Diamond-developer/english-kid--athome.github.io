<?php
if (isset($_GET['directional'])) { $directional=$_GET['directional'];
}else{ 
  $directional="";
    }

  switch ($directional) {
    case "lession1-day1":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Lesson 01 - Introduction
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "lession1-day2":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Lesson 01 - Introduction
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "lession1-day3":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Lesson 01 - Introduction
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "lession1-day4":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Lesson 01 - Introduction
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "lession1-day5":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Lesson 01 - Introduction
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "lession1-day6":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Lesson 01 - Introduction
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "lession1-day7":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Lesson 01 - Introduction
              </h3>
            </div>
            <div class='panel-body'>";
      break;
    
    default:
    echo "<div class='panel panel-success autocollapse'>
    <div class='panel-heading clickable'>
      <h3 class='panel-title'>
        Lesson 01 - Introduction
      </h3>
    </div>
    <div class='panel-body'>";
      break;
  }

      //Day 1
      if ($directional=="lession1-day1") { 
        echo "<a href='index.php?directional=lession1-day1'>
          <div class='alert alert-info' role='alert'>
            Ngày 01 - Nghe ngấm</div>
        </a>"; 
      } else { 
        echo "<a href='index.php?directional=lession1-day1'>
          <div class='alert alert-danger' role='alert'>
            Ngày 01 - Nghe ngấm</div>
        </a>";
      } 
      //Day 2
      if ($directional=="lession1-day2") {
        echo "<a href='index.php?directional=lession1-day2'>
          <div class='alert alert-info' role='alert'>Ngày 02 - Nói đuổi</div>
        </a>";
      } else {
          echo "<a href='index.php?directional=lession1-day2'>
          <div class='alert alert-danger' role='alert'>Ngày 02 - Nói đuổi</div>
        </a>";
      }
      //Day 3
      if ($directional=="lession1-day3") {
        echo "<a href='index.php?directional=lession1-day3'>
        <div class='alert alert-info' role='alert'>Ngày 03 - Phản xạ đa chiều - Introducing a Friend</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession1-day3'>
          <div class='alert alert-danger' role='alert'>Ngày 03 - Phản xạ đa chiều - Introducing a Friend</div>
        </a>";
      }
      //Day 4
      if ($directional=="lession1-day4") {
        echo "<a href='index.php?directional=lession1-day4'>
        <div class='alert alert-info' role='alert'>Ngày 04 - Phản xạ đa chiều - Where Do You Live?</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession1-day4'>
          <div class='alert alert-danger' role='alert'>Ngày 04 - Phản xạ đa chiều - Where Do You Live?</div>
        </a>";
      }
      //Day 5
      if ($directional=="lession1-day5") {
        echo "<a href='index.php?directional=lession1-day5'>
        <div class='alert alert-info' role='alert'>Ngày 05 - Phản xạ đa chiều - What is Your Job?</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession1-day5'>
          <div class='alert alert-danger' role='alert'>Ngày 05 - Phản xạ đa chiều - What is Your Job?</div>
        </a>";
      }
      //Day 6
      if ($directional=="lession1-day6") {
        echo "<a href='index.php?directional=lession1-day6'>
        <div class='alert alert-info' role='alert'>Ngày 06 - Thử thách</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession1-day6'>
          <div class='alert alert-danger' role='alert'>Ngày 06 - Thử thách</div>
        </a>";
      }
      //Day 7
      if ($directional=="lession1-day7") {
        echo "<a href='index.php?directional=lession1-day7'>
        <div class='alert alert-info' role='alert'>Assessment - Lesson 01</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession1-day7'>
          <div class='alert alert-danger' role='alert'>Assessment - Lesson 01</div>
        </a>";
      }
?>