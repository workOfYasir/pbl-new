 $host = 'localhost';
 $dbName = 'ypw4fv50_cmslab';
 $user = 'ypw4fv50_cmslab';
 $pass = 'v6hcfqswdd6l';

// Create connection
$conn = new mysqli($host, $user, $pass, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$q=mysqli_query($conn,"SELECT CONVERT(CAST(CONVERT(ypw4fv50_cmslab.video_transcript_sentences.sentence USING latin1) as BINARY) USING utf8) AS sentence, video_id, sentence_id
    FROM video_transcript_sentences WHERE video_id = '$video_id'");
while($r=mysqli_fetch_assoc($q)){
echo $r['sentence']."<br>";
}