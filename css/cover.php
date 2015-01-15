body{
	color: #fff;
}
#cover {
    background: <?php echo $colors['white'] ?>;
    padding-top: 19px;
	height: 600px;
	background-image: url('images/background_header.jpg');
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        -ms-background-size: cover;
                        background-size: cover;
                        background-position: 50% 50%;
                        -ms-behavior: url(/backgroundsize.min.htc);
}
#lang{
	width: 220px;
	height: 27px;
	border-style: solid;
	border-color: #1B3935;
	text-transform: uppercase;
	background-image: url("images/background_lang.png");
	background-repeat: repeat;

}
#logo{
	background-image: url("images/logo.fw.png");
	width: 646px;
	height: 140px;
	display: block;
}
#slogan{
	background-image: url("images/slogan.png");
	height: 108px;
	display: block;
	background-position: center center;
	color: #fff;
	font-size: 26px;
}
#about{
	text-align: center;
}
#about h2{
	font-weight: bold;
	font-size: 38px;
}
#about p{
	font-size: 18px;
	font-weight: normal;
}
#services .panel-default>.panel-heading {
	color: #fff;
	font-size: 18px;
	background-color: #0e1d1a;
	border-color: none;
	margin-bottom: 4px;
	height: 40px;
}
#services  .panel{
	background-color: #1C3A35;
	border: none;
}
#services .collapse.in, #services .collapsing, #services a.collapse.in, #services a.collapsing{
	visibility: hidden;
}
a:hover, a:focus {

text-decoration: none;
}
#portfolio-slider .custom-slider-bar h3{
	float: left;
	margin: 0px;
	font-size: 14px;
	padding: 12px 10px;
}
.custom-slider-bar {
	background-color: #0e1d1a;
	height: 40px;
	width: 470px;
}
#portfolio-slider .dropdown{
	float:left;
	
}
#portfolio-slider .custom-slider-nav{
	text-align: right;

}
#portfolio-slider ul{
	list-style-type: none;
	padding-left: 0;
	width: 470px;
	margin-top: 4px;
}

.copyright{
	text-align: center;
	height: 63px;
	background: #0e1d1a;
	color: #1c3a35;
	padding: 21px 0px;

}