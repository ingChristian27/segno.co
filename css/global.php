@font-face {
    font-family: 'LaoUI';
    src: url('fonts/LaoUI.eot?#iefix') format('embedded-opentype'), 
        url('fonts/LaoUI.woff') format('woff'), 
        url('fonts/LaoUI.ttf') format('truetype'), 
        url('fonts/LaoUI.svg#LaoUI') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'LaoUI';
    src: url('fonts/LaoUI-Bold.eot?#iefix') format('embedded-opentype'), 
        url('fonts/LaoUI-Bold.woff') format('woff'), 
        url('fonts/LaoUI-Bold.ttf') format('truetype'), 
        url('fonts/LaoUI-Bold.svg#LaoUI-Bold') format('svg');
    font-weight: bold;
    font-style: normal;
}
body {
    color: #fff;
    <?php echo $source_sans_pro ?>;
}
h1, h2, h3, h4, h5, h6 {
    <?php echo $laoUI ?>;
}
a:hover,
a:focus {
    text-decoration: none;
}
.copyright {
    text-align: center;
    height: 63px;
    background: <?php echo $colors['dark-green-1'] ?>;
    color: <?php echo $colors['green'] ?>;
    padding: 21px 0px;
    <?php echo $source_sans_pro ?>;
}