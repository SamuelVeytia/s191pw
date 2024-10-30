<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">

        <div>
        <label for="isbn">ISBN:</label>
        <input type="number"  name="isbn" required>
        </div>

        <div>
        <label for="titulo">Título:</label>
        <input type="text"  name="titulo" required>
        </div>

        <div>
        <label for="autor">Autor:</label>
        <input type="text"  name="autor" required>
        </div>

        <div>
        <label for="paginas">Páginas:</label>
        <input type="number"  name="paginas" required>
        </div>

        <div>
        <label for="año">Año:</label>
        <input type="text" name="año" required>
        </div>

        <div>
        <label for="editorial">Editorial:</label>
        <input type="text"  name="editorial" required>
        </div>
        
        <div>
        <label for="email">Email de editorial:</label>
        <input type="email"  name="email " required>
        </div>
        
    </form>
</body>
</html>