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