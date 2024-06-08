<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device=width, initial=scale =1.0 ">
        <title>Calculator</title>
        <style>
            body{
                background-color: rgb(red, green, blue);
            }
            .mainput{
                font: size 800px; ;
                color: whitesmoke;
                font-weight: 400 ;
            }
            .calc{
                margin: auto;
                background-color: black;
                border: 2px solid whitesmoke;
                width: 25%;
                height: 550px;
                border-radius: 20px;
                box-shadow: 10px 10px 40px;
            }
            .mainput{
                background-color:black ;
                border: 1px solid grey;
                height: 115px;
                width: 98.2%;
            }
            .numbtn{
                padding: 30px 35px;
                border-radius: 50px;
                font-weight: 600;
                font-size:x-large ;
                background-color:grey ;
            }
                .nbtn :hover{
                    background-color: rgb(red, green, blue);
                    color: whitesmoke;
            }
            .calbtn{
                padding: 30px 35px;
                border-radius: 50px;
                font-weight: 600;
                font-size:x-large ;
                background-color: orange;
            }
                .calbtn:hover{
                    background-color: rgb(rgb(248, 213, 16), green, blue);
                    color: whitesmoke;
            }
            .cl{
                padding: 30px 35px;
                border-radius: 50px;
                font-size:x-large ;
                background-color:red ;
            }
            .c:hover{
                background-color: red;
            }
            .equal{
                padding: 30px 35px;
                border-radius: 50px;
                font-size:x-large ;
                background-color: green;
            }
            .equal:hover{
                background-color:green ;
                color: whitesmoke;
            }
        </style>
    </head>
    <body>
        <div class="calc">
            <form action="" method="post">
                <br>
                <input type="text" class="mainput"> <br><br>
                <input type="submit" class="numbtn"name="num"value="7">
                <input type="submit" class="numbtn"name="num"value="8">
                <input type="submit" class="numbtn"name="num"value="9">
                <input type="submit" class="calbtn"name="op"value="+"> <br>
                <input type="submit" class="numbtn"name="num"value="4">
                <input type="submit" class="numbtn"name="num"value="5">
                <input type="submit" class="numbtn"name="num"value="6">
                <input type="submit" class="calbtn"name="op"value="-"><br>
                <input type="submit" class="numbtn"name="num"value="1">
                <input type="submit" class="numbtn"name="num"value="2">
                <input type="submit" class="numbtn"name="num"value="3">
                <input type="submit" class="numbtn"name="op"value="*"><br>
                <input type="submit" class="C"name="num"value="C">
                <input type="submit" class="numbtn"name="num"value="0">
                <input type="submit" class="numbtn"name="num"value=".">
                <input type="submit" class="equal"name="equal"value="=">
                <input type="submit" class="calbtn"name="equal"value="/">

            </form>   
        </div> 



    </body>
</html>