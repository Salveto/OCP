body{
    background-image: url("bi.jpg");
}
*{
    box-sizing: border-box;
}


.top{
    width:auto;
    height: 900px;
}
.logo{

    width:auto;
    height:auto;
}


section{
    background: transparent;
}
.container{
    background-color: unset;
    opacity: 1px;
}
.top-nav ul{
    display: flex;
    align-items: center;
    justify-content: center;
    padding-left:30px;
}


.top-nav ul li{
    display: inline;
    padding: 14px;
    list-style-type: none;
    color:white;
    text-transform: uppercase;
    
}
.top-nav ul li a{
    text-decoration: none;
    color: white;
    padding:14px;
    /* background: yellow; */
    text-transform: uppercase;
    border-radius: 25px;
}
.top-nav ul li a:hover{
    opacity: 0.8;
}

.top-nav {
    background:#544FD3;
    
    margin-top: 24px;
    display: grid;
    grid-gap: 8px;
    grid-template-columns: 2fr auto;
}

.top-nav .logo{
    padding: 14px;
}

.top-content{
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.tag-line{
    font-size: 3em;
    margin-bottom: 20px;
    font-style: oblique;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
color: #000000;
}
.search-box{
    position: relative;
    /* top:50%;
    left:50%;
    transform:translate(-50%,-50%); */
    background: rgb(225, 223, 228);
    height:50px;
    width: 400px;
    border-radius:40px;

    box-shadow: 2px 2px 5px 4px rgba(73, 72, 72,0.4);


    /* padding:10px; */
}

.search-icon{
    color:rgb(226, 72, 11);
    float:right;
    width:40px;
    height:40px;
    border-radius:50%;
    /* background:rgb(226, 72, 11); */

    position: absolute;
    right: 12px;
    top: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    

    /* display:flex;
    justify-content:center;
    align-items:center; */

}
.search-icon i{

}

.search{
    background: red;
    border:none;
    background:none;
    outline:none;
    padding: 8px 14px 8px 12px;
    color:rgb(255, 77, 77);
    font-size:18px;
    width: 100%;
    height: 100%;
    border-radius: 40px;
    /* line-height:40px;
    width:0px; */
}
.container1 .box{
    width:50px;
    height:430px;
    margin:20px auto;
   
    display:table;
   
    
}
.container1 .box .boxrow{
    display: table-row
}
.container1 .box .boxrow .boxcell{
    display: table-cell;
    width:10%;
    padding: 20px;
    font-family: Arial;
}
.container1 .box .boxrow .boxcell.b1{
    background:#544FD3;
    font-style:bold;
    color:black;

    font-family:Arial, Helvetica, sans-serif;
}
.container1 .box .boxrow .boxcell.b1 .pic{
    height:30%;
   
}
.container1 .box .boxrow .boxcell.b2{
    background:#FF6D51;
}
.container1 .box .boxrow .boxcell.b2 .pic{
    height:30%;
   
}
.container1 .box .boxrow .boxcell.b3{
    background:#544FD3;
}
.container1 .box .boxrow .boxcell.b3 .pic{
    height:40%;
   
}