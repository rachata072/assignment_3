import sys

# Check if we have 3 arguments (x, y, z)
if len(sys.argv) != 4:
    print("Content-Type: text/html\n")
    print("<html><body>")
    print("<h2>Error: Need 3 numbers</h2>")
    print("</body></html>")
    exit()

# Get the values from command line
try:
    x = float(sys.argv[1])
    y = float(sys.argv[2])
    z = float(sys.argv[3])
except:
    print("Content-Type: text/html\n")
    print("<html><body>")
    print("<h2>Error: Please enter valid numbers</h2>")
    print("</body></html>")
    exit()

# Store original values
orig_x = x
orig_y = y
orig_z = z

# Start HTML output
print("Content-Type: text/html\n")
print("<html><body>")
print("<h1>Python Processing Results</h1>")
print(f"<p>Original values: x={orig_x}, y={orig_y}, z={orig_z}</p>")

# Step 1: x += y
print("<h3>Operations:</h3>")
print(f"<p>1. x += y: {x} += {y} = ", end="")
x += y
print(f"{x}</p>")

# Step 2: x -= z
print(f"<p>2. x -= z: {x} -= {z} = ", end="")
x -= z
print(f"{x}</p>")

# Step 3: x *= y
print(f"<p>3. x *= y: {x} *= {y} = ", end="")
x *= y
print(f"{x}</p>")

# Step 4: x %= z
if z != 0:
    print(f"<p>4. x %= z: {x} %= {z} = ", end="")
    x %= z
    print(f"{x}</p>")
else:
    print("<p>4. x %= z: Cannot divide by zero, skipping</p>")

# Step 5: x /= z
if z != 0:
    print(f"<p>5. x /= z: {x} /= {z} = ", end="")
    x /= z
    print(f"{x}</p>")
else:
    print("<p>5. x /= z: Cannot divide by zero, skipping</p>")

# Step 6: Final result
final_result = x + orig_y + orig_z
print(f"<p>6. Final result = {x} + {orig_y} + {orig_z} = {final_result}</p>")

print(f"<h2>Final Answer: {final_result}</h2>")
print("<p><a href='index.php'>Try Again</a></p>")
print("</body></html>")