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
    position: relative;
}
#lang {
	width: 220px;
	height: 27px;
	border-style: solid;
	border-color: #1B3935;
	text-transform: uppercase;
	background-image: url("images/background_lang.png");
	background-repeat: repeat;

}
#logo{
    background: url("images/logo.fw.png") no-repeat;
    height: 140px;
    display: block;
    padding: 24px;
    position: absolute;
    top: 50%;
    margin-top: -75px;
}
#slogan {
	background-image: url("images/slogan.png");
	height: 108px;
	display: block;
	background-position: center center;
	color: #fff;
	font-size: 26px;
    position: absolute;
    top: 50%;
    margin-top: -53px;
    margin-bottom: 0;
    right: 0;
}