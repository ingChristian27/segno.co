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
#cover #logo {
    height: 140px;
    display: block;
    padding: 24px 24px 24px 0;
    text-align: center;
    position: absolute;
    top: 50%;
    margin-top: -75px;
    width: 46%;
    background-size: auto 100%;
}
#cover #logo::before {
    content: '';
    background: url("images/logo.fw.png") no-repeat 100%;
    position: absolute;
    display: block;
    top: 0;
    bottom: 0;
    left: 0;
    right: -30px;
}
#cover #logo > img {
    position: relative;
}
#cover #slogan {
    background: url("images/slogan.png") no-repeat 0;
    height: 108px;
    display: block;
    color: <?php echo $colors['white'] ?>;
    font-size: 26px;
    position: absolute;
    top: 50%;
    margin-top: -60px;
    margin-bottom: 0;
    right: 0;
    width: 54%;
    background-size: auto 100%;
    padding: 39px 0 39px 0;
    text-align: center;
}

#cover #lang {
	width: 220px;
	height: 27px;
	border-style: solid;
	border-color: #1B3935;
	text-transform: uppercase;
	background-image: url("images/background_lang.png");
	background-repeat: repeat;
	margin-right: 5%;

}

#cover #lang_left{
    height: 19px;
    margin: 1px 0px 0px 1px;
    color:<?php echo $colors['green'] ?>;
}
#cover #lang_rigth{
    height: 19px;
    margin: 1px -1px 0px -2px;
    color:<?php echo $colors['green'] ?>;
}
#cover .lang_active{
    background: #44564e;
     color: <?php echo $colors['white'] ?>;
}