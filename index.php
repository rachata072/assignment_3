<!DOCTYPE html>
<html>
<head>
    <title>Assignment 3 - Math Calculator</title>
</head>
<body>
    <h1>Mathematical Operations Calculator</h1>
    <h2>IST105 Assignment #3</h2>
    
    <p>This calculator will perform these operations:</p>
    <ol>
        <li>x += y</li>
        <li>x -= z</li>
        <li>x *= y</li>
        <li>x %= z</li>
        <li>x /= z</li>
        <li>Final result = x + y + z</li>
    </ol>
    
    <form action="result.php" method="POST">
        <p>
            <label>Enter X: </label>
            <input type="number" name="x" step="any" required>
        </p>
        
        <p>
            <label>Enter Y: </label>
            <input type="number" name="y" step="any" required>
        </p>
        
        <p>
            <label>Enter Z: </label>
            <input type="number" name="z" step="any" required>
            <br><small>Note: Z cannot be zero</small>
        </p>
        
        <p>
            <input type="submit" value="Calculate">
        </p>
    </form>
    
    <hr>
    <p><strong>MyName:</strong> Rachata Wichakkhapan</p>
    <p><strong>Course:</strong> IST105</p>
</body>
</html>