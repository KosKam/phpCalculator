<form method="get" action="calculator.php">
    <div>Operation:
    <select name="operation">
        <option value="empty"></option>
        <option value="sum">Sum</option>
        <option value="subtract">Subtract</option>        
    </select>
    </div>    
    <div>Number 1:
        <input type="text" name="nOne"><br>       
    </div>    
    <div>Number 2:       
        <input type="text" name="nTwo"><br>        
    </div>  
    <?php if (isset($output)): ?>
    <div>
        Result:
        <input type='text' name='nOne' disabled='disabled' readonly='readonly' value='<?= $output ?>'><br>        
    </div> 
    <?php endif; ?>
    <div>       
        <input type="submit" name="calculate" value="Calculate!">
    </div>   
</form>
