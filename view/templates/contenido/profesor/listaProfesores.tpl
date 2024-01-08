<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 60px;
            width: 95%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.253);
            border-radius: 10px;
            overflow: hidden;
        }

        .header {
            background-color: #669fb1;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .header h1 {
            font-size: 36px;
            margin: 0;
        }

        .table-container {
            padding: 0 20px;
            max-height: 700px;
            overflow-y: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: left;
        }

        th {
            position: sticky;
            top: 0;
            z-index: 1;
            background-color: #669fb1f6;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Lista de Profesores</h1>
        </div>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Cedula</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Nivel Estudio</th>
                    </tr>
                </thead>
                {section name=profesor loop=$arr_profesor}
                    <tr>
                        <td>{$arr_profesor[profesor].nombre}</td>
                        <td>{$arr_profesor[profesor].direccion}</td>
                        <td>{$arr_profesor[profesor].cedula}</td>
                        <td>{$arr_profesor[profesor].telefono}</td>
                        <td>{$arr_profesor[profesor].correo}</td>
                        <td>{$arr_profesor[profesor].nivel_est}</td>
                    </tr>
                {/section}
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (opcional, si se requieren funcionalidades de Bootstrap) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>