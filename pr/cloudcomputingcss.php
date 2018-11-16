


section{
    background:transparent;
}

*{
    margin:0px;
    padding:0px;
    
}
#container{
    margin-top: 12px;
display: grid;
grid-gap: 8px;
grid-template-columns: 2fr auto;
background-color: #3c3e94;
height:60px;

}
#container ul{
list-style: none;

}
#container ul li{
    background-color:#3c3e94;
    width:130px;
    border:none;
    height:40px;
    line-height:40px;
    text-align:center;
    float:left;
    color:white;
    font-size:18px;
}
#container ul li:hover{
    background-color:green;

}
#container ul li a{
    color:white;
    text-decoration: none;
}
#container ul ul{
    display:none;
}
#container ul li:hover > ul{
    display:block;

}
.logo{
padding: 14px;
padding-top:0px;

}


.head{
    
    text-align:center;
    color:black;
    font-style: bold;
}
.info{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
}
input[type="button"]{
    margin-bottom: 28px;
    width: 120px;
    height: 32px;
    background: #FF6D51;
    border:none;
    border-radius:20px;
    color:#fff;
    font-family: sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.2s ease;
    cursor: pointer;
    

}
input[type="button"]:hover,
input[type="button"]:focus{
    background:gold;
    transition: 0.2s ease;
}