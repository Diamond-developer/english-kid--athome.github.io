<?php
if (isset($_GET['directional'])) { $directional=$_GET['directional'];
}else{ 
  $directional="";
    }

  switch ($directional) {
    case "gramar-1":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
              Gramar
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "gramar-2":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Gramar
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "gramar-3":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Gramar
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "gramar-4":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Gramar
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "gramar-5":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Gramar
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "gramar-6":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Gramar
              </h3>
            </div>
            <div class='panel-body'>";
      break;
  
    case "gramar-7":
      echo "<div class='panel panel-success'>
            <div class='panel-heading clickable'>
              <h3 class='panel-title'>
                Gramar
              </h3>
            </div>
            <div class='panel-body'>";
      break;
    
    default:
    echo "<div class='panel panel-success autocollapse'>
    <div class='panel-heading clickable'>
      <h3 class='panel-title'>
        Gramar
      </h3>
    </div>
    <div class='panel-body'>";
      break;
  }

      // 1
      if ($directional=="gramar-1") {
        echo "<a href='index.php?directional=gramar-1'>
          <div class='alert alert-info' role='alert'>
            Ngày 01 - Nghe ngấm</div>
        </a>"; 
      } else {
        echo "<a href='index.php?directional=gramar-1'>
          <div class='alert alert-danger' role='alert'>
            Ngày 01 - Nghe ngấm</div>
        </a>";
      } 
      // 2
      if ($directional=="gramar-2") {
        echo "<a href='index.php?directional=gramar-2'>
          <div class='alert alert-info' role='alert'>Ngày 02 - Nói đuổi</div>
        </a>";
      } else {
          echo "<a href='index.php?directional=gramar-2'>
          <div class='alert alert-danger' role='alert'>Ngày 02 - Nói đuổi</div>
        </a>";
      }
      // 3
      if ($directional=="gramar-3") {
        echo "<a href='index.php?directional=gramar-3'>
        <div class='alert alert-info' role='alert'>Ngày 03 - Phản xạ đa chiều - Introducing a Friend</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=gramar-3'>
          <div class='alert alert-danger' role='alert'>Ngày 03 - Phản xạ đa chiều - Introducing a Friend</div>
        </a>";
      }
      // 4
      if ($directional=="gramar-4") {
        echo "<a href='index.php?directional=gramar-4'>
        <div class='alert alert-info' role='alert'>Ngày 04 - Phản xạ đa chiều - Where Do You Live?</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=gramar-4'>
          <div class='alert alert-danger' role='alert'>Ngày 04 - Phản xạ đa chiều - Where Do You Live?</div>
        </a>";
      }
      // 5
      if ($directional=="gramar-5") {
        echo "<a href='index.php?directional=gramar-5'>
        <div class='alert alert-info' role='alert'>Ngày 05 - Phản xạ đa chiều - What is Your Job?</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=gramar-5'>
          <div class='alert alert-danger' role='alert'>Ngày 05 - Phản xạ đa chiều - What is Your Job?</div>
        </a>";
      }
      // 6
      if ($directional=="gramar-6") {
        echo "<a href='index.php?directional=gramar-6'>
        <div class='alert alert-info' role='alert'>Ngày 06 - Thử thách</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=gramar-6'>
          <div class='alert alert-danger' role='alert'>Ngày 06 - Thử thách</div>
        </a>";
      }
      // 7
      if ($directional=="gramar-7") {
        echo "<a href='index.php?directional=gramar-7'>
        <div class='alert alert-info' role='alert'>Assessment - Lesson 01</div>
      </a>";
      } else {
          echo "<a href='index.php?directional=gramar-7'>
          <div class='alert alert-danger' role='alert'>Assessment - Lesson 01</div>
        </a>";
      }
?>