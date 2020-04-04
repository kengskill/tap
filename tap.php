<!DOCTYPE html>
<html>
<head>
	<title>Test Tap</title>
<style>
/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
}

.btn{
	margin-bottom: 0px;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: orange;
  display: none;
  padding: 100px 20px;
  height: 100%;
}
</style>
</head>
<body>

<button class="btn" onclick="openPage('Player1', this, '#289dcc')" id="defaultOpen">ตัวเล่นคลิปหลัก</button>
<button class="btn" onclick="openPage('Player2', this, '#289dcc')">ตัวเล่นคลิปสำรอง (แนะนำ)</button>

<div id="Player1" class="tabcontent">
  <p>Script 1</p>
</div>

<div id="Player2" class="tabcontent">
  <p>ยังไม่พร้อมใช้งาน กำลังอัพโหลด...<p>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<a href="" target="_bank"><img src="http://rov69.com/banner/nnn800x2.png" alt="ดูคลิปโป้ออนไลน์ฟรี" width="100%" height="90"></a>
   
</body>
</html> 