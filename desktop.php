<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="MostValDesk.php">  
        <center><h1>ESCOLHA AS CONFIGURACOES DA SUA MAQUINA</ASide></h1></center>
        <div>
        <fieldset><legend>processador</legend>
                <h2>qual processador deseja para seu desktop ?</h2>
                <label for="celeron">intel celeron  g6900</label>
                <input type="radio"id="celeron" name="intel" value="processador celeron g6900" required/>
                <br>
                <label for="11400f">intel i5 11400f </label>
                <input type="radio"id="11400f" name="intel" value="processador intel i5 11400f"/>
                <br>
                <label for="11700k">intel i7 11700k</label>
                <input type="radio"id="11700k" name="intel" value="processador intel i7 11700k"/>
                <br>
                <label for="11900k">intel i9 11900k</label>
                <input type="radio"id="11900k" name="intel" value="processador intel i9 11900k"/>
            </fieldset>

        </div>
        <div>
            <fieldset><legend>memoria</legend>  
                <h2>quanto de memoria ram deseja?</h2>
                <label for="memoria">Escolha uma memória RAM:</label><br><br>
		        <select id="memoria" name="memoria" required>
			    <option value="memoria ram 4GB">4GB</option>
			    <option value="memoria ram 8GB">8GB</option>
                <option value="memoria ram 16GB">16GB</option>
                <option value="memoria ram 32GB">32GB</option>
		</select>
                
            </fieldset>   

        </div>
        <div>
            <fieldset><legend>hd</legend>
                <h2>escolha qaunto de armazenamento deseja::</h2>
                <label for="hd500">500gb sata checked</label>
                <input type="radio"id="hd500" name="hd" value="hd 500gb" required/>
                <br>
                <label for="ssd120">120gb ssd </label>
                <input type="radio"id="ssd120" name="hd" value="ssd 120gb"/>
                <br>
                <label for="ssd240">240gb ssd </label>
                <input type="radio"id="ssd240" name="hd" value="ssd 240gb"/>
                <br>
                <label for="ssd1tb">1Tb ssd </label>
                <input type="radio"id="ssd1tb" name="hd" value="ssd 1tb"/>
            </fieldset>    
        </div>
        <div>
        <fieldset><legend>sys</legend>    
            <h2>Qual sistema operacional deseja ?</h2>
            <label for="w11">Windows 11 pro </label>
            <input type="radio"id="w11" name="sys" value="Windows 11 pro" required/>
            <br>
            <label for="lin">Linux ubuntu</label>
            <input type="radio"id="lin" name="sys" value="Linux ubuntu"/>
        </fieldset>    
        </div>
        <div>
            <fieldset><legend>monitor</legend>
                <h2>Escolha um opcao de monitor a baixo:</h2>
                <label for="monitor17">monitor 17 polegadas fullhd 60hz </label>
                <input type="radio"id="monitor17" name="monitor" value="monitor 17 polegadas fullhd 60hz" required/>
                <br>
                <label for="monitor24">monitor 24 polegas fullhd 75hz </label>
                <input type="radio"id="monitor24" name="monitor" value="monitor 24 polegas fullhd 75hz"/>
                <br>
            </fieldset>    
        </div>
        <center><input type="submit" value="enviar"></center>
  </form>    
</body>
</html>