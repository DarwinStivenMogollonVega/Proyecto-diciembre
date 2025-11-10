<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Realizar pedido - DiscZone.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h2 class="text-center mb-4">🛒 Formulario de Pedido</h2>

            <form action="{{ route('pedido.realizar') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="metodo_pago" class="form-label">Método de pago</label>
                    <select name="metodo_pago" id="metodo_pago" class="form-select" required>
                        <option value="">Seleccione...</option>
                        <option value="tarjeta">Tarjeta de crédito</option>
                        <option value="nequi">Nequi</option>
                        <option value="efectivo">Efectivo</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100 mt-3">
                    <i class="bi bi-check-circle me-1"></i> Confirmar pedido
                </button>

                <a href="{{ route('web.index') }}" class="btn btn-secondary w-100 mt-2">
                    <i class="bi bi-arrow-left me-1"></i> Volver a la tienda
                </a>
            </form>
        </div>
    </div>

</body>
</html>