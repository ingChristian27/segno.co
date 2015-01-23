#portfolio {
    padding-top: 60px;
}
#portfolio h2 {
	font-weight: bold;
	font-size: 38px;
}
#portfolio h2::first-letter {
	<?php echo $title_first_letter ?>;
}

#portfolio #portfolio-slider{
	padding-top: 31px;
	font-family: Source Sans Pro;
}
#portfolio .custom-slider-bar {
	background-color: #0e1d1a;
	height: 40px;
	width: 470px;
}
#portfolio #portfolio-slider .dropdown{
	float:left;
}
#portfolio #portfolio-slider button#dLabel{
	background-image: url('images/Button1.jpg');
	height: 37px;
	width: 46px;
	color: rgb(14, 29, 26);
	border: none;
}
#portfolio #portfolio-slider button#dLabel:focus {
	outline: -webkit-focus-ring-color auto 0px;
}
#portfolio #portfolio-slider ul{
	list-style-type: none;
	padding-left: 0;
	width: 470px;
	margin-top: 4px;
}
#portfolio #portfolio-slider .custom-slider-bar h3{
	float: left;
	margin: 0px;
	font-size: 14px;
	padding: 12px 10px;
}
#portfolio #portfolio-slider .custom-slider-nav{
	text-align: right;
}
#portfolio .custom-slider-nav-l{
	background-image: url('images/Button2.jpg');
	height: 37px!important;
	width: 46px !important;
	color: rgb(14, 29, 26);
	border: none;
}
#portfolio .custom-slider-nav-l {
    background-image: url('images/Button2.jpg');
    color: rgb(14, 29, 26);
    border: none;
    padding: 14px 25px 25px 10px;
    margin-top: -9px;
    font-size: 1px;
}
#portfolio .custom-slider-nav-r {
    background-image: url('images/Button3.jpg');
    height: 37px!important;
    width: 53px !important;
    color: rgb(28, 58, 53);
    border: none;
    padding: 14px 0px 25px 0px;
    padding-left: 40px;
    margin-top: -9px;
    font-size: 1px;
}