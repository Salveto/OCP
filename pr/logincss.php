body{
    margin:0;
    padding:0;
    font-family: sans-serif;
    background-color: #5528C2;
    background-size:cover;

}
.box{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:400px;
    padding:40px;
    background:rgba(0,0,0,.8);
    box-sizing:border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
    border-radius: 10px;
}



.top{
    min-height: 600px;
}


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
    display: inline;
    padding: 14px;
    list-style-type: none;
    
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
    background-color: #544FD3;

    margin-top: 24px;
    display: grid;
    grid-gap: 8px;
    grid-template-columns: 2fr auto;
}

.top-nav .logo{
    padding: 14px;
}

.top-content{
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}



.box h2{
    margin:0 0 30px;
    padding:0;
    color:transparent;
    text-align:center;

}
.box .inputbox{
    position:relative;

}
.box .inputbox input{
    widows: 100%;
    padding: 10px 0;
    font-size:16px;
    color:#fff;
    letter-spacing: 1px;
    margin-bottom:30px;
    border:none;
    border-bottom:1px solid #FF8D49;
    outline:none;
    background:transparent;
   
}

.box .inputbox label{
    position: absolute;
    top:0;
    left:0;
    padding:10px 0;
    font-size:16px;
    color:rgb(255, 255, 255);
    pointer-events: none;
    transition: .5s;
    
}

.box .inputbox input:focus ~ label,
.box .inputbox input:valid ~ label


{
    top:-18px;
    left:0;
    color:#544FD3;
    font-size:12px;
}

.box input[type="submit"]{
    background:transparent;
    border:none;
    outline:none;
    color:#fff;
    background:#FF8D49;
    padding:10px 20px;
    cursor:pointer;
    border-radius: 5px;
}