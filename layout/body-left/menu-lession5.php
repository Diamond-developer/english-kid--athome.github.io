<?php
if (isset($_GET['directional'])) { $directional=$_GET['directional'];
}else{ 
  $directional="";
    }

  switch ($directional) {
    case "lession5-day29":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 05 - Hobbies
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession5-day30":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 05 - Hobbies
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession5-day31":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 05 - Hobbies
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession5-day32":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 05 - Hobbies
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession5-day33":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 05 - Hobbies
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession5-day34":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 05 - Hobbies
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  
    case "lession5-day35":
      echo "<div class='panel panel-warning'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 05 - Hobbies
        </h3>
      </div>
      <div class='panel-body'>";
      break;
    
    default:
      echo "<div class='panel panel-warning autocollapse'>
      <div class='panel-heading clickable'>
        <h3 class='panel-title'>
          Lesson 05 - Hobbies
        </h3>
      </div>
      <div class='panel-body'>";
      break;
  }

      //Day 1
      if ($directional=="lession5-day29") { 
        echo "<a href='index.php?directional=lession5-day29'>
          <div class='alert alert-info' role='alert'>
          Ngày 29 - Nghe ngấm</div>
        </a>"; 
      } else { 
        echo "<a href='index.php?directional=lession5-day29'>
          <div class='alert alert-danger' role='alert'>
            Ngày 29 - Nghe ngấm</div>
        </a>";
      } 
      //Day 5
      if ($directional=="lession5-day30") {
        echo "<a href='index.php?directional=lession5-day30'>
          <div class='alert alert-info' role='alert'>Ngày 30 - Nói đuổi</div>
        </a>";
      } else {
          echo "<a href='index.php?directional=lession5-day30'>
          <div class='alert alert-danger' role='alert'>Ngày 30 - Nói đuổi</div>
        </a>";
      }
      //Day 3
      if ($directional=="lession5-day31") {
        echo "<a href='index.php?directional=lession5-day31'>
        <div class='alert alert-info' role='alert'>Ngày 31 - Phản xạ đa chiều - Jack’s Family Portrait</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession5-day31'>
          <div class='alert alert-danger' role='alert'>Ngày 31 - Phản xạ đa chiều - Jack’s Family Portrait</div>
        </a>";
      }
      //Day 4
      if ($directional=="lession5-day32") {
        echo "<a href='index.php?directional=lession5-day32'>
        <div class='alert alert-info' role='alert'>Ngày 32 - Phản xạ đa chiều - A High School Reunion</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession5-day32'>
          <div class='alert alert-danger' role='alert'>Ngày 32 - Phản xạ đa chiều - A High School Reunion</div>
        </a>";
      }
      //Day 5
      if ($directional=="lession5-day33") {
        echo "<a href='index.php?directional=lession5-day33'>
        <div class='alert alert-info' role='alert'>Ngày 33 - Phản xạ đa chiều - Just in Time for the Company Trip</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession5-day33'>
          <div class='alert alert-danger' role='alert'>Ngày 33 - Phản xạ đa chiều - Just in Time for the Company Trip</div>
        </a>";
      }
      //Day 6
      if ($directional=="lession5-day34") {
        echo "<a href='index.php?directional=lession5-day34'>
        <div class='alert alert-info' role='alert'>Ngày 34 - Thử thách</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession5-day34'>
          <div class='alert alert-danger' role='alert'>Ngày 34 - Thử thách</div>
        </a>";
      }
      //Day 7
      if ($directional=="lession5-day35") {
        echo "<a href='index.php?directional=lession5-day35'>
        <div class='alert alert-info' role='alert'>Assessment - Lesson 01</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=lession5-day35'>
          <div class='alert alert-danger' role='alert'>Assessment - Lesson 01</div>
        </a>";
      }
?>