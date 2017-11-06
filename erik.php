<html>
    <head>
        <title>
            Battleship
        </title>
        <style>
            table, td,p {
                color:powderblue;
                border:1px solid black;
                padding:15px;
                border-collapse: collapse;
                width:15%;
                height:23px;
                background-color: powderblue
            }
        </style>

        <script>
            function content(elem) {
                elem.style.backgroundColor = "blue";
                var str = 'Je hebt geschoten!' + ' ' + elem.innerText;
                var result = str.fontcolor("black");
                var p = document.getElementById("table");
                p.innerHTML = result;
            }
        </script>
    </head>

    <body>
    <center>
        <h1>Battleship</h1>

        <img id="plons" onclick="changeImage()" src="plons.jpg" alt="" width="50" height="50">
        <p  style=background-color:powderblue; id="table"></p>


        <table>

            <tr>
                <td id="td1" onclick="content(this)"><img src="boat.png"></td>
                <td id="td2" onclick="content(this)">&#9785;</td>
                <td id="td3" onclick="content(this)">&#9785;</td>
                <td id="td4" onclick="content(this)">&#9785;</td>
                <td id="td5" onclick="content(this)">&#9785;</td>
                <td id="td6" onclick="content(this)">&#9972;</td>
                <td id="td7" onclick="content(this)">&#9785;</td>
                <td id="td8" onclick="content(this)">&#9972;</td>
                <td id="td9" onclick="content(this)">&#9972;</td>
                <td id="td10" onclick="content(this)">&#9972;</td>
            </tr>
            <tr>
                <td id="td11" onclick="content(this)">&#9785;</td>
                <td id="td12" onclick="content(this)">&#9785;</td>
                <td id="td13" onclick="content(this)">&#9785;</td>
                <td id="td14" onclick="content(this)">&#9785;</td>
                <td id="td15" onclick="content(this)">&#9785;</td>
                <td id="td16" onclick="content(this)">&#9972;</td>
                <td id="td17" onclick="content(this)">&#9785;</td>
                <td id="td18" onclick="content(this)">&#9785;</td>
                <td id="td19" onclick="content(this)">&#9972;</td>
                <td id="td20" onclick="content(this)">&#9785;</td>
            </tr>
            <tr>
                <td id="td21" onclick="content(this)">&#9785;</td>
                <td id="td22" onclick="content(this)">&#9785;</td>
                <td id="td23" onclick="content(this)">&#9972;</td>
                <td id="td24" onclick="content(this)">&#9785;</td>
                <td id="td25" onclick="content(this)">&#9785;</td>
                <td id="td26" onclick="content(this)">&#9785;</td>
                <td id="td27" onclick="content(this)">&#9785;</td>
                <td id="td28" onclick="content(this)">&#9785;</td>
                <td id="td29" onclick="content(this)">&#9785;</td>
                <td id="td30" onclick="content(this)">&#9785;</td>
            </tr>
            <tr>
                <td id="td31" onclick="content(this)">&#9785;</td>
                <td id="td32" onclick="content(this)">&#9785;</td>
                <td id="td33" onclick="content(this)">&#9972;</td>
                <td id="td34" onclick="content(this)">&#9785;</td>
                <td id="td35" onclick="content(this)">&#9785;</td>
                <td id="td36" onclick="content(this)">&#9972;</td>
                <td id="td37" onclick="content(this)">&#9785;</td>
                <td id="td38" onclick="content(this)">&#9785;</td>
                <td id="td39" onclick="content(this)">&#9785;</td>
                <td id="td40" onclick="content(this)">&#9785;</td>
            </tr>
            <tr>
                <td id="td41" onclick="content(this)">&#9785;</td>
                <td id="td42" onclick="content(this)">&#9785;</td>
                <td id="td43" onclick="content(this)">&#9785;</td>
                <td id="td44" onclick="content(this)">&#9785;</td>
                <td id="td45" onclick="content(this)">&#9972;</td>
                <td id="td46" onclick="content(this)">&#9785;</td>
                <td id="td47" onclick="content(this)">&#9785;</td>
                <td id="td48" onclick="content(this)">&#9785;</td>
                <td id="td49" onclick="content(this)">&#9785;</td>
                <td id="td50" onclick="content(this)">&#9785;</td>
            </tr>
            <tr>
                <td id="td51" onclick="content(this)">&#9785;</td>
                <td id="td52" onclick="content(this)">&#9972;</td>
                <td id="td53" onclick="content(this)">&#9785;</td>
                <td id="td54" onclick="content(this)">&#9785;</td>
                <td id="td55" onclick="content(this)">&#9785;</td>
                <td id="td56" onclick="content(this)">&#9785;</td>
                <td id="td57" onclick="content(this)">&#9785;</td>
                <td id="td58" onclick="content(this)">&#9785;</td>
                <td id="td59" onclick="content(this)">&#9785;</td>
                <td id="td60" onclick="content(this)">&#9972;</td>
            </tr>
            <tr>
                <td id="td61" onclick="content(this)">&#9785;</td>
                <td id="td62" onclick="content(this)">&#9785;</td>
                <td id="td63" onclick="content(this)">&#9785;</td>
                <td id="td64" onclick="content(this)">&#9785;</td>
                <td id="td65" onclick="content(this)">&#9972;</td>
                <td id="td66" onclick="content(this)">&#9972;</td>
                <td id="td67" onclick="content(this)">&#9972;</td>
                <td id="td68" onclick="content(this)">&#9785;</td>
                <td id="td69" onclick="content(this)">&#9785;</td>
                <td id="td70" onclick="content(this)">&#9785;</td>
            </tr>
            <tr>
                <td id="td71" onclick="content(this)">&#9972;</td>
                <td id="td72" onclick="content(this)">&#9785;</td>
                <td id="td73" onclick="content(this)">&#9785;</td>
                <td id="td74" onclick="content(this)">&#9785;</td>
                <td id="td75" onclick="content(this)">&#9785;</td>
                <td id="td76" onclick="content(this)">&#9972;</td>
                <td id="td77" onclick="content(this)">&#9785;</td>
                <td id="td78" onclick="content(this)">&#9785;</td>
                <td id="td79" onclick="content(this)">&#9785;</td>
                <td id="td80" onclick="content(this)">&#9785;</td>
            </tr>
            <tr>
                <td id="td81" onclick="content(this)">&#9785;</td>
                <td id="td82" onclick="content(this)">&#9785;</td>
                <td id="td83" onclick="content(this)">&#9972;</td>
                <td id="td84" onclick="content(this)">&#9972;</td>
                <td id="td85" onclick="content(this)">&#9785;</td>
                <td id="td86" onclick="content(this)">&#9972;</td>
                <td id="td87" onclick="content(this)">&#9785;</td>
                <td id="td88" onclick="content(this)">&#9785;</td>
                <td id="td89" onclick="content(this)">&#9785;</td>
                <td id="td90" onclick="content(this)">&#9785;</td>
            </tr>
            <tr>
                <td id="td91" onclick="content(this)">&#9785;</td>
                <td id="td92" onclick="content(this)">&#9785;</td>
                <td id="td93" onclick="content(this)">&#9785;</td>
                <td id="td94" onclick="content(this)">&#9785;</td>
                <td id="td95" onclick="content(this)">&#9785;</td>
                <td id="td96" onclick="content(this)">&#9972;</td>
                <td id="td97" onclick="content(this)">&#9785;</td>
                <td id="td98" onclick="content(this)">&#9785;</td>
                <td id="td99" onclick="content(this)">&#9785;</td>
                <td id="td100" onclick="content(this)">&#9785;</td>
            </tr>

            </tbody>
        </table>

    </center>
</body>
</html>