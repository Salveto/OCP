body{
    background-color: #544FD3;
}
.top{
    min-height: 0px;
}


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





.main{
    margin:150px;
    margin-left:650px;
    margin-bottom: 0;
    
}



.box{
border:5px solid #5528C2;
    top: 50%;
    left:50%;
    width:1000px;
    transform: translate(-50%,-50%);
    padding: 30px;
    padding-left: 50px;
    box-sizing: border-box;
    background-color: #FF8D49;
    border-radius: 4px;
    display: flex;
    transition: 0.3%;
    flex-direction: row;
}
.box:hover{
    box-shadow: 0 30px 40px rgba(1, 1,1,1);
}
.box .img{
    width:300px;
    flex: 0 0 150px;
    
}
.box .img img{
    max-width: 100%;
}
.box .content{
    padding-left:20px;

}
.box .content h2{
    margin-left:50px;
    padding: 0;
     
    color:rgb(218, 33, 33);
}
.box .content p{
    margin:0;
    padding: 10px 0 0;
    text-align: justify;
}