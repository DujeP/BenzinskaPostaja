<html>
    <head>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <style>
            #Sekcija1
            {
                border-top-right-radius: 12px;
                border-top-left-radius: 12px;
                text-align: left;
                font-size: 16px;
                font-family: 'Inter', sans-serif;
                font-weight:100;
                height: 20px;
                background-color:#0c142b;
                color:#45a8df;
                border-collapse: collapse;
            }
            #Table{
                width: 70%;
                border-collapse: collapse;
                margin:auto;
                max-width: 1100px;
                margin-top:100px;
                font-family: 'Inter', sans-serif;
                font-weight:300;
                height:550px;
                max-height:550px;
                color:#0c142b;
            }
            form{
                margin:15px;
                padding-top:30px;
                font-size:17px;
            }
            #body1{
                margin:15px;
            }
            body{
                background-image: url( 'bg.svg' );
            }
            td, th{
                background-color:#d1d1d1;
            }
            #izdajform{
                padding-left:45px;
                margin-top:15px;
            }
            input[type=button], input[type=submit] {
                background-color: darkblue;
                border: none;
                color: white;
                padding: 6px 12px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                background-color: #152238;
                margin-left:100px;
                cursor: pointer;
                outline: none;
                color: #fff;
                background-color: #0c142b;
                border: none;
                box-shadow: 0 4px #999;
                width:80px;
                height:40px;
            }   
            .btn{
                font-family: 'Inter', sans-serif;
                font-weight:300;
            }
            .btn:active {
                background-color: darkgray;
                box-shadow: 0 2px #666;
                transform: translateY(2px);
            }
            input[type=text] {
                background-color: #fbfbfb;
                margin:2px;
                height:30px;
                padding-top:5px;
            }
            label{
                margin-top:10px;
            }
            #pic1{
                display: inline-block;
                width: 55px;
                height: 55px;
                padding-top:25px;
                padding-left:15px;
                padding-right:20px;
            }
            #links{
                text-align: left;
                height:35px;
                font-size: 16px;
                font-family: 'Inter', sans-serif;
                font-weight:450;
                padding-left:15px;
                color:#65a8df;
                text-decoration: none;  
                border-top:1px solid #65a8df;
                border-bottom:1px solid #65a8df;
                background-color:#0c142b;
            }
            a {
                text-decoration: none;
                color:white;
            }
            select{
                height:30px;
                width:180px;
                background-color:#fbfbfb;
            }
            option{
                color:#65a8df;
            }
            a:hover {
                color: #65a8df;
            }
            a:active  {
                color: gold;
            }
            .currentLinks{
                color:#baada7;
            }
            #Naziv{
                text-align: left;
               
            }
            #footer{
                text-align: center;
                font-size: 12px;
                border-bottom-right-radius: 12px;
                border-bottom-left-radius: 12px;
                height: 40px;
            }

            #body1{
                font-size: 16px;
                padding:25px;

            }
            #statistika{
                padding:20px;
                font-size: 16px;
                height:150px;
                padding-left:120px;
                width:500px;
                margin-left:150px;
            }
            #stanje{
                padding:20px;
                padding-bottom:45px;
                padding-left:120px;
                padding-top:75px;
            }
            #stanjetrtd, #stanjetab{
                border:2px solid #0c142b;
                border-collapse: collapse;
                font-size:20px;
                text-align:center;
                color:#152238;
            }
            #stanjetrtd{
                height:100px;

            }
            #stanjeth{
                width:200px;
                border:2px solid #0c142b;
                border-collapse: collapse;
                font-size:20px;
                color:#152238;
            }
            #pregled{
                padding-left:100px;
                padding-top:50px;
            }
            #graf{
                width:500px;
                margin-left:150px;
            }
            #test{
                margin-left:150px;
                width:500px;
            }
        </style>
    </head>
    <body>
        <table id="Table">
            <tr>
                <th id="Sekcija1">
                    <h1><img src="bBuddies.jpg" alt="'logo'" id="pic1" />BUDDY GAS STATION</h1>
                </th>
            </tr>
                <tr>
                    <th id ="links" colspan="2">
                        <a href="home.php">POCETNA STRANICA&ensp;   </a>
                        <a href="izdaj.php">IZDAJ RACUN&ensp;   </a>
                        <a href ="unos.php">UNOS GORIVA&ensp;   </a>
                        <a href="stanje.php">STANJE&ensp;   </a>
                        <a href="pregled.php">RACUNI&ensp;   </a>
                        <a href ="statistika.php">STATISTIKA&ensp;   </a>
                        <a href ="pokusIspis.php">POKUS ISPIS&ensp;   </a>
                    </th>
                </tr>
