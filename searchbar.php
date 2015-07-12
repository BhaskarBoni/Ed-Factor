<style>
a{color: #FFF;
background-color: #4985B8;padding: 10px 16px;
font-size: 18px;
border-radius: 6px;

}
select{
    padding:3px;
    margin: 0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
	width:300px;
	height:30px;
}
a{text-decoration:none;}
</style>
<center>
<p style="background-color:#E8E8E8;font-size: 22px;height:70px;padding-top:15px;font-family: "TradeGothicLT-Bold";
    font-weight: normal;}">
Search for Course 
<select id="a1">
<option>Web Development</option>
<option>Business & Entrepreneurship
</option><option>Sales & Marketing
</option><option>IT & Software
</option><option>Finance & Accounting
</option><option>Project Management
</option><option>Language
</option><option>Test Preparation
</option><option>Media, Fashion & Art</option>
</select>
<select id="a2">
<option>Web Development</option>
<option>Mobile Apps</option>
<option>Programming Languages</option>
<option>Game Development</option>
<option>Software Engineering</option>
<option>Development Tools</option>
<option>E-commerce</option>
</select>
<a href="#"> search</a>
<script src="jquery.min.js">
</script>
<script>
/*var a=$("select").val();
var b=$("#a2").val();
$("a").attr("href", "course_category.php?id="+a+"&&id1="+b);*/

$("#a1").change(function(){
/*var c=$("select").val();
var d=$("#a2").val();
$("a").attr("href", "course_category.php?id="+c+"&&id1="+d);*/
if($("#a1").val()=="Web Development")
$("#a2").html("<option>Web Development</option><option>Mobile Apps</option><option>Programming Languages</option><option>Game Development</option><option>Software Engineering</option><option>Development Tools</option><option>E-commerce</option>");
if($("#a1").val()=="Business & Entrepreneurship")
$("#a2").html("<option>Entrepreneurship</option><option>Communication</option><option>Business Law</option><option>Strategy making</option><option>Management</option><option>Leadership</option><option>Motivation</option>");
if($("#a1").val()=="Sales & Marketing")
$("#a2").html("<option>Digital Marketing</option><option>Search Engine Optimization</option><option>Social Medial Marketing</option><option>Advertising</option><option>Public Relations (PR)</option><option>Content Markting</option><option>Product Marketing</option><option>Startup Marketing</option><option>Marketing Fundamentals</option><option>Mobile Marketing</option><option>Sales</option><option>Online sales</option>");
if($("#a1").val()=="IT & Software")
$("#a2").html("<option>Network & Secutiry</option><option>Excel Training</option><option>PPT Presentation</option><option>Databases</option><option>Microsoft Certification</option><option>Software Testing</option>");
if($("#a1").val()=="Finance & Accounting")
$("#a2").html("<option>General Accounting</option><option>CA/CS/ICWA</option><option>Banking & Insurance</option><option>Capital Market</option><option>Stock Market Analysis</option>");
if($("#a1").val()=="Project Management")
$("#a2").html("<option>PMP</option>");
if($("#a1").val()=="Language")
$("#a2").html("<option>English</option><option>optionish</option><option>German</option><option>French</option><option>Japanese</option><option>Chinese</option><option>Russian</option>");
if($("#a1").val()=="Test Preparation")
$("#a2").html("<option>TOFEL</option><option>GMAT</option><option>GRE</option><option>CAT</option><option>MAT</option><option>Civil Services</option><option>Banking / PO</option><option>PMP Training</option><option>IIT / JEE</option>");
if($("#a1").val()=="Media, Fashion & Art")
$("#a2").html("<option>Mass Media</option><option>Event Management</option><option>Fashion Designing</option><option>Interior Design</option><option>Photography</option>");
});
$("a").click(function(){
var c=$("#a1").val();var d=$("#a2").val();
str="category_main.php?id="+c+"&&id1="+d;
parent.location.href=str;
});
</script>