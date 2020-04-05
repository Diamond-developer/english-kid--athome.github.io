<?php
if (isset($_GET['directional'])) {
	$directional_dieuhuong=$_GET['directional'];
}else{
	$directional_dieuhuong="";
}
switch ($directional_dieuhuong) {
	//gramar
	case "gramar-1":
		include("lession01/lession1-day1.html");
		break;
	case "gramar-2":
		include("lession01/lession1-day2.html");
		break;
	case "gramar-3":
		include("lession01/lession1-day3.html");
		break;
	case "gramar-4":
		include("lession01/lession1-day4.html");
		break;
	case "gramar-5":
		include("lession01/lession1-day5.html");
		break;
	case "gramar-6":
		include("lession01/lession1-day6.html");
		break;
	case "gramar-7":
		include("lession01/lession1-day7.html");
		break;
	//lession 01
	case "lession1-day1":
		include("lession01/lession1-day1.html");
		break;
	case "lession1-day2":
		include("lession01/lession1-day2.html");
		break;
	case "lession1-day3":
		include("lession01/lession1-day3.html");
		break;
	case "lession1-day4":
		include("lession01/lession1-day4.html");
		break;
	case "lession1-day5":
		include("lession01/lession1-day5.html");
		break;
	case "lession1-day6":
		include("lession01/lession1-day6.html");
		break;
	case "lession1-day7":
		include("lession01/lession1-day7.html");
		break;
	//lession 02
	case "lession2-day8":
		include("lession02/lession2-day8.html");
		break;
	case "lession2-day9":
		include("lession02/lession2-day9.html");
		break;
	case "lession2-day10":
		include("lession02/lession2-day10.html");
		break;
	case "lession2-day11":
		include("lession02/lession2-day11.html");
		break;
	case "lession2-day12":
		include("lession02/lession2-day12.html");
		break;
	case "lession2-day13":
		include("lession02/lession2-day13.html");
		break;
	case "lession2-day14":
		include("lession02/lession2-day14.html");
		break;
	//lession 03
	case "lession3-day15":
		include("lession03/lession3-day15.html");
		break;
	case "lession3-day16":
		include("lession03/lession3-day16.html");
		break;
	case "lession3-day17":
		include("lession03/lession3-day17.html");
		break;
	case "lession3-day18":
		include("lession03/lession3-day18.html");
		break;
	case "lession3-day19":
		include("lession03/lession3-day19.html");
		break;
	case "lession3-day20":
		include("lession03/lession3-day20.html");
		break;
	case "lession3-day21":
		include("lession03/lession3-day21.html");
		break;
	
	//lession 04
	case "lession4-day22":
		include("lession04/lession4-day22.html");
		break;
	case "lession4-day23":
		include("lession04/lession4-day23.html");
		break;
	case "lession4-day24":
		include("lession04/lession4-day24.html");
		break;
	case "lession4-day25":
		include("lession04/lession4-day25.html");
		break;
	case "lession4-day26":
		include("lession04/lession4-day26.html");
		break;
	case "lession4-day27":
		include("lession04/lession4-day27.html");
		break;
	case "lession4-day28":
		include("lession04/lession4-day28.html");
		break;

	//lession 05
	case "lession5-day29":
		include("lession05/lession5-day29.html");
		break;
	case "lession5-day30":
		include("lession05/lession5-day30.html");
		break;
	case "lession5-day31":
		include("lession05/lession5-day31.html");
		break;
	case "lession5-day32":
		include("lession05/lession5-day32.html");
		break;
	case "lession5-day33":
		include("lession05/lession5-day33.html");
		break;
	case "lession5-day34":
		include("lession05/lession5-day34.html");
		break;
	case "lession5-day35":
		include("lession05/lession5-day35.html");
		break;

	default:
		include("body-container.html");
		break;
}
?>