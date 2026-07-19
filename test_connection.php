
body{
    font-family: Arial, sans-serif;
    background: #eef3f8;
    margin: 0;
    padding: 20px;
}

.container{
    max-width: 800px;
    margin: auto;
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
}


h1{
    text-align: center;
    color: #1565c0;
}

input, select, textarea{
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
}


input:focus, textarea:focus, select:focus{
    border-color: #1565c0;
    outline: none;
}


button{
    width: 100%;
    padding: 12px;
    background: #1565c0;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}

button:hover{
    background: #0d47a1;
}


label{
    font-weight: bold;
    margin-top: 10px;
    display: block;
}


#suggestions{
    background: #fff;
    border: 1px solid #ccc;
    max-width: 300px;
    position: absolute;
}
