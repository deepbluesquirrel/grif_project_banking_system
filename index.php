<?php
session_start();
include('connect.php');
?>
<html>
    <head>
        <title>Home</title>
            <style>
                div{
                    display: flex;
                    justify-content: center;
                }
                body{
                    background-color:navy;
                    color:white;
                    height:100%;
                }
                a{
                    color:white;
                    background-color:black;
                    padding:5px;
                    margin-left:10px;
                    border-radius:6px;
                    text-decoration:none;
                }
                .bar{
                width: 99%;
                box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.2), 0 20px 20px 0 rgba(0, 0, 0, 0.19);
                margin-bottom: 25px;
                margin-top: 10px;
                padding: 3px 10px;
                display:flex;
                justify-content:left;
                border-radius:10px;
                font-family:cursive;
                font-style:italic;
                background-color:white;
                }
                .one{
                    justify-content: left;
                    
                }
                .two{
                    justify-content: center;
                    position:relative;
                    bottom:65%;
                }
                .three{
                    justify-content: right;
                    position:relative;
                    bottom:150%;
                }
                .four{
                    position:relative;
                    left:30%;
                    bottom:150%;
                }
                p {
                    width:20%;
                    text-align: justify;
                    text-justify: inter-word;
                 }
            </style>
    </head>
    <body>
        <h1><center>Y Bank</center></h1>
        <div class='bar'>        
        <a href='index.php'>Home</a>
         <a href='view.php'>View Customer</a>
         <a href='contact.php'>Contact Us</a>
            </div><br>
         <h2>Welcome To Y Bank</h2>
         <h4>About</h4>
         <div class='one'>         
         <p>
         The  Y bank Corporation (simply referred to as Y Bank, often abbreviated as BofA or BoA) is an American multinational investment bank and financial services holding company headquartered in Charlotte, North Carolina. The bank was founded in San Francisco, and took its present form when NationsBank of Charlotte acquired it in 1998. It is the second largest banking institution in the United States, after JPMorgan Chase, and the eighth largest bank in the world. Y Bank is one of the Big Four banking institutions of the United States.[4] It serves approximately 10.73% of all American bank deposits, in direct competition with JPMorgan Chase, Citigroup and Wells Fargo. Its primary financial services revolve around commercial banking, wealth management, and investment banking.
                </p>
                </div>
                <div class='two'>
         <img src='index1.png'>
                </div>
                <div class='four'>
                <h4 style=''>Services</h4>
                </div>
         <div class='three'>         
            <ul>
            <li>Advancements of loans</li>
            <li>Cheque payments</li>
            <li>Discounting on bills of exchange</li>
            <li>Collecting and paying the credit instruments</li>
            <li>Guarantee by banks</li>
            <li>Consultancy</li>
            <li>Credit cards</li>
            <li>Funds remittance</li>
            <li>Debit cards</li>
                </ul>
                </div>
</div>
</body>
    </html>