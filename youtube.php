<?php
$dta = $_POST['id'];
$data = file_get_contents("https://www.youtube.com/get_video_info?video_id=".$dta);
parse_str($data);
$arr = explode(",", $url_encoded_fmt_stream_map);
/*foreach ($arr as $item) {
	parse_str($item);
	echo "<a href='$url?title=$title'>$quality / $type</a></br>";
}*/
echo "<link rel=stylesheet type=text/css href=style.css>";
echo "<div>";
echo "<b>Video Title: ".$title."<br>";
echo "Author:      ".$author."</b></H3><br><br><br>";
parse_str($arr[0]);
echo "<b>Select Video Formats.</b><br><br><a href='$url?title=$title'>HD 720p | mp4</a></br>";

parse_str($arr[2]);
echo "<a href='$url?title=$title'>Medium | mp4</a></br>";
echo "</div>";
?>
