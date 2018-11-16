


section{
    background:transparent;
}

.top-nav ul{
    display: flex;
    align-items: center;
    justify-content: center;
    padding-left:30px;
}


.top-nav ul li{
    
    padding: 14px;
    list-style-type: none;
text-align:center;    
}
.top-nav ul li a{
    text-decoration: none;
    color: white;
    padding:7px;
    /* background: yellow; */
    text-transform: uppercase;
    border-radius: 25px;
}
.top-nav ul li a:hover{
    opacity: 0.8;
}
.top-nav ul li ul li{
    display:none;
    list-style-type:none;
    text-align: center;
}
.top-nav ul li:hover ul li{
    display:block;
}

.top-nav {
    background: #544FD3;
    margin-top: 0px;
    display: grid;
    height: 85px;;
    grid-gap: 6px;
    grid-template-columns: 2fr auto;
}

.top-nav .logo{
    padding: 14px;
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