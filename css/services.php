#services {
    padding-top: 60px;
}
#services > h2 {
	font-weight: bold;
	font-size: 38px;
}
#services > h2::first-letter {
    <?php echo $title_first_letter ?>;
}
#services .panel-group {
	padding-top: 30px;
	font-family: Source Sans Pro;
}
#services .panel-group > .panel {
	background-color: #1C3A35;
	border: none;
}
#services .panel-group > .panel > .collapse.in, 
#services .panel-group > .panel > .collapsing, 
#services .panel-group > .panel > .collapse.in, 
#services .panel-group > .panel > .collapsing {
	visibility: hidden;
}
#services .panel-group > .panel > .panel-heading {
	color: #fff;
	font-size: 18px;
	background-color: #0e1d1a;
	border-color: none;
	margin-bottom: 4px;
	height: 40px;
}
#services .panel-group > .panel > .panel-heading > .panel-title >  a {
	background: url('images/viñeta-1.jpg') ;
	background-position: left center ;
	background-repeat: no-repeat ;
	padding-left: 25px ;
}
#services .panel-group > .panel > .panel-heading > .panel-title > a:hover, 
#services .panel-group > .panel > .panel-heading > .panel-title > a:focus, 
#services .panel-group > .panel > .panel-heading > .panel-title > a:active { 
    
}
#services .panel-group > .panel > .panel-heading > .panel-title > .collapsed {
	background: url('images/viñeta.jpg') !important;
	background-position: left center !important;
	background-repeat: no-repeat !important;
	padding-left: 25px !important;
}

#services .panel-group > .panel > .collapse.in, 
#services .panel-group > .panel > .collapsing, 
#services .panel-group > .panel > .collapse.in, 
#services .panel-group > .panel > .collapsing {
    visibility: visible;
}
#services .panel-default > .panel-heading + .panel-collapse > .panel-body {
	margin-top: -7px;
	border-color: <?php echo $colors['dark-green-1'] ?>;
	border-style: solid;
	border-width: 2px;
	font-size: 14px;
	<?php echo $source_sans_pro ?>;
}