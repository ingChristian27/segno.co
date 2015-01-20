#about{
	text-align: center;
}
#about h2{
	font-weight: bold;
	font-size: 38px;
	font-family: LaoUI-Bold;
}
#about p{
	font-size: 18px;
	font-weight: normal;
	padding-top: 34px;
	font-family: Source Sans Pro;
}
div#about {
	background-image: url('images/complemento.jpg');
	background-repeat: repeat-x;
	background-position: center top;
	background-color: <?php echo $colors['green'] ?>;
	padding-top: 97px;
}
#about h2::first-letter {
	font-size: 0;
	padding: 45px 27px 20px 27px;
	margin: 0px 8px 0px 0px;
	height: 30px;
	background-image: url('images/q.jpg');
}